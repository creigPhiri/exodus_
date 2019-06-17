        <!--this form lets the user make a comment-->
@include("layouts.layout")
<div class="row ml-5" id="comment">
    <div style="width:60px; height: 60px; border-radius:  50%; font-size: 30px; text-align: center" class="text-capitalize align-items-center primary_color_bg text-white">{{substr(Auth::user()->name,0,1)}}</div>
    <form action="/comment" method="post" class=" form-inline col">
        {{csrf_field()}}
        <input type="text" name="post_id" value="{{$post->id}}" class="d-none">
          <div class="form-group">
                <input type="text" name="post_id" value="{{$post->id}}" class="d-none">
                   <textarea name="comment_body" id="comment_body" class="rounded" cols="20" placeholder="comment ?"></textarea>
                <input type="submit" class="btn btn-primary form-control ml-3">
          </div>
        <div class="cardbox-comments">

        </div>
    </form>
</div>



