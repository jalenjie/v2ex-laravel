@extends('index.layout')

@section('content')

        <ol class="breadcrumb header-crumb">
            <li><a href="#">V2EX</a></li>
            <li class="active">登入</li>
        </ol>
        @if (Session::has('login_error'))
            <div class="alert alert-danger">{{ Session::get('login_error') }}</div>
        @endif
        @if (Session::has('signout_'))
            <div class="alert alert-danger">{{ Session::get('signout_') }}</div>
        @endif
        {{ Form::open(array('class'=>'form-signin form-horizontal'))}}
            <div class="form-group">
                <label for="inputUsername3" class="col-sm-3 control-label">用户名</label>
                <div class="col-sm-9">
                    {{ Form::text('username',Input::old('username'),array('class'=>'form-control','placeholder'=>'Username','id'=>'inputUsername3'));}}
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">密码</label>
                <div class="col-sm-9">
                    {{ Form::password('password',array('class'=>'form-control','placeholder'=>'Password','id'=>'inputPassword3'));}}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary ">登入</button>
                </div>
            </div>
        {{Form::close()}}
@stop