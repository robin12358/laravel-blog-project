@extends('admin.layouts.master')
@section('title','')
@section('style')

@endsection
@section('content')

    <div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 align-items-center">
                <form method="post" action="{{route('admin.category.store')}}">
                    @csrf
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Category</h4>
                        <div class="form-group">
                            <label for="hue-demo">Title</label>
                            <input name="name" type="text" id="hue-demo" class="form-control demo" data-control="hue" >
                        </div>
                    <!--::::::::validation msg:::::::-->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>

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
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                    @php $sl = 1; @endphp
                    @foreach($category as $value)
                        <tr>
                            <th scope="row">{{$sl++}}</th>
                            <td>{{$value->category_name}}</td>
                            <td>
                                <a href="{{route('admin.category.delete', $value->id)}}"  class="btn btn-danger">Delete</a></td>
                        </tr>
                      @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection

@section('script')

@endsection
