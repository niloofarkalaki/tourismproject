@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div style="text-align:center;font-size:40px; font-weight: bold; text-shadow: 2px 2px 5px blue">
            <h1> نمایش کاربر</h1>
        </div>
       
    </div>
</div>


<div class="row">
<div class="col-lg-12 margin-tb">
        <div style="text-align:center;font-size:20px;color:#001a33;">
            <strong>نام:</strong>
            {{ $user->name }}
        </div>
    </div>
    </div>
    <div class="row">
<div class="col-lg-12 margin-tb">
        <div style="text-align:center;font-size:20px;color:#001a33;">
            
            <strong>نام کاربری:</strong>
            {{ $user->username }}
        </div>
    </div>
    </div>
    <div class="row">
<div class="col-lg-12 margin-tb">
        <div style="text-align:center;font-size:20px;color:#001a33;">
            
            <strong>ایمیل:</strong>
            {{ $user->email }}
        </div>
    </div>
    </div>
    <div class="row">
<div class="col-lg-12 margin-tb">
        <div style="text-align:center;font-size:20px;color:#001a33;">
            
            <strong>نقش:</strong>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
             <div style="padding-right: 645px">  <label class="badge badge-success" >{{ $v }}</label></div>
                @endforeach
            @endif
            <div style="padding-left:40%; padding-top:20px">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> بازگشت</a>
           </div>
        </div>
        </div>
    </div>
</div>
      
@endsection
