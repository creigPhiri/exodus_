@extends('layouts.master')
@section('content')
<div class="">
        <div class="row text-center">
                <nav class="col-md-3 d-none d-sm-block sidebar mt-5">
                    <div class="mx-auto mb-3 border-danger" style="border: 1px solid black; height: 100px; width: 100px">
                        <input type="file" class="border-0 my-4"/>
                    </div>
                    <h5 class="color-dd-gradient font-weight-bold">{{'@'.Auth::user()->name}}</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class=" nav-link text-dark" href="#">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Following</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Followers</a>
                        </li>

                    </ul>
                </nav>

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
