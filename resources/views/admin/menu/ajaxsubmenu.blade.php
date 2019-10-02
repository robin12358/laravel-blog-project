
    <div class="card border-info mb-3 text-center">
        <div class="card-header">
            <a class="card-link" data-toggle="collapse" href="#collapseFirst">
                <h5 class="card-title text-dark"> Sub Menu</h5>
                <h6 class="card-subtitle mb-2 text-muted">This is sortable.</h6>
            </a>
        </div>
        <div id="collapseFirst" class="collapse show" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-hover group table-striped">

                    <tbody>
                    <div id="sortableContainertwo">

                        @foreach($sub_menu as $value)



                            <div id='sub.{{$value->id}}'  class='btn   card sortIt'>
                                <div class="btn-group">

                                    {{$value->name}}

                                    <button type="button" class="btn btn-sm  dropdown-toggle dropdown-toggle-split rounded-circle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu btn-sm ">
                                        {{--                                        <button class="dropdown-item " type="button"><i class="fa fa-eye fa-1x" style="color: #0F9E5E;" aria-hidden="true"></i>--}}
                                        {{--                                        </button>--}}
                                        <button class="dropdown-item " href="{{route('admin.menu.edit',$value->id)}}" type="button"><i class="fa fa-edit fa-1x" style="color: #0f86ff;" ></i> </button>
                                        <button class="dropdown-item" href="{{route('admin.menudel',$value->id)}}" type="button"><i class="fa fa-trash fa-1x" style="color: #FF3B30;" ></i></button>

                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <br> <br>
                    <div class="row">
                        <button class="btn btn-danger" id="count2">count</button>
                    </div>

                    </tbody>
                </table>

                <div class="card-footer text-muted">

                </div>
            </div>
        </div>
    </div>



<!--BEGIN SECOND CARD-->

{{--<div class="card border-info mb-3 text-center">--}}
{{--    <div class="card-header">--}}
{{--        <a class="card-link" data-toggle="collapse" href="#collapseSECOND">--}}
{{--            <h5 class="card-title text-dark">Second Fold</h5>--}}
{{--            <h6 class="card-subtitle mb-2 text-muted">Subtitle</h6>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--    <div id="collapseFRIST" class="collapse show" data-parent="#accordion">--}}
{{--        <div class="card-body">--}}
{{--            <table class="table table-hover group table-striped">--}}
{{--                    <tbody>--}}
{{--                    <div id="sortableContainerTWO">--}}

{{--                        @foreach($sub_menu as $value)--}}



{{--                            <div id='{{$value->id}}'  class='btn   card sortIt'>--}}
{{--                                <div class="btn-group">--}}

{{--                                    {{$value->name}}--}}

{{--                                    <button type="button" class="btn btn-sm  dropdown-toggle dropdown-toggle-split rounded-circle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                        <span class="sr-only">Toggle Dropdown</span>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu btn-sm ">--}}
{{--                                        --}}{{--                                        <button class="dropdown-item " type="button"><i class="fa fa-eye fa-1x" style="color: #0F9E5E;" aria-hidden="true"></i>--}}
{{--                                        --}}{{--                                        </button>--}}
{{--                                        <button class="dropdown-item " href="{{route('admin.menu.edit',$value->id)}}" type="button"><i class="fa fa-edit fa-1x" style="color: #0f86ff;" ></i> </button>--}}
{{--                                        <button class="dropdown-item" href="{{route('admin.menudel',$value->id)}}" type="button"><i class="fa fa-trash fa-1x" style="color: #FF3B30;" ></i></button>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}


{{--                    </div>--}}
{{--                    <br> <br>--}}
{{--                    <div class="row">--}}
{{--                        <button class="btn btn-danger">count</button>--}}
{{--                    </div>--}}

{{--                    </tbody>--}}
{{--                </table>--}}

{{--                <div class="card-footer text-muted">--}}

{{--                </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!--END SECOND CARD-->