<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

trait Slug
{

    protected static function bootSlug()
    {
        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->title = str_replace('&', 'and', $model->title);
                $slug = Str::slug($model->title);
                $model->slug = static::generateUniqueSlug($slug);
            }
        });

        static::updating(function ($model) {
            if (empty($model->slug)) { // Only regenerate if empty, or if we want to enforce updates based on title change (but user requirement implies manual override takes precedence)
                // Actually, if we are updating, we should probably only auto-gen if it's somehow cleared.
                // But usuallly if user makes it empty, we want to regen.
                // If user provides a slug, we respect it.
                $model->title = str_replace('&', 'and', $model->title);
                $slug = Str::slug($model->title);
                $model->slug = static::generateUniqueSlug($slug, $model->id);
            }
        });
    }

    protected static function generateUniqueSlug($slug, $id = null)
    {
        $newSlug = $slug;
        $count = 1;

        while (static::where('slug', $newSlug)->where('id', '!=', $id)->exists()) {
            $newSlug = $slug . '-' . $count;
            $count++;
        }

        return $newSlug;
    }
}
