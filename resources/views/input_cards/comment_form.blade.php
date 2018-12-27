        <!--this form lets the user make a comment-->
<div class="collapse ml-auto" id="comment_{{$post->id}}">
    <form action="comment" method="post" class=" form-inline">
        {{csrf_field()}}
        <input type="text" name="post_id" value="{{$post->id}}" class="d-none">
          {{--<div class="form-group bg-white">--}}
                {{--<input type="text" name="post_id" value="{{$post->id}}" class="d-none">--}}
                   {{--<textarea name="comment_body" id="comment_body" class="" cols="20" placeholder="comment ?"></textarea>--}}
                {{--<input type="submit" class="btn btn-primary form-control ml-3">--}}
          {{--</div>--}}
        <div class="cardbox-comments">
			  {{--<span class="comment-avatar float-left h-25">--}}
			   {{--<a href=""><img class="rounded-circle img-responsive" src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/6.jpg" alt="..."></a>--}}
			  {{--</span>--}}
            <div class="search">

                <input placeholder="Write a comment" type="text" name="comment_body">
                <button><i class="fa fa-camera"></i></button>
            </div>
        </div>
    </form>
</div>



