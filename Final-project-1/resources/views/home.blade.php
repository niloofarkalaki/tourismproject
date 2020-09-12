
@extends('layouts.app')
@section('title',' خانه')
@section('content')



<div class="container">
    <div class="card-body">
         @if (session('status'))
             <div class="alert alert-success" role="alert">
                {{ session('status') }}
             </div>
        @endif
    </div>
</div>

<div class="content-home" >
    <div class="container-fluid" >      
        @forelse($Post as $post)     
            <div class="col-sm-5  product-box">
           <a href="/p/{{ $post->id }}" > <img src="/storage/{{$post->image}}"class="w-100" style="border-radius: 8px "></a>
            <p style="rtl;text-align:center ;padding: 10px 20px; color: #0000e6; font-size: 20px;">
            {{$post->caption }}
            </p>
    </div>
</div>

     <div class="col-sm-1"></div>
                @empty
            @endforelse
@endsection
