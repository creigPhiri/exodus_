    <div class="col-12 col-md-12 offset-lg-3 mt-3 col-lg-6 " style="opacity: 0.9; border-radius: 4%">
        <div class="card-content" style="border-radius: 3%">
            <div class="card-header" style="background-color: white; border-bottom: none">
                <h3 class="h3 font-weight-bold" style="font-family: 'Quattrocento Sans', sans-serif; ">{{$post->post_title}}</h3>
                <div class="row">
                    <div class=" col-3 justify-content-center align-items-center">
                        <img src="https://http2.mlstatic.com/quadro-personalidade-nelson-mande-29x42-moldura-madeira-1102-D_NQ_NP_980480-MLB28001804510_082018-F.jpg" alt="" width="60px" height="60px" class="mb-2 rounded-circle img-responsive">
                        <span class="text-primary d-inline ">{{'@'.$post->users->name}}</span>
                    </div>
                    <div class=" col row">
                        <div class="col-12" >
                            <div class="" style ="max-height: 100px;overflow-y: scroll" >
                                <p class=""  style="font-size: 17px; font-family: 'Quattrocento Sans'">{{ $post->post_body }} </p>
                            </div>
                            <div class="">
                                <span class="text-muted pl-3 mr-1" style="font-size: 12px">{{$post->created_at->diffforhumans()}}</span>
                                <a href="/post/{{$post->id}}" class="card-link">Read ...</a>
                                <a href="/post/{{$post->id}}" class="card-link" ><i class="far fa-comment fa-lg mr-1" ></i>{{$post->totalNumberOfComments->count()}}</a>
                                <a href="#" class="card-link"><i class="far fa-thumbs-up fa-lg"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

