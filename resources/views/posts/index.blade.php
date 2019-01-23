@extends('layouts.master')
@section('content')

<div class="">
        <div class="row text-center">
            @include('layouts.profile')     {{-- extracted to layout folder--}}
                <section class="col-md-6 col-lg-6 col-sm-10 ">
                    <div class="card border-top-0">
                        <div class=" color-dd-gradient strong text-center h3">Timeline</div>
                         <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                  {{ session('status') }}
                                </div>
                            @endif
                         </div>

                         <form method="post" action="" class="mb-3 card-desc">
                            {{ csrf_field() }}
                            <div class="mx-auto w-75">
                               <textarea class="form-control border-danger" required name="post_body" id="post_body" placeholder="type here"></textarea>
                                 <input type="submit" class="form-control btn btn-danger">
                            </div>
                         </form>
                        @foreach($posts as $post)
                            @include('display_cards.post_card')
                        @endforeach
                    </div>
                </section>
                <aside class="col-md-3 sidebar col-lg-3 d-sm-block d-none text-center">
                        @include('display_cards.sideBar')
                </aside><!-- /.blog-sidebar -->
        </div>
</div>
@endsection
