@extends('admin.layouts.master')
@section('title','')
@section('style')

@endsection
@section('content')

    <div class="page-wrapper">

        <div class="page-breadcrumb">
        <div class="row">
        <div class="col-12">
        <a href="{{route('admin.post.add')}}" class="btn btn-info mb-3">Create a New Post</a>
        </div>
        </div>
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">Post Table</h5>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Titel</th>
                                <th scope="col">Body</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @php $sl = 1; @endphp
@foreach($questions as $question)
                            <tr>
                                <th scope="row">{{$sl++}}</th>
                                <td>
                                    {{$question->q_title}}
                                </td>
                                <td>

                                    {{ Str::limit($question->q_body, 10) }}
                                </td>
                                <td>  <a href="{{route('admin.question.view',$question->id)}}"  class="btn btn-success">View</a>
                                    <a href="{{route('admin.question.edit',$question->id)}}"  class="btn btn-info">Edit</a>
                                    <a href="{{route('admin.question.delete',$question->id)}}"  class="btn btn-danger">Delete</a>

                            </tr>
@endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

                <!-- ============================================================== -->
                <!-- End Page wrapper  -->
                <!-- ============================================================== -->
            </div>

        </div>

@endsection

@section('script')

@endsection
