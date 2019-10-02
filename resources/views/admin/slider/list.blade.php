@extends('admin.layouts.master')
@section('title','')
@section('style')

@endsection
@section('content')

    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">Static Table</h5>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Titel</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($sliders as $slider)
                            <tr>
                                <th scope="row">3</th>
                                <td>{{$slider->title}}</td>
                                <td>{{$slider->description}}</td>
                                  <td>  <a href="{{route('admin.slider.view',$slider->id)}}"  class="btn btn-success">View</a>
                                      <a href="{{route('admin.slider.edit',$slider->id)}}"  class="btn btn-info">Edit</a>
                                      <a href="{{route('admin.sliderdel',$slider->id)}}"  class="btn btn-danger">Delete</a>

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
