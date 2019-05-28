<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title>@yield('title')</title>
</head>
<body>
   <p>
    
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
          <img src="/image/logo.png" width="100" height="100" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">หน้าหลัก <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">เกี่ยวกับโครงการ</a>
            <a class="nav-item nav-link" href="#">ลงทะเบียน</a>
            <a class="nav-item nav-link" href="#">ข้อมูลสมาชิก</a>
            <a class="nav-item nav-link" href="#">เข้าสู่ระบบ</a>
          </div>
        </div>
      </nav>
   </p>
<a href="">@yield('content')</a>
<footer>
    <h1>
      @yield('footer')
    </h1>
    <!-- Footer -->
    <footer class="page-footer font-small mdb-color pt-4">
    <!-- Footer Links -->
    <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">หน่วยเวชสารสนเทศ</h6>
        <p>ภาควิชาอายุรศาสตร์ ตึกอัษฏางค์ ชั้น 13 คณะแพทยศาสศาสตร์ศิริราชพยาบาล</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Menu</h6>
        <p>
          <a href="#!">หน้าหลัก</a>
        </p>
        <p>
          <a href="#!">เกี่ยวกับโครงการ</a>
        </p>
        <p>
          <a href="#!">ลงทะเบียน</a>
        </p>
        <p>
          <a href="#!">ข้อมูลสมาชิก</a>
        </p>
        <p>
          <a href="#!">เข้าสู่ระบบ</a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Links ที่เกี่ยวข้อง</h6>
        <p>
          <a href="#!">ค่า BMI มาตรฐาน</a>
        </p>
        <p>
          <a href="#!">Step Test</a>
        </p>
    
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">ติดต่อเรา</h6>
        <p>
          <i class="fas fa-home mr-3"></i> หน่วยเวชสารสนเทศ</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> Email : contact@simedicine.org</p>
        <p>
          <i class="fas fa-phone mr-3"></i> โทร : 02 4197043 ต่อ 107</p>
        <p>
          <i class="fas fa-print mr-3"></i> หรือ 02 4197043 ต่อ 107</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">© 2019 Copyright: IT Medicine
         
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->
   </footer>
</body>
</html>