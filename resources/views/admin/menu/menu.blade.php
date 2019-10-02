@extends('admin.layouts.master')
@section('title','')
@section('style')
    <style>
        #sortable-8{ list-style-type: none; margin: 0;
            padding: 0; width: 25%; float:left;}
        #sortable-8 li{ margin: 0 3px 3px 3px; padding: 0.4em;
            padding-left: 1.5em; font-size: 17px; height: 16px; }
        .default {



        }


    </style>
@endsection
@section('content')


    <div class="page-wrapper">
<div class="row">
    <button type="button" class="btn btn-primary ml-3 mt-3" data-toggle="modal" data-target="#exampleModal">
        Add new Menu
    </button>
    <a type="button" class="btn btn-info ml-3 mt-3" href="{{route('admin.create.menu')}}">
       Create Menu
    </a>
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
                        <form method="post" action="{{route('admin.menu.store')}}">
                            @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 align-items-center">

                                        <div class="card">
                                            <div class="card-body">

                                                <div class="form-group">
                                                    <label for="hue-demo">Title</label>
                                                    <input name="name" type="text" id="hue-demo" class="form-control demo" data-control="hue" >
                                                </div>
                                                    <div class="form-group">
                                                    <label class="hue-demo"> Select Type</label>

                                                    <select class="select2 form-control custom-select" name="type" style="width: 100%; height:36px;">
                                                        <option>Select</option>
                                                        <option value="1">Page</option>
                                                        <option value="2">Post</option>

                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="hue-demo">Url</label>
                                                    <input name="url" type="text" id="hue-demo" class="form-control demo" data-control="hue" >
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
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>

{{--            <div class="row">--}}
{{--                <div id="sortableContainer">--}}

{{--                    <div id="Element1" class=" card sortIt">Item 1</div>--}}
{{--                    <div id="Element2" class="card sortIt">Item 2</div>--}}
{{--                    <div id="Element3" class="card sortIt">Item 3</div>--}}
{{--                    <div id="Element4" class="card sortIt">Item 4</div>--}}
{{--                </div>--}}
{{--                <br> <br>--}}
{{--                <div class="row">--}}
{{--                    <button class="btn btn-danger">count</button>--}}
{{--                </div>--}}

{{--                <p>The position is zero based.</p>--}}
{{--            </div>--}}
<div class="row">
    <!--BEGIN SECOND CARD-->
    <div class="col-md-5">
        <div class="card border-info mb-3 text-center">
            <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseSECOND">
                    <h5 class="card-title text-dark"> Menu</h5>
                    <h6 class="card-subtitle mb-2 text-muted">This is sortable.</h6>
                </a>
            </div>
            <div id="collapseSECOND" class="collapse show" data-parent="#accordion">
                <div class="card-body">
                    <table class="table table-hover group table-striped">

                            <tbody>
                            <div id="sortableContainer">

                                @foreach($menus as $value)



                                    <div id='{{$value->id}}'  class='btn   card sortIt'>
                                        <div class="btn-group">

                                            {{$value->name}}

                                            <button type="button" class="btn btn-sm ml-1  dropdown-toggle dropdown-toggle-split rounded-circle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu btn-sm ">
                                                {{--                                        <button class="dropdown-item " type="button"><i class="fa fa-eye fa-1x" style="color: #0F9E5E;" aria-hidden="true"></i>--}}
                                                {{--                                        </button>--}}
                                                <button class="dropdown-item " href="{{route('admin.menu.edit',$value->id)}}" type="button"><i class="fa fa-edit fa-1x" style="color: #0f86ff;" ></i> </button>
                                                <button class="dropdown-item" href="{{route('admin.menudel',$value->id)}}" type="button"><i class="fa fa-trash fa-1x" style="color: #FF3B30;" ></i></button>
                                                <button class="dropdown-item callajax" id="call_aj" href="{{route('load.submenu',$value->id)}}" type="button"><i class="fa fa-th-list fa-1x" style="color: #6f42c1;" ></i></button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                            <br> <br>
                            <div class="row">
                                <button class="btn btn-danger" id="count">count</button>
                            </div>

                            </tbody>
                        </table>

                        <div class="card-footer text-muted">

                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div id="submenu">

        </div>
    </div>

    <!--END SECOND CARD-->
</div>

        </div>

    </div>


@endsection

@section('script')
    <!-- <script>



        $(document).ready(function() {
            $('#sortableContainer').sortable();
            $('#sortableContainertwo').sortable();
            $('<br><br><div id=buttonDiv><button>Get Order of Elements</button></div>').appendTo('body');
            const URL = baseURL + '/ajax_menu';
            $('.callajax').on('click', function () {
                let URL = $(this).attr('href');
                console.log(URL);
                $.ajax({
                    url: URL,
                    type: 'POST',
                    data:{
                        "_token": "{{csrf_token()}}",
                    },success(data){
                        $("#submenu").empty();
                        $( "#submenu" ).append(data );

                    },
                });

            })
            $('#count').on('click',function() {
                var itemOrder = $('#sortableContainer').sortable("toArray");
                for (var i = 0; i < itemOrder.length; i++) {
                    // alert("Position: " + i + " ID: " + itemOrder[i]);
                    const URL = baseURL + '/menuposition';
                    $.ajax({
                        url: URL,
                        type: 'POST',
                        data:{
                            "_token": "{{csrf_token()}}",
                            "id": itemOrder[i],
                            "position":  i,
                        }
                    });
                }
            })

        });
    </script> -->
@endsection
