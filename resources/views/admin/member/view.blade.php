
    @extends('admin.layouts.master')
    @section('title','')
    @section('style')

    @endsection
    @section('content')
        <div class="page-wrapper">

            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 align-items-center">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Collspan Table Example</h5>
                                    </div>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col"><img style="width: 80px;height: 80px;" src="{{$member->image}}"></th>
                                        </tr><tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">{{$member->name}}</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Email</th>
                                            <th scope="col">{{$member->email}}</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Phone</th>
                                            <th scope="col">{{$member->phone}}</th>
                                        </tr> <tr>
                                            <th scope="col">Designation</th>
                                            <th scope="col">

                                                @foreach( $designations as $designation )
                                                    @if($designation->id == $member->designation)
                                                        {{$designation->name}}
                                                    @endif
                                                @endforeach
                                            </th>
                                        </tr> <tr>
                                            <th scope="col">Speech</th>
                                            <th scope="col">{{$member->speech}}</th>
                                        </tr>
                                        </thead>

                                    </table>
                                </div>

                            </div>
                    </div>
                </div>
            </div>

        </div>


@endsection

@section('script')

@endsection
