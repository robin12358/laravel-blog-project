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
                        <form method="post" enctype="multipart/form-data" action="{{route('admin.slider.store')}}">
                            @csrf
                        <div class="card-body">
                            <h4 class="card-title">Forms Control</h4>
                            <div class="form-group">

                                <label for="hue-demo">Image Upload</label>
                                <input type="file" name="photo" id="hue-demo" class="form-control demo" data-control="hue" >
                            </div>
                            <div class="form-group">
                                <label for="hue-demo">Title</label>
                                <input type="text" name="title" id="hue-demo" class="form-control demo" data-control="hue" >
                            </div>
                            <div class="form-group">
                                <label for="position-bottom-left">Description</label>
                                <textarea type="text" name="description" id="position-bottom-left" class="form-control demo" data-position="bottom left" ></textarea>
                            </div>



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
