
@extends('layouts.app')
@section('title',' پروفایل')


@section('content')

<div class="container">
<div class="row">
پست های من
<div class="col-9 p-5" >

            <div class="d-flex justify-content-between"><h1>{{ $user->username }}</h1></div>
            <div class="d-flex ">
                <div class="pr-3 d-flex "> <h3 > {{ $user->posts->count() }}:  تعداد پست </h3></div>

            </div>
           <a href="/create" class="d-flex"><bottun class="btn btn-primary"> پست جدید را اضافه کنید</bottun></a>
            
            <div class="row pt-4">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
        <a href="/p/{{ $post->id }}">
            <img src="/storage/{{ $post->image }}" class="w-100">
            <div class="d-flex">
            <div class="col-4" >
            <form  action="/p/ {{$post->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-primary w-100  " >حذف </button>
                    </form>
                    </div>
            <div class="col-4" ><a class="btn btn-primary  w-100"  href="/p/{{ $post->id }}">نمایش</a> </div>
          
            <div class="col-4" ><a class="btn btn-primary  w-100" href="/p/{{ $post->id }}/edit"> ویرایش</a> </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection



