<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;

trait GeneratesQcCode
{
    public static function bootGeneratesQcCode()
    {
        static::creating(function ($model) {
            do {
                $code = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
                $exists = DB::table('jobs')
                    ->where('qc_code', $code)
                    ->exists();
            } while ($exists);

            $model->qc_code = $code;
        });
    }
}
