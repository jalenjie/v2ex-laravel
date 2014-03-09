@extends('layout')

@section('content')

<div class="row">
    <div class="sep20"></div>
    <div class="col-md-8 box">
        <ol class="breadcrumb header-crumb">
            <li><a href="#">V2EX</a></li>
            <li class="active">注册</li>
        </ol>
        @if ($errors->first('email') or $errors->first('username') or $errors->first('password'))
            <div class="alert alert-danger">
                {{  $errors->first('email');}} <br/>
                {{  $errors->first('username');}} <br/>
            </div>
        @endif

        @if(Session::has('register_error'))
            <div class="alert alert-danger">
                {{Session::get('register_error')}}
            </div>
        @endif
        {{ Form::open(array('url'=>'signup','class'=>'form-signin'))}}
            <div class="input-group">
              <span class="input-group-addon">用户名</span>
              {{ Form::text('username','',array('class'=>'form-control','placeholder'=>'Username'));}}
            </div>
            <div class="fade-color">
            请使用半角的 a-z 或数字 0-9
            </div>
            <div class="sep5">
            </div>
            <div class="input-group">
              <span class="input-group-addon">密&nbsp;&nbsp;&nbsp;码</span>
              {{ Form::password('password',array('class'=>'form-control'));}}
            </div>
            <div class="input-group">
              <span class="input-group-addon">电子邮件</span>
              {{ Form::text('email','',array('class'=>'form-control'));}}
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">注册</button>
        {{Form::close()}}
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