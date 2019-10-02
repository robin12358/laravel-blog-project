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
                            <h5 class="modal-title" id="exampleModalLabel">Create Menu</h5>
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
                            <h5 class="card-title m-b-0">Static Table</h5>
                        </div>
                        <form method="post" action="{{route('admin.menu.update',$id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 align-items-center">

                                        <div class="card">
                                            <div class="card-body">

                                                <div class="form-group">
                                                    <label for="hue-demo">Title</label>
                                                    <input name="name" value="{{$menu->name}}" type="text" id="hue-demo" class="form-control demo" data-control="hue" >
                                                </div>
                                                <div class="form-group">
                                                    <label class="hue-demo"> Select Type</label>

                                                    <select class="select2 form-control custom-select" name="type" style="width: 100%; height:36px;">
                                                        @if($menu->type == 1)
                                                        <option selected value="1">Page</option>
                                                        @elseif($menu->type == 2)
                                                        <option selected value="2">Post</option>
                                                            @endif
                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="hue-demo">Url</label>
                                                    <input name="url" value="{{$menu->url}}" type="text" id="hue-demo" class="form-control demo" data-control="hue" >
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
