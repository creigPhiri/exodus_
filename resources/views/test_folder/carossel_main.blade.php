
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">




    <!-- details card section starts from here -->
<div class="container  ">
    @include('layouts.nav')

    <div class="p-3"></div> <!-- used to separate the two sections -->
    <div class="row mt-3">

        <div class="col-3">
            <div class="d-inline-flex d-block">
                <div class="image_outer_container">
                    <div class="green_icon text-center"></div>
                    <div class="image_inner_container">
                        <img src="https://http2.mlstatic.com/quadro-personalidade-nelson-mande-29x42-moldura-madeira-1102-D_NQ_NP_980480-MLB28001804510_082018-F.jpg">
                    </div>
                    <div class="mt-3">
                        <h3 class="text-center youTube-red">{{'@'.Auth::user()->name}}</h3>
                    </div>
                </div>
            </div>
        </div>
          <div class="col">
             <h2 class="ml-5 color-dd-gradient text-center">Timeline</h2>
             <div class="row">
                                <form method="post" action="" class="col-8 mx-auto row">
                                    {{ csrf_field() }}
                                <textarea class="col-12" required name="post_body" id="post_body" placeholder="What's on your mind, {{Auth::user()->name}}"></textarea>
                                <input type="submit" class="form-control btn btn-outline-danger" style="">
                                </form>

             </div>
            {{--post card injection--}}
                @foreach($posts as $post)
                    @include('test_folder.testcard')
                @endforeach
          </div>

        <div class="col-1">
            <h4 class="text-center m-3 color-dd-gradient">Archives</h4>
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

