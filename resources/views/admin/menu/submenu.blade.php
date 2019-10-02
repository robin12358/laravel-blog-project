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
                        <form method="post" action="{{route('admin.submenu.store',array($id))}}" enctype="multipart/form-data">
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
                    </div>
                </div>
            </div>


            <div class="row">
                <!--BEGIN SECOND CARD-->

                <div class="card border-info mb-3 text-center">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapseSECOND">
                            <h5 class="card-title text-dark">Second Fold</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Subtitle</h6>
                        </a>
                    </div>
                    <div id="collapseSECOND" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            <table class="table table-hover group table-striped">
                                <table class="table table-hover group table-striped">
                                    <tbody>
                                    <div id="sortableContainer">


                                    </div>
                                    <br> <br>
                                    <div class="row">
                                        <button class="btn btn-danger">count</button>
                                    </div>

                                    </tbody>
                                </table>

                                <div class="card-footer text-muted">

                                </div>
                        </div>
                    </div>
                </div>
                <!--END SECOND CARD-->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">Sub Category Table</h5>
                        </div>
                        <table class="table" id="table">
                            <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Title</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @php $sl = 1; @endphp--}}
{{--                            @if(count($submenus) != 0)--}}
{{--                            @foreach($submenus as $value)--}}
{{--                                <tr>--}}
{{--                                    <th scope="row">{{$sl++}}</th>--}}
{{--                                    <td>{{$value->name}}</td>--}}
{{--                                    <td>--}}
{{--                                        <a href="{{route('admin.submenu.view',$value->id)}}"  class="btn btn-success">View</a>--}}
{{--                                        <a href="{{route('admin.submenu.edit',$value->id)}}"  class="btn btn-info">Edit</a>--}}
{{--                                        <a href="{{route('admin.submenudel',$value->id)}}"  class="btn btn-danger">Delete</a>--}}

{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                                @endif--}}
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <script> var id = '{{$id}}'</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


@endsection

@section('script')
    <script type="text/javascript">
        $('#sortableContainer').sortable();
        $('<br><br><div id=buttonDiv><button>Get Order of Elements</button></div>').appendTo('body');
        $(document).ready(function() {
            const URL = baseURL + '/ajax_submenu';
            $.ajax({
                url: URL,
                type: 'POST',
                data: {
                    "_token": "{{csrf_token()}}",
                    "id" : '{{$id}}',
                },
                success:function (data) {
                    var color = ['warning','danger','success','secondary','primary'];
                    if(data.length > 0 ){

                        for(var i=0; i<data.length; i++){
                            var randomElement = color[Math.floor(Math.random()*color.length)]
                            var sl = i+1
                            var items = "<div id='"+ data[i].id +"'  class=' btn bg-"+ randomElement +" card sortIt'>" + data[i].name + "</div>";


                            $("#sortableContainer").append(items)
                        }
                        // let color_count = 0;
                        // $.each(data, function (i, v) {
                        //     var items = "<div id='Element"+ (i+1) +"'  class='btn btn-"+ color[color_count] +" card sortIt'>" + data[i].name + "</div>";
                        //     $("#sortableContainer").append(items);
                        //     color_count = color_count+1;
                        //     if ( color_count <= color.length){
                        //         color_count = 0;
                        //     }
                        // })
                    }
                }
            });
            $(document).ready( function () {
                const URL = baseURL + '/ajax_data';
                $.ajax({
                    url:URL,
                    type:'POST',
                    data:{
                        "_token": "{{ csrf_token() }}",
                        "id": id,
                    },
                    success:function (data)
                    {
                        if(data.length > 0){
                            var sl =0
                            for(var i=0; i<data.length;i++){
                                sl=sl+1;
                                var tr_str = "<tr>" +

                                    "<th  scope='row' >" + sl + "</th>" +
                                    "<td>" + data[i].name + "</td>" +
                                    "<td >" +  "<a href='{{route('admin.submenu.view',"+ data[i].id + " )}}'  class='btn btn-success mr-2'>View</a>" +
                                    " <a href='{{route('admin.submenu.edit', " + data[i].id + " )}}'  class='btn btn-info mr-2'>Edit</a>" +
                                    "<a href='{{route('admin.submenudel', " + data[i].id + " )}}'  class='btn btn-danger'>Delete</a>" + "</td>" +
                                    "</tr>";
                                $("#table tbody").append(tr_str)
                            }

                        }else{
                            var tr_str = "<tr>" +
                                "<td >No record found.</td>" +
                                "</tr>";

                            $("#table tbody").append(tr_str);
                        }


                    },
                });

                $('button').button().click(function() {
                    var itemOrder = $('#sortableContainer').sortable("toArray");
                    for (var i = 0; i < itemOrder.length; i++) {
                        // alert("Position: " + i + " ID: " + itemOrder[i]);
                        const URL = baseURL + '/submenuposition';
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
        });
    </script>
@endsection
