@extends('admin.layouts.master')
@section('title','')
@section('style')

@endsection
@section('content')
<link href="{{env('PUBLIC_PATH')}}/admin_resources/bootstrap-tagsinput.css" rel="style">
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 align-items-center">
                    <div class="card">
                        <form method="post" enctype="multipart/form-data" action="{{route('admin.profile.create')}}" >
                            @csrf
                        <div class="card-body">
                            <h4 class="card-title">Forms Control</h4>

                            <div class="form-group">

                                <label for="photo">Profile Picture</label>
                                <input type="file" name="photo" id="hue-demo" value="{{$profile->file_path}}"class="form-control demo" data-control="hue" >
                            </div>
                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="text" id="name" value="{{$profile->profile_name}}" name="name" class="form-control demo" data-control="hue" >
                            </div>
                                 <div class="form-group">
                                <label class="hue-demo"> Select Gender</label>
                                    <select class="select2 form-control custom-select" name="gender" style="width: 100%; height:36px;">
                                        <option>Select</option>
                                       @foreach($genders as $value)
                                                        @if($value->id == $profile->gender)
                                            <option  value="{{$value->id}}" selected>{{$value->gender_name}}</option>
                                            @else
                                                <option  value="{{$value->id}}">{{$value->gender_name}}</option>
                                            @endif
                                                       @endforeach
                                    </select>

                            </div>
                            <div class="form-group">
                                <label for="phone">phone</label>
                                <input type="text" id="phone" name="phone" value="{{$profile->phone}}" class="form-control demo" data-control="hue" >
                            </div>
                            <div class="form-group">
                                <label class="hue-demo"> Put Your Designation</label>
                                <input type="text" id="designation" value="{{$profile->designation}}" name="designation" class="form-control demo" data-control="hue" >
                            </div>
                            <div class="form-group">
                                <label for="position-bottom-left">Speech</label>
                                <textarea type="text" id="position-bottom-left" name="speech" class="form-control demo" data-position="bottom left" >{{$profile->speech}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="skill">Skills</label>
                                <input type="text" name="skill"  value="{{$profile->skills}}" data-role="tagsinput" class="form-control demo" data-control="hue" >
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
                                <button type="submit" class="btn btn-success">update</button>
                                <button id="ajaxcall" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                        </form>
                         
                    </div>
                </div>
            </div>
        </div>

    </div>
<script type="text/javascript" href="{{env('PUBLIC_PATH')}}/admin_resources/bootstrap-tagsinput.js"></script>

@endsection

@section('script')

</script>
@endsection
s