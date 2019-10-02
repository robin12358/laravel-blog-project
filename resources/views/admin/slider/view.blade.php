
@extends('admin.layouts.master')
@section('title','')
@section('style')

@endsection
@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 align-items-center">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Slider View</h5>
                                </div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"><img style="width: 80px;height: 80px;" src="{{$slider->image}}"></th>
                                    </tr><tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">{{$slider->title}}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Description</th>
                                        <th scope="col">{{$slider->description}}</th>
                                    </tr>
                                    </thead>

                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>


@endsection

@section('script')

@endsection
