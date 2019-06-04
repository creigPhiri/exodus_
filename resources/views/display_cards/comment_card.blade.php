{{--this is the view for the displaying the comment which will only be injected if there is a comment for the relevant post--}}
@include("layouts.layout")
<link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">

<div class="ml-5" style="height: 100px">
    <div class="h-25">
        <div class="row">
            <div class="col-2 col-lg-1 mr-1">
                <div class="">
                    <div class="primary_color_bg justify-content-center " style="height:60px; width:60px; border-radius:  50%">
                      <p class="text-capitalize text-white text-center pt-1" style="font-size: 30px">{{substr($comment->users->name,0,1)}}</p>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="off_white">
                  {{$comment->comment_body}}
                </div>
                <small class="text-muted text-left">{{$comment->created_at->diffforhumans()}}</small>
                <a class="active text-primary pr-5">{{$comment->users->name}}</a>
            </div>
        </div>

    </div>
</div>

