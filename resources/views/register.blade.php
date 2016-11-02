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
        <link href="css/waves.min.css" type="text/css" rel="stylesheet"><link rel="stylesheet" href="css/nanoscroller.css">
        <!--        <link rel="stylesheet" href="css/nanoscroller.css">-->
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <link href="css/custom.css" type="text/css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="account">
        <div class="container">
            <div class="row">
                <div class="account-col text-center">
                @if(session('message'))
                    <p class="success"> {{ session('message') }} </p>
                @endif
                    <h1>Registration</h1>
                    <h3>Create New account</h3>
                    <form class="m-t" role="form" action="{{ url('/register') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Fullname" value="{{ old('name') }}">
                            <p class="errors"> {{ $errors->first('name') }}</p>
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" value="{{ old('username') }}">
                            <p class="errors"> {{ $errors->first('username') }}</p>
                        </div>
                         
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Passowrd" value="{{ old('password') }}">
                            <p class="errors"> {{ $errors->first('password') }}</p>
                        </div>
                        <div class="form-group">
                            <input type="password" name="re_pass" class="form-control" placeholder="Repeat Passowrd" value="{{ old('re_pass') }}">
                            <p class="errors"> {{ $errors->first('re_pass') }}</p>
                        </div>
                        <div class="form-group">
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block ">Signup</button>
                        <a href="#"><small></small></a>
                <p class=" text-center"><small>Already have an account?</small></p>
                <a class="btn  btn-default btn-block" href="login">Log into account</a>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/pace.min.js"></script>
    </body>
</html>
