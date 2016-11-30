@extends('layout-without-menu')

@section('title')
    <title>Exord Online Limited - Admin</title>
@stop



@section('header')
    <link rel="stylesheet" href="css/nanoscroller.css">
    <link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" href="css/wysiwyg-color.css" />
    <style>
        .modal-content {
            margin-top: 70px;
        }
    </style>
@stop

@section('wrapper')
            <div id="wrapper">
                <div class="content-wrapper container">
                    <div class="row">
                        

                        <div class="col-md-12" style="padding: 0px">
                            <div class="panel panel-card margin-b-30">
                                
                                <div class="panel-body">
                                    <div class="col-sm-8">
                                        <div class="page-title" style="padding-bottom: 0px">
                                            <h1>Complain Management System <small></small></h1>
                                            <ol class="breadcrumb">
                                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                                <li class="active">{{$data}} Complain Log</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="form-group"><label class="col-sm-4 control-label">View As</label>

                                            <div class="col-sm-8">
                                                <select class="form-control" name="filter" id="filter">
                                                    <option value="week">This Week</option>
                                                    <option value="month">This Month</option>
                                                    <option value="year">This Year</option>
                                                    <option value="all">All</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                            <th class="text-center">
                                                <strong>Edit</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>VIEW</strong>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    @if(isset($complains))
                                        <?php $sl = 1; ?>
                                        <?php $i = 1; ?>
                                        @foreach($complains as $complain)
                                        <tr>
                                            <td>{{ $sl }}</td>
                                            <td>{{ $complain->user_id }}</td>
                                            <td>{{ date("h:i A", strtotime($complain->created_at)) }}</td>
                                            <td>{{ $complain->contact_no }}</td>
                                            <td>{{ $complain->connected_from }}</td>
                                            <td><?php $texts = unserialize($complain->complain);?>
                                                {{$texts['category']}}
                                            </td>
                                            @if(!empty($complain->received->username))
                                            <td>{{ $complain->received->username }}</td>
                                            @endif
                                            <td>{{ $complain->support_given_by }}</td>
                                            <td>{{ date("h:i A", strtotime($complain->updated_at)) }}</td>
                                            <?php $sl++; ?>
                                            @if(empty($complain->solved_by) && empty($complain->support_given_by))
                                            <td class="text-center">
                                                <span class="label label-danger">Pending</span>
                                            </td>
                                            @elseif(!empty($complain->support_given_by) && empty($complain->solved_by))
                                            <td class="text-center">
                                                <span class="label label-warning">On Process</span>
                                            </td>
                                            @else
                                            <td class="text-center">
                                                <span class="label label-success">Solved</span>
                                            </td>
                                            @endif
                                            <td class="text-center">
                                                <a href="/edit-complain/{{$complain->id}}"><button type="button" class="btn btn-xs btn-primary
                                                @if(!empty($complain->solved_by))
                                                    disabled
                                                @endif
                                                ">Edit</button></a>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#myModal{{$complain->id}}">View</button>

                                                @include('partial.complains-modal')
                                            </td>
                                        </tr>

                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>

                            <div class="pagination pull-right">
                                {{$complains->links()}}
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
@stop
@section('script')
        <!--page scripts-->
        <!-- <script src="/js/data-tables/jquery.dataTables.js"></script>
        <script src="/js/data-tables/dataTables.tableTools.js"></script>
        <script src="/js/data-tables/dataTables.bootstrap.js"></script>
        <script src="/js/data-tables/dataTables.responsive.js"></script>
        <script src="/js/data-tables/tables-data.js"></script> -->
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
            var url = '{{ url("complains") }}';

            $('#filter').on('change', function() {
                var data = this.value;
                window.location = url+'/'+data;
            })
        </script>

@stop
