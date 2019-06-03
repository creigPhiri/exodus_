{{--
    file handles the full screen view of the post when user clicks read more link
--}}
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container" style=" background-color:#fff ;height: 100%">
    @include('layouts.nav')
    <div class="jumbotron bg-dark text-white">
      <h1 class="display-3 font-italic">{{$post->post_title}}</h1>
      <p class="lead my-3 font-italic">
        {{$post->post_body}}
      </p>
    <a class="nav-link active"> {{$post->users->name}}</a>
    </div>
    <section >
        @foreach($post->comments as $comment)
        @include("display_cards.comment_card")
        @endforeach
    </section>
</div>