{{--
    file handles the full screen view of the post when user clicks read more link
--}}
@include("layouts.layout")
<link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">

<body class="background_color">
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container" style=" ;height: 100%">
    @include('layouts.nav')
    <div class="jumbotron pb-2 bg-dark text-white">
      <h1 class="display-3 font-italic">{{$post->post_title}}</h1>
      <p class="lead my-3 font-italic">
        {{$post->post_body}}
      </p>
    <a class="nav-link active"> {{$post->users->name}}</a>
    </div>
    <div>
        @include("input_cards.comment_form")
    </div>
    <section >
        @foreach($post->comments as $comment)
        @include("display_cards.comment_card")
        @endforeach
    </section>
</div>
</body>