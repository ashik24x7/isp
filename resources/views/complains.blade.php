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
                                <h1>Mail box <small></small></h1>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                                    <li class="active">Inbox</li>
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
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-sm-6 mail-box-row-2">
                                <div style="margin-right:10px" class="btn-group pull-left">
                                    <div class="btn btn-sm btn-default bg-amber">
                                        <input type="checkbox" style="margin:0 5px;padding:0;position:relative;top:2px;">All</div>
                                    <button type="button" class="btn btn-sm btn-default dropdown-toggle bg-amber" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">None</a>
                                        </li>
                                        <li><a href="#">read</a>
                                        </li>
                                        <li><a href="#">Unread</a>
                                        </li>
                                    </ul>
                                </div>



                                <div style="margin-right:10px" class="btn-group pull-left">
                                    <button type="button" class="btn btn-sm btn-default dropdown-toggle bg-amber" data-toggle="dropdown">More
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-ban"></i> Spam</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>

                                <button style="margin-right:10px" type="button" data-color="#39B3D7" data-opacity="0.95" class="btn btn-sm btn-default button test pull-left bg-amber">
                                    <span class="fa fa-refresh"></span>&nbsp;&nbsp;Refresh</button>
                            </div>


                            <div class="col-sm-6">
                                <div class="btn-group  pull-right ">
                                    <button type="button" class="btn btn-sm btn-default bg-amber">
                                        <span class="fa fa-angle-left"></span>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm bg-amber">
                                        <span class="fa fa-angle-right"></span>
                                    </button>
                                </div>

                                <div class="btn-group pull-right " style="margin-right:10px;">
                                    <button type="button" class="btn btn-default btn-sm bg-amber">1-50 of 124</button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <!-- THE MESSAGES -->
                            <table class="table table-mailbox">
                                <tbody>
                                @if(isset($complains))
                                    @foreach($complains as $complain)
                                    <tr class="unread">
                                        <td class="small-col">
                                            <input type="checkbox">
                                        </td>
                                        <td class="small-col"><i class="fa fa-star"></i>
                                        </td>
                                        <td class="name">
                                            <a href="#">
                                                <img alt="" class="img-circle star img-responsive" src="images/avtar-1.jpg">
                                            </a>
                                        </td>
                                        <td>{{ $complain->username }}</td>
                                        <td class="subject">
                                            <p class="email-summary">
                                                <?php $texts = unserialize($complain->complain); $num = 1; ?>
                                                @foreach($texts as $text)
                                                    @if($num == 1)
                                                        <strong>{{$text}}</strong>
                                                        <?php $num++; ?>
                                                    @else
                                                        {{$text}}
                                                    @endif
                                                @endforeach
                                            </p>
                                        </td>
                                        <td class="time text-right">{{ $complain->created_at}}</td>
                                    </tr>
                                    @endforeach
                                @endif

                                    <!-- END OF THREE -->


                                </tbody></table>
                        </div>
                    </div>
                    </div>
                </div> 
            </div>
@stop

@section('script')
        
        <script src="js/jquery.flot.min.js"></script>
        <script src="js/jquery.flot.resize.min.js"></script>
        <script src="js/jquery.flot.time.min.js"></script>
        <script src="js/jquery.flot.threshold.js"></script>
        <script src="js/jquery.flot.axislabels.js"></script>
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
