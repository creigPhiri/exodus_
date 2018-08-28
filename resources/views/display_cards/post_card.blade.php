<!--
this file contains the object for displaying the post. area commented out to allow for new post object
-->


<div class="row w-75 rounded mx-auto mb-3">
    <div class="col-12">
        @if(Auth::check())
            <div class="row">
            <!----***  image container-------->
                <div class="col-3 mx-auto my-auto"><img src="{{asset('images/default.png')}}" class="img-responsive card-img" alt="profile pic"></div>
                <!-- end of img arear--------->

                <!-- comment comment -->
                <div class="col-9 ml-0 mt-2" style="border:3px solid #eee;box-shadow :0 2px 3px #ccc;">
                     <p class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                        <a href="#" class="active font-weight-bold">{{'@'.$post->users->name}}</a>
                           <strong>{{$post->post_body}}</strong>
                              @if(Auth::id()==$post->user_id)
                                {{--<a class="btn btn-link text-success " href="update?id={{$post->id}}"><i class="fas fa-pencil-alt"></i></a>--}}
                                 <a class="btn btn-link text-danger" href="delete?id={{$post->id}}"><i class="fas fa-trash-alt"></i></a>
                              @endif
                            <small class="text-muted float-right">
                            {{$post->created_at->diffforhumans()}}
                          </small>
                     </p>
                    <!-- end of comment arear--------->

                    <!--******* delete and edit buttons ***--->
                    <p class="text-right">
                        <a class="btn btn-link text-primary" data-toggle="collapse" href="#show_comment?{{$post->id}}" role="button" aria-expanded="false" aria-controls="show_comment">comments <b>({{count($post['comments'])}})</b></a>
                          <!-- this is visible regardless of poster-id-->
                          <a class="btn btn-link text-primary" data-toggle="collapse" href="#comment_{{$post->id}}" role="button" aria-expanded="false" aria-controls="comment"><i class="far fa-comment"></i></a>
                        @include('input_cards.comment_form')
                    </p>

                    <div class="row">
                        <div class="col ml-5">
                            @include('display_cards.comment_card')
                        </div>
                    </div>
                </div>
            </div>

        @endif
    </div>
</div>

