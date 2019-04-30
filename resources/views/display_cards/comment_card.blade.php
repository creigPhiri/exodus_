{{--this is the view for the displaying the comment which will only be injected if there is a comment for the relevant post--}}

<div id="show_comment?{{$post->id}}" class="collapse">
@foreach($post['comments'] as $comment)
    <div class="">
        <div class="h-25">
            <div class="row">
                <div class="col-5">
                    <div class="row">
                        <img class="img-responsive img-circle col-8 w-25 h-25" src="{{asset('images/default.png')}}">
                        <a href="#" class="active col-8 mt-1">{{'@'. $comment->users->name}}</a>
                    </div>
                </div>
                <div class="col ml-0">
                    {{$comment->comment_body}}
                    <small class="text-muted text-left">{{$comment->created_at->diffforhumans()}}</small>
                </div>
            </div>

        </div>
    </div>

@endforeach
</div>

