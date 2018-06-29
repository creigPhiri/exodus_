@extends('layouts.master')

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
                                    <form method="post" action="" class="mb-3">
                                      {{ csrf_field() }}
                                            <div class="mx-auto w-75">
                                                  <textarea class="form-control-lg w-100" required name="post_body" id="post_body" placeholder="type here"></textarea>
                                            </div>
                                                    <div class="row justify-content-center">
                                                            <div class="col-1">
                                                                     <input type="button" name="share" class="btn btn-success" id="share" placeholder="share">
                                                             </div>
                                                                 <div class="col-1">
                                                                       <input type="button" name="like" class="btn btn-primary" id="like" placeholder="like">
                                                                 </div>
                                                    </div>

                                                    <div>
                                                            <div class="text-center mt-1">
                                                                <input type="submit" class="w-25 text-center btn btn-success btn-lg">
                                                            </div>
                                                    </div>
                                      </form>
                            @foreach($posts as $post)
                                    @include('cards.post_card')
                                    @include('cards.comment_card')
                                    @include('layouts.comment_form')    {{--loads the comment form--}}
                              @endforeach

                    </div>
                </div>
        </div>
</div>
@endsection
