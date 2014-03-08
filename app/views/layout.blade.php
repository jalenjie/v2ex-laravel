<!DOCTYPE html>
<html>
    <head>
        <title>{{$title}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
        {{HTML::style('css/style.css')}}
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
            <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top">
            <div class="container" >
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img src="//cdn.v2ex.com/site/logo@2x.png?m=1346064962" border="0" align="default" alt="V2EX" width="94" height="30"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">首页</a></li>
                        <li><a href="#">注册</a></li>
                        <li><a href="#">登入</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="Wrapper">
            <div class="container" >
                @yield('content')
                <div class="sep20"></div>
            </div>
        </div>
        <div id="Bottom">
            <div class="container">
                <div class="inner">
                <div class="sep10"></div>
                    <strong><a href="/about" class="dark" target="_self">关于</a> &nbsp; <span class="snow">·</span> &nbsp; <a href="/faq" class="dark" target="_self">FAQ</a> &nbsp; <span class="snow">·</span> &nbsp; <a href="/mission" class="dark" target="_self">我们的愿景</a> &nbsp; <span class="snow">·</span> &nbsp; <a href="/ip" class="dark" target="_self">IP 查询</a> &nbsp; <span class="snow">·</span> &nbsp; <a href="https://workspace.v2ex.com/" class="dark" target="_blank">工作空间</a> &nbsp; <span class="snow">·</span> &nbsp; <a href="/advertise" class="dark" target="_self">广告投放</a> &nbsp; <span class="snow">·</span> &nbsp; <a href="http://livid.v2ex.com/" class="dark" target="_blank">博客</a> &nbsp; <span class="snow">·</span> &nbsp; <a href="/start" class="dark" target="_blank">上网首页</a> &nbsp; <span class="snow">·</span> &nbsp; 219 人在线<iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe></strong> &nbsp; <span class="fade-color">最高记录 631</span> &nbsp; <span class="snow">·</span>
                    <div class="sep20"></div>
                    创意工作者们的社区
                    <div class="sep5"></div>
                    Lovingly made by <b>OLIVIDA</b>
                    <div class="sep20"></div>
                    <span class="small fade-color">♥ Do have faith in what you're doing.</span>
                    <div class="sep10"></div>
                </div>
            </div>
        </div>

	
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
    </body>
</html>