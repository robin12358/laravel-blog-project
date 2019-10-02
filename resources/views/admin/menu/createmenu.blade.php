@extends('admin.layouts.master')
@section('title','')
@section('style')

@endsection
@section('content')

    <div class="page-wrapper">
      <div class="row">
        <div class="container">
            <div class="row mt-3">
                <div class="col-sm bg-light">


                    <div class="card border">
                        <div class="card-header bg-success">Page</div>
                        <div class="card-body"><ul id="sortable1" class="sortable_list connectedSortable list-group">
                               @foreach($pages as $page)


                                <li id="1.{{$page->id}}" class="list-group-item ui-state-default">{{$page->title}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                <br>

                    <div class="card border">
                        <div class="card-header bg-primary ">Posts</div>
                        <div class="card-body"><ul id="sortable2" class="sortable_list connectedSortable list-group">
                                @foreach($posts as $post)
                                <li id="2.{{$post->id}}" class="list-group-item ui-state-default">{{$post->title}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="col-sm">

                    <div class="card border">
                        <div class="card-header">
                            <div class="container"><h3>New Menu</h3></div>

                        <br>
                            <div class="form-group">
                                <label for="name">Enter your menu option name:</label>
                                <input type="text" class="form-control" id="optionname" placeholder="name">
                            </div>
                        </div>
                        <div class="card-body"><ul id="sortable3" class="sortable_list connectedSortable list-group">
                                <li id="item1" class="list-group-item ui-state-default">Add one ...</li>

                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>

      </div>
        <div class="row">
            <button type="button" id="submit1" class="btn btn-primary ml-3 mt-3"  >
                Submit
            </button>
        </div>



        </div>



        </div>

    </div>


@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $(function() {
                $( ".sortable_list" ).sortable({
                    connectWith: ".connectedSortable",
                    /*stop: function(event, ui) {
                        var item_sortable_list_id = $(this).attr('id');
                        console.log(ui);
                        //alert($(ui.sender).attr('id'))
                    },*/

                    receive: function(event, ui) {
                        $("#item1").remove();
                        var itemOrder = $('#sortable3').sortable("toArray");

                    }
                }).disableSelection();
                $('#submit1').on('click',function() {
                    let name = $('#optionname').val();
                    let URL = baseURL + '/ajaxmenumenuoption';
                    $.ajax({
                        url: URL,
                        type: 'POST',
                        data:{
                            "_token": "{{csrf_token()}}",
                            "name": name,

                        },success(data){
                            var itemOrder = $('#sortable3').sortable("toArray");
                            for (var i = 0; i < itemOrder.length; i++) {
                                // alert("Position: " + i + " ID: " + itemOrder[i]);
                                const URL = baseURL + '/ajaxsubmenuposition';
                                $.ajax({
                                    url: URL,
                                    type: 'POST',
                                    data:{
                                        "_token": "{{csrf_token()}}",
                                        "id": itemOrder[i],
                                        "position":  i,
                                        "menu_id" : data,
                                    }
                                });
                            }

                        }
                    });


                })


            });

        });
    </script>
@endsection
