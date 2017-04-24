<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>{{ office.name }}</h3>
        {{ partial('clinic/status') }}
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
            <h2>ด้านคุณภาพชีวิตและความปลอดภัยในทรัพย์สิน การสำรวจข้อมูลขั้นพื้นฐาน <small>ครั้งที่ {{discoverySurvey.Survey.no}}</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a href="{{ url.get() }}clinic-admin/export-word/printformno6" role="button" aria-expanded="false"><i class="fa fa-print"></i></a></li>
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
                    <span class="step_no">6</span>
                    <span class="step_descr">ด้านคุณภาพชีวิตและความปลอดภัยในทรัพย์สิน<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-2">
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
                <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <thead>
                      <tr>
                          <td width="5%">ลำดับ</td>
                          <td width="50%">รายการ</td>
                          <td width="20%">จำนวน</td>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="5%">6.1 </td>
                            <td width="50%">คดีเด็กและเยาวชนที่ถูกดำเนินคดี </td>
                            <td width="20%">จำนวน <a href="#" id="no6_1" data-type="text" data-pk="1" data-title="Enter username">{{no6_1}}</a> คดี/ปี</td>
                        </tr>
                        <tr>
                            <td width="5%">6.2 </td>
                            <td width="50%">คดีอุกฉกรรจ์และสะเทือนขวัญ </td>
                            <td width="20%">จำนวน <a href="#" id="no6_2" data-type="text" data-pk="1" data-title="Enter username">{{no6_2}}</a> คดี/ปี</td>
                        </tr>
                        <tr>
                            <td width="5%">6.3 </td>
                            <td width="50%">คดีชีวิต  ร่างกายและเพศ  </td>
                            <td width="20%">จำนวน <a href="#" id="no6_3" data-type="text" data-pk="1" data-title="Enter username">{{no6_3}}</a> คดี/ปี</td>
                        </tr>
                        <tr>
                            <td width="5%">6.4 </td>
                            <td width="50%">คดียาเสพติด </td>
                            <td width="20%">จำนวน <a href="#" id="no6_4" data-type="text" data-pk="1" data-title="Enter username">{{no6_4}}</a> คดี/ปี</td>
                        </tr>
                        <tr>
                            <td width="5%">6.5 </td>
                            <td width="50%">คดีเกี่ยวกับปราบปรามการค้าประเวณี </td>
                            <td width="20%">จำนวน <a href="#" id="no6_5" data-type="text" data-pk="1" data-title="Enter username">{{no6_5}}</a> คดี/ปี</td>
                        </tr>
                        <tr>
                            <td width="5%">6.6 </td>
                            <td width="50%">คดีการมีและเผยแพร่วัตถุลามก </td>
                            <td width="20%">จำนวน <a href="#" id="no6_6" data-type="text" data-pk="1" data-title="Enter username">{{no6_6}}</a> คดี/ปี</td>
                        </tr>
                        <tr>
                            <td width="5%">6.7 </td>
                            <td width="50%">อุบัติเหตุบนท้องถนน </td>
                            <td width="20%">จำนวน <a href="#" id="no6_7" data-type="text" data-pk="1" data-title="Enter username">{{no6_7}}</a> คดี/ปี</td>
                        </tr>
                        <tr>
                            <td width="5%">6.8 </td>
                            <td width="50%">ผู้ประสบอันตรายหรือเจ็บป่วยเนื่องจากการทำงาน </td>
                            <td width="20%">จำนวน <a href="#" id="no6_8" data-type="text" data-pk="1" data-title="Enter username">{{no6_8}}</a> คดี/ปี</td>
                        </tr>
                        <tr>
                            <td width="5%">6.9 </td>
                            <td width="50%">ผู้ประสบภัยที่เป็นนักท่องเที่ยวต่างชาติ </td>
                            <td width="20%">จำนวน <a href="#" id="no6_9" data-type="text" data-pk="1" data-title="Enter username">{{no6_9}}</a> คดี/ปี</td>
                        </tr>
                    </tbody>
                  </table>

              </div>

              <div id="step-2">

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
                              <h2><i class="fa fa-user"></i> ผู้สำรวจ<span>
                                  <a id="signing_surveyor"  data-type="text" data-pk="1" data-title="Enter username">{{signing_surveyor}}</a>
                                  </span>,
                                  <i class="fa fa-phone"></i> เบอร์โทรติดต่อ<span>
                                  <a id="surveyor_phone"  data-type="text" data-pk="1" data-title="Enter username">{{surveyor_phone}}</a>
                                  </span>
                              </h2>
                            </div>
                          </div>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="text-center">
                              <a id="btnFinish" class="btn btn-app btn-success" {% if(status>1) %}disabled{% endif %}>
                                <i id="btnFinishStatus" class="glyphicon glyphicon-ok {% if(status>1) %}glyphicon green{% endif %}"></i> เสร็จสิ้นการสำรวจข้อมูล
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
                              <a  href="{{ url.get() }}clinic-admin/export-word/printformno1" id="btnPrint" class="btn btn-app" >
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
                              <div {% if comment.status==1%}class="alert alert-warning alert-dismissible fade in" role="alert"{% endif %}>
                                  <div id="note_comment_{{ comment.id }}" data-pk="1" data-type="wysihtml5" data-toggle="manual" data-original-title="Enter notes">{{ comment.reply }}</div>
                              </div>
                              {% if comment.status==1 and comment.isReplyComment(user) %}
                                <a href="#" id="pencil_comment_{{ comment.id }}"><i class="fa fa-pencil"></i> [ตอบกลับข้อคิดเห็น]</a>
                              {% endif %}
                              <br />
                              <div class="ln_solid"></div>
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
<!-- /page content -->

<!-- jQuery -->
  <script src="{{ url.path() }}clinic/vendors/jquery/dist/jquery.min.js"></script>
  <script src="{{ url.path() }}clinic/js/process.js"></script>
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

  <!-- wysihtml5 -->
  <link href="{{ url.path() }}clinic/vendors/x-editable/inputs-ext/wysihtml5/bootstrap-wysihtml5-0.0.2/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">
  <script src="{{ url.path() }}clinic/vendors/x-editable/inputs-ext/wysihtml5/bootstrap-wysihtml5-0.0.2/wysihtml5-0.3.0.min.js"></script>
  <script src="{{ url.path() }}clinic/vendors/x-editable/inputs-ext/wysihtml5/bootstrap-wysihtml5-0.0.2/bootstrap-wysihtml5-0.0.2.min.js"></script>
  <script src="{{ url.path() }}clinic/vendors/x-editable/inputs-ext/wysihtml5/wysihtml5.js"></script>

  <!-- input-x -->
  <link href="{{ url.path() }}clinic/vendors/x-editable/inputs-ext/address/address.css rel="stylesheet">
  <script src="{{ url.path() }}clinic/vendors/x-editable/inputs-ext/address/address.js"></script>

  <!-- Select2 -->
  <script src="{{ url.path() }}clinic/vendors/select2/dist/js/select2.full.min.js"></script>
  <!-- jQuery Smart Wizard -->
  <script>
  $('body').on('keydown', 'input, select', function(e) {
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
        transitionEffect: 'slide',
        enableAllSteps: true
      });

      $('#wizard_verticle').smartWizard({
        transitionEffect: 'slide'
      });

      $('.buttonNext').addClass('btn btn-success');
      $('.buttonPrevious').addClass('btn btn-primary');
      $('.buttonFinish').addClass('btn btn-default');
    });
  </script>
  <!-- /jQuery Smart Wizard -->

  {{ assets.outputJs('modules-clinic-no6-js') }}

<script>
  $(document).ready(function() {
    {% for comment in comments %}
        $('#pencil_comment_{{ comment.id }}').click(function (e) {
            e.stopPropagation();
            e.preventDefault();
            $('#note_comment_{{ comment.id }}').editable('toggle').on('save', function(e, params) {
                  $.ajax({
                      url : "/clinic/review/no1",
                      type: "POST",
                      data : {
                        reply_{{ comment.id }}:params.newValue,
                        option:'add'
                      },
                      success: function(data, textStatus, jqXHR)
                      {

                      },
                      error: function (jqXHR, textStatus, errorThrown)
                      {

                      }
                  });
        });
    });;
    {% endfor %}
  });
  </script>
