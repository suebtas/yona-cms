
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>clinic center</title>
    <meta name="description" content="This is a free Bootstrap landing page theme created for BootstrapZero. Feature video background and one page design." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="/website/css/styles.css" />

    <!--scripts loaded here from cdn for performance -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="/website/js/scripts.js"></script>

    <script src="/website/owl-carousel/owl.carousel.js"></script>
    <link href="/website/owl-carousel/owl.carousel.css" rel="stylesheet"/>
    <link href="/website/owl-carousel/owl.theme.css" rel="stylesheet"/>
    <link href="/website/owl-carousel/owl.transitions.css" rel="stylesheet"/>
        
    <style media="screen">
      @font-face {
        font-family: thfont;
        src: url(/website/fonts/Cloud-Light.otf);
      }
      @font-face {
        font-family: thfontb;
        src: url(/website/fonts/Cloud-Bold.otf);
      }

      .thfontb {
          font-family: thfontb;
          font-size: 200%;
      }

      .thfont {
          font-family: thfont;
          font-size: 150%;
      }

      .bd {
          background-color: rgb(255, 255, 255);
          margin: 2%;
          border-radius: 25px;
          color: rgb(37, 37, 37);
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
          padding: 1%;
      }

      .line {
          margin-top: 2%;
          margin-bottom: 2%;
          border-bottom: 5px solid rgb(51, 51, 51);
      }
      {%  if session.get('template') == 1  %}
        html{
          -webkit-filter: grayscale(100%);
          /* Safari 6.0 - 9.0 */
          filter: grayscale(100%);
        }
        {% endif %}
    </style>
  </head>
  <body>
    {% block popup %}
    {% endblock %}


    <nav id="topNav" class="navbar navbar-default navbar-fixed-top affix" style="background-color:white;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="bs-navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="/" style="color:rgb(47, 47, 47)">หน้าหลัก</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/news" style="color:rgb(47, 47, 47)">ข่าวประชาสัมพันธ์</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/Event" style="color:rgb(47, 47, 47)">กิจกรรมและผลงาน</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/Document" style="color:rgb(47, 47, 47)">รายงานและเอกสาร</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/forum/index/search" style="color:rgb(47, 47, 47)">เว็บบอร์ด</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#last" style="color:rgb(47, 47, 47)">ติดต่อเรา</a>
                    </li>
                    <li>
                        <a class="page-scroll" data-toggle="modal" title="A free Bootstrap video landing theme" href="#faqModal" style="color:rgb(47, 47, 47)">FAQ</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/about.html" style="color:rgb(47, 47, 47)">ประวัติความเป็นมา</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">

                  <li>
                      <a class="btn" href="set1" style="background-color:rgb(59, 59, 59);border-radius:0px">1</a>
                  </li>
                  <li>
                      <a class="btn" href="set2" style="background-color:rgb(0, 163, 255);border-radius:0px">2</a>
                  </li>
                  <li>
                      <a class="btn" href="set3" style="background-color:rgb(255, 161, 0);border-radius:0px;">3</a>
                  </li>
                    <li>
                        <a class="page-scroll" href="/admin" style="background-color:rgba(125, 209, 0, 0.51);color:rgb(47, 47, 47)">เข้าสู่ระบบ</a>
                    </li>
                </ul>
                </ul>
            </div>
        </div>
    </nav>
    {{content()}}
    {% block content %}
    {% endblock %}
    {% block news %}
    {% endblock %}
    <section id="last" class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="margin-top-0 wow fadeIn">ติดต่อคลินิกเซ็นเตอร์ อบจ.ระยอง</h2>
                    <hr class="primary">

                    <div id="map" style="width:100%;height:500px;background:yellow"></div>

                    <script>
                    						function myMap() {
                    							var myLatLng = {lat:12.6826329, lng: 101.2294979};
                    							var map = new google.maps.Map(document.getElementById('map'), {
                    							  zoom: 17,
                    							  center: myLatLng
                    							});

                    							var marker = new google.maps.Marker({
                    							  position: myLatLng,
                    							  map: map,
                    							  title: 'องค์การบริหารส่วนจังหวัดระยอง อำเภอเมืองระยอง ระยอง'
                    							});
                    						  }

                      </script>
                    <input type="button" class="btn btn-default" name="name" value="RESET MAP POSITION" onclick='myMap()'>
                    <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
                    <p>ศูนย์เครือข่ายเพื่อแก้ไขปัญหาและส่งเสริมการมีส่วนร่วมในการพัฒนาท้องถิ่นจังหวัดระยอง</p>

                    <p>
                      <i class="ion-icon ion-android-call"></i> 038-617430 ต่อ 724
                    </p>
                    <p>
                      <i class="ion-icon ion-android-print"></i> 038-011692
                    </p>
                </div>
                <form action="{{ url.get() }}message/index/save" method="post">
                  <div class="col-lg-10 col-lg-offset-1 text-center">
                      <form class="contact-form row">
                          <div class="col-md-4">
                              <label></label>
                              <input type="text" id="name" name="name" class="form-control" placeholder="ชื่อผู้ส่ง" required="required">
                          </div>
                          <div class="col-md-4">
                              <label></label>
                              <input type="text" id="email" name="email" class="form-control" placeholder=" อีเมล " required="required">
                          </div>
                          <div class="col-md-4">
                              <label></label>
                              <input type="text" id="tel" name="tel" class="form-control" placeholder=" เบอร์โทรศัพท์ " required="required">
                          </div>
                          <div class="col-md-12">
                              <label></label>
                              <input type="text" id="subject" name="subject" class="form-control" placeholder=" หัวเรื่อง">
                          </div>
                          <div class="col-md-12">
                              <label></label>
                              <textarea class="form-control" id="detail" name="detail" rows="9" placeholder="เนื้อความ" required="required"></textarea>
                          </div>
                          <div class="col-md-4 col-md-offset-4">
                              <label></label>
                              <input type="submit" value="ส่งข้อความ" class="btn btn-lg btn-success btn-block thfont"  >
                               {#data-toggle="modal" data-target="#alertModal"#}

                          </div>
                      </form>
                  </div>
                </form>
            </div>
        </div>
    </section>
    <div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
            <center>
                <img src="//placehold.it/1200x700/222?text=..." id="galleryImage" class="img-responsive" />
                <p>
                    <br/>
                    <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
                </p>
          </center>
            </div>
        </div>
        </div>
    </div>
    <div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" style="background-color:rgb(255, 255, 255)">
                <h1 class="text-info">Clinic center คืออะไร?</h1>
                <center>
                    <img src="img/img01.bmp" class="img-responsive " alt="" />
                </center><br>
                <center>
                    <img src="img/img02.bmp" class="img-responsive" alt="" />
                </center>
            <div class="bg-primary">
              <p style="color:rgb(0, 171, 255)">วัตถุประสงค์</p>
              <p style="color:rgb(143, 255, 0)">
                ประวัติความเป็นมา
              </p>
              <p style="color:rgb(255, 255, 255)">&emsp;&emsp;องค์การบริหารส่วนจังหวัดระยอง ได้ดำเนินการจัดตั้งศูนย์เครือข่ายเพื่อแก้ไขปัญหาและส่งเสริมการมีส่วนร่วมในการพัฒนาท้องถิ่น Clinic Center ขององค์การบริหารส่วนจังหวัดระยอง โดยมีผู้แทนของภาคส่วนต่างๆ ในท้องถิ่น เข้าร่วมเป็นคณะกรรมการศูนย์เครือข่ายฯ เพื่อทำหน้าที่บริหารศูนย์เครื่อข่ายฯ ให้เป็นไปตามเจตนารมณ์ของคณะกรรมการการกระจายอำนาจให้แก่องค์กรปกครองส่วนท้องถิ่น สำนักนายกรัฐมนตรี</p>

              <p style="color:rgb(255, 255, 255)">&emsp;&emsp;ซึ่งองค์การบริหารส่วนจังหวัดระยอง ได้จัดตั้งศูนย์ Clinic Center เมื่อปี พ.ศ. 2550 เพื่อเป็นสื่อกลางในการที่จะช่วยเสริมสร้างความเข้าใจและความสัมพันธ์อันดีระหว่างองค์การบริหารส่วนจังหวัดระยอง องค์กรปกครองส่วนท้องถิ่น ส่วนราชการต่างๆ และประชาชนในจังหวัดระยอง โดยยึดหลักการมีส่วนร่วมเป็นสำคัญ ในการพัฒนาท้องถิ่นในจังหวัดระยอง</p>

              <p style="color:rgb(143, 255, 0)">
                วัตถุประสงค์
              </p>
              <p style="color:rgb(255, 255, 255)">&emsp;&emsp;1 เพื่อสร้างความเข้มแข็งให้กับองค์กรปกครองส่วนท้องถิ่น โดยเน้นการเรียนรู้ร่วมกันในท้องถิ่น</p>

              <p style="color:rgb(255, 255, 255)">&emsp;&emsp;2 เพื่อเป็นศูนย์กลางในการให้ข้อเสนอแนะและช่วยเหลือในการแก้ไขปัญหาและการพัฒนาท้องถิ่นในลักษณะเครือข่าย </p>

              <p style="color:rgb(255, 255, 255)">&emsp;&emsp;3 เพื่อเป็นศูนย์กลางความร่วมมือในการจัดทำแผนปฏิบัติการร่วมกันและประเมินผลการฏิบัติงานทุกภาคส่วนที่เกี่ยวข้อง</p>

              <p style="color:rgb(143, 255, 0)">
                บทบาทและหน้าที่ของศูนย์เครือขายเพื่อแก้ไขปัญหาและส่งเสริมการมีส่วนร่วมในการพัฒนาท้องถิ่น Clinic Center
              </p>
              <p style="color:rgb(255, 255, 255)">&emsp;&emsp;1 ประสานงานระหว่างส่วนราชการและองค์กรปกครองส่วนท้องถิ่นในจังหวัด เพื่อการสนับสนุนและส่งเสริม
             ให้เกิดการประสานจัดทำแผนพัฒนาท้องถิ่นในจังหวัด </p>

              <p style="color:rgb(255, 255, 255)">&emsp;&emsp;2 ประสานการปฏิบัติงานขององค์กรปกครองส่วนท้องถิ่น เพ่อร่วมกันแก้ไขปัญหาของประชาชนและการพัฒนาท้องถิ่น </p>

              <p style="color:rgb(255, 255, 255)">&emsp;&emsp;3 จัดกิจกรรมและเวทีสาธารณะ เพื่อส่งเสริมการมีส่วนร่วมและแสดงความคิดเห็นในการพัฒนาท้องถิ่นเป็นประจำ </p>

              <p style="color:rgb(255, 255, 255)">&emsp;&emsp;4 สร้างแหล่งเรียนรู้แลเสริมสร้างความรู้แก่องค์กรปกครองส่วนท้องถิ่น ส่วนท้องถิ่นและประชาชนทุกภาคส่วน  </p>

              <p style="color:rgb(255, 255, 255)">&emsp;&emsp;5 ดำเนินการอื่นใดที่เป็นประโยชน์ส่งเสริมในการเพิ่มประสิทธิภาพ รวมทั้งส่งเสริมการกระจายอำนาจให้แก่องค์กรปกครองส่วนท้องถิ่น</p>

            </div>

                <button class="btn btn-danger btn-lg center-block" data-dismiss="modal" aria-hidden="false"> close </button>
            </div>
        </div>
        </div>
    </div>
    <div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-center text-success">ส่งข้อความสำเร็จ</h2>
                <p class="text-center">คลิกปุ่ม OK เพื่อกลับสู่หน้าหลัก</p>
                <br/>
                <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK <i class="ion-android-close"></i></button>
            </div>
        </div>
        </div>
    </div>
    <div id="faqModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-center text-success">FAQ</h2>
                <p>1) Q: โหลดเอกสารได้อย่างไร <br><span style="margin-left:5%">A:เข้าสู่หน้าของการดาวน์โหลดเอกสารและคลิกที่ปุ่ม</span><button type="button" class="btn btn-success">Download</button></p>
                <br/>
            <p>2) Q:ดูข้อมูลติดต่อที่ไหน <br><span style="margin-left:5%">A:สามารถกดได้ที่เมนูติดต่อ</span></p>

                <br/>
            <p>3) Q:สามารถเปิดwebsiteบนมือถือได้หรือไม่ <br><span style="margin-left:5%">A:websiteมีการออกแบบมาให้รองรับทุกอุปกรณ์ครับ</span></p>
                <br/>
            <div class="text-center">
              <button class="btn btn-success btn-lg">Download FAQ <i class="ion-arrow-down-a"></i></button>
                <button class="btn btn-danger btn-lg " data-dismiss="modal" aria-hidden="true">close <i class="ion-android-close"></i></button>
            </div>
            </div>
        </div>
        </div>
    </div>
    {% block script %}
    {% endblock %}
  </body>
</html>
