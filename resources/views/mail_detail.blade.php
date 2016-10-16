@extends('layout')

@section('title')
    <title>Horizon-Admin - Admin</title>
@stop

@section('header')
    <link rel="stylesheet" href="css/nanoscroller.css">
@stop

@section('wrapper')
            <div id="wrapper">
                <div class="content-wrapper container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title">
                                <h1>View Message <small></small></h1>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                                    <li class="active">Mail View</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- end .page title-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mail-side-bar">
                                <div class="text-center margin-b-30">
                                    <a href="#" class="btn btn-danger btn-3d">Compose</a>
                                </div>
                                <ul class="list-unstyled">
                                    <li class="lables">Folders</li>
                                    <li><a href="#">Inbox <sapn>(1)</sapn></a></li>
                                    <li><a href="#">Sent Mail</a></li>
                                    <li><a href="#">Draft</a></li>
                                    <li><a href="#">Archives</a></li>
                                    <li><a href="#">Spam</a></li>
                                </ul>
                                <ul class="list-unstyled">
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
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="mail-box-header">
                                <div class="pull-right">
                                    <a href="#" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Reply"><i class="fa fa-reply"></i> Reply</a>
                                    <a href="#" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Print email"><i class="fa fa-print"></i> </a>
                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </a>
                                </div>
                                <h2>
                                    Lorem Ipsum is simply dummy text 
                                </h2>
                                <div>
                                    <h3>
                                        <span>Subject: </span> randomised words
                                    </h3>
                                    <h5>
                                        <span class="pull-right ">10:15AM 02 FEB 2014</span>
                                        <span>From: </span>alex.smith@corporation.com
                                    </h5>
                                </div>
                            </div>
                            <div class="mail-box clearfix">
                                <p>Hi Adam,</p>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                </p>
                                <p>
                                    It was popularised in the 1960s with the release Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                                    There are many variations of passages of Lorem IpsumLorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of.
                                </p>
                                <p>
                                    <span><i class="fa fa-paperclip"></i> 1 attachments - </span>
                                    <a href="#">Download </a>
                                    |
                                    <a href="#">View  images</a>
                                </p>
                                <div class="file-box ">
                                    <div class="file">
                                        <a href="#">
                                            <span class="corner"></span>

                                            <div class="icon">
                                                <i class="fa fa-file"></i>
                                            </div>
                                            <div class="file-name">
                                                Document_2014.doc
                                                <br>
                                                <small>Added: Jan 11, 2014</small>
                                            </div>
                                        </a>
                                    </div>

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
