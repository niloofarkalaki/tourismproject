
@extends('layouts.app')

@section('title','تماس با ما')
@section('content')


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>



<div class="container" style=" border-radius: 5px;background-color:#75a3a3;padding: 10px;">
  <div style="text-align:center">
    <h1 style="font-weight: bold; text-shadow: 2px 2px 5px blue">تماس با ما</h1>
    <p style="font-size:25px">برای ما پیام بگذارید:</p>
  </div>
  <div class="row">
    <div class="column" style="float: left;width: 50%;margin-top: 6px;padding: 20px;">
      <img src="https://i.pinimg.com/originals/c9/22/71/c922717895acf105a6246fed5a70de72.jpg" style="width:100%">
    </div>
    <div class="column" style="float: left;width: 50%;margin-top: 6px;padding: 20px;">
      <form action="/action_page.php">
      <div class="row">
      
      <div style="text-align:right;font-size:20px;color:#001a33;">
      <input type="text" id="fname" name="firstname" placeholder="Your Name.." >
        <label for="fname">نام:</label>
        
        </div>
        </div>
        <div class="row">
       
      <div style="text-align:right;font-size:20px;color:#001a33;">
        <input type="text" id="fname" name="firstname" placeholder="Your LastName..">
        <label for="lname">نام خانوادگی:</label>
       
        </div>
        </div>
        <div class="row">
        
      <div style="text-align:right;font-size:20px;color:#001a33;">
        <label for="country">کشور_شهر</label>
        <select id="country" name="country" >
          <option value="australia">تهران</option>
          <option value="canada">مشهد</option>
          <option value="usa">اصفهان</option>
        </select>
        </div>
        </div>
        <div class="row">
        <div style="text-align:right;font-size:20px;color:#001a33;">
        <label for="subject">موضوع:</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        </div>
        </div>
        <div class="row" style="padding-right:60px;">
        <input type="submit" value="Submit" style="background-color: #4CAF50">
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>

@endsection



