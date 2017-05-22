
{% block content %}

  {#{ page.getText() }#}

  <header id="first">
      <div class="header-content">
        <div class="container fadeIn wow inner" style="margin-top: 10%; background-color: rgba(255, 255, 255, 0.498039); padding: 2%; visibility: visible; animation-name: fadeIn;">
          <b><center><h1 class="thfontb wow fadeInLeftBig" style="font-size: 300%; color: rgb(66, 66, 66); visibility: visible; animation-name: fadeInLeftBig;">ศูนย์เครือข่ายเพื่อแก้ไขปัญหา <br> และส่งเสริมการมีส่วนร่วมในการพัฒนาท้องถิ่น</h1></center></b>
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
          <source src="website/img/Traffic-blurred2.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.</source>
      </video>
  </header>
{% endblock %}

{% block news %}
    <section id="one" class="bgtmp1">
        <div class="row bd textmar">

            <div class="col-xs-12 text-center">
                <h3 class="thfontb"><marquee BEHAVIOR=SLIDE>{{messages}}</marquee></h3>
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

                    <div class="col-md-6">
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
                              {% set image = helper.image(['id':item.getId(), 'type':'publication', 'class':"img-responsive",'width':"300"]) %}

                              {% set url = helper.langUrl([
                                  'for':'publication',
                                  'type':item.getTypeSlug(),
                                  'slug':item.getSlug()
                                  ])
                              %}
                              <div class="item" style="background:rgb(226, 226, 226);color:rgb(9, 94, 219)">

                                      <img src="{{ image.cachedRelPath() }}"  class="img-responsive" style="width:300;max-height:210px" alt="">

                                  <a href="{{url}}" class="text-info">
                                    <p>{{ helper.announce(item.getTitle(), 130) }}</p>
                                  </a>
                                  <i>{{ item.getDate('วันที่ d M Y') }}</i>
                              </div>

                            {% endfor %}

                        </div>


                    </div>

                    <div class="col-md-6 ">
                        <center><span class="thfont">กิจกรรมและผลงาน</span></center>
                        <div class="line"></div>
                        <div id="owl-d" class="owl-carousel">

                            <div class="item" style="background:rgb(249, 194, 0);color:rgb(28, 28, 28)">
                                <img src="website/img/act.png" class="img-responsive" alt="Touch">
                                <h3>เลื่อนเพื่อดูกิจกรรมและผลงาน</h3>
                            </div>
                            {% for item in Events %}
                            {% set image = helper.image(['id':item.getId(), 'type':'publication', 'class':"img-responsive", 'width':'300']) %}

                            {% set url = helper.langUrl([
                                'for':'publication',
                                'type':item.getTypeSlug(),
                                'slug':item.getSlug()
                                ])
                            %}
                            <div class="item" style="background:rgb(226, 226, 226);color:rgb(9, 94, 219)">
                                {#{% if image.isExists() %}
                                    {{ image.imageHTML() }}
                                {% endif %}#}
                                <img src="<?php if(strpos($item->getSlug(), 'watch') !== false){$slug = substr($item->getSlug(),-11); echo "https://img.youtube.com/vi/" . $slug . "/0.jpg";}else {echo $image->cachedRelPath();} ?>" class="img-responsive" style="width:300;max-height:210px"  alt="Image 1">
                                <a href="{{url}}" class="text-info">
                                  <p>{{ helper.announce(item.getTitle(), 130) }}</p>
                                </a>
                                <i>{{ item.getDate('วันที่ d M Y') }}</i>
                            </div>

                            {% endfor %}

                        </div>
                    </div>

                </div>

                <div class="col-md-6">
                    <center><span class="thfont">รายงานและเอกสาร</span></center>
                    <div class="line"></div>
                    <div id="owl-e" class="owl-carousel">
                      {% for item in Docs %}
                      {% set image = helper.image(['id':item.getId(), 'type':'publication', 'class':"img-responsive", 'width':'300']) %}

                      {% set url = helper.langUrl([
                          'for':'publication',
                          'type':item.getTypeSlug(),
                          'slug':item.getSlug()
                          ])
                      %}
                        <div class="item" style="background:rgb(59, 59, 59)">
                            <img src="website/img/doc.png" class="img-responsive" alt="Touch">
                            <a href="{{url}}"><h3>{{ helper.announce(item.getTitle(), 130) }}</h3></a>
                            <i>{{ item.getDate('วันที่ d M Y') }}</i>
                        </div>
                        {% endfor %}
                    </div>
                </div>
                <div class="col-md-6">
                    <center><span class="thfont">กระทู้ล่าสุด</span></center>
                    <div class="line"></div>
                    <div id="owl-f" class="owl-carousel" >

                        {% for item in posts %}
                        <div class="item" style="background:rgb(255, 233, 138);color:rgb(47, 47, 47)" >
                            <img src="website/img/forum.png" class="img-responsive" style="width:136px;height:120px;" alt="Touch">
                            <a href="post/index/comment?topic={{item.getId()}}" ><h3>{{item.getTitle()}}</h3></a>
                            <small>ตั้งหัวข้อเมื่อวันที่ {{item.getPostdate()}} โดย {{item.getPersonnelName()}}</small>
                        </div>
                        {% endfor %}
                    </div>


                </div>

            </div>

        </div>



    </section>
{% endblock %}


{% block popup%}
{% if popups == "public" %}
    <div id="popModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="True">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-body text-center bg-dark">
                        <center><img src="/static/files/popup/popup_img.jpg" class="img-responsive" alt="" /></cemter>
                          <button class="btn btn-danger btn-lg " data-dismiss="modal" aria-hidden="True">close <i class="ion-android-close"></i></button>
                      </div>
                  </div>
              </div>
          </div>
{% endif %}
{% endblock %}



{% block dashboard %}
    <session  id="dashboard" style="background-color:rgb(224, 224, 224)">

        <div id="dashboard_test" class="bd">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                    <!-- End .panel -->
                        <div class="panel panel-default panelToggle panelMove panelClose panelRefresh">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-bar-chart"></i> สถิติการตอบแบบสำรวจ</h4>
                            </div>
                            <div class="panel-body">
                                <div id="canvas_dahs" class="mt10" style="width: 100%; height:250px;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6">
                    <!-- End .panel -->
                        <div class="panel panel-default panelToggle panelMove panelClose panelRefresh">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-bar-chart"></i> สถิติการตอบแบบสำรวจในแต่ละด้าน</h4>
                            </div>
                            <div class="panel-body">
                                <div id="myplaceholder" class="mt10" style="width: 100%; height:250px;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                    <!-- End .panel -->
                        <div class="panel panel-default panelToggle panelMove panelClose panelRefresh">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-bar-chart"></i> สถานะการยืนยันข้อมูล</h4>
                            </div>
                            <div class="panel-body">
                                <div id="myplaceholder2" class="mt10" style="width: 100%; height:250px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </session>
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

    <!-- Flot -->
    <script src="{{ url.path() }}clinic/vendors/Flot/jquery.flot.js"></script>
    <script src="{{ url.path() }}clinic/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{ url.path() }}clinic/vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{ url.path() }}clinic/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{ url.path() }}clinic/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{ url.path() }}clinic/js/flot/jquery.flot.orderBars.js"></script>
    <script src="{{ url.path() }}clinic/js/flot/date.js"></script>
    <script src="{{ url.path() }}clinic/js/flot/jquery.flot.spline.js"></script>
    <script src="{{ url.path() }}clinic/js/flot/curvedLines.js"></script>
    {{ assets.outputJs('modules-index-js') }}

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
