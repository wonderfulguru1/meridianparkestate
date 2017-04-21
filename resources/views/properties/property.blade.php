@extends('layouts.admin')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Property  detail</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Properties</a>
                </li>
                <li>
                    <a>E-commerce</a>
                </li>
                <li class="active">
                    <strong>Property detail</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox product-detail">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="product-images">
                                    <div>
                                        <div class="image-imitation">
                                            [IMAGE 1]
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h2 class="font-bold m-b-xs">
                                   {{$property->name}}
                                </h2>
                                <small>{{$property->description}}.</small>
                                <div class="m-t-md">
                                    <h2 class="product-main-price">N{{$property->price}} <small class="text-muted">Exclude Tax</small> </h2>
                                </div>
                                <hr>
                                <h4>Product description</h4>
                                <div class="small text-muted">
                                    {{$property->description}}
                                </div>

                                <div>
                                    <div class="btn-group">
                                        <a href="{{ route('properties.edit', ['id' => $property->id]) }}" class="btn btn-primary btn-sm"> Edit property</a>
                                        <a href="{{ url('/properties') }}" class="btn btn-warning btn-sm">Back to list</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-footer">
                                <span class="pull-right">
                                Full stock - <i class="fa fa-clock-o"></i> 14.04.2016 10:04 pm
                            </span> The generated Lorem Ipsum is therefore always free
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection