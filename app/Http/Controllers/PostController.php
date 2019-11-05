<?php

namespace App\Http\Controllers;
use App\Gallery;
use Illuminate\Http\Request;
use App\post;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = post::orderBy('views','desc')->paginate(12);
        return view('frontend.index',compact('posts'));

    }
    public function create()
    {
        return view('posts.create');
    }

    public function group($levelName)
    {
        $posts = post::where('level',$levelName)->orderBy('views','desc')->paginate(12);
        return view('frontend.posts.group',compact('posts'));
    }
    public function search(Request $request)
    {
        //return $request->all();
        $keyword = $request->input('query');
        $posts = post::where("name", "LIKE","%$keyword%")
            ->orWhere("writer", "LIKE", "%$keyword%")
            ->orWhere("short_description", "LIKE", "%$keyword%")
            ->orWhere("publication","LIKE","%$keyword%")
            ->orWhere("level","LIKE","%$keyword%")
            ->orWhere("description", "LIKE", "%$keyword%")->orderBy('views','desc')->paginate(12);
        return view('frontend.posts.index',compact('posts'));


    }
    public function back_show($postid)
    {
        $post = post::find($postid);
        if($post == null) abort(404);
        return view('posts.back-show',compact('post'));
    }

    public function show($postid)
    {
        $post = post::find($postid);
        if($post == null) abort(404);
        $p_views = $post->views + 1;
        DB::table('posts')->where('posts.id','=',"$post->id")->update(['posts.views'=>$p_views]);
        return view('posts.show',compact('post'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'postImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->postImage->getClientOriginalExtension();
        $request->postImage->move(public_path('images'), $imageName);
        $request->merge(['image' => $imageName]);
        $post = post::create($request->all());
        return view('posts.back-show',compact('post'));
    }
    public function edit($postId)
    {
        $post = post::find($postId);
        if($post == null) abort(404);
        else return view('frontend.posts.edit',compact('post'));

    }
    public function update($postId,Request $request)
    {
        //return $request->all();
        $post = post::find($postId);
        if($post == null) abort(404);

        $post->name = $request->name;
        $post->writer = $request->writer;
        $post->price = $request->price;
        $post->edition = $request->edition;
        $post->level = $request->level;
        $post->short_description = $request->short_description;
        $post->description = $request->description;
        $post->publication = $request->publication;
        $post->views = $request->views;
        $post->purchases = $request->purchases;

        if($request->hasFile('postImage'))
        {
            $imageName = time().'.'.$request->postImage->getClientOriginalExtension();
            $request->postImage->move(public_path('images'), $imageName);
            $post->name = $post->name."Had";
            $post->image = $imageName;
        }
        $post->save();
        return redirect('posts/'.$post->id);
    }
    public function destroy($postId)
    {
        $post = post::find($postId);
        if($post == null) abort(404);
        $post->delete();
        return view('frontend.posts.delete');
    }

}