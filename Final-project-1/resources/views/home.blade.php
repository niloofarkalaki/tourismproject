
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
            <!-- <h2 class="image">{{$post->image}}</h2><br><br> -->
           <a href="/p/{{ $post->id }}" > <img src="/storage/{{$post->image}}"class="w-100" style="border-radius: 8px"></a>
            <!-- <span class="caption">{{$post->caption}}</span> -->
            <p style="rtl;text-align:center ;padding: 10px 20px;">
            {{$post->caption }}
            </p>
    </div>
</div>

     <div class="col-sm-1"></div>
                @empty
            @endforelse
@endsection


<!-- <html>
<head>
<title>Search</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 <div class="container">
     <form action="/Search" method="POST" role="Search">

         <div class="input-group">
             <input type="text" class="form-control" name="q"
                 placeholder="Search sickleave number"> <span class="input-group-btn">
                 <button type="submit" class="btn btn-default">
                     <span class="glyphicon glyphicon-search"></span>
                 </button>
             </span>
         </div>
     </form>
     <div class="container">
         @if(isset($posts))
         <table class="table table-striped">
             <thead>
                 <tr>
                     <th>caption</th>
                     <th>post_id</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach($posts as $post)
                 <tr>
                     <td>{{$post->caption}}</td>
                     <td>{{$post->post_id}}</td>
                 </tr>
                 @endforeach
             </tbody>
         </table>
         @elseif(isset($message))
         <p>{{ $message }}</p>
         @endif
     </div>

</body>
</html> -->


