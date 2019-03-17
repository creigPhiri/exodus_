<div class="col-12 col-md-12  mt-5 col-lg-6 offset-lg-3 border-primary" style="border-radius: 20px">
    <div class="card-content pt-3">
        <div class="card-header" style="background-color: white; border-bottom: none">
            <div class="row">
                <div class=" col-4">
                    <img src="https://http2.mlstatic.com/quadro-personalidade-nelson-mande-29x42-moldura-madeira-1102-D_NQ_NP_980480-MLB28001804510_082018-F.jpg" alt="" width="120px" height="120px" class="rounded-circle img-responsive">
                </div>
                <div class=" col-6">
                    <h3 class="text-secondary card-title">{{$post->post_title}}</h3>
                    <span class="text-primary h4 mb-2 d-inline">{{'@'.$post->users->name}}</span>
                    <span class="text-muted pl-5">{{$post->created_at->diffforhumans()}}</span>
                </div>
            </div>
        </div>
        <div class="card-desc col-12" >
            <div style ="width: auto; height: 100px;overflow-y: scroll" >
                <p class="text-secondary"  style="font-size: 24px">{{ $post->post_body }} </p>
            </div>
            <div class="text-right pr-5">
                <a href="/comments" class="card-link">Continue Reading</a>
                <a href="#" class="card-link" ><i class="far fa-comment fa-lg" ></i> 5</a>
                <a href="#" class="card-link"><i class="far fa-thumbs-up fa-lg"></i></a>
            </div>

        </div>
        <div class="pb-3"></div>
    </div>
</div>
