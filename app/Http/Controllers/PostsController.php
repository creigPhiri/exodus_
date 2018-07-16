<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
        //shows all the Posts
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
        return view('posts.index',compact('posts','archives'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['post_body'=>'required|max:255']);
        $post = new Post;
        $post->post_body = request('post_body');
        $post->user_id = \Auth::id();
        $post->save();

        return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
