<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>User Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
</head>
<body>
<div class="loginWrapper">
    <div class="container row">
    <div class="logo col-md-3">
        Some Videos
    </div>
    <div class="col-md-4 loginBox">

            <div class="col-md">
                <div class="loginTitleWrapper">
                    <a class="loginTitle active">Login</a>
                    <b>|</b>
                    <a class="loginTitle">Register</a>
                </div>
                <form method="post" action="">
                    {{ csrf_field() }}
                    <div class="signInContainer">
{{--                        <label>Username</label>--}}
                        <div class="input-group ">
                            <i class="fa fa-user"></i>
                            <input type="text" name="username" class="form-control input-lg signInUserName" placeholder="Username" value="">
                        </div>

{{--                        <label>Password</label>--}}
                        <div class="input-group">
                            <i class="fa fa-w fa-lock"></i>
                            <input type="password" name="password" class="form-control input-lg signInPassword" placeholder="Password" value="">
                        </div>
                    </div>
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary btn-lg col-md loginButton">Login</button>
                </form>
            </div>
    </div>
    <div class="copyright">
    </div>
    </div>
</div>
</body>
</html>
