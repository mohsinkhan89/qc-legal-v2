<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class JobToKeyword extends Model
{
    protected $fillable = ['job_id' , 'keyword_id'];
}
