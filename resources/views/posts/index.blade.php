@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            Welcome back <strong class="text-capitalize"> {{ Auth::user()->name }}</strong>

                        </div>
                                <form method="post" action="/home">
                                        <div class="mx-auto w-75">
                                            <textarea class="form-control-lg w-100" name="postBody" id="postBody" placeholder="type here"></textarea>
                                        </div>
                                            <div class="row justify-content-center">
                                                    <div class="col-1">
                                                        <input type="button" name="share" class="btn btn-success" id="share" placeholder="share">

                                                    </div>
                                                    <div class="col-1">
                                                        <input type="button" name="like" class="btn btn-primary" id="like" placeholder="like">
                                                    </div>
                                            </div>
                                                <div class="form-control d-none">
                                                    <input type="text" name="userName" value="{{Auth::user()->name}}" hidden placeholder="share">
                                                </div>
                                        <div>
                                        <div class="text-center mt-2">
                                            <input type="submit" class="w-25 text-center btn btn-success btn-lg">
                                        </div>
                                        </div>
                                  </form>


                    @foreach($data as $datum)
                        <div class="row justify-content-center mt-3">
                        <div class="card col-lg-6 d-block col-md-8 col-sm-10">
                            <div class="card-header">
                                {{$datum->postBody}}
                                <br>
                                <small class="text-muted">{{$datum->created_at}}</small>
                            </div>
                        </div>
                        </div>
                    @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
