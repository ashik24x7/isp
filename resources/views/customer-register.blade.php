@extends('layout')


@section('title')
    <title>Horizon-Admin - Admin</title>
@stop



@section('header')
<link href="css/bootstrap-wysihtml5.css" rel="stylesheet">
<link rel="stylesheet" href="css/nanoscroller.css">
@stop

@section('wrapper')
            <div id="wrapper">
                <div class="content-wrapper container">
                    <!-- <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title">
                                <h1>Form Elements<small></small></h1>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                                    <li class="active">forms</li>
                                </ol>
                            </div>
                        </div>
                    </div> --><!-- end .page title-->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-card margin-b-30">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title"> Customer Registration: </h4>
                                    <!-- <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div> -->
                                </div>
                                <div class="panel-body">
                                    <form method="post" class="form-horizontal" enctype="multipart/form-data">
                                    @if(!empty($errors))

                                    <!-- {{ var_dump($errors) }} -->
                                    
                                    @endif
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Customer Name" class="form-control" name="username" value="{{ old('username')}}">
                                            <span class="validation_error">{{ $errors->first('username') }}</span>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Contact Number" class="form-control" name="contact_no" value="{{ old('contact_no')}}">
                                            {{ $errors->first('contact_no') }}</span>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Aditional Contact Number" class="form-control" name="additional_contact_no" value="{{ old('additional_contact_no')}}">
                                            <span class="validation_error">{{ $errors->first('additional_contact_no') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Email" class="form-control" name="email" value="{{ old('email')}}">
                                            <span class="validation_error">{{ $errors->first('email') }}</span>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <input type="text" placeholder="House" class="form-control" name="house" value="{{ old('house')}}"> 
                                            <span class="validation_error">{{ $errors->first('house') }}</span>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" placeholder="Road" class="form-control" name="road" value="{{ old('road')}}">
                                            <span class="validation_error">{{ $errors->first('road') }}</span>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" placeholder="Block" class="form-control" name="block" value="{{ old('block')}}">
                                            <span class="validation_error">{{ $errors->first('block') }}</span>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" placeholder="Floor" class="form-control" name="floor" value="{{ old('floor')}}">
                                            <span class="validation_error">{{ $errors->first('floor') }}</span>
                                        </div> 

                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <textarea placeholder="Address" class="form-control" name="address">
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <input type="text" value="{{ old('bill')}}" placeholder="Bill" class="form-control" name="bill">
                                            <span class="validation_error">{{ $errors->first('bill') }}</span>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date" value="{{ old('connection_up')}}" placeholder="Connection Up" class="form-control" name="connection_up">
                                            <span class="validation_error">{{ $errors->first('connection_up') }}</span>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text"  value="{{ old('connection_establishment_info')}}" placeholder="Connection Establishment Info" class="form-control" name="connection_establishment_info">
                                            <span class="validation_error">{{ $errors->first('connection_establishment_info') }}</span>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <input type="text"  value="{{ old('connected_from')}}" placeholder="Connected From" class="form-control" name="connected_from">
                                            <span class="validation_error">{{ $errors->first('connected_from') }}</span>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text"  value="{{ old('note')}}" placeholder="Note" class="form-control" name="note">
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text"  value="{{ old('ip')}}" placeholder="Ip" class="form-control" name="ip">
                                            
                                        </div>
                                    </div>


                              
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-md-3 control-label" for="">Profile Picture: </label>
                                    <div class="col-md-4"><input type="file" placeholder="Connected From" class="form-control" name="customer_photo"></div>
                                    <label class="col-lg-2 col-md-3 control-label" for="">ID/Passport: </label>
                                    <div class="col-md-4"><input type="file" placeholder="Connected From" class="form-control" name="id_or_passport"></div>
                                    
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-6 col-sm-offset-0">
                                        <button class="btn btn-white" type="submit">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>
                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
@stop
@section('script')
        <!-- Google Analytics:  -->
        <script>
            (function (i, s, o, g, r, a, m)
            {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function ()
                {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-3560057-28', 'auto');
            ga('send', 'pageview');
        </script>
@stop
