<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <meta content="{{csrf_token()}}" name="csrf-token">
    @yield('style')

    <link href="{{asset('vendor-admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('vendor-admin/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <link href="{{asset('dist-admin/css/sb-admin-2.css')}}" rel="stylesheet">

    <link href="{{asset('vendor-admin/morrisjs/morris.css')}}" rel="stylesheet">

    <link href="{{asset('vendor-admin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css')}}">

    <script src="{{asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"> </script>
    <script src="{{asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"> </script>
</head>

<body>

<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/admin">Admin </a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="/loginAdmin"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> User<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/user/create"><i class="fa fa-edit fa-fw"></i> Create User</a>
                            </li>
                            <li>
                                <a href="/user"><i class="fa fa-table fa-fw"></i> List User</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Product<span class="fa arrow"></span></a>

                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/admin/smartphone"><i class="fa fa-edit fa-fw"></i>SmartPhone</a>
                            </li>
                            <li>
                                <a href="/admin/pc"><i class="fa fa-edit fa-fw"></i>PC</a>
                            </li>
                            <li>
                                <a href="/admin/laptop"><i class="fa fa-edit fa-fw"></i>Laptop</a>
                            </li>
                            <li>
                                <a href="/admin/console"><i class="fa fa-edit fa-fw"></i>Console</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category<span class="fa arrow"></span></a>

                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/admin/category"><i class="fa fa-edit fa-fw"></i>List Category</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Order<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            {{--<li>--}}
                                {{--<a href="#"><i class="fa fa-edit fa-fw"></i>List Order Detail</a>--}}
                            {{--</li>--}}
                            <li>
                                <a href="/order"><i class="fa fa-edit fa-fw"></i>List Order Detail</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/chart"><i class="fa fa-table fa-fw"></i> Charts</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        @yield('content')

    </div>
</div>

<script src="{{asset('vendor-admin/jquery/jquery.min.js')}}"> </script>

<script src="{{asset('vendor-admin/bootstrap/js/bootstrap.min.js')}}"> </script>

<script src="{{asset('vendor-admin/metisMenu/metisMenu.min.js')}}"> </script>

<script src="{{asset('vendor-admin/raphael/raphael.min.js')}}"> </script>

<script src="{{asset('vendor-admin/morrisjs/morris.js')}}"> </script>

<script src="{{asset('data-admin/morris-data.js')}}"> </script>

<script src="{{asset('dist-admin/js/sb-admin-2.js')}}"> </script>

@yield('js')

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>
</html>
{{--/products/create--}}