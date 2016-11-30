<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ระบบฐานข้อมูลสารสนเทศเพื่อสนับสนุนการบริหารจัดการของศูนย์เครือข่าย เพื่อแก้ไขปัญหาและส่งเสริมการมีส่วนร่วมในการพัฒนาท้องถิ่น </title>

    <!-- Bootstrap -->
    <link href="{{ url.path() }}clinic/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url.path() }}clinic/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!--Select2-->
    <link href="{{ url.path() }}clinic/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <!-- <link href="../build/css/custom.min.css" rel="stylesheet"> -->

    <!--less-->
    {{ assets.outputCss('modules-clinic-css') }}
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-trophy"></i> <span>Clinic Center</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="{{ url.path() }}images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{user.name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url.get() }}clinic/index">Dashboard</a></li>
                    </ul>
                  </li>
                  <!--
                  <li><a><i class="fa fa-desktop"></i> จัดการข้อมูลพื้นฐาน  <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url.get() }}clinic-admin/admin-user">จัดการผู้ใช้งานและสิทธิ์</a></li>
                      <li><a href="media_gallery.html">จัดการกำหนดการกรอกข้อมูล</a></li>
                      <li><a href="typography.html">จัดการข่าวสาร</a></li>
                      <li><a href="{{ url.get() }}clinic-admin/office">จัดการเขตพื้นที่</a></li><li><a href="{{ url.get() }}clinic-admin/amphur">จัดการข้อมูลอำเภอ</a></li>
                      <li><a href="glyphicons.html">จัดการสถานะและสัญลักษณ์ข้อมูล </a></li>
                    </ul>
                  </li>
                  -->
                  <li><a><i class="fa fa-edit"></i> การสำรวจข้อมูลขั้นพื้นฐาน <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url.get() }}clinic/form/no1">1.ด้านสภาพทั่วไป</a></li>
                      <li><a href="{{ url.get() }}clinic/form/no2">2.ด้านโครงสร้างพื้นฐาน</a></li>
                      <li><a href="{{ url.get() }}clinic/form/no3">3.ด้านเศรษฐกิจ</a></li>
                      <li><a href="{{ url.get() }}clinic/form/no4">4.ด้านสังคม</a></li>
                      <li><a href="{{ url.get() }}clinic/form/no5">5.ด้านสาธารณสุข</a></li>
                      <li><a href="{{ url.get() }}clinic/form/no6">6.ด้านคุณภาพชีวิตและความปลอดภัยในทรัพย์สิน</a></li>
                      <li><a href="{{ url.get() }}clinic/form/no7">7.ด้านการป้องกันและบรรเทาสาธารณภัย</a></li>
                      <li><a href="{{ url.get() }}clinic/form/no8">8.ด้านสิ่งแวดล้อมและทรัพยากรธรรมชาติ</a></li>
                      <li><a href="{{ url.get() }}clinic/form/no9">9.ด้านการเมือง การบริหาร</a></li>
                    </ul>
                  </li>
                  <!--
                  <li><a><i class="fa fa-table"></i> การกรอกข้อมูลประจำปี <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">แจ้งเตือนการกรอกข้อมูล</a></li>
                      <li><a href="tables_dynamic.html">แสดงสถานะการกรอกข้อมูล</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i>ประมวลผลและวิเคราะห์ข้อมูลประจำปี<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">เงื่อนไขการวิเคราะห์ข้อมูล</a></li>
                      <li><a href="chartjs2.html">ประมวลผลข้อมูล</a></li>
                      <li><a href="morisjs.html">เปรียบเทียบข้อมูล</a></li>
                    </ul>
                  </li>
                  
                  <li><a><i class="fa fa-print"></i>ออกรายงานและส่งออกข้อมูล<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">ออกรายงานประจำปี</a></li>
                      <li><a href="fixed_footer.html">ออกรายงานรายชื่อผู้ใช้งาน</a></li>
                      <li><a href="fixed_footer.html">ออกรายงานสถานะการกรอกข้อมูลประจำปี</a></li>
                      <li><a href="fixed_footer.html">ส่งออกข้อมูล (Export Data)</a></li>
                    </ul>
                  </li>
                  -->
                  {% if user.role=='cc-admin' %}
                  <li><a><i class="fa fa-list-alt"></i>วิเคราะห์ข้อมูล<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu"> 
                      <li><a href="{{ url.get() }}clinic/dataanaly">ประมวลผลข้อมูล</a></li>
                    </ul>
                  </li>
                  {% endif %}

                  <li><a><i class="fa fa-bullhorn"></i>แจ้งเตือนข่าวสาร<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu"> 
                    {% if user.role=='cc-admin' %}
                      <li><a href="{{ url.get() }}clinic/news">ส่งข่าวสาร</a></li>
                    {% endif %}
                      <li><a href="{{ url.get() }}clinic/news/check">สถานะการรับข่าวสาร</a></li>
                    {% if user.role=='cc-admin' %}
                      <li><a href="{{ url.get() }}clinic/webmessage">ข้อความ (Website)</a></li>
                    {% endif %}
                    </ul>
                  </li>

                  <li><a><i class="fa fa-comment"></i>กระทู้<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu"> 
                      <li><a href="{{ url.get() }}clinic/forum">ถาม-ตอบ กระทู้</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              
            </div>
            <!-- /sidebar menu -->
            {% if user.role=='cc-admin' %}
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              {{ link_to("admin/index", '<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>',"data-toggle":"tooltip","data-placement":"top","title":"Settings") }} 
              <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Logout" onclick="document.getElementById('logout-form').submit()">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
               </a>
            </div>
            <!-- /menu footer buttons -->
            {% endif %}
            <form action="{{ url.get() }}admin/index/logout" method="post" style="display: none;" id="logout-form">
              <input type="hidden" name="{{ security.getTokenKey() }}"
                         value="{{ security.getToken() }}">
            </form>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ url.path() }}images/img.jpg" alt="">{{user.name}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="javascript:void(0);" onclick="document.getElementById('logout-form').submit()"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="{{url.get()}}clinic/news/check" class="dropdown-toggle info-number" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">{{user.getUnreadNews()}}</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->

            {{ content() }}
                    
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            ระบบ Clinic Center จ.ระยอง Copyright © 2559.
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>


    
  </body>
</html>
