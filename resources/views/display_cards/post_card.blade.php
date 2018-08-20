<!--
    this file contains the object for displaying the post. area commented out to allow for new post object
-->



<div class="row border border-primary w-75 rounded mx-auto mb-3">
    <div class="col-12">
        @if(Auth::check())
        <div class="row">
            <div class="media text-muted pt-3">
                <img data-src="holder.js/32x32?theme=thumb&bg=e83e8c&fg=e83e8c&size=1" alt="" class="mr-2 rounded">
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block"><a href="#" class="active">{{'@'.$post->users->name}}</a></strong>
                    <strong>{{$post->post_body}}</strong>
                    <small class="text-muted mr-2">{{$post->created_at->diffforhumans()}}</small>
                </p>
            </div>
                <div class="col-12 text-right ">
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
                <div class="col ml-5">
                    @include('display_cards.comment_card')
                </div>
            </div>
        @endif
    </div>
</div>

