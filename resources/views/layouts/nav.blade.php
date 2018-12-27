{{--using bootstrap 4.1--}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand color-dd-gradient mr-5" href="#">ZimVoice</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="#">Trending</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="#">
            <input class="form-control mr-sm-2" name='search' type="search" placeholder="Search" aria-label="Search">
            {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
        </form>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>


    </div>
</nav>