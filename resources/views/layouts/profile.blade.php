<nav class="col-md-3 d-none d-sm-block sidebar mt-5">
    <div class="mx-auto mb-3 border-danger" style="border: 1px solid black; height: 100px; width: 100px">
       <img src={{URL::to('/').'/images/' . Auth::user()->image_url}} />
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

