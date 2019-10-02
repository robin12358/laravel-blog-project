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
        <div class="btn-group mx-3" role="group" >
                                    <a href="{{ url('/addquestion') }}" class="btn btn-primary">Qustion Submit </a>
                                    <a href="{{url ('/answ')}}" class="btn btn-primary">Qustion timeline</a>
                                    <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                              
                               </div>
                                </div>

                               <hr>

                               <div class="row">
                    <form method="POST" action="{{ url('/addques')}}" aria-label="{{ __('Register') }}"enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="post_title" class="col-md-4 col-form-label text-md-right">{{ __(' Question Title') }}</label>

                            <div class="col-md-8">
                                <input id="q_title" type="text" class="form-control{{ $errors->has('q_title') ? ' is-invalid' : '' }}" name="q_title" required autofocus>

                            </div>
                        </div>


<div class="form-group row">
                            <label for="q_subject" class="col-md-4 col-form-label text-md-right">{{ __('Subject') }}</label>

                            <div class="col-md-8">
                                <select id="q_subject" type="q_subject" class="form-control" name="q_subject" required>
                                <option value="">None</option>

        @if(count($subjects) > 0)
            @foreach( $subjects->all() as $subject)
            
            <option value="{{$subject->id }}">{{$subject->subject }}</option>
            @endforeach
         @endif         
                                </select>
                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="q_body" class="col-md-4 col-form-label text-md-right">{{ __('Question') }}</label>

                            <div class="col-md-8">
                                <textarea id="q_body" rows="7" class="form-control{{ $errors->has('q_body') ? ' is-invalid' : '' }}" name="q_body" required></textarea>
                                @if ($errors->has('q_body'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('q_body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                                                 
                        <div class="form-group row">
                            <label for="q_pic" class="col-md-4 col-form-label text-md-right">{{ __('Related Image') }}</label>

                            <div class="col-md-8">
                                <input id="q_pic" type="file" class="form-control{{ $errors->has('q_pic') ? ' is-invalid' : '' }}" name="q_pic" required>

                                @if ($errors->has('q_pic'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('q_pic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                         

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-large btn-block">
                                    {{ __('Publish Question') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
    </div>
 </div>
  </div>
@endsection
