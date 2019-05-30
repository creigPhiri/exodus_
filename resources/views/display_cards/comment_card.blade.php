{{--this is the view for the displaying the comment which will only be injected if there is a comment for the relevant post--}}
<div class="ml-5" style="height: 100px">
    <div class="h-25">
        <div class="row">
            <div class="col-1 p-0">
                <div class="">
                    <img class="img-fluid rounded-circle" style="height:60px; width: 60px" src="{{asset('images/default.png')}}">
                </div>
            </div>
            <div class="col">
                <div>
                  {{$comment->comment_body}}
                </div>
                <small class="text-muted text-left">{{$comment->created_at->diffforhumans()}}</small>
                <a class="active text-primary pr-5">{{$comment->users->name}}</a>
            </div>
        </div>

    </div>
</div>

