        <!--this form lets the user make a comment-->

<form action="comment" method="post" class="m-2 w-75 form-inline">
       {{csrf_field()}}
            <div class="form-group ml-5 bg-white">
                <input type="text" name="post_id" value="{{$post->post_id}}" class="d-none">
                   <textarea name="comment_body" id="comment_body" class="form-control" cols="30" placeholder="add comment here"></textarea>
                <input type="submit" class="btn btn-primary form-control ml-3">
            </div>
</form>