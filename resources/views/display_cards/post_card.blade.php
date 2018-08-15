<!--
    this file contains the object for displaying the post.
    area commented out to allow for new post object


-->

                        {{--<div class="ml-3 border-primary bg-light">--}}
                            {{--<div class="h-4">--}}
                                {{--{{$post->post_body}}--}}
                                 {{--<br>--}}
                                    {{--@if(Auth::check())--}}
                                         {{--<a href="#" class="pl-2 pr-2 active">{{$post->users->name}}</a>--}}
                                         {{--<small class="text-muted">{{$post->created_at->diffforhumans()}}</small>--}}
                                         {{--@if(Auth::id()==$post->user_id)--}}
                                            {{--<a class="btn btn-link text-success text-right"--}}
                                               {{--href="update?id={{$post->post_id}}">update</a>--}}
                                            {{--<a class="btn btn-link text-danger text-right"--}}
                                               {{--href="delete?id={{$post->post_id}}">delete</a>--}}
                                         {{--@endif--}}
                                    {{--@endif--}}
                            {{--</div>--}}

                        {{--</div>--}}




<div class="row border border-primary w-75 rounded mx-auto">
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
        <div class="row">
            @if(Auth::check())
                <div class="col-6 text-left">
                    <a href="#" class="active">{{'@'.$post->users->name}}</a>
                    <small class="text-muted">{{$post->created_at->diffforhumans()}}</small>
                </div>
                <div class="col text-right ">
                    @if(Auth::id()==$post->user_id)
                        <a class="btn btn-link text-success "
                           href="update?id={{$post->post_id}}"><i class="fas fa-pencil-alt"></i>
                        </a>
                        <a class="btn btn-link text-danger"
                           href="delete?id={{$post->post_id}}"><i class="fas fa-trash-alt"></i>
                        </a>
                    @endif
                    <!-- this is visible regardless of poster-id-->
                    <a class="btn btn-link text-primary"
                       href="#"><i class="far fa-comment"></i>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>