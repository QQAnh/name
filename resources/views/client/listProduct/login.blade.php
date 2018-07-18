<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form Login</title>

    <meta content="{{csrf_token()}}" name="csrf-token">

    <link href="{{asset('vendor-admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('vendor-admin/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <link href="{{asset('dist-admin/css/sb-admin-2.css')}}" rel="stylesheet">


    <link href="{{asset('vendor-admin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <script src="{{asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"> </script>
    <script src="{{asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"> </script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>

                <div class="panel-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form role="form" method="POST" action="/login1">
                        {{ csrf_field() }}

                            <div class="form-group">
                                <input class="form-control" placeholder="Nhập số điện thoại" name="phone" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Nhập mật khẩu" name="password" type="password">
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Login" class="form-control btn btn-success text-center">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('vendor-admin/jquery/jquery.min.js')}}"> </script>
<script src="{{asset('vendor-admin/bootstrap/js/bootstrap.min.js')}}"> </script>

<script src="{{asset('vendor-admin/metisMenu/metisMenu.min.js')}}"> </script>

<script src="{{asset('dist-admin/js/sb-admin-2.js')}}"> </script>
<!-- jQuery -->

<!-- Bootstrap Core JavaScript -->

<!-- Metis Menu Plugin JavaScript -->

<!-- Custom Theme JavaScript -->
</body>

</html>
