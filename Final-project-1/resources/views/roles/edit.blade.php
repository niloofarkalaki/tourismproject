@extends('layouts.app')



<div class="container">
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div style="text-align:center;font-size:40px; font-weight: bold; text-shadow: 2px 2px 5px blue">
            <h1>ویرایش سطح دسترسی</h1>
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


{!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
<div class="row">
    <div class="col-lg-12 margin-tr">
        <div style="text-align:center;font-size:20px;color:#001a33;">
            <strong> سطح دسترسی:</strong>
            {!! Form::text('name', null, array('placeholder' => 'کاربر / مدیر','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="row" >
    <div class="col-lg-12 margin-tr">
        <div  style="text-align:center;font-size:20px; padding-right: 640px;color:#001a33;" >
            <strong>دسترسی ها:</strong>
            <br/>
            @foreach($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                {{ $value->name }}</label>
            <br/>
            @endforeach
        </div>
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">ثبت</button>
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> بازگشت</a>
        </div>
    </div>
   
    @endsection
</div>
{!! Form::close() !!}



