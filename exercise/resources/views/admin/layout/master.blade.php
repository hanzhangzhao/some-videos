<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Some Video Platform</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet">

    <script>
        // function ($) {
        //     //为异步请求设置CSRF令牌
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });
        // }
    </script>
</head>
<body>
<div class="container-fluid admin-top">
    <!--导航-->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color">
        <a class="navbar-brand" href="#">Some Video</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link disabled" href="#">Disabled</a>--}}
{{--                </li>--}}
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i>{{Auth::guard('admin')->user()->username}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/admin/profile">My Account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/admin/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!--主体-->
<div class="container-fluid admin_menu">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-lg-2 left-menu">
            <div class="search-menu">
                <input class="form-control input-lg" type="text" placeholder="Search.." onkeyup="search(this)">
            </div>
            <!--扩展模块动作 start-->
            <div class="panel panel-default">
                <!--系统菜单-->
                <div class="panel-heading">
                    <h4 class="panel-title">Profile</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="javascript:;">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus">
                    <li class="list-group-item" id="35">
                        <a href="/admin/profile">My Info </a>
                    </li>
                </ul>
                <div class="panel-heading">
                    <h4 class="panel-title">Your Content</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="javascript:;">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus">
                    <li class="list-group-item" id="39">
                        <a href="/admin/tag">Edit Tags</a>
                    </li>
                    <li class="list-group-item" id="40">
                        <a href="/admin/lesson">Edit Videos</a>
                    </li>
                </ul>
                <!----------返回模块列表 start------------>
                <!--模块列表-->
                <!--模块列表 end-->
            </div>
        </div>
        <div class="col-xs-12 col-sm-9 col-lg-10">
            @yield('content')
        </div>
    </div>
</div>
<div class="footer">
    ❤ by Hanzhang
</div>

</body>
@include('admin.layout.errors')
@include('flash::message')

<script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script>
    $('#flash-overlay-modal').modal();
</script>
</html>
