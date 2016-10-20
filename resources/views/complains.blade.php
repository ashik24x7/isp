@extends('layout-without-menu')

@section('title')
    <title>Exord Online Limited - Admin</title>
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
                                <h1>Complain Management System <small></small></h1>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                                    <li class="active">Complain Log</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- end .page title-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive table-commerce">
                                <table id="basic-datatables" class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width:50px">
                                                <strong>SL</strong>
                                            </th>
                                            <th>
                                                <strong>EXORD ID</strong>
                                            </th>
                                            <th style="width:100px">
                                                <strong>TIME</strong>
                                            </th>
                                            <th>
                                                <strong>NUMBER</strong>
                                            </th>
                                            <th>
                                                <strong>CONNECTED FROM</strong>
                                            </th>
                                            <th>
                                                <strong>PROBLEM DETAILS</strong>
                                            </th>
                                            <th>
                                                <strong>RECEIVED BY</strong>
                                            </th>
                                            <th>
                                                <strong>SUPPORT GIVEN BY</strong>
                                            </th>
                                            <th>
                                                <strong>SUPPORT TIME</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>STATUS</strong>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    @if(isset($complains))
                                        <?php $sl = 1; ?>
                                        @foreach($complains as $complain)
                                        <tr>
                                            <td>{{ $sl }}</td>
                                            <td>{{ $complain->user_id }}</td>
                                            <td>{{ date("h:i A", strtotime($complain->created_at)) }}</td>
                                            <td>{{ $complain->contact_no }}</td>
                                            <td>{{ $complain->contact_no }}</td>
                                            <td><?php $texts = unserialize($complain->complain); $num = 1; ?>
                                                @foreach($texts as $text)
                                                    @if($num == 1)
                                                        <strong>{{$text}}</strong>
                                                        <?php $num++; ?>
                                                    @else
                                                        {{$text}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>{{ $complain->received_by }}</td>
                                            <td>{{ $complain->support_given_by }}</td>
                                            <td>{{ date("h:i A", strtotime($complain->updated_at)) }}</td>
                                            <?php $sl++; ?>
                                            <td class="text-center">
                                                <span class="label label-info">Standby</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
@stop
@section('script')
        <!--page scripts-->
        <script src="js/data-tables/jquery.dataTables.js"></script>
        <script src="js/data-tables/dataTables.tableTools.js"></script>
        <script src="js/data-tables/dataTables.bootstrap.js"></script>
        <script src="js/data-tables/dataTables.responsive.js"></script>
        <script src="js/data-tables/tables-data.js"></script>
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
