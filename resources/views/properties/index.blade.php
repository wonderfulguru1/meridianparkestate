@extends('layouts.admin')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-md-12">
            <h2>Properties List</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a>Properties</a>
                </li>
                <li class="active">
                    <strong>List</strong>
                </li>
            </ol>
        </div>
        <div class="col-md-12">
            <a href="{{ route('properties.create') }}" class="btn btn-warning pull-right" >Create property</a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight ecommerce">


        <div class="ibox-content m-b-sm border-bottom">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="order_id">Order ID</label>
                        <input type="text" id="order_id" name="order_id" value="" placeholder="Order ID" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="status">Order status</label>
                        <input type="text" id="status" name="status" value="" placeholder="Status" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="customer">Customer</label>
                        <input type="text" id="customer" name="customer" value="" placeholder="Customer" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="date_added">Date added</label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="date_added" type="text" class="form-control" value="03/04/2014">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="date_modified">Date modified</label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="date_modified" type="text" class="form-control" value="03/06/2014">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="amount">Amount</label>
                        <input type="text" id="amount" name="amount" value="" placeholder="Amount" class="form-control">
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">

                        <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                            <thead>
                            <tr>

                                <th>Property name</th>
                                <th data-hide="phone">Amount</th>
                                <th data-hide="phone">Description</th>
                                <th data-hide="phone">No of rooms</th>
                                <th data-hide="phone,tablet" >No of bath room</th>
                                <th data-hide="phone">Location</th>
                                <th class="text-left">Type</th>
                                <th class="text-left">Status</th>
                                <th class="text-left">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($properties as $property)
                                <tr>
                                    <td>
                                        {{$property->name}}
                                    </td>
                                    <td>
                                        {{$property->price}}
                                    </td>
                                    <td>
                                        {{$property->description}}
                                    </td>
                                    <td>
                                        {{$property->bed_nos}}
                                    </td>
                                    <td>
                                        {{$property->bath_room_nos}}
                                    </td>
                                    <td>
                                        {{$property->location}}
                                    </td>
                                    <td>
                                        {{$property->type}}
                                    </td>
                                    <td>
                                        <span class="label {{($property->sold_out == 1)? 'label-primary' : 'label-warning' }}">{{($property->sold_out == 1)? 'Sold out' : 'Avaliable' }}</span>
                                    </td>
                                    <td class="text-left">
                                        <div class="btn-group">
                                            <a  href="{{ route('properties.property', ['id' => $property->id]) }}" class="btn-white btn btn-xs">View</a>
                                            <a href="{{ route('properties.edit', ['id' => $property->id]) }}" class="btn-white btn btn-xs">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection