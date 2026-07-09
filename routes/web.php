<?php

use App\Http\Controllers\BackEndController;
use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(FrontEndController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about-us', 'about')->name('about');
    Route::get('/partners', 'partners')->name('partners');
    Route::get('/services', 'services')->name('services');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/blogs/{slug}', 'blogsDetail')->name('blogsDetail');
    Route::get('/contact-us', 'contact')->name('contact');
    Route::get('/book-a-call', 'bookACall')->name('bookACall');
    Route::get('/london', 'london')->name('london');
    // Route::get('/jobs', 'jobs')->name('jobs');
    Route::get('/jobs/{filters?}', 'jobs')->where('filters', '.*')->name('jobs');
    Route::post('/jobs/get', 'jobGet')->name('jobGet');
    Route::post('/jobs/get/filtered', 'jobGetFiltered')->name('jobGetFiltered');
    Route::post('/jobs/get/loadmore', 'loadMoreJobs')->name('loadMoreJobs');
    Route::post('/jobs/submit', 'jobSubmit')->name('jobSubmit');
    Route::post('/contact/submit', 'contactSubmit')->name('contactSubmit');
    Route::get('/sitemap.xml', 'sitemap')->name('sitemap');
});

$redirectMap = [
    'article-3'        => 'blogs',
    'article-4'        => 'blogs',
    'article-6'        => 'blogs',
    'index.php/blogs'  => 'blogs',

    'job-openings'     => 'jobs',
    'solicitor-jobs'   => 'jobs',
    'index.php/jobs'   => 'jobs',
    'planning-associate/'   => 'jobs',
    'job-category/conveyancing/'   => 'jobs',
    'job-category/solicitors/'   => 'jobs',

    'contact'          => 'home',
    'index.php0'       => 'home',
    'author/qclegal'   => 'home',
    'author/amina'     => 'home',
    'terms-of-service' => 'home',
];

foreach ($redirectMap as $source => $targetName) {
    Route::get($source, function () use ($targetName) {
        return redirect()->route($targetName);
    });
}


Route::get("/dashboard/login", [BackEndController::class , 'index'])->name('index');
Route::post("/login/submit", [BackEndController::class , 'login_submit'])->name('login_submit');
Route::group(['middleware' => 'instaload'], function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get("/home", [BackEndController::class , 'dashboard'])->name('dashboard');
        Route::get("/partners", [BackEndController::class , 'backendPartners'])->name('backendPartners');
        Route::post("/partners/submit", [BackEndController::class , 'backendPartnerSubmit'])->name('backendPartnerSubmit');
        Route::post("/partners/submit/status", [BackEndController::class , 'backendPartnerToggleStatus'])->name('backendPartnerToggleStatus');
        Route::post("/partners/submit/delete", [BackEndController::class , 'ba ckendPartnerDelete'])->name('backendPartnerDelete');

        Route::get("/reviews", [BackEndController::class , 'backendReviews'])->name('backendReviews');
        Route::post("/reviews/submit", [BackEndController::class , 'backendReviewSubmit'])->name('backendReviewSubmit');
        Route::post("/reviews/submit/status", [BackEndController::class , 'backendReviewToggleStatus'])->name('backendReviewToggleStatus');
        Route::post("/reviews/submit/delete", [BackEndController::class , 'backendReviewDelete'])->name('backendReviewDelete');

        Route::get("/jobs", [BackEndController::class , 'backendJobs'])->name('backendJobs');
        Route::post("/jobs/submit", [BackEndController::class , 'backendJobSubmit'])->name('backendJobSubmit');
        Route::post("/jobs/get-filter-options", [BackEndController::class , 'backendJobGetFilterOption'])->name('backendJobGetFilterOption');
        Route::post("/jobs/submit/status", [BackEndController::class , 'backendBlogToggleStatus'])->name('backendBlogToggleStatus');
        Route::post("/jobs/submit/delete", [BackEndController::class , 'backendJobDelete'])->name('backendJobDelete');

        Route::get("/blogs", [BackEndController::class , 'backendBlogs'])->name('backendBlogs');
        Route::post("/blogs/submit", [BackEndController::class , 'backendBlogSubmit'])->name('backendBlogSubmit');
        Route::post("/blogs/submit/status", [BackEndController::class , 'backendJobToggleStatus'])->name('backendJobToggleStatus');
        Route::post("/blogs/submit/delete", [BackEndController::class , 'backendBlogDelete'])->name('backendBlogDelete');

        Route::get("/blog-categories", [BackEndController::class , 'backendBlogCategories'])->name('backendBlogCategories');
        Route::post("/blog-categories/submit", [BackEndController::class , 'backendBlogCategorySubmit'])->name('backendBlogCategorySubmit');
        Route::post("/blog-categories/submit/status", [BackEndController::class , 'backendBlogCategoryToggleStatus'])->name('backendBlogCategoryToggleStatus');
        Route::post("/blog-categories/submit/delete", [BackEndController::class , 'backendBlogCategoryDelete'])->name('backendBlogCategoryDelete');
        Route::post("/blog-categories/check-slug", [BackEndController::class , 'backendBlogCategoryCheckSlug'])->name('backendBlogCategoryCheckSlug');

        Route::get("/infographics", [BackEndController::class , 'backendInfographics'])->name('backendInfographics');
        Route::post("/infographics/submit", [BackEndController::class , 'backendInfographicSubmit'])->name('backendInfographicSubmit');
        Route::post("/infographics/submit/status", [BackEndController::class , 'backendInfographicToggleStatus'])->name('backendInfographicToggleStatus');
        Route::post("/infographics/submit/delete", [BackEndController::class , 'backendInfographicDelete'])->name('backendInfographicDelete');

        Route::get("/job-filters", [BackEndController::class , 'backendJobFilters'])->name('backendJobFilters');
        Route::post("/job-filters/submit", [BackEndController::class , 'backendJobFilterSubmit'])->name('backendJobFilterSubmit');
        Route::post("/job-filters/submit/status", [BackEndController::class , 'backendJobFilterToggleStatus'])->name('backendJobFilterToggleStatus');
        Route::post("/job-filters/submit/delete", [BackEndController::class , 'backendJobFilterDelete'])->name('backendJobFilterDelete');

        Route::get('keywords' , [BackEndController::class, 'backendJobKeywords'])->name('backendJobKeywords');
        Route::post('keywords/submit' , [BackEndController::class, 'backendJobKeywordSubmit'])->name('backendJobKeywordSubmit');
        Route::post('keywords/delete' , [BackEndController::class, 'backendJobKeywordDelete'])->name('backendJobKeywordDelete');


        Route::get("/candidates", [BackEndController::class , 'backendCandidates'])->name('backendCandidates');
        Route::get("/candidates/status/{slug}", [BackEndController::class , 'backendStatusCandidates'])->name('backendStatusCandidates');
        Route::post("/candidates/submit", [BackEndController::class , 'backendCandidatesSubmit'])->name('backendCandidatesSubmit');
        Route::post("/candidates/submit/delete", [BackEndController::class , 'backendCandidatesDelete'])->name('backendCandidatesDelete');

        Route::get("/candidates-status", [BackEndController::class , 'backendCandidateStatus'])->name('backendCandidateStatus');
        Route::post("/candidates-status/submit", [BackEndController::class , 'backendCandidateStatusSubmit'])->name('backendCandidateStatusSubmit');
        Route::post("/candidates-status/submit/status", [BackEndController::class , 'backendCandidateStatusToggleStatus'])->name('backendCandidateStatusToggleStatus');
        Route::post("/candidates-status/submit/delete", [BackEndController::class , 'backendCandidateStatusDelete'])->name('backendCandidateStatusDelete');

        Route::get("/contacts", [BackEndController::class , 'backendContacts'])->name('backendContacts');
        Route::post("/contacts/submit", [BackEndController::class , 'backendContactSubmit'])->name('backendContactSubmit');
        Route::post("/contacts/submit/delete", [BackEndController::class , 'backendContactsDelete'])->name('backendContactsDelete');

        Route::get("/users/{refkey}", [BackEndController::class , 'users'])->name('users');
        Route::get("/check", [BackEndController::class , 'check_username'])->name('check_username');
        Route::post("/user/submit", [BackEndController::class , 'user_submit'])->name('user_submit');
        Route::post("/user/update", [BackEndController::class , 'user_update'])->name('user_update');
        Route::get("/user/delete/submit", [BackEndController::class , 'user_delete'])->name('user_delete');

        Route::get("/profile", [BackEndController::class , 'profile'])->name('profile');
        Route::post("/profile-update-submit", [BackEndController::class , 'profile_update_submit'])->name('profile_update_submit');
        Route::get("/deactive-account/{userid}", [BackEndController::class , 'deactive_account'])->name('deactive_account');
        Route::get("/active-account/{userid}", [BackEndController::class , 'active_account'])->name('active_account');

        Route::get("/logout", [BackEndController::class , 'logout'])->name('logout');

        Route::fallback(function () {
            return redirect()->route('dashboard');
        });
    });
});

Route::group(['prefix' => 'master-admin'], function () {
    \TCG\Voyager\Facades\Voyager::routes();
});

Route::controller(FrontEndController::class)->group(function () {
    Route::get('/{category_slug}', 'blogs')->name('categoryBlogs');
    Route::get('/{category_slug}/{slug}', 'blogsDetail')->name('categoryBlogsDetail');
    Route::get('/{slug}', 'search_job_keywords')->name('search_job_keywords');
    Route::post('/filter-jobs/{slug}', 'search_job_keywords_json')->name('search_job_keywords_json');
});

