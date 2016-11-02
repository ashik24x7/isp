@extends('layout-without-menu')


@section('title')
    <title>Horizon-Admin - Admin</title>
@stop



@section('header')
        <link rel="/stylesheet" href="css/nanoscroller.css">
        <link href="/css/select.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="/css/bootstrap-slider.min.css">
        <style>
            
            .nano-content {
                margin-right: 0px !important;
            }
        </style>
@stop

@section('wrapper')
            <div id="wrapper">
                <div class="content-wrapper container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title">
                                <h1>Add Customer to Exord ID<small></small></h1>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                                    <li class="active">Exord ID</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- end .page title-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Exord ID</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal group-border stripped" action="{{url('/add-customer-into-exord-id')}}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="col-lg-2 col-md-3 control-label" for="">Free Exord ID</label>
                                            <div class="col-lg-10 col-md-9">
                                                <select class="fancy-select form-control" name="exord_id">
                                                    @foreach($exord as $id)
                                                        <option value="{{$id->user_id}}">{{$id->user_id}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 col-md-3 control-label" for="">Customer ID</label>
                                            <div class="col-lg-10 col-md-9">
                                                <select class="fancy-select form-control" name="user_id">
                                                    @foreach($customer as $data)
                                                        <option value="{{$data->id}}">{{$data->username}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-6 col-sm-offset-2">
                                                <button class="btn btn-white" type="reset">Cancel</button>
                                                <button class="btn btn-primary" type="submit" name="save">Save changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- End .panel --> 
                        </div>
                    </div>
                </div> 
            </div>
@stop
@section('script')
        <!--page plugins-->
        <script src="js/select/fancySelect.js"></script>
        <script src="js/input-mask/jquery.inputmask.bundle.min.js"></script>
        <script src="js/select/select2.js"></script>
        <script src="js/slider/bootstrap-slider.min.js"></script>
        <script src="js/custom-advanced-form.js"></script>
@stop
