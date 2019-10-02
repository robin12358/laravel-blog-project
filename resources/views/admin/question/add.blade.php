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
                        <form method="post" enctype="multipart/form-data" action="{{route('admin.question.store')}}">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Add Your Question</h4>
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

                                <div class="form-group">

                                    <label for="hue-demo">Feature Image Upload</label>
                                    <input type="file" name="photo" id="hue-demo" class="form-control demo" data-control="hue" >
                                </div>
                                <div class="form-group">
                                    <label for="hue-demo">Title</label>
                                    <input type="text" name="title" id="hue-demo" class="form-control demo" data-control="hue" >
                                </div>
                                <div class="form-group">
                                                    <label class="hue-demo"> Select Subject</label>

                                                    <select class="select2 form-control custom-select" name="subject" style="width: 100%; height:36px;">
                                                        <option>Select</option>
                                                        @foreach($subject as $value)
                                                        <option value="{{$value->id}}">{{$value->subject_name}}</option>
                                                       @endforeach

                                                    </select>

                                                </div>
                                <div class="form-group">
                                    <label for="position-bottom-left">body</label>
                                    <textarea type="text" name="body" rows="7" id="position-bottom-left" class="form-control demo" data-position="bottom left" ></textarea>
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
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'body' );
</script>

@endsection
