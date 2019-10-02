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
                            <h5 class="card-title m-b-0">Qustion view view</h5>
                        </div>
    
                        <table class="table">
                       <tr><td>Question related Image</td><td><img src="{{env('PUBLIC_PATH')}}/question/{{$question->file_path}}" style=" width: 80px; height: 150px;"></td></tr>
                       <tr><td>Question Title</td><td> {{$question->q_title}}</td></tr>
                       <tr><td>Question Category</td><td> {{$question->subject_name}}</td></tr>
                       <tr><td>Question Body</td><td> {!! $question->q_body !!}</td></tr>
                        </table>


                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection

@section('script')

@endsection
