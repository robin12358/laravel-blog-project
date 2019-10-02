
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

               <!--- \\\\\\\Post-->
              

                <!--- \\\\\\\Post-->
                <div class="card gedf-card mb-0 ">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="{{env('PUBLIC_PATH')}}/{{$question->file_path}}" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">{{$question->q_title}}</div>
                                    <div class="h7 text-muted">Miracles Lee Cross</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuration</div>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Hide</a>
                                        <a class="dropdown-item" href="#">Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 10 min ago</div>
                        <a class="card-link" href="#">
                            <h5 class="card-title"> hi hi</h5>
                        </a>

                        <p class="card-text">
                            {!! $question->q_body !!}
                        </p>
                        <div>
                            <span class="badge badge-primary">JavaScript</span>
                            <span class="badge badge-primary">Android</span>
                            <span class="badge badge-primary">PHP</span>
                            <span class="badge badge-primary">Node.js</span>
                            <span class="badge badge-primary">Ruby</span>
                            <span class="badge badge-primary">Paython</span>
                        </div>
                    </div>
                    <div class="card-footer">
                          @if(Auth::check())
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                        @endif
                    </div>
                </div>
                <!-- question /////-->
                <!--Reply-->
<div class="card mt-0 mb-3 wow fadeIn">
                            <!-- 
                                <div class="ml-3 mt-2">
                                    <img class="rounded-circle" width="45" src="{{env('PUBLIC_PATH')}}/{{$visitor->file_path}}" alt="">
                                </div>
                                <div class="ml-3">
                                    <div class="h5 m-0">{{$visitor->profile_name}}</div>
                                    <div class="h7 text-muted">Miracles Lee Cross</div>
                                </div> -->
                            
    <div class="card-header font-weight-bold">{{$visitor->profile_name}} put your answer here...</div>
    <div class="card-body">
          @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
        <!-- Default form reply -->
        <form method="POST" action="#" enctype="multipart/form-data" >
            @csrf

            <!-- Comment -->
            <div class="form-group">
                <label for="replyFormComment">Your comment</label>
                <textarea name="comment" class="form-control" id="replyFormComment" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
        <!-- Default form reply -->
<hr>

    <!-- Single Comment -->
    

    </div>
</div>
<!--/.Reply-->

<div class="alert alert-info">if you want to comment then you login.please</div>

  


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
    Subject
  </div>
  <ul class="list-group list-group-flush">
    @if($subjects->count()<=0)
    <li class="list-group-item">No Category Available.</li>
    @endif
    @foreach($subjects as $subject)

   <li class="list-group-item"><a href="{{route('singlequestion',$subject->id)}}">{{$subject->subject_name}}</a></li>
    @endforeach
  </ul>
</div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
 
</body>

</html>
