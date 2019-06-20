@extends("layouts.master")
{{--<link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">--}}
<meta name="csrf-token" content="{{ csrf_token() }}">

@section("content")
@include('layouts.nav')
<div class="container-fluid" style="height: 100%">
    {{--<div class="text-center mb-5">--}}
        {{--<a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-center h2 collapsing text-white " style="font-family: 'Indie Flower',cursive; ">Add your views <i class="fas fa-plus primary_color"></i></a>--}}
    {{--</div>--}}
    <div class="mt-0 justify-content-center row">

            <form method="post" action="/makePost" class="text-center border bg-dark p-3 col-7">
              {{csrf_field()}}
                <!-- title -->
                <input type="text" name="post_title" class="form-control mb-4" placeholder="Title">

                <!-- post body -->
                <div class="form-group">
                    <textarea name="post_body" class="form-control rounded-0" id="post_body" rows="3" placeholder="Your thoughts"></textarea>
                </div>


                <!-- Send button -->
                <button class="btn btn-block btn-info" type="submit">Share</button>

            </form>
            <!-- Default form contact -->
    </div>

    <div class="row text-center d-block mx-auto">
        @foreach($posts as $post)
            @include('test_folder.card')   {{-- including the trending card --}}
        @endforeach
    </div>
</div>

@endsection()
