{% extends "../../../views/template1.volt" %}

{% block content %}

  {#{ page.getText() }#}

  <header id="first">
      <div class="header-content">
        <div class="container fadeIn wow inner" style="margin-top: 10%; background-color: rgba(255, 255, 255, 0.498039); padding: 2%; visibility: visible; animation-name: fadeIn;">
          <b><center><h1 class="thfontb wow fadeInLeftBig" style="font-size: 300%; color: rgb(66, 66, 66); visibility: visible; animation-name: fadeInLeftBig;">ศูนย์เครือข่ายเพื่อแก้ไขปัญหา <br> และส่งเสริมการมีส่วนร่วมในการพัฒนาท้องถื่น</h1></center></b>
          <center><h1 class="thfont wow fadeInRightBig" style="font-size: 200%; color: rgb(34, 34, 34); visibility: visible; animation-name: fadeInRightBig;">(Clinic Center) <br> องค์การบริหารส่วนจังหวัดระยอง</h1>
            <div class="fh5co-counter-style-1" data-stellar-background-ratio="0.5">
                      <span class="thfont" style="color:rgb(0, 0, 0)">
                        <i class="ion-icon ion-ios-person"></i> จำนวนผู้เข้าชม : {{visits}}
                      </span>
            </div>
          <br>
            <a href="#one" class="btn btn-success btn-xl page-scroll">เข้าสู่เว็บไซต์</a>
          </center>
        </div>
      </div>
      <video autoplay="" loop="" class="fillWidth fadeIn wow collapse in" poster="https://s3-us-west-2.amazonaws.com/coverr/poster/Traffic-blurred2.jpg" id="video-background" style="visibility: visible; animation-name: fadeIn;">
          <source src="website/img/Traffic-blurred2.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
      </video>
  </header>
{% endblock %}

{% block news %}
    <section class="bg-primary" id="zero">

              <div class="container">
                  <div class="row">
                      <div class="col-lg-12 text-center">
                          <h2 class="margin-top-0 text-primary" style="color:rgb(255, 184, 0)">ข่าวประชาสัมพันธ์</h2>
                          <hr class="primary">
                      </div>
                  </div>
              </div>
              <div class="container">
                <div class="row">    
                    {% for item in entries %}   
                      {% set url = helper.langUrl(['for':'publication','type':item.getTypeSlug(),'slug':item.getSlug() ]) %}
                      {% set bigImage = helper.image(['id':item.getId(), 'type':'publication', 'width': 500, 'strategy': 'w'], ['alt':item.getTitle()|escape_attr]) %}
                      {% set image = helper.image(['id':item.getId(),'type':'publication','width': 100, 'class':"img-responsive"], ['alt':item.getTitle()|escape_attr]) %}
                
                <div class="col-lg-4 text-center">
                        <div class="feature wow " >

                          <a href="#galleryModal" style="width:70%" class="gallery-box" data-toggle="modal" data-src="/img/cache/publication/0/5_w_500.jpg">
                              {#<img src="website/img/5_w_100.jpg"  class="img-responsive" alt="Image 1">#}
                              {{ image.imageHTML() }}
                              <div class="gallery-box-caption">
                                  <div class="gallery-box-content">
                                      <div>
                                          <i class="icon-lg ion-ios-search"></i>
                                      </div>
                                  </div>
                              </div>
                          </a>
                          <a href="{{ url }}"  class="text-info"><p>{{ helper.announce(item.getTitle(), 130) }}</p></a>
                            <i>{{ item.getDate('วันที่ d M Y') }}</i>
                        </div>
                    </div>
                    {% endfor %}
                </div>
                <center><a href="news" class="btn btn-xl btn-success">ดูข่าวสารทั้งหมด</a></center>
              </div>
    </section>


    <section id="one" style="background-color:rgb(224, 224, 224)">
        <div class="row bd " style="background-color:rgb(98, 194, 255);color:white;">
            <div class="col-xs-12 text-center">
                <h3 class="thfontb"><marquee BEHAVIOR=SLIDE>ศูนย์เครือข่ายเพื่อแก้ไขปัญหาและส่งเสริมการมีส่วนร่วมในการพัฒนาท้องถิ่น  (Clinic Center) องค์การบริหารส่วนจังหวัดระยอง</marquee></h3>
            </div>
        </div>
        <div class="container">
          <div class="row bd" style="margin:0;">
            <div class="col-xs-12 text-center">
              Login : <a class="btn btn-xl btn-primary" href="../admin" style="background-color:rgba(125, 209, 0, 0.51);color:rgb(47, 47, 47)">เข้าสู่ระบบ</a>
            </div>
          </div>
        </div>
        <div id="test" class="bd">
            <div class="container">
                <div class="row">

                    <div class="col-xs-6">
                        <center><span class="thfont">ข่าวประชาสัมพันธ์</span></center>
                        <div class="line">
                        </div>
                        <div id="owl-c" class="owl-carousel">

                            <div class="item" style="background:rgb(226, 226, 226);color:rgb(9, 94, 219)">
                                <img src="website/img/news.png" class="img-responsive" alt="Touch">
                                <h3>หัวข้อข่าว</h3>
                                <h4>รายละเอียด</h4>
                            </div>

                            {% for item in entries %}
                              {% set image = helper.image(['id':item.getId(), 'type':'publication', 'class':"img-responsive"]) %}

                              {% set url = helper.langUrl([
                                  'for':'publication',
                                  'type':item.getTypeSlug(),
                                  'slug':item.getSlug()
                                  ]) 
                              %}
                              <div class="item" style="background:rgb(226, 226, 226);color:rgb(9, 94, 219)">
                                  {% if image.isExists() %}
                                      {{ image.imageHTML() }}                                    
                                  {% endif %}
                                  <a href="{{url}}" class="text-info">
                                    <p>{{ helper.announce(item.getTitle(), 130) }}</p>
                                  </a>
                                  <i>{{ item.getDate('วันที่ d M Y') }}</i>
                              </div>

                            {% endfor %}

                        </div>


                    </div>
                    <div class="col-xs-6 ">
                        <center><span class="thfont">กิจกรรมและผลงาน</span></center>
                        <div class="line">
                        </div>
                        <div id="owl-d" class="owl-carousel">

                            <div class="item" style="background:rgb(249, 194, 0);color:rgb(28, 28, 28)">
                                <img src="website/img/act.png" class="img-responsive" alt="Touch">
                                <h3>เลื่อนเพื่อดูกิจกรรมและผลงาน</h3>
                            </div>
                            <div class="item" style="background:rgb(249, 194, 0);color:rgb(28, 28, 28)">
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Y4DNmMNQc54"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <h3>กิจกรรมท้าให้อ่าน สายที่ 1</h3>
                            </div>
                            <div class="item" style="background:rgb(249, 194, 0);color:rgb(28, 28, 28)">
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/n8BiUIdXK4o"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <h3>กิจกรรมท้าให้อ่าน สายที่ 2</h3>
                            </div>
                            <div class="item" style="background:rgb(249, 194, 0);color:rgb(28, 28, 28)">
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-Q0lvIFDxv8"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <h3>กิจกรรมท้าให้อ่าน สายที่ 3</h3>
                            </div>
                            <div class="item" style="background:rgb(249, 194, 0);color:rgb(28, 28, 28)">
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5JArTNz9z00"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <h3>กิจกรรมท้าให้อ่าน สายที่ 4</h3>
                            </div>
                            <div class="item" style="background:rgb(249, 194, 0);color:rgb(28, 28, 28)">
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Nl19OKJUbiA"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <h3>กิจกรรมท้าให้อ่าน สายที่ 5</h3>
                            </div>
                            <div class="item" style="background:rgb(249, 194, 0);color:rgb(28, 28, 28)">
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YJOSxIY38Yw"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <h3>ท้าให้อ่าน รอบชิงชนะเลิศ</h3>
                            </div>
                            <div class="item" style="background:rgb(249, 194, 0);color:rgb(28, 28, 28)">
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Ox7qs1ByCBY"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <h3>ผลการแข่งขันท้าให้อ่าน รอบชิงชนะเลิศ</h3>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-xs-6">
                    <center><span class="thfont">
            รายงานและเอกสาร
          </span></center>
                    <div class="line">
                    </div>
                    <div id="owl-e" class="owl-carousel">

                        <div class="item" style="background:rgb(59, 59, 59)">
                            <img src="website/img/doc.png" class="img-responsive" alt="Touch">
                            <h3>คู่มือการใช้งานระบบฯ (Clinic Center) สำหรับผู้ปรับปรุงข้อมูล</h3>
                            <a href="download/11.pdf" class="btn btn-success">download</a>
                        </div>
                        <div class="item" style="background:rgb(59, 59, 59)">
                            <img src="website/img/doc.png" class="img-responsive" alt="Touch">
                            <h3>คู่มือการใช้งานระบบฯ (Clinic Center) สำหรับผู้รับรองข้อมูล</h3>
                            <a href="download/12.pdf" class="btn btn-success">download</a>
                        </div>
                        <div class="item" style="background:rgb(59, 59, 59)">
                            <img src="website/img/doc.png" class="img-responsive" alt="Touch">
                            <h3>วิธีการดูรายงานย้อนหลัง</h3>
                            <a href="download/rayong.pdf" class="btn btn-success">download</a>
                        </div>

                        <div class="item" style="background:rgb(36, 36, 36)">
                            <img src="website/img/report.png" class="img-responsive" alt="Touch">
                            <h3>รายงานภาพรวมของ อปท. ในพื้นที่จังหวัดระยอง (ด้านรายได้)</h3>
                            <a href="download/report-01.pdf" class="btn btn-success">download</a>
                        </div>

                        <div class="item" style="background:rgb(36, 36, 36)">
                            <img src="website/img/report.png" class="img-responsive" alt="Touch">
                            <h3>รายงานภาพรวมของ อปท. ในพื้นที่จังหวัดระยอง (ด้านพาณิชยกรรม)</h3>
                            <a href="download/report-02.bmp" class="btn btn-success">download</a>
                        </div>

                        <div class="item" style="background:rgb(36, 36, 36)">
                            <img src="website/img/report.png" class="img-responsive" alt="Touch">
                            <h3>รายงานภาพรวมของ อปท. ในพื้นที่จังหวัดระยอง (รายงานรายได้จากเกษตรกรรม)</h3>
                            <a href="download/report-03.bmp" class="btn btn-success">download</a>
                        </div>
                        <div class="item" style="background:rgb(36, 36, 36)">
                            <img src="website/img/report.png" class="img-responsive" alt="Touch">
                            <h3>รายงานภาพรวมของ อปท. ในพื้นที่จังหวัดระยอง (รายงานรายได้จากเกษตรกรรม)</h3>
                            <a href="download/report-03.bmp" class="btn btn-success">download</a>
                        </div>
                        <div class="item" style="background:rgb(36, 36, 36)">
                            <img src="website/img/report.png" class="img-responsive" alt="Touch">
                            <h3>รายงานผลการดำเนินงานศูนย์เคลือข่ายเพื่อแก้ไชปัญหาและส่งเสริมการมีส่วนร่วมในการพัฒนาท้องถิ่น</h3>
                            <a href="download/report-04.pdf" class="btn btn-success" disabled>download</a>
                        </div>

                    </div>
                </div>
                <div class="col-xs-6">
                    <center><span class="thfont">
                กระทู้ล่าสุด
            </span></center>
                    <div class="line">
                    </div>
                    <div id="owl-f" class="owl-carousel" >

                        {% for item in posts %}
                        <div class="item" style="background:rgb(255, 233, 138);color:rgb(47, 47, 47)" >
                            <img src="website/img/forum.png" class="img-responsive" style="width:136px;height:120px;" alt="Touch">
                            <a href="forum/1.html" ><h3>{{item.getTitle()}}</h3></a>
                            <small>ตั้งหัวข้อเมื่อวันที่ {{item.getPostdate()}} โดย {#<a href="#">dosman</a>#}</small>
                        </div>
                        {% endfor %}
                    </div>


                </div>

            </div>

        </div>

        <div class="container">
            <div class="row bd">
                <div class="col-lg-12 text-center">

                    <br>
                    <p class="text-info">
                        ดาวโหลดวิธีการแก้ไขข้อมูลในระบบ Clinic Center กรณีรับรองข้อมูลเรียบร้อยแล้ว
                    </p>
                    <a href="download/update.pdf" class="btn btn-info btn-xl page-scroll">Download</a>
                </div>
            </div>
        </div>



    </section>    
{% endblock %}


{% block popup%}
<div>
xxxxxx
</div>
{% endblock %}

{% block script %}

    <style>
        #owl-demo .owl-item div {
            padding: 5px;
        }

        #owl-demo .owl-item img {
            display: block;
            width: 100%;
            height: auto;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        #owl-c .item,
        #owl-d .item,
        #owl-e .item,
        #owl-f .item {
            padding: 30px 0px;
            margin: 10px;
            color: #FFF;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            text-align: center;
        }

        #owl-c .item img,
        #owl-d .item img,
        #owl-e .item img,
        #owl-f .item img {
            width: auto;
            margin: 0 auto;
            display: block;
        }

        #owl-c .item h3,
        #owl-d .item h3,
        #owl-e .item h3,
        #owl-f .item h3 {
            font-size: 120%;
            font-weight: 300;
            margin: 25px 0 0;
        }

        #owl-c .item h4,
        #owl-d .item h4,
        #owl-e .item h4,
        #owl-f .item h4 {
            margin: 5px 0 0;
            font-size: 110%;
        }
    </style>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                autoPlay: 5000,
                stopOnHover: true,
                paginationSpeed: 1000,
                goToFirstSpeed: 2000,
                singleItem: true,
                autoHeight: true,
                transitionStyle: "fade"
            });
        });
    </script>
    <script>
        $(document).ready(function($) {
            $("#owl-c").owlCarousel({
                autoPlay: 5000,
                singleItem: true,
                stopOnHover: true,

            });
        });
        $(document).ready(function($) {
            $("#owl-d").owlCarousel({
                autoPlay: 5000,
                singleItem: true,
                stopOnHover: true,

            });
        });
        $(document).ready(function($) {
            $("#owl-e").owlCarousel({
                autoPlay: 5000,
                singleItem: true,
                stopOnHover: true,

            });
        });
        $(document).ready(function($) {
            $("#owl-f").owlCarousel({
                autoPlay: 5000,
                singleItem: true,
                stopOnHover: true,

            });
        });
        $("body").data("page", "frontpage");
    </script>
    <script type="text/javascript">
    $(window).load(function(){
        $('#popModal').modal('show');
    });
    </script>
{% endblock %}


{#<div class="central">
    <article>
        {{ page.getText() }}
    </article>
</div>
<div class="sidebar">
    {{ helper.widget('Publication').lastNews() }}
</div>

#}