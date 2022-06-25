<!DOCTYPE html>
  <html lang="fa">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> galleryimage </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@3"></script>
    <link rel="icon" type="image.png" href="https://storage.torob.com/backend-api/base/images/mH/RS/mHRSUVxx2erWWRCT.jpg">
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

      <div id="carouselExampleIndicators" class="carousel slide "  style="width: 50rem; left: 300px;" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner text-center">
          <div class="carousel-item active">
            <img src="img/آرامگاه حافظ.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/بازار وکیل شیراز.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/باغ ارم.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/تخت جمشید.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/حمام وکیل شیراز.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/شاهچراغ.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
<br>
<br>
<p >
    <ul dir="rtl">
       <h3> برای بازگشت به صفحه اصلی روی کلمه <a href="tourism"> صفحه اصلی</a> کلیک کنید.</h3>
    </ul>
</p>






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