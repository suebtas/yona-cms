        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>{{ office.name }}</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="หาคำถาม ...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">search !</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ด้านโครงสร้างพื้นฐาน การสำรวจข้อมูลขั้นพื้นฐาน <small>ครั้งที่ 1/2559</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a href="#{{ url.get() }}clinic-admin/exportword/printformno2" role="button" aria-expanded="false"><i class="fa fa-print"></i></a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- Smart Wizard -->
                    <p>ส่วนพื้นที่แสดงข้อความอธิบายการกรอกข้อมูล</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">2.1</span>
                            <span class="step_descr">การคมนาคม<br />
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no" id="st2">2.2-2.3</span>
                            <span class="step_descr">ระบบขนส่งและการสื่อสาร<br />
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">2.4</span>
                            <span class="step_descr">ไฟฟ้า<br />
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">2.5</span>
                            <span class="step_descr">ลักษณะการใช้ที่ดิน<br />
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-5">
                            <span class="step_no">สรุป</span>
                            <span class="step_descr">
                                ยืนยันข้อมูล<br />
                            </span>
                          </a>
                        </li>
                      </ul>


  <div id="step-1">
    {% block comment_tab1 %}
    {% endblock %}
    <form class="form-horizontal form-label-left">
      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">ถนนจำนวน</label>
          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
          <a href="#" id="no2_1_1" data-type="text" data-pk="1" data-title="Enter username">{{no2_1_1}}</a>
          </label>
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">สาย</label><br><br>
        <table id="road" class="table table-striped table-bordered" style="clear: both">
          <tbody>
            <thead>
              <th width="50%">
                ประเภทถนน
              </th>
              <th>
                จำนวน(สาย)
              </th>
              <th>
                ระยะทาง(กม.)
              </th>
            </thead>
              <tr>
                  <td>1.ถนนลูกรัง</td>
                  <td><a href="#" id="no2_1_2_1" data-type="text" data-pk="1" data-title="Enter username">{{no2_1_2_1}}</a></td>
                  <td><a href="#" id="no2_1_2_2" data-type="text" data-pk="1" data-title="Enter username">{{no2_1_2_2}}</a></td>
              </tr>
              <tr>
                  <td>2.ถนนลาดยาง</td>
                  <td><a href="#" id="no2_1_3_1" data-type="text" data-pk="1" data-title="Enter username">{{no2_1_3_1}}</a></td>
                  <td><a href="#" id="no2_1_3_2" data-type="text" data-pk="1" data-title="Enter username">{{no2_1_3_2}}</a></td>
              </tr>
              <tr>
                  <td>3.ถนนคอนกรีต</td>
                  <td><a href="#" id="no2_1_4_1" data-type="text" data-pk="1" data-title="Enter username">{{no2_1_4_1}}</a></td>
                  <td><a href="#" id="no2_1_4_2" data-type="text" data-pk="1" data-title="Enter username">{{no2_1_4_2}}</a></td>
              </tr>
              <tr>
                  <td>4.อื่นๆ(ระบุ) <a href="#" id="no2_1_5_1" data-type="text" data-pk="1" data-title="Enter username">{{no2_1_5_1}}</a></td>
                  <td><a href="#" id="no2_1_5_2" data-type="text" data-pk="1" data-title="Enter username">{{no2_1_5_2}}</a></td>
                  <td><a href="#" id="no2_1_5_3" data-type="text" data-pk="1" data-title="Enter username">{{no2_1_5_3}}</a></td>
              </tr>
          </tbody>
        </table>
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">สะพาน</label>
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
                <td><a href="#" id="no2_1_6" data-type="text" data-pk="1" data-title="Enter username">{{no2_1_6}}</a></td>
              </label>
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">สาย</label>

  </div>
    </form>
  </div>
  <div id="step-2">
    {% block comment_tab2 %}
    {% endblock %}
    <form class="form-horizontal form-label-left">
      <div class="form-group">
      <table class="table table-striped table-bordered" style="clear: both">
        <thead>
          <th colspan="3">
            <center>ระบบขนส่งมวลชน</center>
          </th>
        </thead>
            <tr>
                <td width="50%">รถโดยสารที่ให้บริการจำนวน</td>
                <td width="25%"><a href="#" id="no2_2_1" data-type="text" data-pk="1" data-title="Enter username">{{no2_2_1}}</a></td>
                <td width="25%">เส้นทาง</td>
            </tr>
            <tr>
              <td width="50%">
                อื่นๆ
              </td>
              <td width="25%"><a href="#" id="no2_2_2" data-type="text" data-pk="1" data-title="Enter username">{{no2_2_2}}</a></td>
              <td width="25%">เส้นทาง</td>
            </tr>
      </table>
    </div>
    <hr>
    <div class="form-group">
    <table class="table table-striped table-bordered">
      <thead>
        <th colspan="3">
          <center>การสื่อสารโทรคมนาคม</center>
        </th>
      </thead>
      <tr>
        <td width="50%">
          ที่ทำการไปรษณีย์
        </td>
        <td>
          <a href="#" id="no2_3_1" data-type="text" data-pk="1" data-title="Enter username">{{no2_3_1}}</a>
        </td>
        <td>
          แห่ง
        </td>
      </tr>
      <tr>
        <td>
          สถานีวิทยุกระจายเสียง
        </td>
        <td>
          <a href="#" id="no2_3_2" data-type="text" data-pk="1" data-title="Enter username">{{no2_3_2}}</a>
        </td>
        <td>
          สถานี
        </td>
      </tr>
      <tr>
        <td>
          สถานีวิทยุโทรทัศน์
        </td>
        <td>
          <a href="#" id="no2_3_3" data-type="text" data-pk="1" data-title="Enter username">{{no2_3_3}}</a>
        </td>
        <td>
          สถานี
        </td>
      </tr>
      <tr>
        <td>
          สื่อมวลชนในพื้นที่/หนังสือพิมพ์
        </td>
        <td>
          <a href="#" id="no2_3_4" data-type="text" data-pk="1" data-title="Enter username">{{no2_3_4}}</a>
        </td>
        <td>
          ฉบับ
        </td>
      </tr>
      <tr>
        <td>
        การให้บริการอินเตอร์เน็ต
        </td>
        <td>
          <a href="#" id="no2_3_5" data-type="text" data-pk="1" data-title="Enter username">{{no2_3_5}}</a>
        </td>
        <td>
          แหง
        </td>
      </tr>
      <tr>
        <td>
          ระบบเสียงตามสาย/หอกระจายข่าวในพื้นที่
        </td>
        <td>
          <a href="#" id="no2_3_6" data-type="text" data-pk="1" data-title="Enter username">{{no2_3_6}}</a>
        </td>
        <td>
          แห่ง
        </td>
      </tr>
      <tr>
        <td>
          หน่วยงานที่มีข่ายวิทยุสื่อสารในพื้นที่
        </td>
        <td>
          <a href="#" id="no2_3_7" data-type="text" data-pk="1" data-title="Enter username">{{no2_3_7}}</a>
        </td>
        <td>
          แห่ง
        </td>
      </tr>
    </table>

    </div>
    </form>
  </div>

  <div id="step-3">
    {% block comment_tab3 %}
    {% endblock %}
    <form class="form-horizontal form-label-left">

      <div class="form-group">
        <table class="table table-striped table-bordered">
          <tr>
            <td width="50%">
              ครัวเรือนที่ใช้ไฟฟ้า
            </td>
            <td>
              <a href="#" id="no2_4_1" data-type="text" data-pk="1" data-title="Enter username">{{no2_4_1}}</a>
            </td>
            <td>
              ครัวเรือน
            </td>
          </tr>
          <tr>
            <td>
              พื้นที่ที่ได้รับบริการไฟฟ้า ร้อยละ
            </td>
            <td>
                <a href="#" id="no2_4_2" data-type="text" data-pk="1" data-title="Enter username">{{no2_4_2}}</a>
            </td>
            <td>
            ของพื้นที่
            </td>
          </tr>
          <tr>
            <td>
              ไฟฟ้าส่องสว่างสารธารณะ จำนวน
            </td>
            <td>
              <a href="#" id="no2_4_3" data-type="text" data-pk="1" data-title="Enter username">{{no2_4_3}}</a>
            </td>
            <td>
              จุด
            </td>
          </tr>
          <tr>
            <td>
              จุด/ครอบคลุมถนน
            </td>
            <td>
                <a href="#" id="no2_4_4" data-type="text" data-pk="1" data-title="Enter username">{{no2_4_4}}</a>
            </td>
            <td>
              สาย
            </td>
          </tr>
        </table>
        </div>
    </form>
  </div>


  <div id="step-4">
    {% block comment_tab4 %}
    {% endblock %}

    <form class="form-horizontal form-label-left">

      <div class="form-group">
      <table class="table table-striped table-bordered">
        <tr>
          <td width="50%">
            พื้นที่พักอาศัย
          </td>
          <td>
            <a href="#" id="no2_5_1" data-type="text" data-pk="1" data-title="Enter username">{{no2_5_1}}</a>
          </td>
          <td>
            ไร่
          </td>
        </tr>
        <tr>
          <td>
            พื้นที่พาณิชยกรรม
          </td>
          <td>
            <a href="#" id="no2_5_2" data-type="text" data-pk="1" data-title="Enter username">{{no2_5_2}}</a>
          </td>
          <td>
            ไร่
          </td>
        </tr>
        <tr>
          <td>
            พื้นที่ตั้งหน่วยงานของรัฐ
          </td>
          <td>
            <a href="#" id="no2_5_3" data-type="text" data-pk="1" data-title="Enter username">{{no2_5_3}}</a>
          </td>
          <td>
            ไร่
          </td>
        </tr>
        <tr>
          <td>
            สวนสาธารณะ/นันทนาการ
          </td>
          <td>
              <a href="#" id="no2_5_4" data-type="text" data-pk="1" data-title="Enter username">{{no2_5_4}}</a>
          </td>
          <td>
            ไร่
          </td>
        </tr>
        <tr>
          <td>
            พื้นที่เกษตรกรรม
          </td>
          <td>
            <a href="#" id="no2_5_5" data-type="text" data-pk="1" data-title="Enter username">{{no2_5_5}}</a>
          </td>
          <td>
            ไร่
          </td>
        </tr>
        <tr>
          <td>
            พื้นที่ตั้งสถานศึกษา
          </td>
          <td>
              <a href="#" id="no2_5_6" data-type="text" data-pk="1" data-title="Enter username">{{no2_5_6}}</a>
          </td>
          <td>
            ไร่
          </td>
        </tr>
        <tr>
          <td>
            พื้นที่ว่าง
          </td>
          <td>
            <a href="#" id="no2_5_7" data-type="text" data-pk="1" data-title="Enter username">{{no2_5_7}}</a>
          </td>
          <td>
            ไร่
          </td>
        </tr>
        <tfoot>
          <td>
            <b>พื้นที่ทั้งหมด</b>
          </td>
          <td class="info">
            <b><span id="no2_5_8">{{no2_5_8}}</span></b>
          </td>
          <td>
              <b>ไร่</b>
          </td>
        </tfoot>
        </table>
      </div>
    </form>
  </div>
  <div id="step-5">

    {% block review %}
    {% endblock %}
    {% if(user.role =='cc-user') %}
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>ยืนยันข้อมูล <small>ยื่นพิจารณา</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">

            <div class="form-group">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="text-center">
                  <a id="btnFinish" class="btn btn-app" {% if(status==2) %}disabled{% endif %}>
                    <i id="btnFinishStatus" class="glyphicon glyphicon-ok {% if(status==2) %}glyphicon green{% endif %}"></i> เสร็จสิ้นการสำรวจข้อมูล
                  </a>
                </div>
              </div>
            </div>
        </div>

      </div>
    </div>
    {% endif %}
    <!--
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>สร้างไฟล์ <small>Microsoft Word</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">

            <div class="form-group">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="text-center">
                  <a  href="{{ url.get() }}clinic-admin/exportword/printformno2" id="btnPrint" class="btn btn-app" >
                    <i id="btnFinishStatus" class="glyphicon glyphicon-print"></i> พิมพ์แบบฟอร์มสำรวจ
                  </a>
                </div>
              </div>
            </div>
        </div>

      </div>
    </div>
    -->
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>ข้อมูลสรุป <small>ผลการพิจารณา</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <ul class="list-unstyled timeline">

        {% for comment in comments %}
            <li  style="padding-left:10px;">
              <div class="block">
                <div class="tags" style="width:auto !important">
                  <a onClick="jump('{{ comment.Session.getStep() }}')" class="tag">
                    <span>คำแนะนำ {{ comment.Session.label }} </span>
                  </a>
                </div>
                <div class="block_content">
                  <h2 class="title">
                                  <a>{{ comment.Session.label }} {{ comment.Session.name }}</a>
                              </h2>
                  <div class="byline">
                    <span>{{ comment.date}}</span> by <a>{{ comment.AdminUser.name }}</a>
                  </div>
                  <pre class="excerpt">{{ comment.description }}
                  </pre>
                </div>
              </div>
            </li>
        {% endfor %}
          </ul>

        </div>
      </div>
    </div>

  </div>
</div>
<!-- End SmartWizard Content -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
                    <!-- jQuery -->
                    <script src="{{ url.path() }}clinic/vendors/jquery/dist/jquery.min.js"></script>
                    <!-- Bootstrap -->
                    <script src="{{ url.path() }}clinic/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                    <!-- FastClick -->
                    <script src="{{ url.path() }}clinic/vendors/fastclick/lib/fastclick.js"></script>
                    <!-- NProgress -->
                    <script src="{{ url.path() }}clinic/vendors/nprogress/nprogress.js"></script>
                    <!-- jQuery Smart Wizard -->
                    <script src="{{ url.path() }}clinic/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
                    <!-- Custom Theme Scripts -->
                    <!-- <script src="../build/js/custom.min.js"></script> -->


                    {{ assets.outputJs('modules-clinic-js') }}

                    <!-- bootstrap3-editable -->
                    <link href="{{ url.path() }}clinic/vendors/x-editable/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
                    <script src="{{ url.path() }}clinic/vendors/x-editable/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
                    <!-- Select2 -->
                    <script src="{{ url.path() }}clinic/vendors/select2/dist/js/select2.full.min.js"></script>
                    <!-- jQuery Smart Wizard -->
                    <script>
                      $(document).ready(function() {
                        $('#wizard').smartWizard({
                          keyNavigation : false,
                          transitionEffect: 'slide'
                        });

                        $('#wizard_verticle').smartWizard({
                          keyNavigation : false,
                          transitionEffect: 'slide'
                        });

                        $('.buttonNext').addClass('btn btn-success');
                        $('.buttonPrevious').addClass('btn btn-primary');
                        $('.buttonFinish').addClass('btn btn-default');
                      });
                      function startUp() {
                          $("#st2").width("60px");
                          $("div").removeClass("stepContainer");
                        }
                        startUp();
                    </script>
                    <!-- /jQuery Smart Wizard -->

                    {{ assets.outputJs('modules-clinic-no2-js') }}

    {% block script %}
    {% endblock %}
