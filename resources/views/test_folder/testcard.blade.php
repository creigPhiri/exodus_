<div class="card-content col-8 mx-auto mb-3 ">
    <div class="row mt-2 mb-2">
        <div class="col-6 card-img">
            <img class="img-responsive rounded-circle mx-auto my-3" src="https://gdb.voanews.com/D23422B2-F20A-4202-9DE8-6CB85AE16E6E_cx17_cy14_cw75_w1023_r1_s.jpg" alt="">
        </div>
        <div class="card-desc">
              <p>
                <strong>
                    {{$post->post_body}}
                </strong>
              </p>
             <small class=" text-muted">{{$post->created_at->diffforhumans()}}</small>
            <a href="user/{{$post->user_id}}" class="youTube-red"> {{' @'.$post->users->name}}</a>
        </div>
        <div class="mb-3"></div>
    </div>
</div>