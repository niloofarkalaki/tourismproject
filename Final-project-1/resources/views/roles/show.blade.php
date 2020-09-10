@extends('layouts.app')



<div class="container" >
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb" >
        <div  style="text-align:center;font-size:40px; font-weight: bold; text-shadow: 2px 2px 5px blue">
            <h1> نمایش سطح دسترسی فرد</h1>
        </div>
        
    </div>
</div>


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div style="text-align:center;font-size:20px;color:#001a33;">
            <strong>سطح دسترسی:</strong>
            {{ $role->name }}
        </div>
    </div>
    <div class="row" >
    <div class="col-lg-12 margin-tr">
        <div  style="text-align:center;font-size:20px; padding-right: 640px;color:#001a33;" >
            <strong >دسترسی ها:</strong></br>
            
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
              <div style="text-align:center"> <label class="label label-success" >{{ $v->name }},</label></div>
                @endforeach
            @endif
            <div >
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> بازگشت</a>
        </div>
            </div>
        </div>
    </div>
       
    @endsection
</div>
