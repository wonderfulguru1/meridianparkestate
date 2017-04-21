@extends('layouts.admin')
@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{ route('properties.store') }}" >
    {{ csrf_field() }}
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-md-12">
            <h2>Create property</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a>property</a>
                </li>
                <li class="active">
                    <strong>Create property</strong>
                </li>
            </ol>
            <div class="pull-right">
                <a href="{{ url('/properties') }}" class="btn btn-warning " >Back to list</a>
                <button type="submit" class="btn btn-primary " >Create property</button>
            </div>
        </div>

    </div>
    <div class="wrapper wrapper-content animated fadeInRight ecommerce">
             <div class="row">
                <div class="col-lg-12">
                <div class="tabs-container">
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                <fieldset class="form-horizontal">
                                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label class="col-sm-2 control-label">Name:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Property name"
                                            value="{{ old('name') }}" name="name">
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                                        <label class="col-sm-2 control-label">Price:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="N200,000"
                                          value="{{ old('price') }}" name="price">
                                            @if ($errors->has('price'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('price') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('square_meter') ? ' has-error' : '' }}">
                                        <label class="col-sm-2 control-label">Square meter:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="200sqm" value="{{ old('square_meter')}}"
                                            name="square_meter">
                                            @if ($errors->has('square_meter'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('square_meter') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Sold out:</label>
                                        <div class="col-sm-10">
                                            <input type="checkbox" class="js-switch"  name="sold_out"/>
                                                                                 </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">For Rent:</label>
                                        <div class="col-sm-10">

                                            <input type="checkbox" class="js-switch_2"  name="rent_sale"/>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">No of bedroom:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Enter no of rooms " name="bed_nos"
                                               value="{{ old('bed_nos')}}" name="bed_nos">
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">No of bathroom:</label>
                                        <div class="col-sm-10">
                                         <input type="text" class="form-control" placeholder="Enter no of bathrooms "  name="bath_room_nos"
                                               value="{{ old('bath_room_nos')}}">

                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">Description:</label>
                                        <div class="col-sm-10">
                                            <div class="summernote">
                                                {{ old('description')}}
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Action:</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="duplicate">
                                                    <option  value="1">Single</option>
                                                    <option  value="2">Save and duplicate</option>
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="pull-right">
                                    <a href="{{ url('/properties') }}" type="submit" class="btn btn-warning " >Back to list</a>
                                    <button type="submit" class="btn btn-primary " >Create property</button>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane">
                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered table-stripped">
                                        <thead>
                                        <tr>
                                            <th>
                                                Image preview
                                            </th>
                                            <th>
                                                Image url
                                            </th>
                                            <th>
                                                Sort order
                                            </th>
                                            <th>
                                                Actions
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <img src="img/gallery/2s.jpg">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" disabled
                                                       value="http://mydomain.com/images/image1.png">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="1">
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
@endsection