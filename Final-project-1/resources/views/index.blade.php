<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<style>
  body  {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	background: url(../images/Tourism-3.jpg) no-repeat center center fixed ;
	background-size: cover;
  background-position: top center;
 
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
  font-weight: bold;
  text-align: center;
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
 

</style>
</head>


<body>
<div class="app-wrap">
    <header>
              <main>
                  <h1>خوش امدید</h1>
                  <p> 
                  گردشگری در ایران به عنوان یک صنعت از ظرفیت‌های بسیار بالایی برای رشد و توسعه برخوردار است.بر اساس گزارش سازمان جهانی جهانگردی،گردشگری در ایران رتبه دهم جاذبه‌های باستانی و تاریخی و رتبه‌ پنجم جاذبه‌های طبیعی را در جهان دارا است و یکی از امن‌ترین کشورهای منطقه و جهان از لحاظ امنیت برای گردشگران خارجی است.در سال 2008، در حدود 2 ميليون گردشگر خارجی از ایران بازدید کرده‌اند و این در حالی است که در این سال ۸۴۲ میلیون جهانگرد در دنیا سفر کرده‌اند.
                  </p>
              </main>
              
              <a href="/home" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">وارد سایت شوید</a>
              
  
  </header>
  </div>
</body>
</html>


