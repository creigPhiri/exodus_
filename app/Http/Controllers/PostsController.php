<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
    {
        public function __construct()
            //constructor ensures users is logged
        {
            $this->middleware('auth');
        }


        public function index()
        //shows all the Posts
        //and shows the archives, which is a summary with months for the posts
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


        public function create()
        {

        }


        public function store(Request $request)
            //creates and stores the post
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



        public function update(Request $request, $id)
            //updates the post and returns nothing
        {

        }




        public function destroy(Request $request)
            //find the post by id
            //deletes post
            //takes the post_id as param
            //validates that the user has permission to delete
        {

            $id = \request('id');
            if($post = Post::find($id)) {
                if (\Auth::id() == $post->user_id) {
                    $post->delete();
                    dd('post deleted');
                }
                else{
                    dd('you do not the required privilege');
                }
            }
            else{
                dd('post id not found');
            }

        }
    }
