@extends('layouts.master')

@section('content')
<div class="">
        <div class="row justify-content-center">
                <nav class="col-md-3 d-none d-md-block sidebar">
                    <div class="sidebar-sticky">
                         <div class="row">
                             <div class="mx-auto col-6">
                                 <img src="{{asset('images/default.png')}}" class="img-responsive card-img img-rounded" alt="profile pic">
                             </div>
                         </div>
                            <ul class="nav flex-column text-center">
                                <li class="nav-item">
                                    <a class="nav-link active" href="user/{{auth()->id()}}">
                                        <span data-feather="home"></span>
                                        Profile <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span data-feather="shopping-cart"></span>
                                        Followers
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span data-feather="users"></span>
                                        Following
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span data-feather="users"></span>
                                        Settings
                                    </a>
                                </li>
                            </ul>

                    </div>
                </nav>

                <section class="col-md-6 col-lg-6 col-sm-10 ">
                    <div class="card">
                        <div class="card-header bg-primary text-white text-center h3">Timeline</div>
                         <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                  {{ session('status') }}
                                </div>
                            @endif
                            Welcome back
                            <strong class="text-capitalize"> {{ Auth::user()->name }} </strong>
                         </div>
                         <form method="post" action="" class="mb-3">
                            {{ csrf_field() }}
                            <div class="mx-auto w-75">
                               <textarea class="form-control" required name="post_body" id="post_body" placeholder="type here"></textarea>
                                 <input type="submit" class="form-control btn btn-primary">
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
