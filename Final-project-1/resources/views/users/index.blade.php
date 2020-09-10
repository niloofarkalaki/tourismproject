@extends('layouts.app')


@section('content')
<div class="row">
<div class="col-lg-12 margin-tb" >
        <div  style="text-align:center;font-size:40px; font-weight: bold; text-shadow: 2px 2px 5px blue">
            <h1>مدیریت کاربران</h1>
        </div>
        <div style="text-align:center">
            <a class="btn btn-success" href="{{ route('users.create') }}"> ایجاد کاربر جدید</a>
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
   <th>نام</th>
   <th>نام کاربری</th>
   <th>ایمیل</th>
   <th>نقش</th>
   <th width="280px">اقدامات</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr style="text-align:center">
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->username }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">نمایش</a>
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">ویرایش</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('حذف', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>


{!! $data->render() !!}



@endsection