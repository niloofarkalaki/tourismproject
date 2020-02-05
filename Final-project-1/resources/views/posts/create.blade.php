@extends('layouts.app')
@section('title','پست جدید')

@section ('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row"> 
        <div class="col-8 offset-2">
            <div class="row">
            <h1>
            پست جدید را اضافه کنید
            </h1>
            </div>
        <div class="form-group row">
                            <label for="caption" class="col-md-4 col-form-label text-md-right">کپشن پست</label>

                                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption" autofocus>

                            
                        </div>
                <div class="row">
                <label for="image" class="col-md-4 col-form-label text-md-right">عکس پست</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    
                </div>
                <div class="row pt-4">
                    <button class="btn btn-primary ">پست جدید را اضافه کنید</button>
                </div>
        </div>
    </div>
    </form>
</div>
@endsection