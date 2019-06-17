<html>
<link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">

<body class="background_color">
@include('layouts.nav')
<div class="container-fluid" style=";height: 100%">

    <h2 class="text-center h2 off_white" style="font-family: 'Indie Flower',cursive; ">Trending now</h2>
    <div class=" d-flex justify-content-center row">
        <form method="post" action="/makePost" class="form rounded mr-auto col-6 offset-3 p-4" style="background-color: #1B1F3C">
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
</body>
</html>