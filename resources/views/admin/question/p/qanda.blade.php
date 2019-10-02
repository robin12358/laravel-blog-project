@extends('layouts.app')

@section('content')
 <div class="container">
   <div class="card">
      @if(count($errors)>0)
@foreach($errors->all() as $error)
<div class="alert alert-denger">{{$error}}</div>
@endforeach
@endif
@if(session('response'))
<div class="alert alert-success">{{session('response')}}</div>
@endif
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    <div class="card-header">
      <h2>Qustion & Answer</h2>
    </div>
    <div class="card-body">
      <div class="container">
          <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
               
               
               
<div class="col-md-12 mb-4">

    <button type="button" class="btn btn-rounded btn-amber"><i class="fa fa-th-list pr-2" aria-hidden="true"></i>List</button>
    <button type="button" class="btn btn-rounded btn-brown"><i class="fa fa-rotate-right pr-2" aria-hidden="true"></i>Rotate</button>
    <button type="button" class="btn btn-rounded btn-blue-grey"><i class="fa fa-floppy-o pr-2" aria-hidden="true"></i>Floppy</button>
    <button type="button" class="btn btn-rounded btn-primary"><i class="fa fa-bitcoin pr-2" aria-hidden="true"></i>Bitcoin</button>

  </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    
                    
                   {{--  <li class="nav-item">
                      <a href="{{ url('/addquestion') }}" class="nav-link bg-info">Qustion Submit </a>
                                    <a href="{{ url('/answ') }}" class="nav-link bg-info">Qustion timeline</a>
                                    <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                              
                                <a class="nav-link" href="{{ url('/home') }}">{{ __('Home') }}</a>
                            </li> --}}
                   
                            
                          
                    
                    </ul>

                  
                    
                </div>
            </div>
        </nav>
        <div class="btn-group mx-3" role="group" >
                                    <a href="{{ url('/addquestion') }}" class="btn btn-primary">Qustion Submit </a>
                                    <a href="{{ url('/answ') }}" class="btn btn-primary">Qustion timeline</a>
                                    <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                              
                               </div>
                                </div>

                               <hr>

 <div class="row">

<!-- Blog Entries Column -->
<div class="col-md-8">

                      
    <small>All Question</small>
  </h1>
  @if(count($questions)>0)
               @foreach($questions->all() as $question)
               
  <!-- Blog Post -->
  <div class="card mb-4" >
  <div class="card-header bg-primary">
  
               
  </div>
   
    <div class="card-body">
      <h2 class="card-title">{{$question->q_title}}</h2>
      <p class="card-text">{{ substr($question->q_body,0,150) }}</p>
    </div>
    <div class="card-footer text-muted">
    <cite style="float:left;">Posted on:{{date(' j,M,Y H:i',strtotime($question->update_at))}}</cite>
    <hr/>
    <div class="btn-group" role="group" >
                                    <a href="{{url("/ansque/{$question->id}")}}" class="btn btn-primary ">Answer</a>
                                    <a href="#">Inbox <span class="badge">42</span></a
                               </div>
    </div>
  </div>
 
  @endforeach
               @else
                <p>No Post Available !</p>
                @endif


  <!-- Pagination -->
  @if(count($questions)>0) 
 
  
    
 @else
 <p></p>
 @endif 

</div>


    </div>
 </div>
  </div>
@endsection
