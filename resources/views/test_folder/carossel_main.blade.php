
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">


    <style>


    </style>


    <!-- details card section starts from here -->
<div class="container  ">
    @include('layouts.nav')


    <div class="p-3"></div> <!-- used to separate the two sections -->
    <div class="row mt-3">

        <div class="col-3 ">
            <div class="d-inline-flex d-block">
                <div class="image_outer_container">
                    <div class="green_icon text-center"></div>
                    <div class="image_inner_container">
                        <img src="https://i0.wp.com/tricksmaze.com/wp-content/uploads/2017/04/Stylish-Girls-Profile-Pictures-36.jpg?resize=300%2C300&ssl=1">
                    </div>
                    <div class="mt-3">
                        <h3 class="text-center">{{'@'.Auth::user()->name}}</h3>
                    </div>
                </div>
            </div>
        </div>
          <div class="col">
             <h2 class="text-center youTube-red">Timeline</h2>
             <div class="row">
                                <form method="post" action="" class="col-8 mx-auto row">
                                    {{ csrf_field() }}
                                <textarea class="col-12" required name="post_body" id="post_body" placeholder="type here"></textarea>
                                <input type="submit" class="form-control btn btn-outline-danger" style="">
                                </form>

             </div>
            {{--post card injection--}}
                @foreach($posts as $post)
                    @include('test_folder.testcard')
                @endforeach
          </div>

        <div class="col-1">
            <h4 class="text-center m-3 youTube-red">Archives</h4>
            <ul class="list-group list-group-flush">
                @foreach($archives as $archive)
                    <li class="list-group-item">
                        <a href="?month={{$archive['month']}}&year={{$archive['year']}}">
                            {{$archive['month']. ' '. $archive['year']}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

