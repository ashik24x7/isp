<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


        @yield('title')
        

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/waves.min.css" type="text/css" rel="stylesheet">
        <link href="css/menu-light.css" type="text/css" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link href="css/custom.css" type="text/css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        @yield('header')
        
    </head>
    <body>
        <!-- Static navbar -->

        <nav class="navbar navbar-default yamm navbar-fixed-top">
            <div class="container-fluid">
                <button type="button" class="navbar-minimalize minimalize-styl-2  pull-left "><i class="fa fa-bars"></i></button>
                <span class="search-icon"><i class="fa fa-search"></i></span>
                <div class="search" style="display: none;">
                    <form role="form">
                        <input type="text" class="form-control" autocomplete="off" placeholder="Write something and press enter">
                        <span class="search-close"><i class="fa fa-times"></i></span>
                    </form>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Exord Accounts</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <!-- <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown" aria-expanded="true">Mega Menu<span class="caret"></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu" style="width: 900px;">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row ">
                                            <div class="col-sm-3 ">

                                                <h3 class="yamm-category">Layout</h3>
                                                <ul class="list-unstyled ">
                                                    <li><a href="">Admin style 1</a></li>
                                                    <li><a href="">Admin style 2</a></li>
                                                    <li><a href="">Admin style 3</a></li>
                                                    <li><a href="">Admin style 4</a></li>   
                                                </ul>


                                            </div>
                                            <div class="col-sm-3">

                                                <h3 class="yamm-category">Ui Kit</h3>
                                                <ul class="list-unstyled ">
                                                    <li><a href="">Typography</a></li>
                                                    <li><a href="">Buttons</a></li>
                                                    <li><a href="">Font Awesome</a></li>
                                                    <li><a href="">Tabs & Alerts</a></li>
                                                </ul>


                                            </div>
                                            <div class="col-sm-3">

                                                <h3 class="yamm-category">Analytics</h3>
                                                <ul class="list-unstyled ">
                                                    <li><a href="">Flot</a></li>
                                                    <li><a href="">Sparklines</a></li>
                                                    <li><a href="">Morris</a></li>
                                                    <li><a href="">Chart Js</a></li>
                                                </ul>


                                            </div>
                                            <div class="col-sm-3">
                                                <h3 class="yamm-category">Architecto</h3>
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul> -->

                    <ul class="nav navbar-nav navbar-right navbar-top-drops">
                        <li class="dropdown"><a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown"><i class="fa fa-envelope"></i> <span class="badge badge-xs badge-info">6</span></a>

                            <ul class="dropdown-menu dropdown-lg">
                                <li class="notify-title">
                                    3 New messages 
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <span class="pull-left">
                                            <img src="images/avtar-1.jpg" alt="" class="img-circle" width="30">
                                        </span>
                                        <span class="block">
                                            John Doe
                                        </span>
                                        <span class="media-body">
                                            Lorem ipsum dolor sit amet
                                            <em>28 minutes ago</em>
                                        </span>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <span class="pull-left">
                                            <img src="images/avtar-2.jpg" alt="" class="img-circle" width="30">
                                        </span>
                                        <span class="block">
                                            John Doe
                                        </span>
                                        <span class="media-body">
                                            Lorem ipsum dolor sit amet
                                            <em>28 minutes ago</em>
                                        </span>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <span class="pull-left">
                                            <img src="images/avtar-3.jpg" alt="" class="img-circle" width="30">
                                        </span>
                                        <span class="block">
                                            John Doe
                                        </span>
                                        <span class="media-body">
                                            Lorem ipsum dolor sit amet
                                            <em>28 minutes ago</em>
                                        </span>
                                    </a>
                                </li>
                                <li class="read-more"><a href="#">View All Messages <i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown"><i class="fa fa-bell"></i> <span class="badge badge-xs badge-warning">6</span></a>

                            <ul class="dropdown-menu dropdown-lg">
                                <li class="notify-title">
                                    3 New messages 
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <span class="pull-left">
                                            <i class="fa fa-envelope"></i>
                                        </span>

                                        <span class="media-body">
                                            15 New Messages
                                            <em>20 Minutes ago</em>
                                        </span>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <span class="pull-left">
                                            <i class="fa fa-twitter"></i>
                                        </span>

                                        <span class="media-body">
                                            13 New Followers
                                            <em>2 hours ago</em>
                                        </span>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <span class="pull-left">
                                            <i class="fa fa-download"></i>
                                        </span>

                                        <span class="media-body">
                                            Download complete
                                            <em>2 hours ago</em>
                                        </span>
                                    </a>
                                </li>
                                <li class="read-more"><a href="#">View All Alerts <i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
        <section class="page">

            <nav class="navbar-aside navbar-static-side" role="navigation">
                <div class="sidebar-collapse nano">
                    <div class="nano-content">
                        <ul class="nav metismenu" id="side-menu">
                            <li class="nav-header">
                                <div class="dropdown side-profile text-left"> 
                                @if(\Auth::check())
                                    <span style="display: block;">
                                    @if(isset(\Auth::user()->customer_photo))
                                        <img alt="image" class="img-circle" src="{{ url('photo/customer-photo/'.\Auth::user()->customer_photo) }}" width="40">
                                    @else
                                        <img alt="image" class="img-circle" src="images/avtar-1.jpg" width="40">

                                    @endif
                                    </span>
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                        <span class="clear" style="display: block;"> <span class="block m-t-xs"> <strong class="font-bold">{{ \Auth::user()->username}}  <b class="caret"></b></strong>
                                            </span></span> </a>
                                @endif
                                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                        <li><a href="user_profile"><i class="fa fa-user"></i>My Profile</a></li>
                                        <li><a href="#"><i class="fa fa-calendar"></i>My Calendar</a></li>                         
                                        <li><a href="#"><i class="fa fa-envelope"></i>My Inbox</a></li>
                                        <li><a href="#"><i class="fa fa-barcode"></i>My Task</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="fa fa-lock"></i>Screen lock</a></li>
                                        @if(\Auth::check())
                                        <li><a href="login"><i class="fa fa-key"></i>Logout</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </li>
                            <li class="active">
                                <a href="home"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard </span></a>
                            </li>                             
                        </ul>

                    </div>
                </div>
            </nav>

            @yield('wrapper')


        </section>

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/metisMenu.min.js"></script>
        <script src="js/jquery.nanoscroller.min.js"></script>
        <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/waves.min.js"></script>
        <script src="js/jquery-jvectormap-world-mill-en.js"></script>
        <!--        <script src="js/jquery.nanoscroller.min.js"></script>-->
        <script type="text/javascript" src="js/custom.js"></script>

        @yield('script')
        
    </body>
</html>