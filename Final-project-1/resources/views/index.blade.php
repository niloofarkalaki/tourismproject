<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<style>
  body  {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	background: url(../images/world-travel-background_101.jpg) no-repeat center center fixed ;
	background-size: cover;
  background-position: top center;
   font-weight: 100;
   height: 100vh;
   margin: 0;
 
 
  }

  .app-wrap {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    background-image: linear-gradient(to bottom,rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3));
}


header {
  background-size: cover;
    background-position: cover;
    position: relative;
    justify-content: center;
    text-align: center;
    align-items: center;
    padding:  50px 15px 15px;
   
}
  h1{

  color: white;
  text-shadow: 2px 2px 5px black, 0 0 15px blue, 0 0 10px darkblue;
  font-weight: bold;
  text-align: center;
  font-size: 50px;
}

header a {
    width: 100%;
    max-width: 280px;
    padding:  10px 15px;
    border: none;
    outline: none;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 16px 0px 16px 0px;
    border-bottom: 3px solid blue;
    color: #313131;
    font-size: 20px;
    font-weight: 300;
    transition: 0.2s ease-out;
}

main{
    flex: 1 1 100%;
    padding: 25px 25px 50px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

p.italic {
  font-style: italic;
  font-weight:bold;
  font-size: 20px;
  
}
p{
  color: white;
  background-color:rgb(0,200,200,0.3);
  text-shadow: 3px 3px blue;
  }

</style>
</head>


<body>
<div class="app-wrap">
    <header>
              <main>
                  <h1>خوش امدید</h1>
                  <p class="italic"> 
                  گردشگری در ایران به عنوان یک صنعت از ظرفیت‌های بسیار بالایی برای رشد و توسعه برخوردار است.بر اساس گزارش سازمان جهانی جهانگردی،گردشگری در ایران رتبه دهم جاذبه‌های باستانی و تاریخی و رتبه‌ پنجم جاذبه‌های طبیعی را در جهان دارا است و یکی از امن‌ترین کشورهای منطقه و جهان از لحاظ امنیت برای گردشگران خارجی است.در سال 2008، در حدود 2 ميليون گردشگر خارجی از ایران بازدید کرده‌اند و این در حالی است که در این سال ۸۴۲ میلیون جهانگرد در دنیا سفر کرده‌اند.
                  </p>
              </main>
              
              <a href="/home "class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">وارد سایت شوید</a>
              
  
  </header>
  </div>
</body>
</html>


