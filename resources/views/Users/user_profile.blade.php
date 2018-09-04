@extends('layouts.master')
<style>
    #area-white {
        border:50px solid rgba(224,224,224,0.5);
        background-clip: padding-box;
        background-color: rgba(255,255,255,1);

    }

    #main {
        background: url("{{asset('images/flag.jpg')}}") 0 0/cover;background-repeat: no-repeat; min-height: 400px;

    }


</style>
@section('content')
    <div id='main' style='' class="row">
        <div class="col-4 card " id =area-white>
            <div class="card-image">
                <img src="" alt="img area">
            </div>
            <div class="card-header p-2"><a href="/user/{{$user->user_id}}" class="active h5 text-primary">{{'@'.$user->name}}</a>
                <button class="btn btn-primary col-10 text-center">Follow</button>
            </div>
            <div class="card-body">
                <a href="#" class="active d-block">followers(26)</a>
                <a href="#" class="active d-block">following(0)</a>
            </div>
        </div>
        <div class="col-1">

        </div>       <!--  need to remove and float this right-->
        <div class="col card" id =area-white>
            <h1 class="text-primary">{{$user->name . '\'s account'}}</h1>
            <br>
            <h1>Interests</h1>
            <a>political science</a>
            <a>other ish</a>
            <h1>Recent activity</h1>
            <a>political science</a>
            <a>other ish</a>


        </div>
    </div>
@endsection