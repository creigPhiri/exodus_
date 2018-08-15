<!--
    this file contains the object for displaying the post. area commented out to allow for new post object
-->


<div class="row border border-primary w-75 rounded mx-auto mb-3">
    <div class="col-12">
        <div class="row">
             <div class="col-3 border border-dark">
                 <img src="#" alt="profile pic" class="img-responsive img-circle ">
             </div>
             <div class="col-6 text-center">
                {{$post->post_body}}
             </div>
        </div>
    </div>
    <div class="col-12">
        @if(Auth::check())
        <div class="row">
                <div class="col-6 text-left">
                     <a href="#" class="active">{{'@'.$post->users->name}}</a>
                        <small class="text-muted">{{$post->created_at->diffforhumans()}}</small>
                </div>
                <div class="col text-right ">
                    @if(Auth::id()==$post->user_id)
                        <a class="btn btn-link text-success "
                          href="update?id={{$post->post_id}}"><i class="fas fa-pencil-alt"></i></a>
                           <a class="btn btn-link text-danger"
                             href="delete?id={{$post->post_id}}">
                              <i class="fas fa-trash-alt"></i>
                           </a>
                    @endif
                    <!-- this is visible regardless of poster-id-->
                    <a class="btn btn-link text-primary" data-toggle="collapse"
                       href="#comment_{{$post->post_id}}" role="button" aria-expanded="false" aria-controls="comment"><i class="far fa-comment"></i>
                    </a>
                </div>
                @include('input_cards.comment_form')
        </div>
            <div class="row">
                <div class="col text-center">
                    @include('display_cards.comment_card')
                </div>
            </div>
        @endif
    </div>
</div>

