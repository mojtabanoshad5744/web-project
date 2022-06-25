<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> eram garden</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/vue@3"></script>
  <link rel="icon" type="image.png" href="https://storage.torob.com/backend-api/base/images/mH/RS/mHRSUVxx2erWWRCT.jpg">
  <style>
    .msgg{
    color: maroon;
    font-size: medium;
    align-content: space-between;
    align-items: center;
    }
  </style>
</head>
<body>
  
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="..."> سایت گردشگری استان فارس</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"> صفحه اصلی</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#number">شماره تماس با ما</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            شهرستان ها
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">شهرستان ارسنجان</a></li>
            <li><a class="dropdown-item" href="#">شهرستان اِستَهبان</a></li>
            <li><a class="dropdown-item" href="#">شهرستان اقلید</a></li>
            <li><a class="dropdown-item" href="#">شهرستان آباده</a></li>
            <li><a class="dropdown-item" href="#">شهرستان اِوز</a></li>
            <li><a class="dropdown-item" href="#">شهرستان بختگان</a></li>
            <li><a class="dropdown-item" href="#">شهرستان بوانات</a></li>
            <li><a class="dropdown-item" href="#">شهرستان بیضا</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"> شهرستان های دیگر</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <br/>
   
    <div class="text-center">
        <img class="img-thumbnail" src="img/eram-garden.png">
    </div>
    <br>
    <br>
    <p class="msgg">{{ session ('msgg')}}</p>
    <br>
    <br>
    <div class="panel panel-default" dir="rtl">
        <div class="panel-heading">
        <h1>متن کامل:</h1>
             باغ ارم شیراز
        </div>
        <div class="panel-body doted img-style">
        <p style="text-align:justify">در شمال غربی شهر شیراز ودرکنار شهر باغ زیبای تاریخی باقی مانده که به باغ ارم معروف است. وسعت باغ بیش از سه هکتار و پوشیده از درختان مرکبات و انواع گل و گیاه و سرو است.<br />
    <br />
    جالبترین قسمت باغ خیابانی است که از شرق به غرب در وسط باغ احداث و در دو طرف آن درختان سرو کاشته اند و زیبایی خاصی را داراست . در میان درختان سرو این خیابان سرو بلند قامتی است که از دور جلب توجه میکند و بعلت موزون بودن آن آنرا سروناز میخوانند. تاریخ شناسان قدمت این سرو را هزار سال تخمین میزنند. بلندای این سرو چهل متر است. نظیر سرو مذکور در سایر باغ های شیراز دیده نمی&zwnj;شود. صحن باغ را سایردرختان زینتی و سرو و نارنج و انواع گلهای زینتی پوشانیده و تزئین نموده است.<br />
    <br />
    تاریخ ساخت و بنیانگذار اولیه باغ ارم شیراز نا مشخص است. این باغ در دوره سلجوقیان و آل اینجو پابرجا بوده و در دوره زندیه توسط کریمخان زند بهسازی شد. در دوره ناصرالدین شاه قاجار عمارتی در آن ساخته شد که تا کنون پابرجاست. این باغ هفتاد و پنج سال به دست سران ایل قشقایی افتاد که دراین دوره عمارتی در باغ ساخته شد و در دوران پهلوی باز پس گرفته شده، سپس توسط دولت و حمایت مالی محمد رضا پهلوی و فرح خریداری و تعمیر شده به دانشگاه شیراز اهدا گردید. این باغ دارای تنوع گیاهی فراوان است و گیاهان بسیاری از نقاط مختلف جهان دراین باغ کاشته شده است بطوریکه باغ در قالب نمایشگاهی از انواع گیاهان و گلها درآمده است. این باغ اکنون دراختیار دانشگاه شیراز بوده، باغ گیاه شناسی آن در اختار دانشکده کشاورزی و ساختمان باغ در اختیار دانشکده حقوق قرار دارد. در ششم تیرماه 1390 در سی و پنجمین اجلاس کمیته میراث جهانی یونسکو باغ ارم شیراز به همراه هشت باغ دیگر ایرانی در فهرست میراث جهانی ثبت گردید.<br />
    <br />
    <strong>عمارت باغ ارم:</strong><br />
    عمارت وسط باغ از نظر معماری، نقاشی، کاشیکاری وگچ بری ازشاهکارهای معماری قاجاریه است. این عمارت سه طبقه، دارای تزیینات فراوان است. ستونهای آن از تخت جمشید الهام گرفته شده اند.<br />
    در سردر بنا دونیم دایره دردوطرف ویک تابلو بزرگ دروسط قرارگرفته که جمعا از سه هلال تشکیل شده اند. این تابلو تصاویری از شاهنامه فردوسی ونبرد شاهان قاجاررا نشان میدهد.<br />
    عمارت باغ مذکور از آثار دوره ناصرالدین شاه قاجار بشمار میرود و بوسیله مرحوم نصیرالملک ساختمان فعلی بنا شده است . در این مورد چند کتیبه سنگی در نقاط مختلف باغ از نصیرالملک باقی&zwnj;مانده است . اولین کتیبه سنگ مرمراست که در بالای سر در ورودی شمال شرقی باغ نصب شده و با خط نستعلیق چنین خوانده میشود : از وزیر شه نصیرالملک راد / دائمش باغ ارم آباد باد<br />
    علاوه بر کتیبه فوق شش کتیبه سنگی در نمای شرقی ساختمان به صورت ازاره دیده می شود که همه آنها با خط نستعلیق نقر و در آخر آنها تاریخ های مختلفی به چشم می خورد و نام نصیرالملک در آنها ذکر شده است.<br />
    اشعار کتیبه دوم مربوط به شوریده شیرازی شاعرمعروف دوره قاجاریه می باشد . در یکی از کتیبه ها نیز به مظفرالدین شاه قاجار اشاره شده است.<br />
    <br />
    یکی از قسمت های بسیار جالب این بنا پنجره های آهنی است که در طبقه اول ساختمان در پای ایوان بزرگ دو ستونی در مدخل سردابه قراردارد و از نمونه های جالب پنجره های آهنی در دوره قاجاریه محسوب میشود . قسمت عمده درهای چوبی از چوب ساج تهیه گردید و به همین جهت با گذشت سال ها سالم باقی&zwnj;مانده و هیئت اصلی خود را حفظ نموده اند.<br />
    کاشی کاری پیشانی ایوان مرکزی و اطراف آن از جالبترین کاشی کاری های دوره قاجاریه محسوب می شود که نمونه آن در سایر بناهای دوره قاجاریه دیده نمی&zwnj;شود . چه در ساختمان دیوانخانه قوام الملکی یا اندرون زینت الملکی و یا سایر بناهای دوره قاجاریه نظیر کتیبه کاشی کاری پیشانی ایوان ساختمان باغ ارم دیده نمی&zwnj;شود و به همین جهت آنرا باید از نمونه های منحصربه فرد دانست.<br />
    <br />
    از مرحوم نصیرالملک بناهای ارزنده ای در فارس باقی&zwnj;مانده ازجمله آنها مسجد نصیرالملک، خانه نصیرالملک و باغ ارم می باشد . ساختمان قدیمی آن از بناهای بسیار جالب و بی نظیر دوره قاجاریه محسوب می شود.<br />
    <br />
    از جمله قسمتهای بسیار جالب این بنای با ارزش سردابه ای است که در طبقه زیرین این ساختمان قرار دارد و آب جاری از وسط آن می گذرد و به همین جهت سردابه مذکور از نظر زندگی در تابستان محل بسیار مناسبی بوده است.<br />
    &nbsp;</p>
    
    <hr />
    <p style="text-align:justify"><br />
    <strong>چرا باید از این مکان دیدن کرد؟</strong><br />
    باغ ارم از شاهکارهای هنری و معماری جهان بشمار میرود. علاوه بر این انواع گل و گیاهان مختلف از نقاط دیگر دنیا در آن گردآوری شده است که در نوع خود آنرا بی بدیل کرده است.<br />
    &nbsp;</p>
    
    <hr />
    <hr />
    <p style="text-align:justify"><br />
    <strong>منابع:</strong><br />
    fa.wikipedia.org<br />
    shirazgasht.blogfa.com</p>
    
        </div>
    </div>
    <br>   
<br>
<p >
    <ul dir="rtl">
       <h3> برای مشاهده نظر دیگر کاربران روی این کلمه <a href="detail">  نظرات کاربران</a> کلیک کنید.</h3>
    </ul>
</p>


<br>
<div class="panel panel-default" style="background-color: dimgray;" dir="rtl">
    <div class="panel-heading">شما هم می توانید در این مورد نظر دهید:</div>
    <div class="panel-body">
        <form method="POST" action="/eramgarden" onsubmit="">
          @csrf
            <input name="firstname" type="text" value="" id="" class="form-control rtl form-group-comment" placeholder="نام" />
            <br>
            <input name="lastname" type="text" value="" id="" class="form-control rtl form-group-comment" placeholder=" نام خانوادگی " />
            <br>
            <input name="email" type="text" value="" id="" class="form-control ltr text-right form-group-comment" placeholder="ایمیل" />
            <br>
            <script src="js/eleanor_bb.js"></script><!-- BB EDITOR TEXTAREA+PANEL -->

<textarea name="text" rows="4" placeholder="نظر خود را در مورد این مطلب بنویسید..."" id=""  cols="20" class="form-control form-group"></textarea>	

<button type="submit" class="btn btn-primary ">ارسال نظر</button>
        </form>
    </div>
</div>
</div>
</div>

    <br>
    <footer class=" bg-secondary text-center" >
        <p class="mb-1" lang="en">mojtaba noshad</p>
        <p class="mb-1" lang="fa"> در صورت بروز مشکل با این <a href="#number"> شماره </a> تماس بگیرید . </p>
      <div class="mb-3">
           <div class="number-phone" id="number">
               <a >
                  <span>09359175744</span>
               </a>
              <i class="mdi mdi-phone"></i>
           </div>
       </div>
       <br>
       <p >این سایت برای پروژه درس برنامه نویسی وب نوشته شده است .</p>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
  </body>
  </html>