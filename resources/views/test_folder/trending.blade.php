
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="{{ asset('css/main.css') }}" rel="stylesheet">



<div class="container  ">
@include('layouts.nav')

    <h2 class="text-center h2">Trending now</h2>
<div class="row  justify-content-center">

        <div class="col-10 col-md-8">
            <div class="card-content">
                <div class="card-img mx-5 mt-1">
                    <img src="https://placeimg.com/380/230/nature" alt="">
                    <span><h4>#bringBack</h4></span>
                </div>
                <div class="card-desc">
                    <h3>Dear Mr President</h3>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                     voluptas totam</p>
                    <a href="#" class="btn-card">Read</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card-content">
                <div class="row mt-2 mb-2">
                <div class=" card-img">
                   <img class="img-responsive rounded mx-auto my-3" src="https://www.aljazeera.com/mritems/imagecache/mbdxxlarge/mritems/Images/2017/11/20/a901e05caa0649339ef3cda148ee1d3a_18.jpg" alt="">
                </div>
                <div class="card-desc">
                    <p>gucci grace <i></i></p>
                    <small class="text-muted">30days ago</small><a href="#" class="active">@i_are_omar</a>
                </div>
                </div>
            </div>
        </div>
    <div class="col-md-2">
        <div class="card-content">
            <div class="row mt-2 mb-2">
                <div class=" card-img">
                    <img class="img-responsive rounded mx-auto my-3" src="https://harareblitz.com/wp-content/uploads/2018/09/Mnangagwa-sad_600x387-1-600x381.jpg" alt="">
                </div>
                <div class="card-desc">
                    <p>Forgive us mr cocodile <i></i></p>
                    <small class="text-muted">30days ago</small><a href="#" class="active">@i_are_omar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="card-content">
            <div class="row mt-2 mb-2">
                <div class=" card-img">
                    <img class="img-responsive rounded mx-auto my-3" src="https://www.aljazeera.com/mritems/imagecache/mbdxxlarge/mritems/Images/2017/10/22/03cefdee531c450fa139a68533784c33_18.jpg" alt="">
                </div>
                <div class="card-desc">
                    <p>Bob vs the crocodile<i></i></p>
                    <small class="text-muted">30days ago</small><a href="#" class="active">@i_are_omar</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>