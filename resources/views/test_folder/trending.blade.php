<html>
<link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">

<body class="background_color">
@include('layouts.nav')
<div class="container-fluid" style=";height: 100%">

    <h2 class="text-center h2 off_white" style="font-family: 'Indie Flower',cursive; ">Trending now</h2>
    <div class=" d-flex justify-content-center row">
        <form method="post" action="./makePost" class="form mr-auto col-6 offset-3 pt-2">
            {{csrf_field()}}
            <div class="form-group row">
                <div class="col-8">
                    <input type="text" name="post_title" class=" p-2 mb-1 col rounded " placeholder="give your article a title">
                    <input name="post_body" type="text" class="p-2 col rounded " placeholder="share your thoughts {{Auth::user()->name}} ..."/>
                </div>
                <div class="col py-4">
                    <input type="submit" value="Submit" class="col p-2 rounded primary_color_bg text-white">
                </div>
            </div>
        </form>
    </div>

    <div class="row text-center">
        @foreach($posts as $post)
            @include('test_folder.card')   {{-- including the trending card --}}
        @endforeach
    </div>
</div>
</body>
</html>