
@extends('layouts.app')
@section('title',' پروفایل')


@section('content')

<div class="container">
<div class="row">
پروفایل من
</div>
<div class="col-9 p-5" >
<div class="d-flex justify-content-between"><h1>{{ $user->username }}</h1></div>
</div>
</div>


</div>

@endsection



