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
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                        @foreach($members as $member)
                            <tr>
                                <th scope="row"></th>
                                <td>{{$member->name}}</td>
                                <td>{{$member->email}}</td>
                                <td>{{$member->phone}}</td>
                                <td><a href="{{route('admin.member.view',$member->id)}}"  class="btn btn-success">View</a>
                                    <a href="{{route('admin.member.edit',$member->id)}}"  class="btn btn-info">Edit</a>
                                    <a href="{{route('admin.memberdel',$member->id)}}"  class="btn btn-danger">Delete</a>

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
