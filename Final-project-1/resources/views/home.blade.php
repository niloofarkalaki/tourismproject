
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
<h1>صفحه اصلی</h1>

                </div>
            </div>
            

            <div class="content-home" >
        
        <div class="container-fluid">      
        @forelse($Post as $post)     
        <div class="col-sm-5  product-box">
        <!-- <h2 class="image">{{$post->image}}</h2><br><br> -->
        <img src="/storage/{{$post->image}}"class="w-100">
        <!-- <span class="caption">{{$post->caption}}</span> -->
        <p style="rtl;text-align:center">
            {{$post->caption }}
            </p>
</div>
</div>

     <div class="col-sm-1"></div>
                @empty
            @endforelse
@endsection



