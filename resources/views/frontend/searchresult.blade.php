@extends('frontend.layout.master')
@section('title','')
@section('style')

@endsection
@section('content')
@if(count($posts)<=0)
                <!--- \\\\\\\Post-->
                <div class="card gedf-card ">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                           <h3> Sorry there are not any result !</h3>
                        
                        </div>

                    </div>
                  
                </div>
@else
 @foreach($posts as $post)

                <!--- \\\\\\\Post-->
                <div class="card gedf-card ">
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
                        <a class="card-link" href="{{route('singlepost',$post->id)}}">
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
                        <a href="{{route('post.like', $post->id)}}" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                    </div>
                </div>
                <!-- Post /////-->
                @endforeach

@endif
@endsection

                <!--- \\\\\\\Post-->
              