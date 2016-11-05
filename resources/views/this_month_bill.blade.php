<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Exord Online Limited - Monthly Bill</title>

    <style>
        .wrapper{
            padding-top: 20px;
            width: 1000px;
            margin: auto;
        }
        .my {
            width: 65px;
            height: 20px;
            margin-bottom: 5px;
            padding: 2px 4px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px;    
            display: inline-block;
            font-size: 11px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
            }
        #content{
            width: 80%;
            float: left;
        }
        #right{
            width: 20%;
            float: right;
        }

        input#user_id {
            height: 35px;
            width: 300px;
        }

        button.pay {
            margin-top: 5px;
            height: 20px;
        }
        .link{
            width: 300px;
        }
        a{
            text-decoration: none;
        }
    </style>

 </head>
 <body>
 	<div class="container wrapper">
        <div class="row">
            <div class="col-md-12">
                <p style="font-size: 24px;color: #a5a5a5;padding-top: 0px;">{{ \Carbon\Carbon::now()->format('F , Y') }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8" id="content">
                    @foreach ($bills as $bill) 
                        @if($bill->hit <= 1 && !empty($bill->bill))
                            <button class="btn btn-sm my" style="background: rgb(152, 243, 150)"><?php echo $bill->user_id; ?></button>
                        <?php elseif($bill->hit <= 0 && empty($bill->bill)): ?>
                             <button class="btn btn-sm btn-deafult my"><?php echo $bill->user_id; ?></button>
                        <?php elseif($bill->hit > 0): ?>
                             <button class="btn btn-sm my" style="background: #000;color: #fff;" title="<?php echo $bill->hit; ?>"><?php echo $bill->user_id; ?></button>
                        @endif
                   @endforeach
            </div>
            <div class="col-md-4" id="right">
            <script>
                var oldURL = document.referrer;
            </script>
            <div class="link">
                <a href="" onclick="oldUrl">&laquo; Prevous</a>
                <a href="/home" style="text-align: right;float: right;">Home &raquo; </a>
            </div>
                <div>
                    @if(!empty(session('success_message')))
                        <p style="color:green;width: 300px">{{session('success_message')}}</p>
                    @elseif(session('error_message'))
                        <p style="color:red;width: 300px">{{session('error_message')}}</p>
                    @elseif(session('message'))
                        <p style="color:green;width: 300px">{{session('message')}}</p>
                    @endif
                </div>

                <br>
                <form action="{{url('/bill/pay')}}" class="form-inline" method="post">
                {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" name="user_id" class="" id="user_id">
                        <button class="pay" name="pay">Pay</button>
                    </div>
                </form>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <button class="print" onclick="printDiv('content')">Print</button>
                <br>
                <br>
                <br>
                <form action="{{url('/bill/reset')}}" method="post">
                {{csrf_field()}}
                    <button type="submit" name="reset" onClick="return confirm('Are you sure?')">Reset</button>
                </form>

            </div>
        </div>
    </div>
    <script>
        function printDiv(divName) {
             var printContents = document.getElementById(divName).innerHTML;
             var originalContents = document.body.innerHTML;

             document.body.innerHTML = printContents;

             window.print();

             document.body.innerHTML = originalContents;
        }
    </script>

 </body>
 </html>