<?php

namespace App;

use App\Traits\Slug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model
{
    use Slug;
    use SoftDeletes;

    protected $fillable = ['title', 'slug', 'meta_title', 'meta_description', 'sort_order', 'status'];

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'blog_category_id');
    }
}
