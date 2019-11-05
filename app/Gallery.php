<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable=['date','image'];
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'date'=>'required',
        ]);
    }
}
