@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dashboard</div>

                                <div class="card-body">
                                        @if (session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif

                                        Welcome back <strong class="text-capitalize"> {{ Auth::user()->name }}</strong>
                                </div>
                                    <form method="post" action="">
                                              {{ csrf_field() }}
                                                <div class="mx-auto w-75">
                                                    <textarea class="form-control-lg w-100" name="post_body" id="post_body" placeholder="type here"></textarea>
                                                </div>
                                                <div class="row justify-content-center">
                                                        <div class="col-1">
                                                            <input type="button" name="share" class="btn btn-success" id="share" placeholder="share">
                                                          </div>

                                                         <div class="col-1">
                                                            <input type="button" name="like" class="btn btn-primary" id="like" placeholder="like">
                                                          </div>

                                                </div>

                                                <div class="form-control d-none">
                                                    <input type="text" name="user_name" value="{{Auth::user()->name}}" hidden placeholder="share">
                                                 </div>
                                                        <div>
                                                            <div class="text-center mt-2">
                                                                <input type="submit" class="w-25 text-center btn btn-success btn-lg">
                                                            </div>
                                                        </div>
                                      </form>


                            @foreach($posts as $post)
                                    <div class="card d-block">
                                        <div class="card-header">
                                            # {{$post->post_id}}:
                                            {{$post->post_body}}
                                            <br>
                                            <small class="text-muted">{{$post->created_at->diffforhumans()}}</small>
                                        </div>
                                         {{--this loads the comment--}}

                                    </div>
                                @include('layouts.comment_view')
                                @include('layouts.comment_form')    {{--loads the comment form--}}
                            @endforeach

                    </div>
                </div>
        </div>
</div>
@endsection
