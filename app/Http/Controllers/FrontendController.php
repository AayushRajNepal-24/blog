<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Post;
use App\views;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index(){
        $website_views=views::find('1')+1;
        DB::table('views')->where('id','=','1')->update(['views.website_views'=>$website_views]);
        $gal_image = Gallery::orderBy('date','desc')->paginate(12);
        $posts = post::orderBy('date','desc')->paginate(12);
        $posts_view = post::orderBy('views','desc')->paginate(12);
        return view('frontend.index',compact('posts','gal_image','posts_view'));
    }

    public function show_post($postid)
    {
        $post = post::find($postid);
        if($post == null) abort(404);
        $p_views = $post->views + 1;
        DB::table('posts')->where('posts.id','=',"$post->id")->update(['posts.views'=>$p_views]);
        return view('posts.show',compact('post'));
    }
}
