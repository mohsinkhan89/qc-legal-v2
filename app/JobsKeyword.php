<?php

namespace App;

use App\Traits\Slug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class JobsKeyword extends Model
{
    use Slug, SoftDeletes;
    protected $table = 'jobs_keywords';

    protected $fillable = [
        'title',
        'description',
        'keywords',
        'slug',
    ];

    public function jobs()
    {
        return $this->belongsToMany(
            Job::class,
            'job_to_keywords',
            'keyword_id',
            'job_id'
        )->whereNull('job_to_keywords.deleted_at');
    }
}
