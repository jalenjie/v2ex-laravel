@extends('index.layout')

@section('content')

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
    {{ Form::open(array('class'=>'form-signin form-horizontal'))}}
        <div class="form-group">
            <label for="inputUsername3" class="col-sm-3 control-label">用户名</label>
            <div class="col-sm-9">
                {{ Form::text('username','',array('class'=>'form-control','placeholder'=>'Username','id'=>'inputUsername3'));}}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <div class="fade-color">
                请使用半角的 a-z 或数字 0-9
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-3 control-label">密码</label>
            <div class="col-sm-9">
                {{ Form::password('password',array('class'=>'form-control','placeholder'=>'Password','id'=>'inputPassword3'));}}
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">电子邮件</label>
            <div class="col-sm-9">
                {{ Form::text('email','',array('class'=>'form-control','placeholder'=>'ex@ex.com','id'=>'inputEmail3'));}}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-primary ">注册</button>
            </div>
        </div>
    {{Form::close()}}
@stop