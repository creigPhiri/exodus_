@include("layouts.layout")
<link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">
    <div class="container p-3 d-flex">
        <div class="col-md-8 p-3  col-lg-6 offset-md-2 offset-lg-3" style="border-left: 1px solid #19FABF">
            <div class="row">
                <div class="col-3">
                    <div style="width: 60px; height:60px; font-size: 30px; border-radius: 50%" class=" col mx-auto primary_color_bg off_white text-capitalize text-center mb-2">
                        <span class="align-self-center">{{substr($post->users->name,0,1)}}</span>
                    </div>
                    <span class="text-center my-auto off_white ">{{'@'.$post->users->name}}</span>
                </div>
                <div class="p-0 col-8 row justify-content-center">
                    <div class="col-12" >
                        <div class="" style ="max-height: 100px;overflow-y: scroll" >
                            <p class="off_white"  style="font-size: 18px; font-family: 'Quattrocento Sans'"><i class="fas fa-quote-left fa-2x primary_color ml-4"></i>{{ $post->post_body }} </p>
                        </div>
                        <div class="mt-3">
                            <span class="text-muted" style="font-size: 13px">{{$post->created_at->diffforhumans()}}</span>
                            <a href="/post/{{$post->id}}" class="card-link">Continue...</a>
                            <a href="/post/{{$post->id}}" class="card-link" ><i class="far fa-comment fa-lg mr-1" ></i>{{$post->totalNumberOfComments->count()}}</a>
                            {{--<a href="#" class="card-link"><i class="far fa-thumbs-up fa-lg"></i></a>--}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

