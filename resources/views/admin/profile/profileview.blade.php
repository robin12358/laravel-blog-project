@extends('admin.layouts.master')
@section('title','')
@section('style')

@endsection
@section('content')

    <div class="page-wrapper">
        
        

            <div class="row">
                <div class="col-12">
                    <div class="card">
                    	<div class="card-header">
                    		
                    </div>
                        <div class="card-body">
                            <h5 class="card-title m-b-0">My profile<a class="ml-3 btn btn-success" href="{{route('admin.profile.edit',$profile->id)}}">Edit</a></h5>
                        </div>
    
                        <table class="table">
                       <tr><td>Profile Picture</td><td><img src="{{env('PUBLIC_PATH')}}/{{$profile->file_path}}" style=" width: 100px; height: 150px;"></td></tr>
                       <tr><td>Profile name</td><td> {{$profile->profile_name}}</td></tr>
                       <tr><td> Designation</td><td> {{$profile->designation}}</td></tr>
                       <tr><td> speech</td><td> {{$profile->speech }}</td></tr>
                       <tr><td> skills</td><td> {{$profile->skills }}</td></tr>
                       <tr><td> Phone</td><td> {{$profile->phone }}</td></tr>
                        </table>


                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection

@section('script')

@endsection
