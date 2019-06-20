{{--this is the view for the displaying the comment which will only be injected if there is a comment for the relevant post--}}
{{--@include("layouts.layout")--}}
{{--<link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">--}}

{{--<div class="ml-5" style="height: 100px">--}}
    {{--<div class="h-25">--}}
        {{--<div class="row">--}}
            {{--<div class="col-2 col-lg-1 mr-1">--}}
                {{--<div class="">--}}
                    {{--<div class="primary_color_bg justify-content-center " style="height:60px; width:60px; border-radius:  50%">--}}
                      {{--<p class="text-capitalize text-white text-center pt-1" style="font-size: 30px">{{substr($comment->users->name,0,1)}}</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-8">--}}
                {{--<div class="off_white">--}}
                  {{--{{$comment->comment_body}}--}}
                {{--</div>--}}
                {{--<small class="text-muted text-left">{{$comment->created_at->diffforhumans()}}</small>--}}
                {{--<a class="active text-primary pr-5">{{$comment->users->name}}</a>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}
{{--</div>--}}

<div class="plx-card silver col-md-8 ml-2 ml-lg-5 ">
    {{--<div class="pxc-bg" style="background-image:url('https://i.gyazo.com/a846fc87cca5ebd3942ae1e038bb5083.png');">  </div>--}}
    {{--<div class="pxc-avatar"><img src="https://store.playstation.com/store/api/chihiro/00_09_000/container/GB/en/999/EP4312-CUSA07658_00-AV00000000000049/1536930670000/image?w=240&amp;h=240&amp;bg_color=000000&amp;opacity=100&amp;_version=00_09_000"/></div>--}}
    {{--<div class="pxc-stopper">   </div>--}}
    <div class="pxc-subcard">
        <div class="pxc-title h3">{{$comment->comment_body}}</div>
        <div class="pxc-sub">
            <span class="float-left active">
                {{$comment->users->name}}
            </span>
            <span class="text-muted float-right">
                {{$comment->created_at->diffforhumans()}}
            </span>
        </div>
        </div>
    </div>
</div>

