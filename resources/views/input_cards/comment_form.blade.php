        <!--this form lets the user make a comment-->
{{--@include("layouts.layout")--}}
<div class="row ml-5" id="comment">
    <div style="width:60px; height: 60px; border-radius:  50%; font-size: 30px; text-align: center" class="mr-4 text-capitalize align-items-center primary_color_bg text-white">{{substr(Auth::user()->name,0,1)}}</div>
    <form action="/comment" method="post" class="md-form form-lg">
        {{csrf_field()}}
        <input type="text" name="post_id" value="{{$post->id}}" class="d-none">
          {{--<div class="">--}}
                <input type="text" name="post_id" value="{{$post->id}}" class="d-none">
                   {{--<textarea name="comment_body" id="comment_body" class="form-control form-control-lg" cols="20" placeholder="comment ?"></textarea>--}}
                {{--<input type="submit" class="btn btn-primary">--}}
          {{--</div>--}}
        <div class="row">
            <textarea name="comment_body" id="comment_body" placeholder="Reply to {{$post->users->name}}" class="form-control form-control-lg mt-1 mr-3 col"></textarea>
            <label for="comment_body" class="sr-only">Comment body</label>
            <button onclick="" class="col-3 btn text-danger"><i class="fas fa-reply fa-2x"></i></button>
        </div>
    </form>
</div>

<style>
    i:hover {
        color: #FFFFFA;
    }
</style>

