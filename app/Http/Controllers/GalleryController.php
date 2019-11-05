<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function create_image(){
        return view('posts.gallery');
    }
    public function add_image(Request $request){
        $this->validate($request,[
            'gal_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->gal_image->getClientOriginalExtension();
        $request->gal_image->move(public_path('images'), $imageName);
        $request->merge(['image' => $imageName]);
//        print_r($request->all());
//        die();
        if (Gallery::create($request->all())){
            return redirect()->back()->with(['success'=>'image added to gallery']);
        }else{
            return redirect()->back()->with(['error'=>'image can\'t be added to gallery']);
        }

    }

}
