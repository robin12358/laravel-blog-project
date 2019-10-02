@extends('frontend.layout.master')
@section('title','')
@section('style')

@endsection
@section('content')
                <!--- \\\\\\\Post-->
              

                <!--- \\\\\\\Post-->
                <div class="card gedf-card mb-0 ">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="{{env('PUBLIC_PATH')}}/{{$post->file_path}}" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">{{$post->profile_name}}</div>
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
                            <h5 class="card-title"> {{$post->post_title}}</h5>
                        </a>

                        <p class="card-text">
                            {!! $post->details !!}
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

                        <a href="{{route('post.like', $post->id)}}" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                        @endif
                    </div>
                </div>
                <!-- Post /////-->
                
        @if(Auth::check())
                           
                
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
                            
    <div class="card-header font-weight-bold">{{$visitor->profile_name}} Leave a reply</div>
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
        <form method="POST" action="{{route('post.comment',$post->id)}}" enctype="multipart/form-data" >
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
 @if(count($comments)>0)
              @foreach($comments->all() as $comment)
               <div class="media mb-4">
               	
               <img src="{{env('PUBLIC_PATH')}}/{{$comment->file_path}}" class="rounded-circle" width="45">
           
      <div class="media-body">
        <h5 class="mt-0">{{$comment->profile_name}}</h5><hr>
       <p>{{$comment->comment}}</p>
     
      </div>
    </div>
               @endforeach
               @else
                <p>No Comment Available !</p>
                @endif
    <!-- Single Comment -->
    

    </div>
</div>
<!--/.Reply-->
@else
<div class="alert alert-info">if you want to comment then you login.please</div>
@endif
@endsection