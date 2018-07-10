@extends('layouts.master')

@section('content')
<div class="">
        <div class="row justify-content-center">
                <aside class="col-md-3 col-lg-3 col-sm-10 text-left">
                    <h4 class="text-center">profile menu</h4>
                </aside>

                <section class="col-md-6 col-lg-6 col-sm-10">
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
                                                    <div>
                                                            <div class="text-center mt-1">
                                                                <input type="submit" class="w-25 text-center btn btn-success btn-lg">
                                                            </div>
                                                    </div>
                                      </form>
                            @foreach($posts as $post)
                                    @include('display_cards.post_card')
                                    @include('display_cards.comment_card')
                                    @include('input_cards.comment_form')    {{--loads the comment form--}}
                              @endforeach

                    </div>
                </section>
            <aside class="col-md-3 blog-sidebar col-lg-3 d-sm-block d-none text-right">
                    @include('display_cards.archives')
            </aside><!-- /.blog-sidebar -->


        </div>
</div>
@endsection
