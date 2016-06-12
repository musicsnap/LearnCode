<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>Star Blog</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="<?php echo (CSS); ?>/blog.css">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="wrap">
    <nav id="w2" class="navbar-fixed-top navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w2-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="/"><img src="/images/logo.png" alt="Star Blog"></a>
            </div>
            <div id="w2-collapse" class="collapse navbar-collapse">
            <ul id="w3" class="navbar-nav navbar-left nav">
                <li class="active"><a href="/">首页</a></li>
                <li><a href="/article">文章</a></li>
                <li class="hidden-sm"><a href="/question">问答</a></li>
                <li><a href="/about">关于</a></li>
            </ul>
            <ul id="w4" class="navbar-nav navbar-right nav">
                <li><a href="/user/notice"><i class="fa fa-bell"></i> </a></li>
                <li class="dropdown"><a class="avatar dropdown-toggle" href="#" data-toggle="dropdown"><img src="/uploads/avatar/000/03/22/44_avatar_small.jpg" alt="musicsnap"> <b class="caret"></b></a>
                    <ul id="w5" class="dropdown-menu">
                        <li><a href="/user" tabindex="-1"><i class="fa fa-user fa-fw"></i> 个人主页</a></li>
                        <li class="divider"></li>
                        <li><a href="/user/site" tabindex="-1"><i class="fa fa-cog fa-fw"></i> 帐户设置</a></li>
                        <li><a href="/user/registration" tabindex="-1"><i class="fa fa-calendar fa-fw"></i> 我的签到</a></li>
                        <li><a href="/user/post" tabindex="-1"><i class="fa fa-list fa-fw"></i> 我的发布</a></li>
                        <li><a href="/user/favorite" tabindex="-1"><i class="fa fa-star fa-fw"></i> 我的收藏</a></li>
                        <li><a href="/user/score" tabindex="-1"><i class="fa fa-database fa-fw"></i> 我的积分</a></li>
                        <li class="divider"></li>
                        <li><a href="/logout" data-method="post" tabindex="-1"><i class="fa fa-sign-out fa-fw"></i> 退出登录</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">

                <div class="jumbotron">
                    <h1 class="blog-title">The Star Blog</h1>
                    <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
                </div>

                <div class="col-md-9">
                    <div class="blog-post">
                        <h2 class="blog-post-title">Sample blog post</h2>
                        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

                        <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
                        <hr>
                        <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                        <blockquote>
                            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </blockquote>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <h2>Heading</h2>
                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                        <h3>Sub-heading</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <pre><code>Example code block</code></pre>
                        <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                        <h3>Sub-heading</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <ul>
                            <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                            <li>Donec id elit non mi porta gravida at eget metus.</li>
                            <li>Nulla vitae elit libero, a pharetra augue.</li>
                        </ul>
                        <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                        <ol>
                            <li>Vestibulum id ligula porta felis euismod semper.</li>
                            <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                            <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                        </ol>
                        <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
                    </div>
                    <div class="blog-post">
                        <h2 class="blog-post-title">Another blog post</h2>
                        <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

                        <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                        <blockquote>
                            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </blockquote>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    </div>
                    <div class="blog-post">
                        <h2 class="blog-post-title">New feature</h2>
                        <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <ul>
                            <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                            <li>Donec id elit non mi porta gravida at eget metus.</li>
                            <li>Nulla vitae elit libero, a pharetra augue.</li>
                        </ul>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                    </div>
                    <nav>
                        <ul class="pager">
                            <li><a href="#">上一页</a></li>
                            <li><a href="#">下一页</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-3">
                <div class="btn-group btn-group-justified">
                    <a class="btn btn-success disabled" href="/registration">
                        <i class="fa fa-calendar-check-o"></i>
                        今日已签到<br />已连续329天</a>
                    <a class="btn btn-primary" href="/registration">2016年06月12日<br/>今日已有102人签到</a>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title"><i class="fa fa-file-word-o"></i> 最新教程</h2>
                        <span class="pull-right"><a class="btn btn-xs" href="/tutorial">更多&raquo;</a></span>
                    </div>
                    <div class="panel-body">
                        <ul class="post-list">
                            <li><a href="/tutorial/801">Yii2下验证码的切换</a></li>
                            <li><a href="/tutorial/800">yii2实战教程之新手入门指南-简单博客管理系统</a></li>
                            <li><a href="/tutorial/798">windows下用composert方式安装YII2常见问题及解决</a></li>
                            <li><a href="/tutorial/793">yii2分页之实现跳转到具体某页</a></li>
                            <li><a href="/tutorial/791">超级小白如何安装Yii2的advanced及配置方法</a></li>
                            <li><a href="/tutorial/790">yii2中如何使用modal弹窗之基本使用</a></li>
                            <li><a href="/tutorial/788">Bootstrap 后台模板AdminLTE组件分享</a></li>
                            <li><a href="/tutorial/786">yii2实战教程之第一个Yii程序</a></li>
                            <li><a href="/tutorial/785">PHPWord（很少人会用到吧！）</a></li>
                            <li><a href="/tutorial/784">解析非x-www-form-urlencoded类型的请求数据（json,xml）</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
</body>
</html>