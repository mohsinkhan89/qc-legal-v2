<?php

namespace App;

use App\Traits\Slug;
use Illuminate\Database\Eloquent\Model;


class JobFilter extends Model
{
    use Slug;
    public function job_filter_options()
    {
        return $this->hasMany(JobFilterOption::class, 'job_filter_id')->where('status', 1);
    }

    public function all_job_filter_options()
    {
        return $this->hasMany(JobFilterOption::class, 'job_filter_id');
    }
}
