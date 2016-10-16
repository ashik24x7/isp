@extends('customer-layout')

@section('title')
    <title>Horizon-Admin - Admin</title>
@stop



@section('header')
    <link rel="stylesheet" href="css/nanoscroller.css">
    <link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" href="css/wysiwyg-color.css" />
@stop

@section('wrapper')
    <div id="wrapper">
        <div class="content-wrapper container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">
                        <!-- <h1>Mail Compose <small></small></h1> -->
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="active">Compose Complain</li>
                        </ol>
                    </div>                </div>
            </div><!-- end .page title-->


            <div class="row">
                <div class="col-md-3">
                    <div class="mail-side-bar">
                        <div class="text-center margin-b-30">
                            <a href="#" class="btn btn-danger btn-3d">Compose Complain</a>
                        </div>
                        <ul class="list-unstyled">
                            <li><a href="#">Complain Inbox <sapn>(1)</sapn></a></li>
                            <li><a href="#">Sent Complain</a></li>
                            <!-- <li><a href="#">Draft</a></li>
                            <li><a href="#">Archives</a></li>
                            <li><a href="#">Spam</a></li> -->
                        </ul>
                       <!--  <ul class="list-unstyled">
                            <li class="lables">Categories</li>
                            <li><a href="#">Work</a></li>
                            <li><a href="#">Documents</a></li>
                            <li><a href="#">Social</a></li>
                            <li><a href="#">Advertisement</a></li>
                            <li><a href="#">Clients</a></li>
                        </ul>
                        <ul class="list-inline tags ">
                            <li class="lables">Tags</li>
                            <li><a href="#">Family</a></li>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">Photography</a></li>
                            <li><a href="#">Fashion</a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-md-9 compose_form">
                    @if(session('message'))
                        <p class="error"> {{ session('message') }} </p>
                    @endif
                    <form role="form" method="post" action="{{ url('/receive-complain') }}">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-md-4">
                                <input type="text" placeholder="User ID" class="form-control" name="user_id" value="{{ old('user_id')}}">
                                <span class="validation_error">{{ $errors->first('user_id') }}</span>
                            </div>
                            <div class="col-md-8">
                                <input type="text" placeholder="Customer Name" class="form-control" name="username" value="{{ old('username')}}">
                                <span class="validation_error">{{ $errors->first('username') }}</span>
                            </div>
                            <input type="hidden" name="created_at">
                        </div>
                        <br><br><br>
                        <div class="form-group">
                            <div class="col-md-4">
                                <input type="text" placeholder="Customer Phone" class="form-control" name="contact_no" value="{{ old('contact_no')}}">
                                <span class="validation_error">{{ $errors->first('contact_no') }}</span>
                            </div>
                            <div class="col-md-8">
                                <input type="text" placeholder="Connected From" class="form-control" name="connected_from" value="{{ old('connected_from')}}">
                                <span class="validation_error">{{ $errors->first('connected_from') }}</span>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <div class="col-md-4">
                                <select name='complain[category]' id="" class="form-control">
                                    <option value="">Problem Types</option>
                                    <option value="No Connection">No Connection</option>
                                    <option value="Connected but not browsing">Connected but not browsing</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <textarea id="" placeholder="Complain Detail" class="form-control" rows="5" name="complain[body]">{{ old('complain')}}</textarea>
                            </div>
                        </div>

                        {{ $errors->first('complain') }}
                        <div class="form-group">
                            <div class="col-md-12">
                            <br>
                                <button type="submit" class="btn btn-primary btn-lg">Received</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
        
@stop

@section('script')
        <script src="js/wysihtml5-0.3.0.min.js"></script>
        <script src="js/bootstrap3-wysihtml5.js"></script>
        <script>
            jQuery(document).ready(function () {


                // HTML5 WYSIWYG Editor
                jQuery('#wysiwyg').wysihtml5({color: true, html: true});
            });</script>
        <!-- Google Analytics:  -->
        <script>
            (function (i, s, o, g, r, a, m)
            {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function ()
                {
                    (i[r].q = i[r].q || []).push(arguments);
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

        <script>
            var token = '{{ Session::token() }}';
            var url = '{{ url("find-user-data") }}';

            $('input[name=user_id]').on('change', function() {
                var data = $(this).val();
                var date = '{{ \Carbon\Carbon::now() }}';
                $.ajax({
                    method:'POST',
                    url:url,
                    data:{user_id:data,_token:token}
                }).done(function(e){
                    console.log(date);
                    $('input[name=username]').val(e[0].username);
                    $('input[name=contact_no]').val(e[0].contact_no);
                    $('input[name=connected_from]').val(e[0].connected_from);
                    $('input[name=created_at]').val(date);
                })
            })
        </script>
@stop