@extends('layouts.admin')
@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{ route('properties.update', ['id' => $properties->id]) }}" >
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-md-12">
            <h2>Product edit</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a>E-commerce</a>
                </li>
                <li class="active">
                    <strong>Product edit</strong>
                </li>
            </ol>
            <div class="pull-right">
                <a href="{{ url('/properties') }}" class="btn btn-warning " >Back to list</a>
                <button type="submit" class="btn btn-primary " >Save detail</button>
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
                                    <div class="form-group"><label class="col-sm-2 control-label">Name:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Property name"
                                            value="{{ $properties->name}}" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Price:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="N200,000"
                                          value="{{ $properties->price}}" name="price"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Square meter:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="200sqm" value="{{ $properties->square_meter}}"
                                            name="square_meter">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Sold out:</label>
                                        <div class="col-sm-10">

                                            <input type="checkbox" class="js-switch" {{ ($properties->sold_out ==1) ? 'checked':'' }} name="sold_out"/>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">For Rent:</label>
                                        <div class="col-sm-10">

                                            <input type="checkbox" class="js-switch_2" {{ ($properties->rent_sale ==1) ? 'checked':'' }} name="rent_sale"/>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">No of bedroom:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="200sqm" name="bed_nos"
                                               value="{{ $properties->bed_nos}}" name="bed_nos">
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">No of bathroom:</label>
                                        <div class="col-sm-10">
                                         <input type="text" class="form-control" placeholder="200sqm"  name="bath_room_nos"
                                               value="{{ $properties->bath_room_nos}}">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">No of bathroom:</label>
                                        <div class="col-sm-10">
                                         <input type="text" class="form-control" placeholder="200sqm"  name="bath_room_nos"
                                               value="{{ $properties->bath_room_nos}}">
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">Description:</label>
                                        <div class="col-sm-10">
                                            <div class="summernote">
                                                {{ $properties->description}}
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
                                    <button type="submit" class="btn btn-primary " >Save detail</button>
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