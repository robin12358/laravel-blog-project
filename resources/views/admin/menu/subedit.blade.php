@extends('admin.layouts.master')
@section('title','')
@section('style')

@endsection
@section('content')

    <div class="page-wrapper">
        <div class="row">
            <button type="button" class="btn btn-primary ml-3 mt-3" data-toggle="modal" data-target="#exampleModal">
                Add new Menu
            </button>
        </div>
        <div class="page-breadcrumb">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create Sub Menu</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">Sub Category Edit</h5>
                        </div>
                        <form method="post" action="{{route('admin.submenu.update',$submenu->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 align-items-center">

                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label class="hue-demo"> Select Category</label>

                                                    <select class="select2 form-control custom-select" name="main_menu_id" style="width: 100%; height:36px;">
                                                        @foreach($menu as $value)
                                                            @if($value->id == $submenu->main_menu_id)
                                                            <option  value="{{$value->id}}" selected>{{$value->name}}</option>
                                                            @endif
                                                                <option  value="{{$value->id}}" >{{$value->name}}</option>
                                                       @endforeach
                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="hue-demo">Title</label>
                                                    <input name="name" value="{{$submenu->name}}" type="text" id="hue-demo" class="form-control demo" data-control="hue" >
                                                </div>
                                                <div class="form-group">
                                                    <label class="hue-demo"> Select Type</label>

                                                    <select class="select2 form-control custom-select" name="type" style="width: 100%; height:36px;">
                                                        @if($submenu->type == 1)
                                                            <option selected value="1">Page</option>
                                                        @elseif($submenu->type == 2)
                                                            <option selected value="2">Post</option>
                                                        @endif
                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="hue-demo">Url</label>
                                                    <input name="url" type="text" id="hue-demo" value="{{$submenu->url}}" class="form-control demo" data-control="hue" >
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

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>

    </div>


@endsection

@section('script')

@endsection
