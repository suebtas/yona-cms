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
            <h2>ด้านสภาพทั่วไป การสำรวจข้อมูลขั้นพื้นฐาน <small>ครั้งที่ 1/2559</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a href="#{{ url.get() }}clinic-admin/exportword/printformno3" role="button" aria-expanded="false"><i class="fa fa-print"></i></a></li>
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
        <span class="step_no" id="st1">3.1-3.2</span>
        <span class="step_descr">ด้านเศรษฐกิจ<br />
        </span>
      </a>
    </li>
    <li>
      <a href="#step-2">
        <span class="step_no">3.3</span>
        <span class="step_descr">สถานประกอบเทศพาณิชย์<br />
        </span>
      </a>
    </li>
    <li>
      <a href="#step-3">
        <span class="step_no">3.4</span>
        <span class="step_descr">สถานประกอบการด้านบริการ<br />
        </span>
      </a>
    </li>
    <li>
      <a href="#step-4">
        <span class="step_no">3.5</span>
        <span class="step_descr">การอุตสาหกรรม<br />
        </span>
      </a>
    </li>
    <li>
      <a href="#step-5">
        <span class="step_no">3.6</span>
        <span class="step_descr">การท่องเที่ยว<br />
        </span>
      </a>
    </li>
    <li>
      <a href="#step-6">
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
        <center>
        <p>รายได้เฉลี่ยประชากร <a href="#" id="no3_1" data-type="text" data-pk="1" data-title="Enter username"> {{no3_1}} </a> บาท /คน/ปี</p></center>

      <table class="table table-striped table-bordered">
        <thead>
          <th colspan="3">
            <center>การพาณิชยกรรมและบริการ</center>
          </th>
        </thead>
        <tr>
          <td width="50%">
            สถานีบริการน้ำมัน
          </td>
          <td width="10%">
            <a href="#" id="no3_2_1" data-type="text" data-pk="1" data-title="Enter username"> {{no3_2_1}} </a>
          </td>
          <td>
            แห่ง
          </td>
        </tr>
        <tr>
          <td width="50%">
            ศูนย์การค้า/ห้างสรรพสินค้า
          </td>
          <td width="10%">
              <a href="#" id="no3_2_2" data-type="text" data-pk="1" data-title="Enter username"> {{no3_2_2}} </a>
          </td>
          <td>
            แห่ง
          </td>
        </tr>
        <tr>
          <td width="50%">
            ตลาดสด
          </td>
          <td width="10%">
            <a href="#" id="no3_2_3" data-type="text" data-pk="1" data-title="Enter username"> {{no3_2_3}} </a>
          </td>
          <td>
            แห่ง
          </td>
        </tr>
        <tr>
          <td width="50%">
            ร้านค้าทั่วไป
          </td>
          <td width="10%">
            <a href="#" id="no3_2_4" data-type="text" data-pk="1" data-title="Enter username"> {{no3_2_4}} </a>
          </td>
          <td>
            แห่ง
          </td>
        </tr>
      </table>
      </div>
    </form>
  </div>

  <div id="step-2">
    {% block comment_tab2 %}
    {% endblock %}
    <form class="form-horizontal form-label-left">
      <div class="form-group">
        <table class="table table-striped table-bordered">
          <thead>
            <th colspan="3">
              <center>สถานประกอบเทศพาณิชย์ ์</center>
            </th>
          </thead>
          <tr>
            <td width="50%">
              สถานธนานุบาล
            </td>
            <td width="10%">
              <a href="#" id="no3_3_1" data-type="text" data-pk="1" data-title="Enter username"> {{no3_3_1}} </a>
            </td>
            <td>
              แห่ง
            </td>
          </tr>
          <tr>
            <td width="50%">
              ท่าเทียบเรือ
            </td>
            <td width="10%">
            <a href="#" id="no3_3_2" data-type="text" data-pk="1" data-title="Enter username"> {{no3_3_2}} </a>
            </td>
            <td>
              แห่ง
            </td>
          </tr>
          <tr>
            <td width="50%">
              โรงฆ่าสัตว์
            </td>
            <td width="10%">
              <a href="#" id="no3_3_3" data-type="text" data-pk="1" data-title="Enter username"> {{no3_3_3}} </a>
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
          <thead>
            <th colspan="3">
              <center>สถานประกอบด้านบริการ</center>
            </th>
          </thead>
          <tr>
            <td width="50%">
              โรงแรม
            </td>
            <td width="10%">
              <a href="#" id="no3_4_1" data-type="text" data-pk="1" data-title="Enter username"> {{no3_4_1}} </a>
            </td>
            <td>
              แห่ง
            </td>
          </tr>
          <tr>
            <td width="50%">
              ธนาคาร
            </td>
            <td width="10%">
              <a href="#" id="no3_4_2" data-type="text" data-pk="1" data-title="Enter username"> {{no3_4_2}} </a>
            </td>
            <td>
              แห่ง
            </td>
          </tr>
          <tr>
            <td width="50%">
              โรงภาพยนตร์
            </td>
            <td width="10%">
              <a href="#" id="no3_4_3" data-type="text" data-pk="1" data-title="Enter username"> {{no3_4_3}} </a>
            </td>
            <td>
              แห่ง
            </td>
          </tr>
          <tr>
            <td width="50%">
              สถานที่จำหน่ายอาหาร ตาม พ.ร.บ. สาธารณสุข
            </td>
            <td width="10%">
              <a href="#" id="no3_4_4" data-type="text" data-pk="1" data-title="Enter username"> {{no3_4_4}} </a>
            </td>
            <td>
              แห่ง
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
          <thead>
            <th colspan="3">
              <center>การอุตสาหกรรม</center>
            </th>
          </thead>
          <tr>
            <td width="50%">
              โรงงาน จำนวน
            </td>
            <td width="10%">
            <a href="#" id="no3_5_1" data-type="text" data-pk="1" data-title="Enter username"> {{no3_5_1}} </a>
            </td>
            <td>
              แห่ง
            </td>
          </tr>
          <tr>
            <td width="50%">
              แรงงาน จำนวน
            </td>
            <td width="10%">
            <a href="#" id="no3_5_2" data-type="text" data-pk="1" data-title="Enter username"> {{no3_5_2}} </a>
            </td>
            <td>
              คน
            </td>
          </tr>
        </table>
        </div>
    </form>
  </div>

  <div id="step-5">
    {% block comment_tab5 %}
    {% endblock %}
    <form class="form-horizontal form-label-left">
      <div class="form-group">
        <table class="table table-striped table-bordered">
          <thead>
            <th colspan="3">
              <center>การท่องเที่ยว</center>
            </th>
          </thead>
          <tr>
            <td width="50%">
              แหล่งท่องเที่ยว จำนวน
            </td>
            <td width="10%">
              <a href="#" id="no3_6_1" data-type="text" data-pk="1" data-title="Enter username"> {{no3_6_1}} </a>
            </td>
            <td>
              แห่ง
            </td>
          </tr>
          <tr>
            <td width="50%">
              นักท่องเที่ยว จำนวน
            </td>
            <td width="10%">
            <a href="#" id="no3_6_2" data-type="text" data-pk="1" data-title="Enter username"> {{no3_6_2}} </a>
            </td>
            <td>
              คน/ปี
            </td>
          </tr>
          <tr>
            <td width="50%">
              รายได้จากการท่องเที่ยว จำนวน
            </td>
            <td width="10%">
              <a href="#" id="no3_6_3" data-type="text" data-pk="1" data-title="Enter username"> {{no3_6_3}} </a>
            </td>
            <td>
              บาท/ปี
            </td>
          </tr>
        </table>
        </div>
    </form>
  </div>
  <div id="step-6">
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
                  <a  href="{{ url.get() }}clinic-admin/exportword/printformno1" id="btnPrint" class="btn btn-app" >
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
            <li style="padding-left:10px;">
              <div class="block">
                <div class="tags" style="width:auto !important">
                  <a onClick="jump('{{ comment.Session.getStep() }}')" class="tag">
                    <span>คำแนะนำ {{ comment.Session.label }}</span>
                  </a>
                  {%if comment.status==2%}<span class="label label-success" ><i class="fa fa-check"></i></span>{%endif%}
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
  $('body').on('keydown', 'input, select, textarea', function(e) {
  var self = $(this)
    , form = self.parents('form:eq(0)')
    , focusable
    , next
    ;
  if (e.keyCode == 13) {
      focusable = form.find('input,a,select,button,textarea').filter(':visible');
      next = focusable.eq(focusable.index(this)+1);
      if (next.length) {
          next.focus();
      } else {
          form.next();
      }
      return false;
  }
});
  </script>
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
      $("#st1").width("60px");
    }
    startUp();
  </script>
  <!-- /jQuery Smart Wizard -->
{{ assets.outputJs('modules-clinic-no3-js') }}
