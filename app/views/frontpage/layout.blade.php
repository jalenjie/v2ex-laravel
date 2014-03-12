<!DOCTYPE html>
<html>
    <head>
        <title>{{$title}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
        {{HTML::style('frontpage/css/style.css')}}
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
                        @if(Auth::check())
                            <li>{{ HTML::link("/member/".Auth::user()->username,Auth::user()->username) }}</li>
                            <li><a href="#">工作空间</a></li>
                            <li><a href="#">记事本</a></li>
                            <li><a href="#">时间轴</a></li>
                            <li><a href="#">活动</a></li>
                            <li><a href="#">附近</a></li>
                            <li><a href="#">设置</a></li>
                            <li>{{ HTML::link("/auth/logout","登出")}}</li>
                        @else
                            <li>{{ HTML::link("/auth/reg","注册")}}</li>
                            <li>{{ HTML::link("/auth/login","登入")}}</li>
                        @endif
                        
                    </ul>
                </div>
            </div>
        </div>
        <div id="Wrapper">
            <div class="container" >
                

                <div class="row">
                    <div class="sep20"></div>
                    <div class="col-md-8 box">
                        @yield('content')
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-3 box">
                        @if ( !Auth::check() )
                            <div class="box">
                                <div class="cell">
                                    <strong>V2EX = way to explore</strong>
                                    <div></div>
                                    <span class="fade-color">V2EX 是一个关于分享和探索的地方</span>
                                </div>
                                <div class="inner">
                                    <div class="sep5"></div>
                                    <div align="center"><a href="/auth/reg" class="btn btn-primary">现在注册</a>
                                    <div class="span5"></div>
                                    <div class="sep10"></div>
                                    已注册用户请 &nbsp;<a href="/auth/login">登入</a></div>
                                </div>
                            </div>
                        @else
                            <div class="box">
                                <div class="cell">
                                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                        <tbody><tr>
                                            <td width="48" valign="top"><a href="/member/jalen"><img src="//cdn.v2ex.com/avatar/18fa/fc45/44048_large.png?m=1378694449" class="avatar" border="0" align="default" style="max-width: 48px; max-height: 48px;"><iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe></a></td>
                                            <td width="10" valign="top"></td>
                                            <td width="auto" align="left"><span class="bigger"><a href="/member/jalen">jalen</a></span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="sep10"></div>
                                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                        <tbody><tr>
                                            <td width="33%" align="center"><a href="/my/nodes" class="dark" style="display: block;"><span class="bigger">1</span><div class="sep3"></div><span class="fade-color">节点收藏</span><iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe></a></td>
                                            <td width="34%" style="border-left: 1px solid rgba(100, 100, 100, 0.4); border-right: 1px solid rgba(100, 100, 100, 0.4);" align="center"><a href="/my/topics" class="dark" style="display: block;"><span class="bigger">13</span><div class="sep3"></div><span class="fade-color">主题收藏</span></a></td>
                                            <td width="33%" align="center"><a href="/my/following" class="dark" style="display: block;"><span class="bigger">2</span><div class="sep3"></div><span class="fade-color">特别关注</span></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="inner">
                                    <a href="/notifications" class="fade-color">0 条未读提醒</a>
                                    <div class="fr" id="money">
                                        <a href="/balance" class="balance_area" style="">79 
                                            <img src="http://cdn.v2ex.com/static/img/silver.png" alt="S" align="absmiddle" border="0" style="padding-bottom: 2px;"> 18 
                                            <img src="http://cdn.v2ex.com/static/img/bronze.png" alt="B" align="absmiddle" border="0"></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
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