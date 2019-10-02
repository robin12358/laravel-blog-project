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
                        <form method="post" enctype="multipart/form-data" action="{{route('admin.page.update', $page->id)}}">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Update Page</h4>
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
                                    <input type="text" value="{{$page->title}}" name="title" id="hue-demo" class="form-control demo" data-control="hue" >
                                </div>
                                <div class="form-group">
                                    <label for="position-bottom-left">content</label>
                                    <textarea type="text" name="content" id="page_body" class="form-control demo" data-position="bottom left" >{{$page->content}}</textarea>
                                </div>



                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-success">Update</button>
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
    CKEDITOR.replace( 'page_body' );
</script>
@endsection
