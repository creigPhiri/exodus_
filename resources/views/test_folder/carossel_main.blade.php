
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        /* card details start  */
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:400,400i,700,700i');
        section{
            padding: 30px 0;
        }
        .details-card {
            background: #ecf0f1;
        }


        .card-content {
            background: #ffffff;
            border: 4px;
            box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);

        }

        .card-img {
            position: relative;
            overflow: hidden;
            border-radius: 0;
            z-index: 1;

        }

        .card-img img {
            width: 75%;
            height: auto;
            display: block;
        }

        .card-img span {
            position: absolute;
            top: 15%;
            left: 12%;
            background: #1ABC9C;
            padding: 6px;
            color: #fff;
            font-size: 12px;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            transform: translate(-50%,-50%);
        }
        .card-img span h4{
            font-size: 12px;
            margin:0;
            padding:10px 5px;
            line-height: 0;
        }
        .card-desc {
            padding: 1.25rem;
        }

        .card-desc h3 {
            color: #000000;
            font-weight: 600;
            font-size: 1.5em;
            line-height: 1.3em;
            margin-top: 0;
            margin-bottom: 5px;
            padding: 0;
        }

        .card-desc p {
            color: #747373;
            font-size: 14px;
            font-weight: 400;
            font-size: 1em;
            line-height: 1.5;
            margin: 0px;
            margin-bottom: 20px;
            padding: 0;
            font-family: 'Raleway', sans-serif;
        }
        .btn-card{
            background-color: #1ABC9C;
            color: #fff;
            box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
            padding: .84rem 2.14rem;
            font-size: .81rem;
            -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
            -o-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
            margin: 0;
            border: 0;
            -webkit-border-radius: .125rem;
            border-radius: .125rem;
            cursor: pointer;
            text-transform: uppercase;
            white-space: normal;
            word-wrap: break-word;
            color: #fff;
        }
        .btn-card:hover {
            background: orange;
        }
        a.btn-card {
            text-decoration: none;
            color: #fff;
        }
        /* End card section */
    </style>




    <!-- details card section starts from here -->
<div class="container  ">
    @include('layouts.nav')

{{--<div class="row  justify-content-center d-none">--}}
    {{--<h2 class="text-center m-3">Trending now</h2>--}}
        {{--<div class="col-md-4">--}}
            {{--<div class="card-content">--}}
                {{--<div class="card-img mx-5 mt-1">--}}
                    {{--<img src="https://placeimg.com/380/230/nature" alt="">--}}
                    {{--<span><h4>#bringBack</h4></span>--}}
                {{--</div>--}}
                {{--<div class="card-desc">--}}
                    {{--<h3>Dear Mr President</h3>--}}
                    {{--<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis--}}
                        {{--voluptas totam</p>--}}
                    {{--<a href="#" class="btn-card">Read</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-2">--}}
            {{--<div class="card-content">--}}
                {{--<div class="row mt-2 mb-2">--}}
                    {{--<div class=" card-img">--}}
                        {{--<img class="img-responsive rounded mx-auto my-3" src="https://www.aljazeera.com/mritems/imagecache/mbdxxlarge/mritems/Images/2017/11/20/a901e05caa0649339ef3cda148ee1d3a_18.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="card-desc">--}}
                        {{--<p>gucci grace <i></i></p>--}}
                        {{--<small class="text-muted">30days ago</small><a href="#" class="active">@i_are_omar</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-2">--}}
            {{--<div class="card-content">--}}
                {{--<div class="row mt-2 mb-2">--}}
                    {{--<div class=" card-img">--}}
                        {{--<img class="img-responsive rounded mx-auto my-3" src="https://harareblitz.com/wp-content/uploads/2018/09/Mnangagwa-sad_600x387-1-600x381.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="card-desc">--}}
                        {{--<p>Forgive us mr cocodile <i></i></p>--}}
                        {{--<small class="text-muted">30days ago</small><a href="#" class="active">@i_are_omar</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-2">--}}
            {{--<div class="card-content">--}}
                {{--<div class="row mt-2 mb-2">--}}
                    {{--<div class=" card-img">--}}
                        {{--<img class="img-responsive rounded mx-auto my-3" src="https://www.aljazeera.com/mritems/imagecache/mbdxxlarge/mritems/Images/2017/10/22/03cefdee531c450fa139a68533784c33_18.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="card-desc">--}}
                        {{--<p>Bob vs the crocodile<i></i></p>--}}
                        {{--<small class="text-muted">30days ago</small><a href="#" class="active">@i_are_omar</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="p-3"></div> <!-- used to separate the two sections -->
    <div class="row mt-3">

        <div class="col-2 border-danger">
            <h4 class="text-center m-3">nav area</h4>
        </div>
        <div class="col">
            <h2 class="text-center m-3 text-success">Timeline</h2>
            <div class="card-content col-8 mx-auto">
                <div class="row mt-2 mb-2">
                    <div class="col-6 card-img">
                        <img class="img-responsive rounded-circle mx-auto my-3" src="https://gdb.voanews.com/D23422B2-F20A-4202-9DE8-6CB85AE16E6E_cx17_cy14_cw75_w1023_r1_s.jpg" alt="">
                    </div>
                    <div class="card-desc">
                        <p>I think Ediot should go</p>
                           <small class=" text-muted">12days ago</small><a href="#" class="active">@creig</a>
                    </div>
                    <div class="mb-3"></div>
                </div>
            </div>
        </div>
        <div class="col-1">
            <h4 class="text-center m-3">Archives</h4>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">June 2018</li>
                <li class="list-group-item">Dec 2017</li>
                <li class="list-group-item">Nov 2018</li>
                <li class="list-group-item">Oct 2018</li>
            </ul>
        </div>
    </div>
</div>

