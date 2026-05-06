<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Level;
use App\PlanType;
use App\Report;
use App\Bank;
use App\BankBranchName;
use App\BankDistrict;
use App\BankRequest;
use App\Blog;
use App\Candidate;
use App\CandidateStatus;
use App\Company;
use App\Contact;
use App\CreditRequest;
use App\FilterOptionsToJob;
use App\MobileBankingRequest;
use App\MobileRecharge;
use App\Operator;
use App\Service;
use App\Form;
use App\Infographic;
use App\Job;
use App\JobFilter;
use App\JobFilterOption;
use App\Jobs\ResumeRejectJob;
use App\JobsKeyword;
use App\JobToKeyword;
use App\Partner;
use App\Review;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\BlogCategory;
use PDO;

class BackEndController extends Controller
{
    public function index(){
        $view = 'backend.login';
        return view($view);
    }

    public function login_check(){
        if(Auth::check()){
            $user = Auth()->user();
        }
        return $user;
    }

    public function roles(){
        return \TCG\Voyager\Models\Role::where('id','!=',1)->get();
    }

    public function login_submit(Request $request){
        if(isset($request->email)){
            $findemail = User::where('email',$request->email)->first();
            if(isset($findemail->id)){
                if($findemail->status == 1){
                    if (Hash::check($request->password , $findemail->password)) {
                        Auth::loginUsingId($findemail->id);
                        return response()->json([
                            "status" => "success",
                            "message" => "Please wait we are redirecting you",
                            "redirect" => "/dashboard/home"
                        ]);
                    }
                    else{
                        return response()->json([
                            "status" => "danger",
                            "message" => "Incorrect password",
                        ]);
                    }
                }
                else{
                    return response()->json([
                        "status" => "warning",
                        "message" => "Sorry! Your account is blocked. Please contact support",
                    ]);
                }
            }
            $findusername = User::where('username',$request->email)->first();
            if(isset($findusername->id)){
                if($findusername->status == 1){
                    if (Hash::check($request->password , $findusername->password)) {
                        Auth::loginUsingId($findusername->id);
                        return response()->json([
                            "status" => "success",
                            "message" => "Please wait we are redirecting you",
                            "redirect" => "/dashboard/home"
                        ]);
                    }
                    else{
                        return response()->json([
                            "status" => "danger",
                            "message" => "Incorrect password",
                        ]);
                    }
                }
                else{
                    return response()->json([
                        "status" => "warning",
                        "message" => "Sorry! Your account is blocked. Please contact support",
                    ]);
                }
            }
            $findcontact = User::where('contact_no',$request->email)->first();
            if(isset($findcontact->id)){
                if($findcontact->status == 1){
                    if (Hash::check($request->password , $findcontact->password)) {
                        Auth::loginUsingId($findcontact->id);
                        return response()->json([
                            "status" => "success",
                            "message" => "Please wait we are redirecting you",
                            "redirect" => "/dashboard/home"
                        ]);
                    }
                    else{
                        return response()->json([
                            "status" => "danger",
                            "message" => "Incorrect password",
                        ]);
                    }
                }
                else{
                    return response()->json([
                        "status" => "warning",
                        "message" => "Sorry! Your account is blocked. Please contact support",
                    ]);
                }
            }
            else{
                return response()->json([
                    "status" => "danger",
                    "message" => "Sorry! we cannot find any account with your details",
                ]);
            }
        }
    }

    // dashboard
    public function dashboard(){
        $view = 'backend.dashboard';
        $user = $this->login_check();
        $candidates = Candidate::with('career_detail')->orderBy('id', 'DESC')->get();
        $dailyCandidatesCount = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i);

            $count = Candidate::whereDate('created_at', $date)->count();

            $dailyCandidatesCount[] = $count;
        }
        $dailyCandidatesCount;

        $jobs = Job::where('status', 1)->orderBy('id', 'DESC')->get();
        $dailyJobsCount = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i);

            $count = Job::whereDate('created_at', $date)->count();

            $dailyJobsCount[] = $count;
        }
        $dailyJobsCount;

        $pendingcontacts = Contact::where('status', 0)->orderBy('id', 'DESC')->get();
        $reviews = Review::where('status', 1)->orderBy('id', 'DESC')->get();
        $partners = Partner::where('status', 1)->orderBy('id', 'DESC')->get();
        $candidate_status = CandidateStatus::where('status', 1)->where('show_on_dashboard', 1)->get();

        if($user->role_id == 2 || $user->role_id == 1){
            $latestusers = User::take(10)->orderBy('id','DESC')->get();
        }
        else{
            $latestusers = User::take(10)->where('created_by',$user->id)->orderBy('id','DESC')->get();
        }
        return view($view,compact('user','latestusers', 'jobs', 'candidates', 'dailyCandidatesCount', 'dailyJobsCount', 'pendingcontacts', 'reviews', 'partners', 'candidate_status'));
    }

    // partners
    public function backendPartners(){
        $view = 'backend.partners';
        $user = $this->login_check();
        $partners = Partner::all();
        return view($view,compact('user','partners'));
    }

    public function backendPartnerSubmit(Request $req) {
        if ($req->has('id') && $req->id != '') {
            $partner = Partner::find($req->id);
            if (!$partner) {
                $partner = new Partner();
            }
        } else {
            $partner = new Partner();
        }

        $partner->title = $req->title;
        $partner->link = $req->link;
        $partner->status = $req->status;

        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $folder = now()->format('FY');
            $path = $file->store("public/partners/{$folder}");
            $partner->image = str_replace('public/', '', $path);
        }

        $partner->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Partner added successfully.',
        ]);
    }

    public function backendPartnerToggleStatus(Request $req) {
        $partner = Partner::find($req->id);
        if (!$partner) {
            return response()->json([
                'status' => 'error',
                'message' => 'Partner not found.'
            ]);
        }

        $partner->status = $partner->status == 1 ? 0 : 1;
        $partner->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Partner status updated.'
        ]);
    }

    public function backendPartnerDelete(Request $req) {
        $partner = Partner::find($req->id);

        if (!$partner) {
            return response()->json([
                'status' => 'error',
                'message' => 'Partner not found.'
            ]);
        }

        $partner->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Partner deleted successfully.'
        ]);
    }

    // reviews
    public function backendReviews(){
        $view = 'backend.reviews';
        $user = $this->login_check();
        $reviews = Review::all();
        return view($view,compact('user','reviews'));
    }

    public function backendReviewSubmit(Request $req) {
        if ($req->has('id') && $req->id != '') {
            $review = Review::find($req->id);
            if (!$review) {
                $review = new Review();
            }
        } else {
            $review = new Review();
        }

        $review->name = $req->name;
        $review->review = $req->review;
        $review->sort_order = $req->sortorder;
        $review->status = $req->status;

        $review->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Review added successfully.',
        ]);
    }

    public function backendReviewToggleStatus(Request $req) {
        $review = Review::find($req->id);
        if (!$review) {
            return response()->json([
                'status' => 'error',
                'message' => 'Review not found.'
            ]);
        }

        $review->status = $review->status == 1 ? 0 : 1;
        $review->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Review status updated.'
        ]);
    }

    public function backendReviewDelete(Request $req) {
        $review = Review::find($req->id);

        if (!$review) {
            return response()->json([
                'status' => 'error',
                'message' => 'Review not found.'
            ]);
        }

        $review->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Review deleted successfully.'
        ]);
    }

    // blogs
    public function backendBlogs(){
        $view = 'backend.blogs';
        $user = $this->login_check();
        $blogs = Blog::with('category')->get();
        $categories = BlogCategory::where('status', 1)->get();
        return view($view,compact('user', 'blogs', 'categories'));
    }

    public function backendBlogSubmit(Request $req) {
        // return $req;
        if ($req->has('id') && $req->id != '') {
            $blog = Blog::find($req->id);
            if (!$blog) {
                $blog = new Blog();
            }
        } else {
            $blog = new Blog();
        }

        $blog->title = $req->title;
        $blog->slug = $req->slug;
        $blog->blog_category_id = $req->category_id;
        
        if (!$blog->blog_category_id) {
            $defaultCategory = BlogCategory::where('slug', 'blogs')->first();
            if ($defaultCategory) {
                $blog->blog_category_id = $defaultCategory->id;
            }
        }

        if ($req->hasFile('image')) {
            $path = $req->file('image')->store('blogs', 'public');
            $blog->image = $path;
        }
        $blog->is_infographic = $req->infographic_status;
        $blog->short_description = $req->short_desc;
        $blog->meta_description = $req->meta_description;
        $blog->description = $req->description;
        $blog->status = $req->status;
        $blog->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Blog saved successfully.',
        ]);
    }

    public function backendBlogToggleStatus(Request $req) {
        $blog = Blog::find($req->id);
        if (!$blog) {
            return response()->json([
                'status' => 'error',
                'message' => 'Blog not found.'
            ]);
        }

        $blog->status = $blog->status == 1 ? 0 : 1;
        $blog->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Blog status updated.'
        ]);
    }

    public function backendBlogDelete(Request $req) {
        $blog = Blog::find($req->id);

        if (!$blog) {
            return response()->json([
                'status' => 'error',
                'message' => 'Blog not found.'
            ]);
        }

        $blog->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Blog deleted successfully.'
        ]);
    }

    // blog categories
    public function backendBlogCategories()
    {
        $view = 'backend.blog-categories';
        $user = $this->login_check();
        $categories = BlogCategory::all();
        return view($view, compact('user', 'categories'));
    }

    public function backendBlogCategorySubmit(Request $req)
    {
        if ($req->has('id') && $req->id != '') {
            $category = BlogCategory::find($req->id);
            if (!$category) {
                $category = new BlogCategory();
            }
        } else {
            $category = new BlogCategory();
        }

        $category->title = $req->title;
        $category->slug = $req->slug;
        $category->meta_title = $req->meta_title;
        $category->meta_description = $req->meta_description;
        $category->sort_order = $req->sort_order ?? 0;
        $category->status = $req->status;
        $category->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Category saved successfully.',
        ]);
    }

    public function backendBlogCategoryToggleStatus(Request $req)
    {
        $category = BlogCategory::find($req->id);
        if (!$category) {
            return response()->json([
                'status' => 'error',
                'message' => 'Category not found.'
            ]);
        }

        $category->status = $category->status == 1 ? 0 : 1;
        $category->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Category status updated.'
        ]);
    }

    public function backendBlogCategoryDelete(Request $req)
    {
        $category = BlogCategory::find($req->id);
        if (!$category) {
            return response()->json([
                'status' => 'error',
                'message' => 'Category not found.'
            ]);
        }

        if ($category->slug === 'blogs') {
            return response()->json([
                'status' => 'error',
                'message' => 'Default category cannot be deleted.'
            ]);
        }

        $category->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Category deleted successfully.'
        ]);
    }

    public function backendBlogCategoryCheckSlug(Request $req)
    {
        $slug = $req->slug;
        $id = $req->id;

        $exists = BlogCategory::where('slug', $slug)
            ->when($id, function($q) use ($id) {
                return $q->where('id', '!=', $id);
            })
            ->exists();

        return response()->json([
            'exists' => $exists
        ]);
    }

    // infographics
    public function backendInfographics(){
        $view = 'backend.infographics';
        $user = $this->login_check();
        $infographics = Infographic::all();
        return view($view,compact('user', 'infographics'));
    }

    public function backendInfographicSubmit(Request $req) {
        if ($req->has('id') && $req->id != '') {
            $infographic = Infographic::find($req->id);
            if (!$infographic) {
                $infographic = new Infographic();
            }
        } else {
            $infographic = new Infographic();
        }

        $infographic->title = $req->title;
        if ($req->hasFile('thumbnail')) {
            $path = $req->file('thumbnail')->store('infographics', 'public');
            $infographic->thumbnail = $path;
        }
        if ($req->hasFile('image')) {
            $path = $req->file('image')->store('infographics', 'public');
            $infographic->image = $path;
        }
        $infographic->sort_order = $req->sortorder;
        $infographic->status = $req->status;
        $infographic->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Infographic saved successfully.',
        ]);
    }

    public function backendInfographicToggleStatus(Request $req) {
        $infographic = Infographic::find($req->id);
        if (!$infographic) {
            return response()->json([
                'status' => 'error',
                'message' => 'Infographic not found.'
            ]);
        }

        $infographic->status = $infographic->status == 1 ? 0 : 1;
        $infographic->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Blog status updated.'
        ]);
    }

    public function backendInfographicDelete(Request $req) {
        $infographic = Infographic::find($req->id);

        if (!$infographic) {
            return response()->json([
                'status' => 'error',
                'message' => 'Infographic not found.'
            ]);
        }

        $infographic->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Infographic deleted successfully.'
        ]);
    }

    // jobs
    public function backendJobs(){
        $view = 'backend.jobs';
        $user = $this->login_check();
        $jobs = Job::all();
        // $job_filter_options = JobFilterOption::where('status', 1)->orderBy('value')->get();
        $job_filter_options = JobFilterOption::where('status', 1)->whereHas('jobFilters', function ($q) {
            $q->where('status', 1);
        })->orderBy('value')->get();

        $job_keywords = JobsKeyword::all();
        return view($view,compact('user', 'jobs', 'job_filter_options', 'job_keywords'));
    }

    public function backendJobSubmit(Request $req) {
        // return $req->filter_options;
        if ($req->has('id') && $req->id != '') {
            $job = Job::find($req->id);
            if (!$job) {
                $job = new Job();
            }
        } else {
            $job = new Job();
        }

        $job->title = $req->title;
        $job->position = $req->position;
        $job->sector = $req->sector;
        $job->location = $req->location;
        $job->qc_code_identity = $req->qccode;
        $job->pqe = $req->pqe;
        $job->type = $req->type;
        $job->pay_grade = $req->paygrade;
        $job->short_desc = $req->short_desc;
        $job->desc = $req->desc;
        $job->apply_now_heading = $req->apply_heading;
        $job->apply_now_note = $req->apply_note;
        $job->apply_now_custom_link = $req->apply_customurl;
        $job->apply_now_custom_link_new_tab = $req->open_newtab;
        $job->sort_order = $req->sortorder;
        $job->status = $req->status;
        $job->is_premium = $req->premium_status;
        $job->save();

        if ($req->has('filter_options')) {
            FilterOptionsToJob::where('job_id', $job->id)->delete();

            foreach ($req->filter_options as $filter_option_id) {
                $jobfilteroptions = new FilterOptionsToJob();
                $jobfilteroptions->job_id = $job->id;
                $jobfilteroptions->job_filter_option_id = $filter_option_id;
                $jobfilteroptions->save();
            }
        }

        if ($req->filled('keywords') && is_array($req->keywords)) {
        JobToKeyword::where('job_id', $job->id)->delete();

        foreach ($req->keywords as $keyword_id) {
            if (is_numeric($keyword_id)) {
                JobToKeyword::create([
                    'job_id'     => $job->id,
                    'keyword_id' => $keyword_id,
                ]);
            }
        }
    }

        return response()->json([
            'status' => 'success',
            'message' => 'Job saved successfully.',
        ]);
    }

    public function backendJobGetFilterOption(Request $req) {
        $jobfilteroptions = FilterOptionsToJob::where('job_id', $req->id)->pluck('job_filter_option_id');
        $keywords = JobToKeyword::where('job_id', $req->id)->pluck('keyword_id');

        return response()->json([
            'options' => $jobfilteroptions,
            'keywords' => $keywords,
            'status' => 'success',
            'message' => 'options fetched successfully.',
        ]);
    }

    public function backendJobToggleStatus(Request $req) {
        $job = Job::find($req->id);
        if (!$job) {
            return response()->json([
                'status' => 'error',
                'message' => 'Job not found.'
            ]);
        }

        $job->status = $job->status == 1 ? 0 : 1;
        $job->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Job status updated.'
        ]);
    }

    public function backendJobDelete(Request $req) {
        $job = Job::find($req->id);

        if (!$job) {
            return response()->json([
                'status' => 'error',
                'message' => 'Review not found.'
            ]);
        }

        $job->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Review deleted successfully.'
        ]);
    }

    // job filters
    public function backendJobFilters(){
        $view = 'backend.job-filters';
        $user = $this->login_check();
        $job_filter_options = JobFilterOption::with('jobFilters')->get();
        $job_filters = JobFilter::all();
        return view($view,compact('user', 'job_filter_options', 'job_filters'));
    }

    public function backendJobFilterSubmit(Request $req) {
        // return $req->filter_options;
        if ($req->has('id') && $req->id != '') {
            $job_filter_option = JobFilterOption::find($req->id);
            if (!$job_filter_option) {
                $job_filter_option = new JobFilterOption();
            }
        } else {
            $job_filter_option = new JobFilterOption();
        }

        $job_filter_option->job_filter_id = $req->filterId;
        $job_filter_option->value = $req->value;
        $job_filter_option->sort_order = $req->sortorder;
        $job_filter_option->status = $req->status;
        $job_filter_option->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Job filter option saved successfully.',
        ]);
    }

    public function backendJobFilterToggleStatus(Request $req) {
        $job_filter_option = JobFilterOption::find($req->id);
        if (!$job_filter_option) {
            return response()->json([
                'status' => 'error',
                'message' => 'Review not found.'
            ]);
        }

        $job_filter_option->status = $job_filter_option->status == 1 ? 0 : 1;
        $job_filter_option->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Review status updated.'
        ]);
    }

    public function backendJobFilterDelete(Request $req) {
        $job_filter_option = JobFilterOption::find($req->id);

        if (!$job_filter_option) {
            return response()->json([
                'status' => 'error',
                'message' => 'Review not found.'
            ]);
        }

        $job_filter_option->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Review deleted successfully.'
        ]);
    }

    // candidates
    public function backendCandidates() {
        $view = 'backend.candidates';
        $user = $this->login_check();
        $candidates = Candidate::with('career_detail')->latest()->take(10)->get();
        $candidate_status = CandidateStatus::where('status', 1)->get();
        return view($view,compact('user', 'candidates', 'candidate_status'));
    }

    public function backendStatusCandidates($status) {
        // return $status;
        $view = 'backend.candidates-show';
        $user = $this->login_check();
        $currentstatus = CandidateStatus::where('slug', $status)->first();
        $candidates = Candidate::where('status' , $currentstatus->id)->get();
        $candidate_status = CandidateStatus::where('status', 1)->get();
        return view($view,compact('user', 'candidates', 'candidate_status', 'currentstatus'));
    }

    public function backendCandidatesSubmit(Request $req) {
        if ($req->has('id') && $req->id != '') {
            $candidate = Candidate::find($req->id);
        } else {
            return "Could't found this enquiry";
        }

        $candidate->status = $req->status;
        $candidate->comment = $req->comment;

        $candidate->save();

        if ($candidate->status == 3) {
            dispatch(new ResumeRejectJob($candidate->id , $candidate->email));
        }

        return response()->json([
            'status' => 'success',
            'message' => 'candidate updated successfully.',
        ]);
    }

    public function backendCandidatesDelete(Request $req) {
        $candidate = Candidate::find($req->id);

        if (!$candidate) {
            return response()->json([
                'status' => 'error',
                'message' => 'Review not found.'
            ]);
        }

        $candidate->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Review deleted successfully.'
        ]);
    }

    // candidate status
    public function backendCandidateStatus(){
        $view = 'backend.candidate-status';
        $user = $this->login_check();
        $candidateStatus = CandidateStatus::all();
        return view($view,compact('user','candidateStatus'));
    }

    public function backendCandidateStatusSubmit(Request $req) {
        if ($req->has('id') && $req->id != '') {
            $candidate_status = CandidateStatus::find($req->id);
            if (!$candidate_status) {
                $candidate_status = new CandidateStatus();
            }
        } else {
            $candidate_status = new CandidateStatus();
        }

        $candidate_status->title = $req->value;
        $candidate_status->show_on_dashboard = $req->dashboard;
        $candidate_status->status = $req->status;
        $candidate_status->theme_class = $req->theme_class;

        $candidate_status->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Candidate Status added successfully.',
        ]);
    }

    public function backendCandidateStatusToggleStatus(Request $req) {
        $candidate_status = CandidateStatus::find($req->id);
        if (!$candidate_status) {
            return response()->json([
                'status' => 'error',
                'message' => 'Candidate status not found.'
            ]);
        }

        $candidate_status->status = $candidate_status->status == 1 ? 0 : 1;
        $candidate_status->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Candidate status updated.'
        ]);
    }

    public function backendCandidateStatusDelete(Request $req) {
        $candidate_status = CandidateStatus::find($req->id);

        if (!$candidate_status) {
            return response()->json([
                'status' => 'error',
                'message' => 'Candidate status not found.'
            ]);
        }

        $candidate_status->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Candidate status deleted successfully.'
        ]);
    }

    // contacts
    public function backendContacts() {
        $view = 'backend.contacts';
        $user = $this->login_check();
        $candidates = Candidate::with('career_detail')->get();
        $contacts = Contact::all();
        return view($view,compact('user', 'candidates', 'contacts'));
    }

    public function backendContactSubmit(Request $req) {
        if ($req->has('id') && $req->id != '') {
            $contact = Contact::find($req->id);
        } else {
            return "Could't found this enquiry";
        }

        $contact->status = $req->status;

        $contact->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Enquiry status updated successfully.',
        ]);
    }

    public function backendContactsDelete(Request $req) {
        $contact = Contact::find($req->id);

        if (!$contact) {
            return response()->json([
                'status' => 'error',
                'message' => 'Review not found.'
            ]);
        }

        $contact->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Review deleted successfully.'
        ]);
    }

    // extras
    public function users(Request $request,$refkey){
        $view = 'users';

        $user = $this->login_check();
        $roles = $this->roles();
        $finduser = User::where('ref_key',$refkey)->first();
        if(!isset($request->role)){
            if(isset($finduser)){
                if($finduser->role_id == 2 || $finduser->role_id == 1){
                    $alluser = User::orderBy('id','DESC')->paginate(10);
                }
                else{
                    $alluser = User::where('created_by', $finduser->id)->orderBy('id','DESC')->paginate(10);
                }
            }
            else{
                return redirect('/dashboard/home');
            }
        }
        else{
            if(isset($finduser)){
                if($finduser->role_id == 2 || $finduser->role_id == 1){
                    $alluser = User::orderBy('id','DESC')->where('role_id',$request->role)->paginate(10);
                }
                else{
                    $alluser = User::where('created_by', $finduser->id)->where('role_id',$request->role)->orderBy('id','DESC')->paginate(10);
                }
            }
            else{
                return redirect('/dashboard/home');
            }
        }
        return view($view,compact('user','alluser','roles'));
    }

    public function check_username(Request $request){
        if(isset($request->username)){
            $findusername = User::where('username',$request->username)->count();
            if($findusername > 0){
                return response()->json([
                    "status" => "warning",
                    "message" => "Username already exists"
                ]);
            }
            else{
                return response()->json([
                    "status" => "success",
                    "message" => "Username available"
                ]);
            }
        }

        else if(isset($request->email)){
            $findemail = User::where('email',$request->email)->count();
            if($findemail > 0){
                return response()->json([
                    "status" => "warning",
                    "message" => "Email already exists"
                ]);
            }
            else{
                return response()->json([
                    "status" => "success",
                    "message" => "Email available"
                ]);
            }
        }

        else if(isset($request->number)){
            $findcontact = User::where('contact_no',$request->number)->count();
            if($findcontact > 0){
                return response()->json([
                    "status" => "warning",
                    "message" => "Contact Number already exists"
                ]);
            }
            else{
                return response()->json([
                    "status" => "success",
                    "message" => "Contact Number available"
                ]);
            }
        }
    }

    public function user_submit(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->contact_no = $request->phone;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role;
        $user->created_by = Auth()->user()->id;
        $user->status = 1;
        if($request->role == 4){
            $user->level = $request->level;
        }
        $user->save();
        return response()->json([
            "status" => "success",
            "message" => "User registered successfully"
        ]);
    }

    public function profile(Request $request){
        $view = 'profile';
        $roles = $this->roles();
        $user = $this->login_check();
        return view($view,compact('user','roles'));
    }

    public function profile_update_submit(Request $request){
        $user = $this->login_check();
        if(isset($request->name)){
            $user->name = $request->name;
        }
        if(isset($request->email)){
            $user->email = $request->email;
        }
        if(isset($request->password) && isset($request->currpassword)){
            if (Hash::check($request->currpassword, $user->password)) {
                $user->password = bcrypt($request->password);
            } else {
                return response()->json([
                    "status" => 'warning',
                    "message" => "Sorry! The current password is incorrect."
                ]);
            }
        }
        if(isset($request->number)){
            $user->contact_no = $request->number;
        }
        return response()->json([
            "status" => "success",
            "message" => "Profile has been updated"
        ]);
    }

    public function deactive_account($userid){
        $finduser = User::find($userid);
        if(isset($finduser->id)){
            $finduser->status = 0;
            $finduser->save();
        }
        return response()->json([
            "status" => "success"
        ]);
    }

    public function active_account($userid){
        $finduser = User::find($userid);
        if(isset($finduser->id)){
            $finduser->status = 1;
            $finduser->save();
        }
        return response()->json([
            "status" => "success"
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function backendJobKeywords(){
        $view = 'backend.job-metas';
        $user = $this->login_check();
        $job_keywords = JobsKeyword::all();
        return view($view,compact('user', 'job_keywords'));
    }

    public function backendJobKeywordSubmit(Request $req) {
        if ($req->has('id') && $req->id != '') {
            $keyword = JobsKeyword::find($req->id);
            if (!$keyword) {
                $keyword = new JobsKeyword();
            }
        } else {
            $keyword = new JobsKeyword();
        }

        if ($req->slug) {
            if (!preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $req->slug)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Slug can only contain lowercase letters, numbers, and hyphens.',
                ]);
            }

            $query = JobsKeyword::where('slug', $req->slug);
            if ($req->has('id') && $req->id != '') {
                $query->where('id', '!=', $req->id);
            }
            if ($query->exists()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Slug already exists.',
                ]);
            }
            $keyword->slug = $req->slug;
        } else {
             // If slug is empty, we set it to null so the Trait can auto-generate it (or we clear it if it was set)
             // However, for updates, if user clears it, we probably want to auto-regen.
             $keyword->slug = null;
        }

        $keyword->title = $req->title;
        $keyword->description = $req->description;
        $keyword->keywords = $req->keywords;
        // $keyword->slug = Str::slug($req->title); // Removed auto-generation here as it's handled by Trait or manual input
        $keyword->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Job Meta Page saved successfully.',
        ]);
    }

    public function backendJobKeywordDelete(Request $req) {
        $keyword = JobsKeyword::find($req->id);
        if ($keyword) {
            // Remove connections
            JobToKeyword::where('keyword_id', $keyword->id)->delete();
            $keyword->delete();
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Job Meta Page deleted successfully.',
        ]);
    }
}
