        <!--this form lets the user make a comment-->

<form action="comment" method="post" class="ml-5 mt-3 w-75 form-group">
    {{csrf_field()}}
    <input type="text" name="post_id" value="{{$post->post_id}}" class="d-none">
    <textarea name="comment_body" id="comment_body" class="form-control" placeholder="add comment here"></textarea>
    <input type="submit" class="btn btn-success">
</form>