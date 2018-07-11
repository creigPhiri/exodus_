{{--the file contains the form for the posts--}}


<div class="ml-3 border-primary bg-light">
    <div class="h-4">
        {{$post->post_body}}
         <br>
            @if(Auth::check())
                 <a href="#" class="pl-2 pr-2 active">{{$post->users->name}}</a>
                 <small class="text-muted">{{$post->created_at->diffforhumans()}}</small>
            @endif
    </div>

</div>