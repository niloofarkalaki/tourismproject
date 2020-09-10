@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb" >
        <div  style="text-align:center;font-size:40px; font-weight: bold; text-shadow: 2px 2px 5px blue">
            <h1>ویرایش کاربر</h1>
        </div>
        
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif


{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
<div class="row">
<div class="col-lg-6 ">
        <div style="text-align:right;font-size:20px;color:#001a33;padding-right:10px">
            <strong>نام:</strong>
            {!! Form::text('name', null, array('placeholder' => 'نام','class' => 'form-control')) !!}
        </div>
    </div>
    </div>
    <div class="row">
<div class="col-lg-6 ">
        <div style="text-align:right;font-size:20px;color:#001a33;padding-right:10px">
            <strong>نام کاربری:</strong>
            {!! Form::text('username', null, array('placeholder' => 'نام کاربری','class' => 'form-control')) !!}
        </div>
        </div>
    </div>
    <div class="row">
<div class="col-lg-6 ">
        <div style="text-align:right;font-size:20px;color:#001a33;padding-right:10px">
            <strong>ایمیل:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Test@gmail.com','class' => 'form-control')) !!}
        </div>
        </div>
    </div>
    <div class="row">
<div class="col-lg-6 ">
        <div style="text-align:right;font-size:20px;color:#001a33;padding-right:10px">
            <strong>رمز عبور:</strong>
            {!! Form::password('password', array('placeholder' => 'رمز عبور','class' => 'form-control')) !!}
        </div>
        </div>
    </div>
    <div class="row">
<div class="col-lg-6 ">
        <div style="text-align:right;font-size:20px;color:#001a33;padding-right:10px">
            <strong>تکرار رمز عبور:</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'تکرار رمز عبور','class' => 'form-control')) !!}
        </div>
        </div>
    </div>
    <div class="row">
<div class="col-lg-6 ">
        <div style="text-align:right;font-size:20px;color:#001a33;padding-right:10px">
            <strong>نقش ها:</strong>
            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
        </div>
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 text-center" style="margin-top:30px">
        <button type="submit" class="btn btn-primary">ثبت</button>
        
            <a class="btn btn-primary" href="{{ route('users.index') }}"> بازگشت</a>
        
    </div>
</div>
{!! Form::close() !!}



@endsection