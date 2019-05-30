{{--
    file handles the full screen view of the post when user clicks read more link
--}}
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container" style=" background-color:#fff ;height: 100%">
    @include('layouts.nav')
    <h1>{{$post->post_title}}<span class="font-weight-normal text-muted" style="font-size: medium"> {{$post->users->name}}</span></h1>
    <p>
        {{$post->post_body}}
    </p>
    <span >
        @foreach($post->comments as $comment)
        @include("display_cards.comment_card")
        @endforeach
    </span>
</div>