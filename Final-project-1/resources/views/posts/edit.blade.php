@extends ('layouts.app')

@section ('content')
<div class="container">

    <form action="/p/ {{$post->id}}" enctype="multipart/form-data" method="post">

        @csrf
        @method('patch')
        
        <div class="row"> 
        <div class="col-8 offset-2">
            <div class="col pb-5"  >

             <h1 >
            ویرایش پست جدید
            
            </h1>
            </div>
        <div class="form-group row " >
                            

                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') ?? $post->image }}"  autocomplete="image" autofocus>

                            
                        </div>
                <div class="row" >
                          

                             <input id="caption" type="text" style="text-align:right;height:300px "  class="form-control input-lg @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') ?? $post->caption}}"  autocomplete="caption" autofocus>

                </div>
                <div class="row pt-4 ">
               <div class="col-3"></div>
                     <div class="col-3  "><a class="btn btn-primary w-100" href="/myprofile/{{$post -> user_id}}">بازگشت</a> </div>
                   <div class="col-3"> <button class="btn btn-primary w-100 ">ثبت</button> </div>
                    
                </div>
        </div>
    </div>
    </form>
</div>
@endsection
