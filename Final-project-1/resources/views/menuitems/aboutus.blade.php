
@extends('layouts.app')

@section('title','درباره‌ی ما')
@section('content')


<!DOCTYPE html>
<html >
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}
/* 
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
} */

/* .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
} */

/* .about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
} */

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

/* .title {
  color: grey;
} */

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style> -->
</head>
<body >

<div class="about-section" style="padding: 50px; text-align: center; background-color: #474e5d; color: white;">
  <h1 >درباره ما</h1>
  <p >در این وب سایت سعی بر این بوده که شما کاربر عزیز برای گردشگری در تهران در کمترین زمان و با کمترین هزینه بهترین مقصد را برای گردشگری انتخاب کنید.</p>
  <!-- <p>Resize the browser window to see that this page is responsive by the way.</p> -->
</div>

<!-- <h2 style="text-align:center; padding: 40px; color: #0000FF; text-shadow: 2px 2px blue">تیم ما</h2> -->
<div class="row"  >
  <div class="column" style="float: left; width: 33.3%; margin-bottom: 16px; padding: 0 8px; text-align: right; ">
    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); margin: 8px;">
      <img src="https://thumbs.dreamstime.com/b/girl-working-computer-dreaming-resort-travelling-flat-cartoon-person-work-desktop-pc-thinking-relaxing-adventure-journey-127734188.jpg" alt="Jane" style="width:100%">
      <div class="container" style="padding: 0 16px;">
        <h2>نیلوفر کلاکی</h2>
        <p class="title" style=" color: grey;">مهندس نرم افزار</p>
        <p>فارغ التحصیل از دانشکده دکتر شریعتی</p>
        <p>NilooKlaki@gmail.com</p>
        <p><button class="button" style="border: none; outline: 0; display: inline-block; padding: 8px;
         color: white; background-color: #000;text-align: center;cursor: pointer;width: 100%;">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column" style="float: left; width: 33.3%; margin-bottom: 16px; padding: 0 8px; text-align: right;">
    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); margin: 8px;">
      <img src="https://thumbs.dreamstime.com/b/business-woman-happy-working-office-work-place-vector-illustration-flat-cartoon-female-person-sitting-table-workplace-156939620.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>عطیه مغرنس</h2>
        <p class="title" style=" color: grey;">مهندس نرم افزار</p>
        <p>فارغ التحصیل از دانشکده دکتر شریعتی</p>
        <p>AtiyeMogharnas@gmail.com</p>
        <p><button class="button" style="border: none; outline: 0; display: inline-block; padding: 8px;
         color: white; background-color: #000;text-align: center;cursor: pointer;width: 100%;">Contact</button></p>
      </div>
    </div>
  </div>

</body>
</html>


@endsection



