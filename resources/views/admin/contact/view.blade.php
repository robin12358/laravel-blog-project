
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
                                    <<tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">{{$contact->name}}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Email</th>
                                        <th scope="col">{{$contact->email}}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Phone</th>
                                        <th scope="col">{{$contact->phone}}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Message</th>
                                        <th scope="col">{{$contact->message}}</th>
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
