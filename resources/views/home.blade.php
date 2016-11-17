@extends('layout-without-menu')


@section('title')
    <title>Horizon-Admin - Admin</title>
@stop



@section('header')
<link rel="stylesheet" href="css/nanoscroller.css">
<link href="css/morris-0.4.3.min.css" rel="stylesheet">
@stop
@section('wrapper')
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
                                    <h4>{{ \Carbon\Carbon::now()->format('F') }}'s Revenue</h4>
                                    <h2>{{$month_revenue}}</h2>
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
                                            <h4>Unsolved Complain</h4>
                                            <h2>{{$complain}} <i class="fa fa-plus pull-right"></i></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="widget-box clearfix">
                                        <div>
                                            <h4>Unpaid Bills</h4>
                                            <h2>{{$unpaid_bill}} <i class="fa fa-tasks pull-right"></i></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="widget-box clearfix">
                                        <div>
                                            <h4>Total Collection</h4>
                                            <h2>{{$this_month_collection}}<i class="fa fa-usd pull-right"></i></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="widget-box clearfix">
                                        <div>
                                            <h4>Today Income</h4>
                                            <h2>{{$today_income}}<i class="fa fa-usd pull-right"></i></h2>
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
@stop
@section('script')
        
        <!-- Flot -->
        <script src="js/flot/jquery.flot.js"></script>
        <script src="js/flot/jquery.flot.tooltip.min.js"></script>
        <script src="js/flot/jquery.flot.resize.js"></script>
        <script src="js/flot/jquery.flot.pie.js"></script>
        <script src="js/chartjs/Chart.min.js"></script>
        
        <script src="js/morris_chart/raphael-2.1.0.min.js"></script>
        <script src="js/morris_chart/morris.js"></script>
        <script src="js/jquery.sparkline.min.js"></script>
        
        
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
@stop