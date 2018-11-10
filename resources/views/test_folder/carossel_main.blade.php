
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">


    <style>
        .image_outer_container{
            margin-top: auto;
            margin-bottom: auto;
            border-radius: 50%;
            position: relative;
        }

        .image_inner_container{
            border-radius: 50%;
            padding: 5px;
            background: #833ab4;
            background: -webkit-linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4);
            background: linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4);
        }
        .image_inner_container img{
            height: 200px;
            width: 200px;
            border-radius: 50%;
            border: 5px solid white;
        }
    </style>


    <!-- details card section starts from here -->
<div class="container  ">
    @include('layouts.nav')


    <div class="p-3"></div> <!-- used to separate the two sections -->
    <div class="row mt-3">

        <div class="col-3 ">
            <div class="d-inline-flex d-block">
                <div class="image_outer_container">
                    <div class="green_icon"></div>
                    <div class="image_inner_container">
                        <img src="https://i0.wp.com/tricksmaze.com/wp-content/uploads/2017/04/Stylish-Girls-Profile-Pictures-36.jpg?resize=300%2C300&ssl=1">
                    </div>
                </div>
            </div>
        </div>
          <div class="col">
             <h2 class="text-center m-3 youTube-red">Timeline</h2>
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
            <h4 class="text-center m-3">Archives</h4>
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

