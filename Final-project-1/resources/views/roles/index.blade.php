@extends('layouts.app')


@section('content')
<div class="container">
<div class="row">
<div class="col-lg-12 margin-tb" >
        <div  style="text-align:center;font-size:40px; font-weight: bold; text-shadow: 2px 2px 5px blue">
            <h1>مدیریت سطح دسترسی ها</h1>
        </div>
        <div style="text-align:center">
        @can('role-create')
            <a class="btn btn-success" href="{{ route('roles.create') }}"> ایجاد سطح دسترسی جدید</a>
            @endcan
        </div>
    </div>
</div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<table class="table table-bordered">
  <tr style="text-align:center">
     <th>شماره</th>
     <th>سطح دسترسی</th>
     <th width="280px">Action</th>
  </tr>
    @foreach ($roles as $key => $role)
    <tr style="text-align:center">
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">نمایش</a>
            @can('role-edit')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">ویرایش</a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('حذف', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>


{!! $roles->render() !!}
</div>

@endsection