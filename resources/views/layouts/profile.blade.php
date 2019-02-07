<nav class="col-md-3 row d-none d-sm-block sidebar mt-5">
    <div class="col-8 offset-1 mb-3 border-danger">
       <img class="img-responsive img-circle" style="width: 200px; height: auto" src="{{URL::to('/').'/images/' . Auth::user()->image_url}}" />
    </div>
        <form action="/imageUpload" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input hidden type="text" value={{Auth::user()->id}}/>
            <input type="file" name="imageFile" class="border-0 my-4"/> <br/>
            <input type="submit" class="btn btn-success"/>
        </form>
    <br/> <br />
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

