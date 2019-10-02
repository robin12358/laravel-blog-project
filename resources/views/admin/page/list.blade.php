@extends('admin.layouts.master')
@section('title','')
@section('style')

@endsection
@section('content')

    <div class="page-wrapper">

        <div class="page-breadcrumb">
        <div class="row">
        <div class="col-12">
        <a href="{{route('admin.page.add')}}" class="btn btn-info mb-3">Create a New Page</a>
        </div>
        </div>
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">Page Table</h5>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Titel</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @php $sl = 1; @endphp
                            @foreach($page as $value)
                            <tr>
                                <th scope="row">{{$sl++}}</th>
                                <td>
                                    {{$value->title}}
                                </td>
                               
                                <td>  <a href="{{route('admin.page.view',$value->id)}}"  class="btn btn-success">View</a>
                                    <a href="{{route('admin.page.edit',$value->id)}}"  class="btn btn-info">Edit</a>
                                    <a  data-toggle="modal" data-target="#exampleModal"  class="btn btn-danger">Delete</a><!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this post !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="{{route('admin.page.delete',$value->id)}}" type="button" class="btn btn-primary">Yes </a>
      </div>
    </div>
  </div>
</div>

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
