<?php

namespace App;

use App\Traits\Slug;
use Illuminate\Database\Eloquent\Model;


class CandidateStatus extends Model
{
    use Slug;
    protected $table = 'candidate_status';
}
