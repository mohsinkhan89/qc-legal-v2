<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogCategory;
use App\Candidate;
use App\Contact;
use App\Infographic;
use App\Job;
use App\JobFilter;
use App\Jobs\ResumeJob;
use App\Jobs\ContactJob;
use App\JobsKeyword;
use App\Partner;
use App\Review;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home()
    {
        $premium_partners = Partner::where('status', 1)->where('show_home', 1)->get();
        $partners = Partner::where('status', 1)->get();
        $reviews = Review::where('status', 1)->orderBy('sort_order')->get();
        $jobs = Job::where('status', 1)->orderByDesc('created_at')->get();
        $jobFilters = JobFilter::where('status', '1')->where('show_home', 1)->orderBy('sort_order')->with(['job_filter_options' => function($q) {
            $q->withCount('jobs');
        }])->get();
        $view = 'frontend.home';
        return view($view, compact([
            'partners',
            'reviews',
            'jobs',
            'partners',
            'jobFilters'
        ]));
    }

    public function london()
    {
        $view = 'frontend.london';
        return view($view);
    }

    public function about()
    {
        $view = 'frontend.about';
        return view($view);
    }

    public function partners()
    {
        $partners = Partner::where('status', 1)->get();
        $view = 'frontend.partners';
        return view($view, compact(['partners']));
    }

    public function services()
    {
        $view = 'frontend.services';
        return view($view);
    }

    // public function blogs() {
    //     $blogs = Blog::where('status', 1)->orderByDesc('created_at')->get();
    //     $infographics = Infographic::where('status', 1)->orderBy('sort_order')->get();
    //     $view = 'frontend.blogs.blogs';
    //     return view($view , compact(['blogs', 'infographics']));
    // }

    public function blogs($category_slug = null)
    {
        $category = null;
        if ($category_slug && $category_slug !== 'blogs') {
            $category = BlogCategory::where('slug', $category_slug)->where('status', 1)->first();
            if (!$category) {
                return $this->search_job_keywords($category_slug);
            }
        } elseif ($category_slug === 'blogs') {
            $category = BlogCategory::where('slug', 'blogs')->where('status', 1)->first();
        }

        $query = Blog::where('status', 1);

        if ($category) {
            // Show only blogs with this specific category
            $query->where('blog_category_id', $category->id);
        } else {
            // No category specified (default /blogs) - show uncategorized blogs + blogs with "blogs" category
            $blogsCategory = BlogCategory::where('slug', 'blogs')->where('status', 1)->first();
            if ($blogsCategory) {
                $query->where(function($q) use ($blogsCategory) {
                    $q->whereNull('blog_category_id')
                      ->orWhere('blog_category_id', $blogsCategory->id);
                });
            } else {
                $query->whereNull('blog_category_id');
            }
        }

        $blogs = $query->orderByDesc('created_at')->get();
        $infographics = Infographic::where('status', 1)->get();

        $combined = $blogs->concat($infographics)->sortByDesc('created_at');

        $view = 'frontend.blogs.blogs';
        return view($view, ['items' => $combined, 'category' => $category]);
    }


    public function blogsDetail($category_slug = null, $slug = null)
    {
        // Handle common case where /blogs/category-slug is called
        // or /category-slug/article-slug is called.

        if ($slug === null) {
            // Check if this slug is actually a category
            $isCategory = BlogCategory::where('slug', $category_slug)->where('status', 1)->first();
            if ($isCategory) {
                return redirect()->route('categoryBlogs', ['category_slug' => $isCategory->slug]);
            }

            $slug = $category_slug;
            $category_slug = 'blogs';
        }

        $view = 'frontend.blogs.blog-detail';
        $blog = Blog::where('slug', $slug)->where('status', 1)->first();

        if (isset($blog)) {
            return view($view, compact('blog'));
        } else {
            return redirect()->route('blogs');
        }
    }

    public function contact()
    {
        $view = 'frontend.contact';
        return view($view);
    }

    public function bookACall()
    {
        $view = 'frontend.book-a-call';
        return view($view);
    }


    public function jobs()
    {
        $job_filters = JobFilter::where('status', 1)->orderBy('sort_order')->with(['job_filter_options' => function($q) {
            $q->withCount('jobs');
        }])->get();
        $partners = Partner::where('status', 1)->get();
        $jobs = Job::where('status', 1)->orderByDesc('created_at')->get();

        $filterCount = $job_filters->count() + 1;
        $baseUrl = '/jobs';
        $filterSlugs = $job_filters->pluck('slug')->toArray();

        $view = 'frontend.jobs.jobs';
        return view($view, compact(['job_filters', 'jobs', 'partners']));
    }

    public function jobGet(Request $request)
    {
        $job = Job::find($request->job_id);
        if (!$job) {
            return response()->json(['error' => 'Job not found'], 404);
        }
        return response()->json($job);
    }

    public function jobGetFiltered(Request $request)
    {
        $filters = array_filter($request->allValues ?? [], fn($val) => $val !== 'all');
        $offset = $request->offset ?? 0;
        $search = $request->search ?? '';
        $perPage = 10;

        $query = Job::where('status', 1);

        if (!empty($filters)) {
            $query->whereHas('filter_options', function ($q) use ($filters) {
                $q->whereIn('slug', $filters);
            }, '=', count($filters));
        }

        if ($search !== '') {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('short_desc', 'like', "%{$search}%")
                    ->orWhere('position', 'like', "%{$search}%");
            });
        }

        $total = $query->count();

        // $jobs = $query->orderByDesc('created_at')->skip($offset)->take($perPage)->get();
        $jobs = $query->orderByDesc('is_premium')->orderByDesc('created_at')->skip($offset)->take($perPage)->get();

        return response()->json([
            'jobs' => $jobs,
            'isLast' => $total <= ($offset + $perPage),
        ]);
    }

    public function loadMoreJobs(Request $request)
    {
        $offset = $request->offset ?? 0;

        $jobs = Job::where('status', 1)->orderByDesc('created_at')->skip($offset)->take(1)->get();

        return response()->json([
            'jobs' => $jobs,
            'isLast' => Job::where('status', 1)->count() <= ($offset + 1),
        ]);
    }

    public function jobSubmit(Request $req)
    {
        $candidate = new Candidate();
        $candidate->job_id = $req->job_id;
        $candidate->first_name = $req->first_name;
        $candidate->last_name = $req->last_name;
        $candidate->email = $req->email;
        $candidate->phone_number = $req->phone_number;
        $candidate->cover_letter = $req->cover_letter;
        if ($req->hasFile('cv')) {
            $file = $req->file('cv');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/cv'), $filename);
            $candidate->cv = $filename;
        }
        $candidate->save();

        dispatch(new ResumeJob($candidate->id, $candidate->email, 'applicant'));

        $NotificationEmails = explode(",", setting('site.notificationmails'));
        foreach ($NotificationEmails as $NE) {
            dispatch(new ResumeJob($candidate->id, $NE, "admin"));
        }

        return response()->json(
            [
                'success' => true
            ]
        );
    }

    public function contactSubmit(Request $req)
    {
        $contact = new Contact();
        $contact->first_name = $req->first_name;
        $contact->last_name = $req->last_name;
        $contact->email = $req->email;
        $contact->phone_number = $req->phone_number;
        $contact->message = $req->message;
        $contact->status = 0;
        $contact->save();

        dispatch(new ContactJob($contact->id, $contact->email, 'customer'));

        $NotificationEmails = explode(",", setting('site.notificationmails'));
        foreach ($NotificationEmails as $NE) {
            dispatch(new ContactJob($contact->id, $NE, "admin"));
        }

        return response()->json(
            ['success' => true]
        );
    }

    public function search_job_keywords($slug)
    {
        $job_filters = JobFilter::where('status', 1)->orderBy('sort_order')->with('job_filter_options')->get();
        $partners = Partner::where('status', 1)->get();
        $keywords = JobsKeyword::where('slug', $slug)->first();

        if (!$keywords) {
            return redirect()->route('jobs');
        }

        $view = 'frontend.jobs.jobs-keywords';
        return view($view, compact(['job_filters', 'partners', 'slug', 'keywords']));
    }

    public function search_job_keywords_json(Request $request, $slug)
    {
        $filters = array_filter($request->allValues ?? [], fn($val) => $val !== 'all');
        $offset = $request->offset ?? 0;
        $search = $request->search ?? '';
        $perPage = 10;

        $query = Job::where('status', 1)
            ->whereHas('keywords', function ($q) use ($slug) {
                $q->where('jobs_keywords.slug', $slug);
            });

        if (!empty($filters)) {
            $query->whereHas('filter_options', function ($q) use ($filters) {
                $q->whereIn('slug', $filters);
            }, '=', count($filters));
        }

        if ($search !== '') {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('short_desc', 'like', "%{$search}%")
                    ->orWhere('position', 'like', "%{$search}%");
            });
        }

        $total = $query->count();
        $jobs = $query->orderByDesc('is_premium')
            ->orderByDesc('created_at')
            ->skip($offset)
            ->take($perPage)
            ->get();

        return response()->json([
            'jobs' => $jobs,
            'isLast' => $total <= ($offset + $perPage),
        ]);
    }
    public function sitemap()
    {
        $blogs = Blog::where('status', 1)->orderByDesc('created_at')->get();
        $jobKeywords = JobsKeyword::all(); // Assuming all are active as no status field

        // Static Pages
        $staticPages = [
            'home' => 'https://qclegal.com/',
            'about' => 'https://qclegal.com/about-us',
            'partners' => 'https://qclegal.com/partners',
            'services' => 'https://qclegal.com/services',
            'contact' => 'https://qclegal.com/contact-us',
            'bookACall' => 'https://qclegal.com/book-a-call',
            'jobs' => 'https://qclegal.com/jobs',
        ];

        $content = '<?xml version="1.0" encoding="UTF-8"?>';
        $content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // Add Static Pages
        foreach ($staticPages as $page) {
            $content .= '<url>';
            $content .= '<loc>' . $page . '</loc>';
            $content .= '<changefreq>weekly</changefreq>';
            $content .= '<priority>0.8</priority>';
            $content .= '</url>';
        }

        // Add Blogs
        foreach ($blogs as $blog) {
            $catSlug = $blog->category ? $blog->category->slug : 'blogs';
            $content .= '<url>';
            $content .= '<loc>https://qclegal.com/' . $catSlug . '/' . $blog->slug . '</loc>';
            $content .= '<lastmod>' . $blog->updated_at->toAtomString() . '</lastmod>';
            $content .= '<changefreq>weekly</changefreq>';
            $content .= '<priority>0.8</priority>';
            $content .= '</url>';
        }

        // Add Job Keywords (Job Meta Pages)
        foreach ($jobKeywords as $keyword) {
            $content .= '<url>';
            $content .= '<loc>https://qclegal.com/' . $keyword->slug . '</loc>';
            $content .= '<lastmod>' . $keyword->updated_at->toAtomString() . '</lastmod>';
            $content .= '<changefreq>weekly</changefreq>';
            $content .= '<priority>0.8</priority>';
            $content .= '</url>';
        }

        $content .= '</urlset>';

        return response($content, 200)
            ->header('Content-Type', 'text/xml');
    }
}
