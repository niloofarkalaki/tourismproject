
@extends('layouts.app')
@section('title',' پروفایل')


@section('content')

<div class="container" style="margin-top: 20px">

<div class="col-12 p-10" >

            <div class="d-flex justify-content-between"><h1>{{ $user->username }}</h1></div>
                <div class="pr-0 d-flex "> <h3 >   تعداد پست: {{ $user->posts->count() }}</h3></div>

            <div class="row d-flex pr-2">
           <a href="/create"><bottun class="btn btn-outline-dark"> پست جدید را اضافه کنید</bottun></a>
            </div>
            <div class="row pt-4">
        @foreach ($user->posts as $post)
        <div class="col-6">
        <a href="/p/{{ $post->id }}">
            <img src="/storage/{{ $post->image }}" class="w-100 h-50">
            <div class="d-flex">
            <form  action="/p/ {{$post->id}}" method="post">
                    @csrf
                    @method('delete')
                    <div class="col-md-2 pt-4 pr-1 " >
                     <button class=" btn btn-danger  " >حذف </button>
                     </div>
                    </form>
                    
            <div class="col-md-2 pt-4" ><a class="btn btn-success "  href="/p/{{ $post->id }}">نمایش</a> </div>
          
            <div class="col-md-2 pt-4" ><a class="btn btn-info  " href="/p/{{ $post->id }}/edit"> ویرایش</a> </div>
            </div>
        </div>
        <div class="col-sm-0"></div>
        @endforeach
    </div>
</div>
</div>
@endsection



