<!--
this file contains the object for displaying the post. area commented out to allow for new post object
-->


<link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<!-- ==============================================
Hero
=============================================== -->
<section class="hero">
    <style>
        .hero {
            padding: 6.25rem 0px !important;
            margin: 0px !important;
        }
        .cardbox {
            border-radius: 3px;
            margin-bottom: 20px;
            padding: 0px !important;
        }

        .media {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: start;
            align-items: flex-start;
        }
        .d-flex {
            display: -ms-flexbox !important;
            display: flex !important;
        }
        .media .mr-3{
            margin-right: 1rem !important;
        }
        .media img{
            width: 48px !important;
            height: 48px !important;
            padding: 2px;
            border: 2px solid #f4f4f4;
        }
        .media-body {
            -ms-flex: 1;
            flex: 1;
            padding: .4rem !important;
        }
        .media-body p{
            font-family: 'Rokkitt', serif;
            font-weight: 500 !important;
            font-size: 14px;
            color: #88898a;
        }
        .media-body small span{
            font-family: 'Rokkitt', serif;
            font-size: 12px;
            color: #aaa;
            margin-right: 10px;
        }

    </style>
    <link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container">
        <div class="row">

            <div class="col-lg offset-lg-1">

                <div class="cardbox shadow-lg bg-white">

                    <div class="cardbox-heading">
                        <div class="media m-0">
                            <div class="d-flex mr-2">
                                <a href=""><img class="img-fluid rounded-circle h-75" src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/4.jpg" alt="User"></a>
                            </div>
                            <div class="media-body">
                                <strong class="m-0 text-primary">{{'@'. $post->users->name}}</strong>
                                <small><span><i class="icon ion-md-time"></i> {{$post->created_at->diffforhumans()}}</span></small>
                                <p class="m-0">
                                    {{$post->post_body}}
                                    @if(Auth::id()==$post->user_id)
                                        <a class="btn btn-link text-success " href="update?id={{$post->id}}"><i class="fas fa-pencil-alt"></i></a>
                                        <a class="btn btn-link text-danger" href="delete?id={{$post->id}}"><i class="fas fa-trash-alt"></i></a>
                                    @endif
                                </p>
                                <p class="m-0">
                                    <a class="btn btn-link text-primary" data-toggle="collapse" href="#show_comment?{{$post->id}}" role="button" aria-expanded="false" aria-controls="show_comment">Comments <b>({{count($post->comments)}})</b></a>
                                    <!-- this is visible regardless of poster-id-->
                                    <a class="btn btn-link text-primary" data-toggle="collapse" href="#comment_{{$post->id}}" role="button" aria-expanded="false" aria-controls="comment"><i class="far fa-comment"></i></a>
                                    @include('input_cards.comment_form')
                                    <span class="ml-1">
                                        @include('display_cards.comment_card')
                                    </span>
                                </p>
                            </div>
                        </div><!--/ media -->
                    </div>
                </div><!--/ cardbox -->

            </div><!--/ col-lg-6 -->
        </div><!--/ row -->
    </div><!--/ container -->
</section>







{{--<div class="row w-75 rounded mx-auto mb-3">--}}
    {{--<div class="col-12">--}}
        {{--@if(Auth::check())--}}
            {{--<div class="row">--}}
            {{--<!----***  image container-------->--}}
                {{--<div class="col-3 mx-auto my-auto"><img src="{{asset('images/default.png')}}" class="img-responsive card-img" alt="profile pic"></div>--}}
                {{--<!-- end of img arear--------->--}}

                {{--<!-- comment comment -->--}}
                {{--<div class="col-9 ml-0 mt-2" style="border:3px solid #eee;box-shadow :0 2px 3px #ccc;">--}}
                     {{--<p class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">--}}
                        {{--<a href="user/{{$post->user_id}}?follower_id={{Auth::id()}}" class="active font-weight-bold">{{'@'.$post->users->name}}</a>--}}
                           {{--<strong>{{$post->post_body}}</strong>--}}
                              {{--@if(Auth::id()==$post->user_id)--}}
                                {{--<a class="btn btn-link text-success " href="update?id={{$post->id}}"><i class="fas fa-pencil-alt"></i></a>--}}
                                 {{--<a class="btn btn-link text-danger" href="delete?id={{$post->id}}"><i class="fas fa-trash-alt"></i></a>--}}
                              {{--@endif--}}
                            {{--<small class="text-muted float-right">--}}
                            {{--{{$post->created_at->diffforhumans()}}--}}
                          {{--</small>--}}
                     {{--</p>--}}
                    {{--<!-- end of comment arear--------->--}}

                    {{--<!--******* delete and edit buttons ***--->--}}
                    {{--<p class="text-right">--}}
                        {{--<a class="btn btn-link text-primary" data-toggle="collapse" href="#show_comment?{{$post->id}}" role="button" aria-expanded="false" aria-controls="show_comment">comments <b>({{count($post['comments'])}})</b></a>--}}
                          {{--<!-- this is visible regardless of poster-id-->--}}
                          {{--<a class="btn btn-link text-primary" data-toggle="collapse" href="#comment_{{$post->id}}" role="button" aria-expanded="false" aria-controls="comment"><i class="far fa-comment"></i></a>--}}
                        {{--@include('input_cards.comment_form')--}}
                    {{--</p>--}}

                    {{--<div class="row">--}}
                        {{--<div class="col ml-5">--}}
                            {{--@include('display_cards.comment_card')--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}









