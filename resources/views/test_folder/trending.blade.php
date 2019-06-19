@extends("layouts.master")
{{--<link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">--}}
<meta name="csrf-token" content="{{ csrf_token() }}">

@section("content")
@include('layouts.nav')
<div class="container-fluid" style="height: 100%">
    <div class="text-center mb-5">
        <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-center h2 collapsing text-white " style="font-family: 'Indie Flower',cursive; ">Add your views <i class="fas fa-plus primary_color"></i></a>
    </div>
    <div id="collapseExample" class=" collapse mt-0 jumbotron bg-transparent justify-content-center row p-5">
        <form method="post" action="/makePost" class="rounded mr-auto col-6 offset-3">
            {{csrf_field()}}
            <div class="form-group row ">
                <div class="col-8">
                    <input type="text" name="post_title" class=" form-control p-2 mb-3 col " placeholder="give your article a title">
                    <input name="post_body" type="text" class=" form-control p-2 col border-0" placeholder="share your thoughts {{Auth::user()->name}} ..."/>
                </div>
                <div class="col py-4">
                    <input type="submit" value="Submit" class="col p-2 text-dark btn-lg primary_color_bg" >
                </div>
            </div>
        </form>
    </div>

    <div class="row text-center d-block mx-auto">
        @foreach($posts as $post)
            @include('test_folder.card')   {{-- including the trending card --}}
        @endforeach
    </div>
</div>

@endsection()
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}
{{--</body>--}}
{{--</html>--}}