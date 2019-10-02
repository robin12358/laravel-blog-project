<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
</head>
<link href="{{env('PUBLIC_PATH')}}/frontend_resource/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
@yield('style')
<script src="{{env('PUBLIC_PATH')}}/frontend_resource/js/bootstrap.min.js"></script>
<script src="{{env('PUBLIC_PATH')}}/frontend_resource/js/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link href="{{env('PUBLIC_PATH')}}/frontend_resource/css/style.css" rel="stylesheet">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
<link href="{{env('PUBLIC_PATH')}}/frontend_resource/css/style.css" rel="stylesheet">
<script src="{{env('PUBLIC_PATH')}}/frontend_resource/js/slim.min.js"></script>
 <script src="{{env('PUBLIC_PATH')}}/frontend_resource/js/popper.min.js" ></script>
<script src="{{env('PUBLIC_PATH')}}/frontend_resource/js/2bootstrap.min.js"></script>
<body>
       
<nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
  <a class="navbar-brand" href="#">Blogcrud</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home.index')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('home.questionlist')}}">Question</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <ul class="navbar-nav mr-2 mt-2 mt-lg-0 justify-content-end">
        <li class="nav-item ">
        <a class="nav-link disabled" href="{{ route('login') }}">login</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link disabled" href="{{ route('register') }}">Sign Up</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

    <div class="container-fluid gedf-wrapper">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="h5">Live to learn</div>
                        <div class="h7 text-muted">Welcome with your skills.</div>
                        <div class="h7">Developer of web applications, JavaScript, PHP, Java, Python, Ruby, Java, Node.js,
                            etc.
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="h6 text-muted">Our Active User's</div>
                            <div class="h5">2342</div>
                        </li>
                        <li class="list-group-item">
                            <div class="h6 text-muted">Our Total Post are :-</div>
                            <div class="h5">6758</div>
                        </li>
                        <li class="list-group-item">You can join with our Community</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 gedf-main">

@yield('content')

            </div>
            <div class="col-md-3">
                <div class="card gedf-card ">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
               
                <div class="card gedf-card ">
                        <div class="card-body">
                           <div class="card">
  <div class="card-header">
    Category
  </div>
  <ul class="list-group list-group-flush">
    @if($categories->count()<=0)
    <li class="list-group-item">No Category Available.</li>
    @endif
    @foreach($categories as $category)

   <li class="list-group-item"><a href="{{route('home.category.post',$category->id)}}">{{$category->category_name}}</a></li>
    @endforeach

  </ul>
</div>
                        </div>
                    </div>
   
    @yield('script')
</body>

</html>
