@extends('layouts.app')
@include('layouts.header')
@section('title','IFitU')

@section('content')
<br>
<div class="bd-example" align="center">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/image/1.jpg" class="d-block w-50" alt="1">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="/image/2.jpg" class="d-block w-50" alt="2">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="/image/3.jpg" class="d-block w-50" alt="3">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div><br>

<hr><p>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h3 style="color:green">ปฏิทินกิจกรรม</h3><br>
      <i class="fas fa-bars"></i> 15-31 พ.ค. 2562 : ประชาสัมพันธ์โครงการ <br>
      <i class="fas fa-bars"></i> 4-7 มิ.ย. 2562 : ทำ Pre-test โครงการ <br>
    </div>
    <div class="col-sm-6">
      <h3 style="color:green">ข่าวประชาสัมพันธ์</h3><br>
      <i class="fas fa-file"></i> 31 พฤษภาคม นี้ เวลา 07.00 น.ขอเชิญร่วมพิธีทำบุญตักบาตรเฉลิมพระเกียรติ เนื่องในโอกาสวันเฉลิมพระชนมพรรษา สมเด็จพระนางเจ้าสุทิดา พัชรสุธาพิมลลักษณ พระบรมราชินี<br>
      <i class="fas fa-file"></i> เปิดให้บริการฉีดวัคซีนป้องกันไข้หวัดใหญ่ฟรีประจำปี พ.ศ. 2562 <br>
    </div>

  </div>
</div>
<hr><p>

</div>
     
@endsection






