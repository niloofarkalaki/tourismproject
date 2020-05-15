@extends('layouts.app')
@section('title','پست جدید')

@section ('content')
<div class="container" style="margin-top: 20px">

    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <div > 
        <div class="col-md-12 createForm">
            <div class="row">
            <h1>
            پست جدید را اضافه کنید
            </h1>
            </div>
           
        <div class="form-group row">
                            <label for="caption" class="col-md-12 col-form-label text-right">
                            <h4>  کپشن پست</h4>

                            </label>

                            <textarea name="caption" id="caption" cols="100" rows="15" ></textarea>
                        </div>
                <div class="form-group row ">
                <label for="image" class="col-md-4 col-form-label text-right ">
                  <h4>  عکس پست</h4>
                </label>
                    <input  name="image"  id="image" type="file" class="form-control-file">
                   

                </div>
                <div class="form-group row pt-4">
                    <button class="btn btn-primary ">پست جدید را اضافه کنید</button>
                    
                </div>
        </div>
    </div>
    </form>
</div>
@endsection