<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class JobFilterOption extends Model
{
    public function jobs()
    {
        return $this->belongsToMany(Job::class, 'filter_options_to_jobs');
    }

    public function jobFilters()
    {
        return $this->belongsTo(JobFilter::class, 'job_filter_id');
    }

}
