@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                <div class="card-header">Add Subject</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  
                    <form method="POST" action="{{ url('/addsubject')}}" aria-label="{{ __('Register') }}"enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="subject" class="col-sm-4 col-form-label text-md-right">{{ __('Enter New Subject') }}</label>

                            <div class="col-md-6">
                                <input id="subject" type="subject" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" value="{{ old('subject') }}" required autofocus>

                                @if ($errors->has('subject'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                     

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>

                        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
