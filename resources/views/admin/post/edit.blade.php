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
                        <form method="post" enctype="multipart/form-data" action="{{route('admin.post.update',$post->id)}}">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Update Post</h4>
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
                                    <label for="hue-demo">Title</label>
                                    <input type="text" name="title" id="hue-demo" value="{{$post->post_title}}" class="form-control demo" data-control="hue" >
                                </div>
                                <div class="form-group">
                                                    <label class="hue-demo"> Select Category</label>

                                                    <select class="select2 form-control custom-select" name="category" style="width: 100%; height:36px;">
                                                        <option>Select</option>
                                                         @foreach($category as $value)
                                                        @if($value->id == $post->category)
                                            <option  value="{{$value->id}}" selected>{{$value->category_name}}</option>
                                            @else
                                                <option  value="{{$value->id}}">{{$value->category_name}}</option>
                                            @endif
                                                       @endforeach

                                                    </select>

                                                </div>
                                <div class="form-group">
                                    <label for="position-bottom-left">body</label>
                                    <textarea type="text" name="body" rows="7" id="position-bottom-left" class="form-control demo" data-position="bottom left" >{!! $post->details !!}</textarea>
                                </div>



                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-success">update</button>
                                    <button  class="btn btn-danger">Cancel</button>
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
