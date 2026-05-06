<?php

namespace App;

use App\Traits\GeneratesQcCode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use SoftDeletes;
    use GeneratesQcCode;
    public function filter_options()
    {
        return $this->belongsToMany(JobFilterOption::class, 'filter_options_to_jobs');
    }

    public function keywords()
    {
        return $this->belongsToMany(
            JobsKeyword::class,
            'job_to_keywords',   
            'job_id',
            'keyword_id'
        )->whereNull('job_to_keywords.deleted_at');
    }
}
