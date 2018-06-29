{{--this is the view for the displaying the comment which will only be injected if there is a comment for the relevant post--}}

@foreach($post['comments'] as $comment)
    <div class=" ml-5">
        <div class="">
            {{$comment->comment_body}}
            <br>
            <small class="text-muted">{{$comment->created_at->diffforhumans()}}</small>
        </div>
    </div>

@endforeach

