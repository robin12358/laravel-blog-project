@extends('admin.layouts.master')
@section('title','')
@section('style')

@endsection
@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 align-items-center">
                    <div class="card">
                        <form method="post" enctype="multipart/form-data" action="{{route('admin.memberedit',$member->id)}}">
                            @csrf

                            <div class="card-body">
                                <h4 class="card-title">Forms Control</h4>
                                <div class="row">
                                    <img style="text-align: center; width: 100px; height: 100px;" src="{{$member->image}}">
                                </div>
                                <div class="form-group">
                                    <label for="hue-demo">Image Upload</label>
                                    <input type="file"  name="photo" id="hue-demo" class="form-control demo" data-control="hue" >
                                </div>
                                <div class="form-group">
                                    <label for="hue-demo">name</label>
                                    <input type="text" id="hue-demo" value="{{$member->name}}" name="name" class="form-control demo" data-control="hue" >
                                </div><div class="form-group">
                                    <label for="hue-demo">email</label>
                                    <input type="email" id="hue-demo" value="{{$member->email}}" name="email" class="form-control demo" data-control="hue" >
                                </div><div class="form-group">
                                    <label for="hue-demo">phone</label>
                                    <input type="text" id="hue-demo" value="{{$member->phone}}" name="phone" class="form-control demo" data-control="hue" >
                                </div>
                                <div class="form-group">
                                    <label class="hue-demo">Single Select</label>

                                    <select class="select2 form-control custom-select" name="designation" style="width: 100%; height:36px;">

                                        @foreach($designations as $designation)
                                            @if($designation->id == $member->designation )
                                            <option  value="{{$designation->id}}" selected>{{$designation->name}}</option>
                                            @else
                                                <option  value="{{$designation->id}}">{{$designation->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="position-bottom-left">Speech</label>
                                    <textarea type="text" id="position-bottom-left"  name="speech" class="form-control demo" data-position="bottom left" >{{$member->speech}}</textarea>
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
                                    <button type="submit" class="btn btn-success">Save</button>
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </div>
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
