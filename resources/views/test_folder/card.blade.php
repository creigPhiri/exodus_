@include("layouts.layout")
<link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">

<div class="col-12 col-md-12 offset-lg-3 mt-3 col-lg-6 " style="opacity: 0.9; border-radius: 4%">
        <div class="card-content " style="border-radius: 3%">
            <div class="card-header" style="background-color: white; border-bottom: none">
                <h3 class="h3 font-weight-bold" style="font-family: 'Quattrocento Sans', sans-serif; ">{{$post->post_title}}</h3>
                <div class="row">
                    <div class=" col-3 col-sm-3 my-auto">
                        <div style="width: 60px; height:60px; font-size: 30px; border-radius: 50%" class=" col mx-auto bg-dark text-white text-capitalize justify-content-center text-center">{{substr($post->users->name,0,1)}}</div>
                        <span class="d-sm-block text-center primary_color d-inline ">{{'@'.$post->users->name}}</span>
                    </div>
                    <div class=" col row justify-content-center">
                        <div class="col-12" >
                            <div class="" style ="max-height: 100px;overflow-y: scroll" >
                                <p class=""  style="font-size: 18px; font-family: 'Quattrocento Sans'">{{ $post->post_body }} </p>
                            </div>
                            <div class="">
                                <span class="text-muted pl-3 mr-1" style="font-size: 12px">{{$post->created_at->diffforhumans()}}</span>
                                <a href="/post/{{$post->id}}" class="card-link primary_color">Read ...</a>
                                <a href="/post/{{$post->id}}" class="primary_color" ><i class="far fa-comment fa-lg mr-1" ></i>{{$post->totalNumberOfComments->count()}}</a>
                                <a href="#" class="card-link primary_color"><i class="far fa-thumbs-up fa-lg"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

