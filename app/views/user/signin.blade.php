@extends('layout')

@section('content')

<div class="row">
    <div class="sep20"></div>
    <div class="col-md-8 box">
        <ol class="breadcrumb header-crumb">
            <li><a href="#">V2EX</a></li>
            <li class="active">登入</li>
        </ol>
        <form class="form-signin" role="form">
            <div class="input-group">
              <span class="input-group-addon">用户名</span>
              <input type="text" class="form-control" placeholder="Username">
            </div>
            <div class="input-group">
              <span class="input-group-addon">密&nbsp;&nbsp;&nbsp;码</span>
              <input type="password" class="form-control" >
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">登入</button>
        </form>
    </div>
    <div class="col-md-1">
    </div>
    <div class="col-md-3 box">
        <div class="cell">
            <strong>V2EX = way to explore</strong>
            <div></div>
            <span class="fade-color">V2EX 是一个关于分享和探索的地方</span>
        </div>
        <div class="inner">
            <div class="sep5"></div>
            <div align="center"><a href="/signup" class="btn btn-primary">现在注册</a>
            <div class="span5"></div>
            <div class="sep10"></div>
            已注册用户请 &nbsp;<a href="/signin">登入</a></div>
        </div>
    </div>
</div>
@stop