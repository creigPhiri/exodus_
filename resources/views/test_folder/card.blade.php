
<div class="container mt-3 d-flex">
        <div class="col-md pl-3 col-lg-6 offset-lg-3" style="border-left: 2px solid #19FABF">
            <div class="row">
                <div class="col-3">
                    <div style="width: 60px; height:60px; font-size: 30px" class=" col mx-auto primary_color_bg off_white text-capitalize text-center mb-2">
                        <p class="align-self-center pt-1 large-text">{{substr($post->users->name,0,1)}}</p>
                    </div>
                    <span class="text-center my-auto text-white" id="profile_name">{{'@'.$post->users->name}}</span>
                </div>
                <div class="col">
                    <div class="col-12" >
                        <div class="" style ="max-height: 130px;overflow-y: scroll" >
                            <p class="off_white" ><i class="fas fa-quote-left fa-2x primary_color mr-4"></i>{{ $post->post_body }} </p>
                        </div>
                        <div class="mt-3">
                            <span class="text-muted">{{$post->created_at->diffforhumans()}}</span>
                            <a href="/post/{{$post->id}}" class="card-link">Continue...</a>
                            <a href="/post/{{$post->id}}" class="card-link" ><i class="far fa-comment fa-lg mr-1" ></i>{{$post->totalNumberOfComments->count()}}</a>
                            {{--<a href="#" class="card-link"><i class="far fa-thumbs-up fa-lg"></i></a>--}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

