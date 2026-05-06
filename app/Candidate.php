<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PDO;

class Candidate extends Model
{
    use SoftDeletes;

    public function career_detail(){
        return $this->belongsTo(Job::class , 'job_id');
    }
}
