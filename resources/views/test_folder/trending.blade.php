@extends("layouts.master")
{{--<link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">--}}
<meta name="csrf-token" content="{{ csrf_token() }}">

@section("content")
@include('layouts.nav')
<div class="container-fluid" style="height: 100%">
    <div class="mt-0 justify-content-center row">

            <form method="post" action="/makePost" class="text-center border-0 p-4 col-md-9 col-lg-5 rounded" style="box-shadow: 0 10px 20px -17px rgba(226,125,96,0.6); background-color: #282828">
              {{csrf_field()}}
                <!-- title -->
                <input type="text" name="post_title" class="form-control mb-4" placeholder="Title">

                <!-- post body -->
                <div class="form-group">
                    <textarea name="post_body" class="form-control rounded-0" id="post_body" rows="3" placeholder="Your thoughts"></textarea>
                </div>


                <!-- Send button -->
                <button class="btn btn-block" style="background-color: #e27d60" type="submit">Share</button>

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
