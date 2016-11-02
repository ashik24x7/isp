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
                        <div class="col-md-12">
                            @if(session('message'))
                                <p class="success"> {{ session('message') }} </p>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive table-commerce">
                                <table id="basic-datatables" class="table table-bordered .table-condensed">
                                    <thead>
                                        <tr>
                                            <th style="width:50px">
                                                <strong>SL</strong>
                                            </th>
                                            <th>
                                                <strong>EXORD ID</strong>
                                            </th>
                                            <th style="width:200px">
                                                <strong>NAME</strong>
                                            </th>
                                            <th>
                                                <strong>NUMBER</strong>
                                            </th>
                                            <th>
                                                <strong>CONNECTED FROM</strong>
                                            </th>
                                            <th>
                                                <strong style="width:2000px">ADDRESS</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>STATUS</strong>
                                            </th>
                                            <th class="text-center">
                                                <strong>VIEW</strong>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $sl = 1; ?>
                                    @if(isset($customers))
                                        @foreach($customers as $customer)
                                        <tr>
                                            <td>{{ $sl++ }} </td>
                                            <td>{{ $customer->user_id }} </td>
                                            <td>{{ !empty($customer->customer->username) ? $customer->customer->username : "" }} </td>
                                            <td>{{ !empty($customer->customer->contact_no) ? $customer->customer->contact_no : "" }} </td>
                                            <td>{{ !empty($customer->customer->connected_from) ? $customer->customer->connected_from : "" }} </td>
                                            
                                            <td>
                                            @if(!empty($customer->customer))
                                            House: {{ !empty($customer->customer->house) ? $customer->customer->house : "" }}, Road: {{ !empty($customer->customer->road) ? $customer->customer->road : "" }}, Block: {{ !empty($customer->customer->block) ? $customer->customer->block : "" }}, <br> Floor: {{ !empty($customer->customer->floor) ? $customer->customer->floor : "" }}, {{ !empty($customer->customer->address) ? $customer->customer->address : "" }} 
                                            @endif
                                            </td>

                                            <td></td>
                                            <td class="text-center">
                                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#myModal{{$customer->id}}">View</button>

                                                @include('partial.customers-modal')
                                                
                                            </td>
                                        </tr>

                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="pagination pull-right">
                                {{$customers->links()}}
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
            var url = '{{ url("customers") }}';

            $('#filter').on('change', function() {
                var data = this.value;
                window.location = url+'/'+data;
            })
        </script>

@stop
