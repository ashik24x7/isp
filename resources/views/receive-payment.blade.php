@extends('layout-without-menu')

@section('title')
    <title>Exord Online Limited - Admin</title>
@stop



@section('header')
    <link rel="stylesheet" href="css/nanoscroller.css">
    <link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" href="css/wysiwyg-color.css" />
    <style>
        .compose_form .form-control {
            margin-bottom: 10px;
        }
    </style>
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
                            <li class="active">Receive Payment</li>
                        </ol>
                    </div>                </div>
            </div><!-- end .page title-->


            <div class="row">
                <div class="col-md-12 compose_form">
                    @if(session('message'))
                        <p class="success"> {{ session('message') }} </p>
                    @endif
                    <form role="form" method="post" action="{{ url('/receive-payment') }}">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="col-md-12 control-label">Date</label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" placeholder="{{ \Carbon\Carbon::now()->format('d/m/Y')}}" name="date" value="" required="required" readonly="readonly">
                                                <span class="validation_error">{{ $errors->first('date') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label class="col-md-12 control-label">Logged as</label>
                                            <div class="col-md-12">
                                                 <input type="text" placeholder=" {{ auth()->guard('admin')->user()->username}}" class="form-control" name="logged" value="" required="required" readonly="readonly">
                                                <span class="validation_error">{{ $errors->first('') }}</span>
                                            </div>
                                        </div>
                                        <input type="hidden" name="fk_user_id">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="col-md-12 control-label">User ID</label>
                                            <div class="col-md-12">
                                                <input type="text" value="exord" placeholder="User ID" class="form-control" name="user_id" value="{{ old('user_id')}}" required="required" tabindex="1" >
                                                <span class="validation_error">{{ $errors->first('user_id') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label class="col-md-12 control-label">Customer Phone</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="Customer Phone" class="form-control" name="contact_no" value="{{ old('contact_no')}}">
                                                <span class="validation_error">{{ $errors->first('contact_no') }}</span> 
                                                <!-- <span class="help-block m-b-none">A block of help </span> -->
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label class="col-md-12 control-label">Customer Name</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="Customer Name" class="form-control" name="username" value="{{ old('username')}}" readonly>
                                        <span class="validation_error">{{ $errors->first('username') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="col-md-12 control-label">Customer Address</label>
                                            <div class="col-md-12">
                                                 <input type="text" placeholder="Customer Address" class="form-control" name="adress" value="{{ old('username')}}" readonly>
                                                <span class="validation_error">{{ $errors->first('username') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="col-md-12 control-label">{{ \Carbon\Carbon::now()->format('F') }} Bill</label>
                                            <div class="col-md-12">
                                                <input type="text" name="bill" placeholder="Bill" class="form-control" readonly> 
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="col-md-12 control-label">Previous Dues</label>
                                            <div class="col-md-12">
                                                <input type="text" name="due" placeholder="Previous Dues" class="form-control"readonly> 
                                                <!-- <span class="help-block m-b-none">A block of help </span> -->
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="col-md-12 control-label">Total</label>
                                            <div class="col-md-12">
                                                <input type="text" name="total" placeholder="Total" class="form-control" readonly> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="col-md-12 control-label">Payment</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="Payment" name="payment" class="form-control" required="required" tabindex="2"> 
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="col-md-12 control-label">Due after Payment</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="Due after Payment" class="form-control" name="due_after_payment" readonly> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12">

                                               Payment Method: <input type="radio" name="tnx" tabindex="5" value="Online Banking" required checked> Cash <input type="radio" tabindex="3" name="tnx" value="Bkash" required> Bkash <input type="radio" tabindex="4" name="tnx" value="Cash" required>Online Banking <input type="radio" name="tnx" tabindex="6" value="Payment Gateway" required> Payment Gateway
                                            </div>
                                            <div class="col-md-12">
                                                <input type="text" name="tnx_id" placeholder="Transcation ID" class="form-control" tabindex="7"> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                            <br>
                                <button id="submit" type="submit" class="btn btn-primary btn-lg">Received</button>
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
            var url = '{{ url("find-user-data-for-payment") }}';

            $('input[name=user_id],input[name=contact_no]').on('change', function() {
                var data = $(this).val();
                var date = '{{ \Carbon\Carbon::now()->format('d/m/Y')}}';
                $.ajax({
                    method:'POST',
                    url:url,
                    data:{data:data,_token:token}
                }).done(function(e){
                    console.log(e);
                    $('input[name=user_id]').val(e[0].user_id);
                    $('input[name=username]').val(e[0].username);
                    $('input[name=contact_no]').val(e[0].contact_no);
                    $('input[name=bill]').val(e[0].bill);
                    $('input[name=due]').val(e[0].balance);
                    $('input[name=fk_user_id]').val(e[0].fk_user_id);
                    if(e[0].house !== null){
                        $('input[name=adress]').val('House: '+e[0].house+', Road: '+e[0].road+', Block: '+e[0].block+', '+e[0].address);
                        $('input[name=total]').val(parseInt(e[0].bill)+parseInt(e[0].balance));
                    }else{
                        $('input[name=adress]').val('');
                        $('input[name=total]').val('');
                    }
                    $('input[name=date]').val(date);

                    if(e[0].pay !== null && e[0].due_after_pay > 0){
                         $('input[name=payment]').val('You already Paid').prop('readonly', true);
                         $('#submit').prop('disabled', true);
                    }else{
                        $('input[name=payment]').val('').prop('readonly', false);;
                        $('#submit').prop('disabled', false);
                        $('input[name=due_after_payment]').val('');
                    }
                })
            })

            $('input[name=payment]').on('keyup',function(){
                var payment = $(this).val();
                var total = $('input[name=total]').val();
                $('input[name=due_after_payment]').val(parseInt(total)-parseInt(payment));

            })


        </script>
@stop