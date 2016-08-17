<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Laravel后台管理 - 登录</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="/assets/css/animate.min.css" rel="stylesheet">
    <link href="/assets/css/style.min.css" rel="stylesheet">
    <link href="/assets/css/login.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>
        if(window.top!==window.self){window.top.location=window.location};
    </script>
</head>
<body class="signin">
<div class="signinpanel">
    <div class="row">
        <div class="col-sm-7">
            <div class="signin-info">
                <div class="logopanel m-b">
                    <h1>[ Laravel ]</h1>
                </div>
                <div class="m-b"></div>
                <h4>欢迎使用 <strong>Laravel</strong></h4>
            </div>
        </div>
        <div class="col-sm-5">
            <form method="post" action="{{ url('/login') }}">
                {!! csrf_field() !!}
                <h4 class="no-margins">登录：</h4>
                <p class="m-t-md">登录到Laravel后台管理系统</p>
                <input type="text" class="form-control uname" name="email" id="email" placeholder="用户名" value="{{ old('email') }}" />
                <input type="password" class="form-control pword m-b" name="password" id="password" placeholder="密码" {{ old('password') }} />
                <button type="submit" class="btn btn-success btn-block">登录</button>
            </form>
        </div>
    </div>
    <div class="signup-footer">
        <div class="pull-left">
            &copy; 2016 All Rights Reserved
        </div>
    </div>
</div>
</body>
</html>
