
@extends('layouts.app')


@section('content')

<div class="container">
<div class="row">

پست های من
</div>
<div class="col-9 p-5" >
            <div class="d-flex justify-content-between">
            <a href="/p/create">پست جدید را اضافه کنید</a>
            </div>
            
</div>
 <!-- <div class="row pt-4">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
        <a href="/p/{{ $post->id }}">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        @endforeach
    </div>  -->


@endsection






