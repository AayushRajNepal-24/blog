<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class views extends Model
{
    protected $fillable=['website_views'];
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'website_views'=>'required',
        ]);
    }
}
