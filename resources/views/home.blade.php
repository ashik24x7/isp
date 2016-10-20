
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Horizon-Admin - Admin</title>

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/waves.min.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="css/nanoscroller.css">
         <link href="css/morris-0.4.3.min.css" rel="stylesheet">
        <link href="css/menu-light.css" type="text/css" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
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
                    <a class="navbar-brand" href="#">Horizon-Admin</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
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
                    </ul>

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
                                    <span style="display: block;">
                                        <img alt="image" class="img-circle" src="images/avtar-1.jpg" width="40">
                                    </span>
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                        <span class="clear" style="display: block;"> <span class="block m-t-xs"> <strong class="font-bold">John Doe  <b class="caret"></b></strong>
                                            </span></span> </a>
                                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                        <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                                        <li><a href="#"><i class="fa fa-calendar"></i>My Calendar</a></li>                         
                                        <li><a href="#"><i class="fa fa-envelope"></i>My Inbox</a></li>
                                        <li><a href="#"><i class="fa fa-barcode"></i>My Task</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="fa fa-lock"></i>Screen lock</a></li>
                                        <li><a href="#"><i class="fa fa-key"></i>Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="active">
                                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard </span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="index.html">Dashboard </a></li>



                                </ul>
                            </li>
                            <li>
                                <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="mailbox.html">Inbox</a></li>
                                    <li><a href="mail_detail.html">Email view</a></li>
                                    <li><a href="mail_compose.html">Compose email</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart"></i> <span class="nav-label">Graphs</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="flot_charts.html">Flot charts</a></li>
                                    <li><a href="morris_js.html">Morris.js</a></li>
                                    <li><a href="chart_js.html">Chart.js</a></li>
                                    <li><a href="chartist.html">Chartist</a></li>
                                    <li><a href="chart_sparkline.html">Sparkline</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="form_basic.html">Basic form</a></li>
                                    <li><a href="form_advanced.html">Advanced form</a></li>
                                    <li><a href="form_wizard.html">Wizard form</a></li>
                                    <li><a href="form_file_upload.html">File upload</a></li>
                                    <li><a href="form_text_editor.html">Text editor</a></li>
                                    <li><a href="form_inline_edit.html">Inline edit</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="lockscreen.html">Lockscreen</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="empty_page.html">Empty page</a></li>
                                    <li><a href="gallery.html">gallery</a></li>
                                    <li><a href="price_tables.html">Price tables</a></li>
                                    <li><a href="page_contact.html">Contact Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="orders.html">orders</a></li>
                                    <li><a href="order-view.html">order View</a></li>
                                    <li><a href="products.html">Products</a></li>


                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI Elements</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="icons.html">Icons</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="video.html">Video</a></li>
                                    <li><a href="tabs_panels.html">Panels</a></li>
                                    <li><a href="tabs.html">Tabs</a></li>
                                    <li><a href="alert_notifications.html">Alert & notifications</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="table_basic.html">Static Tables</a></li>
                                    <li><a href="table_data_tables.html">Data Tables</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Users</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="user_profile.html">profile</a></li>
                                    <li><a href="user_list.html">User list</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i> <span class="nav-label">maps</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="google_maps.html">Google maps</a></li>
                                    <li><a href="vector_maps.html">Vector Maps</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pencil"></i> <span class="nav-label">Blog</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="blog_list.html">Blog list</a></li>
                                    <li><a href="blog_post.html">Blog post</a></li>
                                </ul>
                            </li>
                            <li><a href="calendar.html"><i class="fa fa-calendar"></i>  <span class="nav-label">Calendar </span></a></li>

                            <li>
                                <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a href="#">Third Level <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Second Level Item</a></li>
                                </ul>
                            </li>                                    
                        </ul>

                    </div>
                </div>
            </nav>

            <div id="wrapper">
                <div class="content-wrapper container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title">
                                <h1>Dashboard <small></small></h1>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- end .page title-->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="widget-box clearfix">
                                <div class="pull-left">
                                    <h4>User Performance</h4>
                                    <h2>17,50</h2>
                                </div>
                                <div class="text-right">
                                    <span id="sparkline8"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="widget-box clearfix">
                                        <div>
                                            <h4>New orders</h4>
                                            <h2>580 <i class="fa fa-plus pull-right"></i></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="widget-box clearfix">
                                        <div>
                                            <h4>Total sale today</h4>
                                            <h2>$970 <i class="fa fa-shopping-cart pull-right"></i></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="widget-box clearfix">
                                        <div>
                                            <h4>Pending Orders</h4>
                                            <h2>256 <i class="fa fa-tasks pull-right"></i></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="widget-box clearfix">
                                        <div>
                                            <h4>Total Income</h4>
                                            <h2>$9.7k <i class="fa fa-usd pull-right"></i></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-sm-8">
                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Total Product Sales</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body text-center">
                                    <div>
                                        <canvas id="lineChart" height="110"></canvas>
                                    </div>

                                </div>
                            </div><!-- End .panel --> 
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Monthly sale Compare</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body text-center">
                                    <div>
                                        <canvas id="polarChart" height="242"></canvas>
                                    </div>

                                </div>
                            </div><!-- End .panel --> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Weekly Overview</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body text-center">
                                    <div>
                                        <canvas id="barChart" height="150"></canvas>
                                    </div>


                                </div>
                            </div><!-- End .panel --> 
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Radar chart</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body text-center">
                                    <div>
                                        <canvas id="radarChart"></canvas>
                                    </div>

                                </div>
                            </div><!-- End .panel --> 
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Browser support</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body text-center">
                                    <div>
                                        <canvas id="doughnutChart" height="150"></canvas>
                                    </div>

                                </div>
                            </div><!-- End .panel --> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Overall Sales Average</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body text-center">
                                    <div id="morris-line-chart"></div>

                                </div>
                            </div><!-- End .panel --> 
                        </div>
                        <div class="col-sm-6">
                            <div class="panel panel-card recent-activites">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Overall Sales Average</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Street Address</th>
                                                    <th>% Share</th>

                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Abraham</td>
                                                    <td>0500 854198</td>
                                                    <td>294-318 Duis Ave</td>
                                                    <td><div class="sparkline8"><canvas width="17" height="17" style="display: inline-block; width: 17px; height: 17px; vertical-align: top;"></canvas></div> </td>

                                                    <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Phelan</td>
                                                    <td>0500 854198</td>
                                                    <td>680-1097 Mi Rd.</td>
                                                    <td><div class="sparkline10"><canvas width="17" height="17" style="display: inline-block; width: 17px; height: 17px; vertical-align: top;"></canvas></div></td>

                                                    <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Raya</td>
                                                    <td>0500 854198</td>
                                                    <td>Ap #289-8161 In Avenue</td>
                                                    <td><div class="sparkline11"><canvas width="17" height="17" style="display: inline-block; width: 17px; height: 17px; vertical-align: top;"></canvas></div></td>

                                                    <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Azalia</td>
                                                    <td>0500 854198</td>
                                                    <td>226-4861 Augue. St.</td>
                                                    <td><div class="sparkline12"><canvas width="17" height="17" style="display: inline-block; width: 17px; height: 17px; vertical-align: top;"></canvas></div></td>

                                                    <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Garth</td>
                                                    <td>0500 854198</td>
                                                    <td>3219 Elit Avenue</td>
                                                    <td><div class="sparkline13"><canvas width="17" height="17" style="display: inline-block; width: 17px; height: 17px; vertical-align: top;"></canvas></div></td>

                                                    <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Garth</td>
                                                    <td>0500 854198</td>
                                                    <td>3219 Elit Avenue</td>
                                                    <td><div class="sparkline13"><canvas width="17" height="17" style="display: inline-block; width: 17px; height: 17px; vertical-align: top;"></canvas></div></td>

                                                    <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                                                </tr>
                                               <tr>
                                                    <td>Garth</td>
                                                    <td>0500 854198</td>
                                                    <td>3219 Elit Avenue</td>
                                                    <td><div class="sparkline13"><canvas width="17" height="17" style="display: inline-block; width: 17px; height: 17px; vertical-align: top;"></canvas></div></td>

                                                    <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- End .panel --> 
                        </div>
                    </div>
                </div> 
            </div>
        </section>

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/metisMenu.min.js"></script>
        <script src="js/jquery.nanoscroller.min.js"></script>
        <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
        <!-- Flot -->
        <script src="js/flot/jquery.flot.js"></script>
        <script src="js/flot/jquery.flot.tooltip.min.js"></script>
        <script src="js/flot/jquery.flot.resize.js"></script>
        <script src="js/flot/jquery.flot.pie.js"></script>
        <script src="js/chartjs/Chart.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/waves.min.js"></script>
        <script src="js/morris_chart/raphael-2.1.0.min.js"></script>
        <script src="js/morris_chart/morris.js"></script>
        <script src="js/jquery.sparkline.min.js"></script>
        <script src="js/jquery-jvectormap-world-mill-en.js"></script>
        <!--        <script src="js/jquery.nanoscroller.min.js"></script>-->
        <script type="text/javascript" src="js/custom.js"></script>
        <!-- ChartJS-->
        <script src="js/chartjs/Chart.min.js"></script>

        <!--page js-->
        <script>

            $("#sparkline8").sparkline([5, 6, 7, 2, 0, 4, 2, 4, 5, 7, 2, 4, 12, 14, 4, 2, 14, 12, 7], {
                type: 'bar',
                barWidth: 4,
                height: '40px',
                barColor: '#01a8fe',
                negBarColor: '#c6c6c6'});
            $(".sparkline8").sparkline([4, 2], {
                type: 'pie',
                sliceColors: ['#01a8fe', '#ddd']
            });
            $(".sparkline9").sparkline([3, 2], {
                type: 'pie',
                sliceColors: ['#01a8fe', '#ddd']
            });
            $(".sparkline10").sparkline([4, 1], {
                type: 'pie',
                sliceColors: ['#01a8fe', '#ddd']
            });
            $(".sparkline11").sparkline([1, 3], {
                type: 'pie',
                sliceColors: ['#01a8fe', '#ddd']
            });
            $(".sparkline12").sparkline([3, 5], {
                type: 'pie',
                sliceColors: ['#01a8fe', '#ddd']
            });
            $(".sparkline13").sparkline([6, 2], {
                type: 'pie',
                sliceColors: ['#01a8fe', '#ddd']
            });

            //moris chart
            $(function () {
                var lineData = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            label: "Example dataset",
                            fillColor: "rgba(16, 161, 236,0.5)",
                            strokeColor: "rgba(16, 161, 236,1)",
                            pointColor: "rgba(16, 161, 236,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(0, 0, 0,1)",
                            data: [65, 59, 80, 81, 56, 55, 40]
                        },
                        {
                            label: "Example dataset",
                            fillColor: "rgba(102, 190, 236,0.5)",
                            strokeColor: "rgba(102, 190, 236,0.7)",
                            pointColor: "rgba(102, 190, 236,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(0, 0, 0,1)",
                            data: [28, 48, 40, 19, 86, 27, 90]
                        }
                    ]
                };
                var lineOptions = {
                    scaleShowGridLines: true,
                    scaleGridLineColor: "#ddd",
                    scaleGridLineWidth: 1,
                    bezierCurve: true,
                    bezierCurveTension: 0.4,
                    pointDot: true,
                    pointDotRadius: 4,
                    pointDotStrokeWidth: 1,
                    pointHitDetectionRadius: 20,
                    datasetStroke: true,
                    datasetStrokeWidth: 2,
                    datasetFill: true,
                    responsive: true
                };


                var ctx = document.getElementById("lineChart").getContext("2d");
                var myNewChart = new Chart(ctx).Line(lineData, lineOptions);


                var polarData = [
                    {
                        value: 300,
                        color: "#01a8fe",
                        highlight: "#3d3f4b",
                        label: "App"
                    },
                    {
                        value: 140,
                        color: "#6ec6f3",
                        highlight: "#3d3f4b",
                        label: "Software"
                    },
                    {
                        value: 200,
                        color: "#35aeed",
                        highlight: "#3d3f4b",
                        label: "Laptop"
                    }
                ];

                var polarOptions = {
                    scaleShowLabelBackdrop: true,
                    scaleBackdropColor: "rgba(255,255,255,0.75)",
                    scaleBeginAtZero: true,
                    scaleBackdropPaddingY: 1,
                    scaleBackdropPaddingX: 1,
                    scaleShowLine: true,
                    segmentShowStroke: true,
                    segmentStrokeColor: "#fff",
                    segmentStrokeWidth: 2,
                    animationSteps: 100,
                    animationEasing: "easeOutBounce",
                    animateRotate: true,
                    animateScale: false,
                    responsive: true

                };

                var ctx = document.getElementById("polarChart").getContext("2d");
                var myNewChart = new Chart(ctx).PolarArea(polarData, polarOptions);

                var barData = {
                    labels: ["Monday", "Tuesday", "Wedneday", "Thrusday", "Friday"],
                    datasets: [
                        {
                            label: "My Second dataset",
                            fillColor: "#01a8fe",
                            strokeColor: "#01a8fe",
                            highlightFill: "#6ec6f3",
                            highlightStroke: "#6ec6f3",
                            data: [28, 48, 40, 19, 86]
                        }
                    ]
                };

                var barOptions = {
                    scaleBeginAtZero: true,
                    scaleShowGridLines: true,
                    scaleGridLineColor: "rgba(0,0,0,.01)",
                    scaleGridLineWidth: 1,
                    barShowStroke: true,
                    barStrokeWidth: 1,
                    barValueSpacing: 1,
                    barDatasetSpacing: 1,
                    responsive: true
                };


                var ctx = document.getElementById("barChart").getContext("2d");
                var myNewChart = new Chart(ctx).Bar(barData, barOptions);

                var radarData = {
                    labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(16, 161, 236,1)",
                            strokeColor: "rgba(16, 161, 236,1)",
                            pointColor: "rgba(16, 161, 236,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(16, 161, 236,1)",
                            data: [65, 59, 90, 81, 56, 55, 40]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(102, 190, 236,1)",
                            strokeColor: "rgba(102, 190, 236,1)",
                            pointColor: "rgba(102, 190, 236,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(255,255,255,1)",
                            data: [28, 48, 40, 19, 96, 27, 100]
                        }
                    ]
                };

                var radarOptions = {
                    scaleShowLine: true,
                    angleShowLineOut: true,
                    scaleShowLabels: false,
                    scaleBeginAtZero: true,
                    angleLineColor: "rgba(0,0,0,.1)",
                    angleLineWidth: 1,
                    pointLabelFontStyle: "normal",
                    pointLabelFontSize: 10,
                    pointLabelFontColor: "#666",
                    pointDot: true,
                    pointDotRadius: 3,
                    pointDotStrokeWidth: 1,
                    pointHitDetectionRadius: 20,
                    datasetStroke: true,
                    datasetStrokeWidth: 2,
                    datasetFill: true,
                    responsive: true
                };

                var ctx = document.getElementById("radarChart").getContext("2d");
                var myNewChart = new Chart(ctx).Radar(radarData, radarOptions);

                var data = [{
                        label: "Sales 1",
                        data: 21,
                        color: "#d3d3d3"
                    }, {
                        label: "Sales 2",
                        data: 3,
                        color: "#bababa"
                    }, {
                        label: "Sales 3",
                        data: 15,
                        color: "#79d2c0"
                    }, {
                        label: "Sales 4",
                        data: 52,
                        color: "#01a8fe"
                    }];

                var doughnutData = [
                    {
                        value: 300,
                        color: "#6cc5f3",
                        highlight: "#01a8fe",
                        label: "Chorme"
                    },
                    {
                        value: 150,
                        color: "#dedede",
                        highlight: "#01a8fe",
                        label: "Mozilla"
                    },
                    {
                        value: 130,
                        color: "#43b9f5",
                        highlight: "#01a8fe",
                        label: "Safari"
                    }
                ];

                var doughnutOptions = {
                    segmentShowStroke: true,
                    segmentStrokeColor: "#fff",
                    segmentStrokeWidth: 4,
                    percentageInnerCutout: 45, // This is 0 for Pie charts
                    animationSteps: 100,
                    animationEasing: "easeOutBounce",
                    animateRotate: true,
                    animateScale: false,
                    responsive: true
                };


                var ctx = document.getElementById("doughnutChart").getContext("2d");
                var myNewChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

//line chart
                Morris.Line({
                    element: 'morris-line-chart',
                    data: [{y: '2006', a: 0, b: 10},
                        {y: '2007', a: 25, b: 35},
                        {y: '2008', a: 30, b: 40},
                        {y: '2009', a: 20, b: 25},
                        {y: '2010', a: 37, b: 40}],
                    xkey: 'y',
                    ykeys: ['a', 'b'],
                    labels: ['Series A', 'Series B'],
                    hideHover: 'auto',
                    resize: true,
                    lineColors: ['#76c3ea', '#01a8fe']
                });


            });
        </script>
    </body>
</html>
