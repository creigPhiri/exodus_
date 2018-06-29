{{--the file contains the form for the posts--}}


<div class="card d-block">
    <div class="card-header">
        {{$post->post_body}}
        <br>
        @if(Auth::check())
        <span class="pl-2 pr-2">{{$post->users->name}}</span><small class="text-muted">{{$post->created_at->diffforhumans()}}</small>
        @endif
    </div>
    {{--this loads the comment--}}

</div>