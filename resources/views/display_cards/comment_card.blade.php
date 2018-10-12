{{--this is the view for the displaying the comment which will only be injected if there is a comment for the relevant post--}}

<div id="show_comment?{{$post->id}}" class="collapse">
@foreach($post['comments'] as $comment)
    <div class=" ml-3 p-1">
        <div class="text-warning">
            {{$comment->comment_body}}
            <small class="text-muted text-right ml-2">{{$comment->created_at->diffforhumans()}}</small>
        </div>
    </div>

        {{--<div class="card-content col-8 mx-auto">--}}
            {{--<div class="row">--}}
                {{--<div class="col-6 card-img">--}}
                    {{--<img src="https://placeimg.com/380/230/tech" alt="">--}}
                {{--</div>--}}
                {{--<div class="card-desc">--}}
                    {{--{{$comment->comment_body}}--}}
                    {{--<small class="text-muted text-right ml-2">{{$comment->created_at->diffforhumans()}}</small>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

@endforeach
</div>

