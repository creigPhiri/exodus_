        <!--this form lets the user make a comment-->
<div class="collapse ml-auto" id="comment_{{$post->post_id}}">
    <form action="comment" method="post" class=" form-inline">
        {{csrf_field()}}
          <div class="form-group bg-white">
                <input type="text" name="post_id" value="{{$post->post_id}}" class="d-none">
                   <textarea name="comment_body" id="comment_body" class="form-control" cols="20" placeholder="comment ?"></textarea>
                <input type="submit" class="btn btn-primary form-control ml-3">
          </div>
    </form>
</div>
