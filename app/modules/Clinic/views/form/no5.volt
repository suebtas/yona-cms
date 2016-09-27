<!-- page content -->
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
            <h2>ด้านสาธารณสุข การสำรวจข้อมูลขั้นพื้นฐาน <small>ครั้งที่ 1/2559</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a href="{{ url.get() }}clinic-admin/exportword/printformno5" role="button" aria-expanded="false"><i class="fa fa-print"></i></a></li>
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
                    <span class="step_no" Id="Id1">5.1-5.2</span>
                    <span class="step_descr">โรงพยาบาล-คลินิก<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-3">
                    <span class="step_no">5.3</span>
                    <span class="step_descr">
                        บุคลากรทางการแพทย์<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-4">
                    <span class="step_no">5.4</span>
                    <span class="step_descr">
                        ผู้เข้ารับการรักษา<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-5">
                    <span class="step_no">5.5</span>
                    <span class="step_descr">
                        สาเหตุการเจ็บป่วย<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-6">
                    <span class="step_no">5.6</span>
                    <span class="step_descr">
                        ประเภทการเจ็บป่วย<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-7">
                    <span class="step_no">สรุป</span>
                    <span class="step_descr">
                        ยืนยันข้อมูล<br />
                    </span>
                  </a>
                </li>
              </ul>

              <div id="step-1">
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-1 col-xs-12" for="map">
                    โรงพยาบาลในเขตพื้นที่ (ถ้ามี)</label>
                  </div>
                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="30%">คลินิกเอกชน </td>
                            <td width="20%">จำนวน <a href="#" id="no5_1_1_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_1_1_1}}</a> แห่ง</td>
                            <td width="30%">เตียงคนไข้ </td>
                            <td width="20%">จำนวน <a href="#" id="no5_1_1_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_1_1_2}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="30%">สังกัดเอกชน </td>
                            <td width="20%">จำนวน <a href="#" id="no5_1_2_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_1_2_1}}</a> แห่ง</td>
                            <td width="30%">เตียงคนไข้ </td>
                            <td width="20%">จำนวน <a href="#" id="no5_1_2_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_1_2_2}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="30%">สังกัดกระทรวงสาธารณสุข </td>
                            <td width="20%">จำนวน <a href="#" id="no5_1_3_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_1_3_1}}</a> แห่ง</td>
                            <td width="30%">เตียงคนไข้ </td>
                            <td width="20%">จำนวน <a href="#" id="no5_1_3_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_1_3_2}}</a> คน</td>
                        </tr>
                    </tbody>
                  </table>

                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-1 col-xs-12" for="map">
                    คลินิก</label>
                  </div>
                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="50%">คลินิกเอกชน</td>
                            <td width="50%">จำนวน <a href="#" id="no5_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_2}}</a> แห่ง</td>
                        </tr>
                    </tbody>
                  </table>

              </div>

              <div id="step-3">

                <div class="form-group">
                    <label class="control-label col-md-12 col-sm-1 col-xs-12" for="map">
                    บุคลากรทางการแพทย์ที่ปฏิบัติหน้าที่ในสถานพยาบาลทุกแห่ง ทุกสังกัดในเขตพื้นที่ </label>
                </div>
                <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="40%">แพทย์ </td>
                            <td width="40%">จำนวน <a href="#" id="no5_3_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_1}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="40%">พยาบาล </td>
                            <td width="40%">จำนวน <a href="#" id="no5_3_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_2}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="40%">ทันตแพทย์  </td>
                            <td width="40%">จำนวน <a href="#" id="no5_3_3" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_3}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="40%">เภสัชกร </td>
                            <td width="40%">จำนวน <a href="#" id="no5_3_4" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_4}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="40%">เจ้าพนักงานส่งเสริมสาธารณสุข </td>
                            <td width="40%">จำนวน <a href="#" id="no5_3_5" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_5}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="40%">พนักงานอนามัย </td>
                            <td width="40%">จำนวน <a href="#" id="no5_3_6" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_6}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="40%">เจ้าพนักงานสุขาภิบาล </td>
                            <td width="40%">จำนวน <a href="#" id="no5_3_7" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_7}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="40%">เจ้าพนักงานสาธารณสุขชุมชน </td>
                            <td width="40%">จำนวน <a href="#" id="no5_3_8" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_8}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="40%">อสม </td>
                            <td width="40%">จำนวน <a href="#" id="no5_3_9" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_9}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="40%">อื่นๆ <textarea rows="4" cols="50" id="no5_3_10_1" class="form-control col-md-2 col-xs-6">{{no5_3_10_1}}</textarea></td>
                            <td width="40%">จำนวน <a href="#" id="no5_3_10_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_10_2}}</a> คน</td>
                        </tr>
                    </tbody>
                  </table>
              </div>

              <div id="step-4">
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-1 col-xs-12" for="map">
                    ผู้เข้ารับการรักษาในสถานพยาบาลสังกัด (จำนวนต่อปี)</label>
                  </div>
                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="20%">ท้องถิ่น </td>
                            <td width="10%"><a href="#" id="no5_4_1_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_4_1_1}}</a> คน</td>
                            <td width="20%">ผู้ป่วยใน </td>
                            <td width="10%"><a href="#" id="no5_4_1_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_4_1_2}}</a> คน</td>
                            <td width="20%">ผู้ป่วยนอก </td>
                            <td width="10%"><a href="#" id="no5_4_1_3" data-type="text" data-pk="1" data-title="Enter username">{{no5_4_1_3}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="20%">เอกชน </td>
                            <td width="10%"><a href="#" id="no5_4_2_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_4_2_1}}</a> คน</td>
                            <td width="20%">ผู้ป่วยใน </td>
                            <td width="10%"><a href="#" id="no5_4_2_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_4_2_2}}</a> คน</td>
                            <td width="20%">ผู้ป่วยนอก </td>
                            <td width="10%"><a href="#" id="no5_4_2_3" data-type="text" data-pk="1" data-title="Enter username">{{no5_4_2_3}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="20%">กระทรวงสาธารณสุข </td>
                            <td width="10%"><a href="#" id="no5_4_3_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_4_3_1}}</a> คน</td>
                            <td width="20%">ผู้ป่วยใน </td>
                            <td width="10%"><a href="#" id="no5_4_3_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_4_3_2}}</a> คน</td>
                            <td width="20%">ผู้ป่วยนอก </td>
                            <td width="10%"><a href="#" id="no5_4_3_3" data-type="text" data-pk="1" data-title="Enter username">{{no5_4_3_3}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="20%">คลินิกเอกชน </td>
                            <td width="10%"><a href="#" id="no5_4_4" data-type="text" data-pk="1" data-title="Enter username">{{no5_4_4}}</a> คน</td>
                            <td width="20%"></td>
                            <td width="10%"></td>
                            <td width="20%"></td>
                            <td width="10%"></td>
                        </tr>
                    </tbody>
                  </table>

              </div>

              <div id="step-5">
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-1 col-xs-12" for="map">
                    สาเหตุการเจ็บป่วยที่เข้ารับการรักษาในโรงพยาบาลและศูนย์บริการทางสาธารณสุขทุกแห่ง</label>
                  </div>
                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="40%">อุบัติเหตุ </td>
                            <td width="10%"><a href="#" id="no5_5_1_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_5_1_1}}</a> ครั้ง/ปี</td>
                            <td width="40%">คิดเป็นงบประมาณในการรักษาทั้งสิ้น </td>
                            <td width="10%"><a href="#" id="no5_5_1_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_5_1_2}}</a> บาท</td>
                        </tr>
                        <tr>
                            <td width="40%">สาเหตุอื่น </td>
                            <td width="10%"><a href="#" id="no5_5_2_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_5_2_1}}</a> ครั้ง/ปี</td>
                            <td width="40%">คิดเป็นงบประมาณในการรักษาทั้งสิ้น </td>
                            <td width="10%"><a href="#" id="no5_5_2_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_5_2_2}}</a> บาท</td>
                        </tr>
                    </tbody>
                  </table>

              </div>

              <div id="step-6">
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-1 col-xs-12" for="map"> ประเภทการเจ็บป่วยที่เข้ารับการรักษาในโรงพยาบาลและศูนย์บริการทางสาธารณสุข ทุกแห่ง 5 อันดับแรก</label>
                  </div>
                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <thead>
                      <tr>
                          <td width="5%">ลำดับ</td>
                          <td width="50%">ประเภท</td>

                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td width="5%">1.</td>
                          <td width="50%"><input type="text" id="no5_6_1" required="required" class="form-control col-md-4 col-xs-6" value={{no5_6_1}}></td>
                        </tr>
                        <tr>
                          <td width="5%">2.</td>
                          <td width="50%"><input type="text" id="no5_6_2" required="required" class="form-control col-md-4 col-xs-6" value={{no5_6_2}}></td>
                        </tr>
                        <tr>
                          <td width="5%">3.</td>
                          <td width="50%"><input type="text" id="no5_6_3" required="required" class="form-control col-md-4 col-xs-6" value={{no5_6_3}}></td>
                        </tr>
                        <tr>
                          <td width="5%">4.</td>
                          <td width="50%"><input type="text" id="no5_6_4" required="required" class="form-control col-md-4 col-xs-6" value={{no5_6_4}}></td>
                        </tr>
                        <tr>
                          <td width="5%">5.</td>
                          <td width="50%"><input type="text" id="no5_6_5" required="required" class="form-control col-md-4 col-xs-6" value={{no5_6_5}}></td>
                        </tr>
                    </tbody>
                  </table>
              </div>

              <div id="step-7">

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
<!-- /page content -->
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
        transitionEffect: 'slide'
      });

      $('.buttonNext').addClass('btn btn-success');
      $('.buttonPrevious').addClass('btn btn-primary');
      $('.buttonFinish').addClass('btn btn-default');
    });
    function startUp(){
      $('#Id1').width("60px");
    };
    startUp();
  </script>
  <!-- /jQuery Smart Wizard -->

  {{ assets.outputJs('modules-clinic-no5-js') }}