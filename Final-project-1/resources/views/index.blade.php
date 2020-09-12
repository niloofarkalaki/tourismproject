<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {
  background-color: rgba(0,0,255,0.1);

  }
.mySlides {display: none;}
img {vertical-align: middle;}

h2{

  color: white;
  text-shadow: 2px 2px 5px black, 0 0 15px blue, 0 0 10px darkblue;
  font-weight: bold;
  text-align: center;
  font-size: 50px;
}

p{
  text-align: center;
  font-size: 20px;
  color:#00008B;
}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

 a {
    display:block;
    text-align: center;
    width: 100%;
    padding:  10px 15px;
    border: none;
    outline: none;
    background-color: #0000ff;
    border-radius: 16px 0px 16px 0px;
    border-bottom: 3px solid blue;
    color: #313131;
    font-size: 20px;
    font-weight: 300;
    transition: 0.2s ease-out;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<h2>وب سایت گردشگری ایران-تهران</h2>
<p>تهران پرجمعیت‌ترین شهر و پایتخت ایران، مرکز استان تهران و شهرستان تهران است. این شهر بیست و چهارمین شهر پرجمعیت جهان و پرجمعیت‌ترین شهر باختر آسیا به‌شمار می‌رود. کلان‌شهر تهران نیز سومین کلان‌شهر پرجمعیت خاورمیانه است. تهران یکی از مهم‌ترین مراکز گردشگری ایران به حساب می‌آید و دارای مجموعه‌ای از جاذبه‌های گردشگری است که شامل کاخ‌ها و موزه‌هایش می‌شود. میدان و برج آزادی، برج میلاد، پل طبیعت و کاخ گلستان از جاذبه‌های گردشگری مهم شهر تهران هستند. تهران با جذب ۱/۶۴ میلیون گردشگر در سال ۲۰۱۶ میلادی، یکی از مهم‌ترین شهرهای خاورمیانه در زمینهٔ گردشگری بوده‌است. همچنین تهران پس از شهرهای دبی، ژوهانسبورگ، ریاض و ابوظبی، در رتبهٔ پنجم از دیدگاه شمار ورود گردشگران خارجی در سال ۲۰۱۶ در مناطق آفریقا و خاورمیانه قرار داشت و گردشگران خارجی تهران در این سال، نیم میلیارد دلار هزینه‌کرد داشته‌اند.</p>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://static2.borna.news/servev2/ggVkFELdgGVt/KxuoffTghAA,/%D8%A8%D8%B1%D8%AC+%D9%85%DB%8C%D9%84%D8%A7%D8%AF.jpg" style="width:100%">
  <div class="text">برج میلاد</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://goirantours.com/megatravel/tours/imgs/T-12/Azadi%20Tower%20in%20Fantastic%20day%20in%20Center%20and%20Irans%20Capital%20Tehran%20old%20Element.jpg" style="width:100%">
  <div class="text">برج آزادی</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://media.karnaval.ir/uploads/2018/05/hjxdwqO2duw8bIRf-1527585278962.jpg" style="width:100%">
  <div class="text">پل طبیعت</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script src="{{asset('js/main.js')}}">

</script>

<a href="/home "class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">وارد سایت شوید</a>

</body>
</html> 
