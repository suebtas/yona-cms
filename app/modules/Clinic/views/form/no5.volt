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
            <h2>ด้านสาธารณสุข การสำรวจข้อมูลขั้นพื้นฐาน <small>ครั้งที่ {{discoverySurvey.Survey.no}}</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a href="{{ url.get() }}clinic-admin/export-word/printformno5" role="button" aria-expanded="false"><i class="fa fa-print"></i></a></li>
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
                  {% block comment_tab1 %}
                  {% endblock %}
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-1 col-xs-12" for="map">
                    โรงพยาบาลในเขตพื้นที่ (ถ้ามี)</label>
                  </div>
                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="30%">โรงพยาบาลประจำจังหวัด </td>
                            <td width="20%">จำนวน <a href="#" id="no5_1_1_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_1_1_1}}</a> แห่ง</td>
                            <td width="30%">เตียงคนไข้ </td>
                            <td width="20%">จำนวน <a href="#" id="no5_1_1_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_1_1_2}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="30%">โรงพยาบาลประจำอำเภอ </td>
                            <td width="20%">จำนวน <a href="#" id="no5_1_2_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_1_2_1}}</a> แห่ง</td>
                            <td width="30%">เตียงคนไข้ </td>
                            <td width="20%">จำนวน <a href="#" id="no5_1_2_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_1_2_2}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="30%">โรงพยาบาลส่งเสริมสุขภาพตำบล </td>
                            <td width="20%">จำนวน <a href="#" id="no5_1_3_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_1_3_1}}</a> แห่ง</td>
                            <td width="30%">เตียงคนไข้ </td>
                            <td width="20%">จำนวน <a href="#" id="no5_1_3_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_1_3_2}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="30%">โรงพยาบาลเอกชน </td>
                            <td width="20%">จำนวน <a href="#" id="no5_1_4_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_1_3_1}}</a> แห่ง</td>
                            <td width="30%">เตียงคนไข้ </td>
                            <td width="20%">จำนวน <a href="#" id="no5_1_4_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_1_3_2}}</a> คน</td>
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

                {% block comment_tab3 %}
                {% endblock %}
                <div class="form-group">
                    <label class="control-label col-md-12 col-sm-1 col-xs-12" for="map">
                    บุคลากรทางการแพทย์ที่ปฏิบัติหน้าที่ในสถานพยาบาลทุกแห่ง ทุกสังกัดในเขตพื้นที่ </label>
                </div>
                <table id="user" class="table table-bordered table-striped" style="clear: both" >
                  <thead>
                    <tr>
                      <th  class="text-center">ลำดับ</th>
                      <th  class="text-center">โรงพยาบาล</th>
                      <th  class="text-center">แพทย์</th>
                      <th  class="text-center">พยาบาล</th>
                      <th  class="text-center">ทันตกรรม</th>
                      <th  class="text-center">เภสัช</th>
                      <th  class="text-center">เจ้าหน้าที่่ส่งเสริมสาธารณสุข</th>
                      <th  class="text-center">พนักงานอนามัย</th>
                      <th  class="text-center">เจ้าหน้าที่สุขาภิบาล</th>
                      <th  class="text-center">เจ้าหน้าที่ส่งเสริมสารธารณสุขชุมชน</th>
                      <th  class="text-center">อสม.</th>
                      <th  class="text-center">อื่นๆ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>โรงพยาบาลประจำจังหวัด</td>
                      <td><a href="#" id="no5_3_1_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_1_1}}</a></td>
                      <td><a href="#" id="no5_3_1_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_1_2}}</a></td>
                      <td><a href="#" id="no5_3_1_3" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_1_3}}</a></td>
                      <td><a href="#" id="no5_3_1_4" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_1_4}}</a></td>
                      <td><a href="#" id="no5_3_1_5" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_1_5}}</a></td>
                      <td><a href="#" id="no5_3_1_6" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_1_6}}</a></td>
                      <td><a href="#" id="no5_3_1_7" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_1_7}}</a></td>
                      <td><a href="#" id="no5_3_1_8" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_1_8}}</a></td>
                      <td><a href="#" id="no5_3_1_9" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_1_9}}</a></td>
                      <td><a href="#" id="no5_3_1_10" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_1_10}}</a></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>โรงพยาบาลประจำอำเภอ</td>
                      <td><a href="#" id="no5_3_2_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_2_1}}</a></td>
                      <td><a href="#" id="no5_3_2_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_2_2}}</a></td>
                      <td><a href="#" id="no5_3_2_3" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_2_3}}</a></td>
                      <td><a href="#" id="no5_3_2_4" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_2_4}}</a></td>
                      <td><a href="#" id="no5_3_2_5" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_2_5}}</a></td>
                      <td><a href="#" id="no5_3_2_6" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_2_6}}</a></td>
                      <td><a href="#" id="no5_3_2_7" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_2_7}}</a></td>
                      <td><a href="#" id="no5_3_2_8" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_2_8}}</a></td>
                      <td><a href="#" id="no5_3_2_9" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_2_9}}</a></td>
                      <td><a href="#" id="no5_3_2_10" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_2_10}}</a></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>โรงพยาบาลส่งเสริมสุขภาพ</td>
                      <td><a href="#" id="no5_3_3_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_3_1}}</a></td>
                      <td><a href="#" id="no5_3_3_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_3_2}}</a></td>
                      <td><a href="#" id="no5_3_3_3" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_3_3}}</a></td>
                      <td><a href="#" id="no5_3_3_4" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_3_4}}</a></td>
                      <td><a href="#" id="no5_3_3_5" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_3_5}}</a></td>
                      <td><a href="#" id="no5_3_3_6" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_3_6}}</a></td>
                      <td><a href="#" id="no5_3_3_7" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_3_7}}</a></td>
                      <td><a href="#" id="no5_3_3_8" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_3_8}}</a></td>
                      <td><a href="#" id="no5_3_3_9" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_3_9}}</a></td>
                      <td><a href="#" id="no5_3_3_10" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_3_10}}</a></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>โรงพยาบาลเอกชน</td>
                      <td><a href="#" id="no5_3_4_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_4_1}}</a></td>
                      <td><a href="#" id="no5_3_4_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_4_2}}</a></td>
                      <td><a href="#" id="no5_3_4_3" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_4_3}}</a></td>
                      <td><a href="#" id="no5_3_4_4" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_4_4}}</a></td>
                      <td><a href="#" id="no5_3_4_5" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_4_5}}</a></td>
                      <td><a href="#" id="no5_3_4_6" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_4_6}}</a></td>
                      <td><a href="#" id="no5_3_4_7" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_4_7}}</a></td>
                      <td><a href="#" id="no5_3_4_8" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_4_8}}</a></td>
                      <td><a href="#" id="no5_3_4_9" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_4_9}}</a></td>
                      <td><a href="#" id="no5_3_4_10" data-type="text" data-pk="1" data-title="Enter username">{{no5_3_4_10}}</a></td>
                    </tr>
                  </tbody>
                </table>
                {#<table id="user" class="table table-bordered table-striped" style="clear: both">
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
                  </table>#}
              </div>

              <div id="step-4">
                  {% block comment_tab4 %}
                  {% endblock %}
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-1 col-xs-12" for="map">
                    ผู้เข้ารับการรักษาในสถานพยาบาลสังกัด (จำนวนต่อปี)</label>
                  </div>
                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="20%">ประจำจังหวัด </td>
                            <td width="10%"><a href="#" id="no5_4_1_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_4_1_1}}</a> คน</td>
                            <td width="20%">ผู้ป่วยใน </td>
                            <td width="10%"><a href="#" id="no5_4_1_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_4_1_2}}</a> คน</td>
                            <td width="20%">ผู้ป่วยนอก </td>
                            <td width="10%"><a href="#" id="no5_4_1_3" data-type="text" data-pk="1" data-title="Enter username">{{no5_4_1_3}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="20%">ประจำอำเภอ </td>
                            <td width="10%"><a href="#" id="no5_4_2_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_4_2_1}}</a> คน</td>
                            <td width="20%">ผู้ป่วยใน </td>
                            <td width="10%"><a href="#" id="no5_4_2_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_4_2_2}}</a> คน</td>
                            <td width="20%">ผู้ป่วยนอก </td>
                            <td width="10%"><a href="#" id="no5_4_2_3" data-type="text" data-pk="1" data-title="Enter username">{{no5_4_2_3}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="20%">ส่งเสริมสุขภาพตำบล </td>
                            <td width="10%"><a href="#" id="no5_4_3_1" data-type="text" data-pk="1" data-title="Enter username">{{no5_4_3_1}}</a> คน</td>
                            <td width="20%">ผู้ป่วยใน </td>
                            <td width="10%"><a href="#" id="no5_4_3_2" data-type="text" data-pk="1" data-title="Enter username">{{no5_4_3_2}}</a> คน</td>
                            <td width="20%">ผู้ป่วยนอก </td>
                            <td width="10%"><a href="#" id="no5_4_3_3" data-type="text" data-pk="1" data-title="Enter username">{{no5_4_3_3}}</a> คน</td>
                        </tr>
                        <tr>
                            <td width="20%">เอกชน </td>
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
                  {% block comment_tab5 %}
                  {% endblock %}
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
                  {% block comment_tab6 %}
                  {% endblock %}
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
    function startUp(){
      $('#Id1').width("60px");
    };
    startUp();
  </script>
  <!-- /jQuery Smart Wizard -->

  {{ assets.outputJs('modules-clinic-no5-js') }}

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