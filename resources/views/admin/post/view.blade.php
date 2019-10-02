@extends('admin.layouts.master')
@section('title','')
@section('style')

@endsection
@section('content')

    <div class="page-wrapper">
        
        

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">Post view</h5>
                        </div>
    
                        <table class="table">
                       <tr><td>Post Image</td><td><img src="{{env('PUBLIC_PATH')}}/image/{{$post->file_path}}" style=" width: 80px; height: 150px;"></td></tr>
                       <tr><td>Post Title</td><td> {{$post->post_title}}</td></tr>
                       <tr><td>Post Category</td><td> {{$post->category_name}}</td></tr>
                       <tr><td>Post Body</td><td> {!!$post->details!!}</td></tr>
                        </table>


                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection

@section('script')

@endsection
