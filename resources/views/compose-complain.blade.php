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
                    <form role="form" method="post">
                    {{ csrf_field() }}
                         <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject:" value="{{ old('subject')}}">
                            {{ $errors->first('subject') }}
                        </div>
                        <div class="form-group">
                            <textarea id="wysiwyg" placeholder="Your message here..." class="form-control" rows="15" name="complain">{{ old('complain')}}</textarea>
                        </div>
                        {{ $errors->first('complain') }}
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg">Send</button>    
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
@stop