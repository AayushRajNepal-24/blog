<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name','writer','date','image','short_description','description','views'
    ];
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'writer' => 'required|max:255',
            'date' => 'required|max:255',
            'short_description'=>'required|max:500',
            'description'=>'required|max:1000',
            'date'=>'required',
            'views' => 'required',
        ]);
    }
}
