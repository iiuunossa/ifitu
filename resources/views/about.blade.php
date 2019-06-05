
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="{{url('/css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/font-awesome/css/font-awesome.min.css')}}">

    <title>About IFITU</title>

    <!-- Custom styles for this template -->
  
  </head>

  <body>
    @include("layouts.header")
    <br>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-8">หลักการและเหตุผล</h1>
          <p class="lead my-3 font-italic">เพื่อสร้างเสริมสุขภาพพร้อมทั้งสลายมโนของผู้ร่วมโครงการ อันจะนำพาให้ชีวิตการงานของเขาและเธอเหล่านั้นเปลี่ยนแปลงไปในทางที่ดีขึ้น</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight">Read more...</a></p>
        </div>
      </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom" style="color:green">
          กติกาการแข่งขัน (คิดคะแนนจาก 2 ส่วน) 
          </h3>
        
          <div class="blog-post">
            <h4 class="blog-post-title" style="color:green">คะแนนความเปลี่ยนแปลงดัชนีมวลกาย (BMI) </h4>
            <p>ตามค่า BMI มาตรฐาน 18.5 - 22.9 จึงกำหนดให้ค่าอุดมคติคือค่าตรงกลางได้แก่ 20.7 ผู้เข้าร่วมโครงการสามารถทำให้ BMI ของตนเองเข้าใกล้ค่านี้ได้มากเท่าไหร่ก็จะได้คะแนนมากเท่านั้น โดยการคำนวณดังต่อไปนี้</p>
            <hr>
            <h4 style="color:green">ตัวอย่าง</h4>
            <p>นางสาวเอเรียน่า ณ วันเข้าโครงการมี BMI 21.1 ห่างจาก 20.7 = 0.4 จะเรียกว่า db

                นางสาวเอเรียน่า ณ วันตัดสินมี BMI 20.9 ห่างจาก 20.7 = 0.2 จะเรียกว่า df

                ดังนั้น นางสาวเอเรียน่าจะได้คะแนนในส่วนนี้จาก 0.2/0.4*100 = 50 คะแนน

                ในกรณีที่ค่า BMI ณ วันตัดสินเกินจากค่า 20.7 ไปในทิศเดียวกันกับทิศมุ่งสู่ค่าอุดมคติ ให้ทำการย้อนกลับไปด้วยระยะเท่ากับระยะขจัดที่เกินมา เช่น

                นางสาวเอเรียน่า ณ วันตัดสินมี BMI 20.6 เลยจากจาก 20.7 มา 0.1

                คะแนนจะคิดจาก |(BMI เริ่มต้น) - (ค่าอุดมคติที่ได้รับการชดเชย)| / db * 100 จะได้

                |21.1 - (20.7 + 0.1)| / 0.4 * 100

                |21.1 - 20.8| / 0.4 * 100

                0.3 / 0.4 * 100 = 75 คะแนน

                หากผู้เข้าโครงการมีค่า df มากกว่า db ให้คิดคะแนนด้วยสูตรเดิมแต่ค่าที่เกิน 100 จะเป็นคะแนนติดลบ
                </p>
          </div><!-- /.blog-post -->
          <hr>
          <div class="blog-post">
            <h4 class="blog-post-title" style="color:green">คะแนนการพัฒนาทางด้านร่างกาย</h4>
            <p>จะทำการทดสอบและวัดผลด้วย Step Test โดยเกณฑ์ให้คะแนนเป็นดังนี้</p>
            <hr>
            <h4 style="color:green">เกณฑ์การคิดคะแนน</h4>
            <p>หากได้ excellent เอาไปเลย 100 คะแนน
            
            หากได้ Good ให้เทียบอัตราส่วนคะแนนที่ 81 - 99 คะแนน
            
            หากได้ Above Average ให้เทียบอัตราส่วนคะแนนที่ 61 - 80 คะแนน
            
            หากได้ Average ให้เทียบอัตราส่วนคะแนนที่ 41 - 60 คะแนน
            
            หากได้ Below Average ให้เทียบอัตราส่วนคะแนนที่ 21 - 40 คะแนน
            
            หากได้ Poor ให้เทียบอัตราส่วนคะแนนที่ 1 - 20 คะแนน
            
            หากได้ Very Poor เอาไปเลย 0 คะแนน
            
            ผู้เข้าโครงการทำการทดสอบเพื่อหาคะแนน ณ วันเริ่มโครงการ จะเรียกว่า fb และ ณ วันสิ้นสุดโครงการ จะเรียกว่า ff
            
            เป้าหมายของทุกคนคือคะแนนที่ดีขึ้นและสูง ดังนั้นจะคิดคะแนนในส่วนนี้ตามสูตรนี้
            
            ff + [(ff - fb) / (max[ff, fb]) * 100]
            
            หากค่าเกิน 100 ให้คิดเพียง 100 เท่านั้น
            
            นำคะแนนทั้ง 2 ข้อมารวมกันเพื่อจัดลำดับผู้ชนะ
            </p>
            <hr>
          <div class="blog-post">
            <h4 class="blog-post-title" style="color:green">รางวัลการแข่งขัน</h4>
            
            <p>ชนะเลิศ กินฟรี<br>

            รองชนะเลิศอันดับ 1 จ่าย 30 % ของราคาหารด้วย (n-1) <br>

            รองชนะเลิศอันดับ 2 จ่าย 50 % ของราคาหารด้วย (n-1) <br>

            ที่เหลือก็ช่วยกันหารส่วนที่ยังขาด
            </p>

            <hr>
          <div class="blog-post">
            <h4 class="blog-post-title" style="color:green">ระยะเวลาโครงการ</h4>     
            <p>1 มิถุนายน - 30 กันยายน 2562</p>

 </div><!-- /.blog-post -->

         
        </div><!-- /.blog-main -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  

    <script src="{{url('/js/jquery-3.4.0.min.js') }}"></script>
    <script src="{{url('/js/popper.min.js')}}"></script>
    <script src= "{{url('/js/bootstrap/bootstrap.min.js')}}"></script>

  </body>
  @include("layouts.footer")
</html>
