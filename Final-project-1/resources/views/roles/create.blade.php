@extends('layouts.app')


@section('content')
<div class="container">
<div class="row">
<div class="col-lg-12 margin-tb">
        <div style="text-align:center;font-size:40px; font-weight: bold; text-shadow: 2px 2px 5px blue">
            <h1>ایجاد سطح دسترسی جدید</h1>
        </div>
       
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


{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
<div class="row" >
<div class="col-lg-6 margin-tb">
        <div style="text-align:right;font-size:20px;color:#001a33;padding-right:10px">
            <strong>سطح دسترسی:</strong>
            {!! Form::text('name', null, array('placeholder' => 'مدیر/ کاربر','class' => 'form-control')) !!}
        </div>
    </div>
    </div>
    <div class="row" >
    <div class="col-lg-8 margin-tb">
        <div  style="text-align:right;font-size:20px; padding-right:600px;color:#001a33;" >
            <strong>دسترسی ها:</strong>
            <br/>
            @foreach($permission as $value)
            <div style="text-align:center">  <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                {{ $value->name }}</label></div>
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

{!! Form::close() !!}
</div>


@endsection