@include("layouts.layout")
<link href="{{ url('css/main.css') }}" rel="stylesheet">

<body class="background_color">
<div class="container-fluid" style=";height: 100%">
    @include('layouts.nav')

    <h2 class="text-center h2 off_white" style="font-family: 'Indie Flower',cursive; ">Trending now</h2>
    @csrf
    <div class="row text-center">
        @foreach($posts as $post)
            @include('test_folder.card')    {{-- including the trending card --}}
        @endforeach
    </div>
</div>
</body>
