<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\BlogCategory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // \URL::forceScheme('https');


        View::composer('frontend.*', function ($view) {
            $blog_categories_active = BlogCategory::where('status', 1)->orderBy('sort_order', 'asc')->get()->filter(function ($category) {
                if ($category->slug === 'blogs') {
                    return \App\Blog::where('status', 1)
                        ->where(function ($q) use ($category) {
                            $q->where('blog_category_id', $category->id)
                              ->orWhereNull('blog_category_id');
                        })->exists();
                }
                return $category->blogs()->where('status', 1)->exists();
            });
            $view->with('blog_categories_active', $blog_categories_active);
        });
    }
}
