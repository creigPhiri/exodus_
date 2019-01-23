<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Post;
use App\Tag;


class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
        //shows all the Posts
        //passes the archives and trending logic to sideBar.blade which is implemented on index page
    {
        $posts = Post::latest();
        if ($month = request('month'))
        {
            $posts->whereMonth('created_at',Carbon::parse($month)->month);
        }

        if($year = request('year'))
        {
            $posts->whereYear('created_at',Carbon::parse($year));
        }
        $posts = $posts->get();

        $archives = Post::
                    selectRaw('year(created_at) year, monthName(created_at) month, count(*) published')
                    ->groupBy('year','month')
                    ->orderByRaw('min(created_at)','desc')
                    ->get()
                    ->toArray();
//        $tags =\App\Tag::has('posts')->pluck('name');
        $tags =Tag::all();

//        return view('test_folder.carossel_main',compact(['posts','archives','tags']));
        return view('posts.index',compact(['posts','archives','tags']));

    }


    public function create()
    {

    }


    public function store(Request $request)
        #used to create and store a new post
        #Request obj passes the post infor and userID which is taken from the Authenticated user
    {
        $request->validate(['post_body'=>'required|max:255']);
        $post = new Post;
        $post->post_body = request('post_body');
        $post->user_id = \Auth::id();
        $post->save();

        return redirect('/index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id='')
        #used to update the the post.
        #validation first done to confirm user has permission to update
    {
        dd(Post::find($request->id));
    }


    public function destroy()
        //param: post_id
        //action: deletes the post
    {
        $id = \request('id');
        if($post = Post::find($id)) {
            if (\Auth::id() == $post->user_id) {
                $post->delete();
               // dd('post deleted');
            }
            else{
                //dd('you do not the required privilege');
            }
        }
        else{
                //  dd('post id not found');
        }
       return redirect('index');

    }

}
