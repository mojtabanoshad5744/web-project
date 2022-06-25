<!DOCTYPE html>
  <html lang="fa">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> comment all for in place </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@3"></script>
    <link rel="icon" type="image.png" href="https://storage.torob.com/backend-api/base/images/mH/RS/mHRSUVxx2erWWRCT.jpg">
    <style>
      .content{
        background-color: aliceblue;
        color: #182c52;
        font-size: medium;
        align-content: space-between;
    }
    </style>
  </head>
  <body dir="rtl">
    
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


 
<p class="content center"  >
    <div class=" title m-b-md ">
        کامنت همه افراد در مورد این مکان
    </div>
    <p dir="rtl">
    @foreach($data as $datas)
    <p class="commentplase " dir="rtl"  >
      <h3> نام :</h3>{{ $datas->firstname }}
      <h3> نام خانوادگی: </h3>{{ $datas->lastname }}
      <h3> نظر این کاربر :</h3>{{ $datas->text }} 
      <br>
      ---------------------------------------
      <br>

    </P>
    @endforeach
    </p>
    
</p>
<br>
<br>
<a href="eramgarden" class="btn btn-primary">  بازگشت به صفحه قبل</a>
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