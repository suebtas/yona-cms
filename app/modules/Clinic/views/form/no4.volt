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
            <h2>ด้านสังคม การสำรวจข้อมูลขั้นพื้นฐาน <small>ครั้งที่ {{discoverySurvey.Survey.no}}</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a href="{{ url.get() }}clinic-admin/export-word/printformno4" role="button" aria-expanded="false"><i class="fa fa-print"></i></a></li>
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
                    <span class="step_no" Id="Id1">4.1-4.2</span>
                    <span class="step_descr">ชุมชน - ครัวเรือน<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-2">
                    <span class="step_no">4.3</span>
                    <span class="step_descr">
                        ศาสนา<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-3">
                    <span class="step_no">4.4</span>
                    <span class="step_descr">
                        วัฒนธรรม<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-4">
                    <span class="step_no">4.5</span>
                    <span class="step_descr">
                        การศึกษา<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-5">
                    <span class="step_no">4.6</span>
                    <span class="step_descr">
                        กีฬา<br />
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
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="map"> ชุมชน จำนวน
                    </label>
                    <div class="col-md-2 text-center">
                         <a href="#" id="no4_1" data-type="text" data-pk="1" data-title="Enter username">{{no4_1}}</a>

                    </div>
                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="map"> แห่ง  </label>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="map"> ครัวเรือน จำนวน
                    </label>
                    <div class="col-md-2 text-center">
                      <a href="#" id="no4_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_2}}</a>
                    </div>
                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="map"> ครัวเรือน  </label>
                  </div>
                </form>

              </div>

              <div id="step-2">
                  {% block comment_tab2 %}
                  {% endblock %}
                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="40%">ผู้นับถือศาสนาพุทธ </td>
                            <td width="40%">ร้อยละ <a href="#" id="no4_3_1" data-type="text" data-pk="1" data-title="Enter username">{{no4_3_1}}</a> ของจำนวนประชากรทั้งหมด</td>

                        </tr>
                        <tr>
                            <td width="40%">วัด </td>
                            <td width="40%">จำนวน <a href="#" id="no4_3_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_3_2}}</a> วัด</td>

                        </tr>
                        <tr>
                            <td width="40%">ผู้นับถือศาสนาอิสลาม </td>
                            <td width="40%">ร้อยละ <a href="#" id="no4_3_3" data-type="text" data-pk="1" data-title="Enter username">{{no4_3_3}}</a> ของจำนวนประชากรทั้งหมด</td>

                        </tr>
                        <tr>
                            <td width="40%">มัสยิด </td>
                            <td width="40%">จำนวน <a href="#" id="no4_3_4" data-type="text" data-pk="1" data-title="Enter username">{{no4_3_4}}</a> มัสยิด</td>

                        </tr>
                        <tr>
                            <td width="40%">ผู้นับถือศาสนาคริสต์ </td>
                            <td width="40%">ร้อยละ <a href="#" id="no4_3_5" data-type="text" data-pk="1" data-title="Enter username">{{no4_3_5}}</a> ของจำนวนประชากรทั้งหมด</td>

                        </tr>
                        <tr>
                            <td width="40%">โบสถ์ทางคริสต์ศาสนา </td>
                            <td width="40%">จำนวน <a href="#" id="no4_3_6" data-type="text" data-pk="1" data-title="Enter username">{{no4_3_6}}</a> โบสถ์</td>

                        </tr>
                        <tr>
                            <td width="40%">ผู้นับถือศาสนาอื่นๆ </td>
                            <td width="40%">ร้อยละ <a href="#" id="no4_3_7" data-type="text" data-pk="1" data-title="Enter username">{{no4_3_7}}</a> ของจำนวนประชากรทั้งหมด</td>

                        </tr>
                        <tr>
                            <td width="40%">ผู้ไม่นับถือศาสนาใดเลย </td>
                            <td width="40%">ร้อยละ <a href="#" id="no4_3_8" data-type="text" data-pk="1" data-title="Enter username">{{no4_3_8}}</a> ของจำนวนประชากรทั้งหมด</td>

                        </tr>
                    </tbody>
                  </table>

              </div>

              <div id="step-3">
                {% block comment_tab3 %}
                {% endblock %}
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-1 col-xs-12" for="map"> ประเพณีท้องถิ่นที่สำคัญ (เรียงตามลำดับความสำคัญมากที่สุดไปหาน้อยที่สุด)</label>
                </div>
                <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <thead>
                      <tr>
                          <td width="5%">ลำดับ</td>
                          <td width="25%">ประเพณี</td>
                          <td width="20%">เดือน</td>
                          <td width="50%">กิจกรรมโดยสังเขป</td>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td width="5%">1.</td>
                          <td width="25%"><input type="text" id="no4_4_1_1" required="required" class="form-control col-md-2 col-xs-6" value={{no4_4_1_1}}></td>
                          <td width="20%">
                            <div class="form-group">
                              <div class="col-md-12 col-sm-6 col-xs-12">
                                <select id="no4_4_1_2" class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                    <option value="month">เลือกเดือน</option>
                                    {%if no4_4_1_2 == "jan" %}
                                      <option value="jan" selected>มกราคม</option>
                                    {% else %}
                                      <option value="jan">มกราคม</option>
                                    {% endif %}
                                    {%if no4_4_1_2 == "feb" %}
                                      <option value="feb" selected>กุมภาพันธ์</option>
                                    {% else %}
                                      <option value="feb">กุมภาพันธ์</option>
                                    {% endif %}
                                    {%if no4_4_1_2 == "mar" %}
                                      <option value="mar" selected>มีนาคม</option>
                                    {% else %}
                                      <option value="mar">มีนาคม</option>
                                    {% endif %}
                                    {%if no4_4_1_2 == "apr" %}
                                      <option value="apr" selected>เมษายน</option>
                                    {% else %}
                                      <option value="apr">เมษายน</option>
                                    {% endif %}
                                    {%if no4_4_1_2 == "may" %}
                                      <option value="may" selected>พฤษภาคม</option>
                                    {% else %}
                                      <option value="may">พฤษภาคม</option>
                                    {% endif %}
                                    {%if no4_4_1_2 == "jun" %}
                                      <option value="jun" selected>มิถุนายน</option>
                                    {% else %}
                                      <option value="jun">มิถุนายน</option>
                                    {% endif %}
                                    {%if no4_4_1_2 == "jul" %}
                                      <option value="jul" selected>กรกฎาคม</option>
                                    {% else %}
                                      <option value="jul">กรกฎาคม</option>
                                    {% endif %}
                                    {%if no4_4_1_2 == "aug" %}
                                      <option value="aug" selected>สิงหาคม</option>
                                    {% else %}
                                      <option value="aug">สิงหาคม</option>
                                    {% endif %}
                                    {%if no4_4_1_2 == "sep" %}
                                      <option value="sep" selected>กันยายน</option>
                                    {% else %}
                                      <option value="sep">กันยายน</option>
                                    {% endif %}
                                    {%if no4_4_1_2 == "oct" %}
                                      <option value="oct" selected>ตุลาคม</option>
                                    {% else %}
                                      <option value="oct">ตุลาคม</option>
                                    {% endif %}
                                    {%if no4_4_1_2 == "nov" %}
                                      <option value="nov" selected>พฤศจิกายน</option>
                                    {% else %}
                                      <option value="nov">พฤศจิกายน</option>
                                    {% endif %}
                                    {%if no4_4_1_2 == "dec" %}
                                      <option value="dec" selected>ธันวาคม</option>
                                    {% else %}
                                      <option value="dec">ธันวาคม</option>
                                    {% endif %}
                                </select>
                              </div>
                            </div>
                          </td>
                          <td width="50%"><textarea rows="4" cols="50" id="no4_4_1_3" class="form-control col-md-2 col-xs-6">{{no4_4_1_3}}</textarea></td>

                        </tr>
                        <tr>
                            <td width="5%">2.</td>
                            <td width="25%"><input type="text" id="no4_4_2_1" required="required" class="form-control col-md-2 col-xs-6" value={{no4_4_2_1}}></td>
                            <td width="20%">
                              <div class="form-group">
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                  <select id="no4_4_2_2" class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                    <option value="month">เลือกเดือน</option>
                                    {%if no4_4_2_2 == "jan" %}
                                      <option value="jan" selected>มกราคม</option>
                                    {% else %}
                                      <option value="jan">มกราคม</option>
                                    {% endif %}
                                    {%if no4_4_2_2 == "feb" %}
                                      <option value="feb" selected>กุมภาพันธ์</option>
                                    {% else %}
                                      <option value="feb">กุมภาพันธ์</option>
                                    {% endif %}
                                    {%if no4_4_2_2 == "mar" %}
                                      <option value="mar" selected>มีนาคม</option>
                                    {% else %}
                                      <option value="mar">มีนาคม</option>
                                    {% endif %}
                                    {%if no4_4_2_2 == "apr" %}
                                      <option value="apr" selected>เมษายน</option>
                                    {% else %}
                                      <option value="apr">เมษายน</option>
                                    {% endif %}
                                    {%if no4_4_2_2 == "may" %}
                                      <option value="may" selected>พฤษภาคม</option>
                                    {% else %}
                                      <option value="may">พฤษภาคม</option>
                                    {% endif %}
                                    {%if no4_4_2_2 == "jun" %}
                                      <option value="jun" selected>มิถุนายน</option>
                                    {% else %}
                                      <option value="jun">มิถุนายน</option>
                                    {% endif %}
                                    {%if no4_4_2_2 == "jul" %}
                                      <option value="jul" selected>กรกฎาคม</option>
                                    {% else %}
                                      <option value="jul">กรกฎาคม</option>
                                    {% endif %}
                                    {%if no4_4_2_2 == "aug" %}
                                      <option value="aug" selected>สิงหาคม</option>
                                    {% else %}
                                      <option value="aug">สิงหาคม</option>
                                    {% endif %}
                                    {%if no4_4_2_2 == "sep" %}
                                      <option value="sep" selected>กันยายน</option>
                                    {% else %}
                                      <option value="sep">กันยายน</option>
                                    {% endif %}
                                    {%if no4_4_2_2 == "oct" %}
                                      <option value="oct" selected>ตุลาคม</option>
                                    {% else %}
                                      <option value="oct">ตุลาคม</option>
                                    {% endif %}
                                    {%if no4_4_2_2 == "nov" %}
                                      <option value="nov" selected>พฤศจิกายน</option>
                                    {% else %}
                                      <option value="nov">พฤศจิกายน</option>
                                    {% endif %}
                                    {%if no4_4_2_2 == "dec" %}
                                      <option value="dec" selected>ธันวาคม</option>
                                    {% else %}
                                      <option value="dec">ธันวาคม</option>
                                    {% endif %}
                                  </select>
                                </div>
                              </div>
                            </td>
                            <td width="50%"><textarea rows="4" cols="50" id="no4_4_2_3" class="form-control col-md-2 col-xs-6">{{no4_4_2_3}}</textarea></td>
                        </tr>
                        <tr>
                          <td width="5%">3.</td>
                          <td width="25%"><input type="text" id="no4_4_3_1" required="required" class="form-control col-md-2 col-xs-6" value={{no4_4_3_1}}></td>
                          <td width="20%">
                            <div class="form-group">
                              <div class="col-md-12 col-sm-6 col-xs-12">
                                <select id="no4_4_3_2" class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                  <option value="month">เลือกเดือน</option>
                                  {%if no4_4_3_2 == "jan" %}
                                    <option value="jan" selected>มกราคม</option>
                                  {% else %}
                                    <option value="jan">มกราคม</option>
                                  {% endif %}
                                  {%if no4_4_3_2 == "feb" %}
                                    <option value="feb" selected>กุมภาพันธ์</option>
                                  {% else %}
                                    <option value="feb">กุมภาพันธ์</option>
                                  {% endif %}
                                  {%if no4_4_3_2 == "mar" %}
                                    <option value="mar" selected>มีนาคม</option>
                                  {% else %}
                                    <option value="mar">มีนาคม</option>
                                  {% endif %}
                                  {%if no4_4_3_2 == "apr" %}
                                    <option value="apr" selected>เมษายน</option>
                                  {% else %}
                                    <option value="apr">เมษายน</option>
                                  {% endif %}
                                  {%if no4_4_3_2 == "may" %}
                                    <option value="may" selected>พฤษภาคม</option>
                                  {% else %}
                                    <option value="may">พฤษภาคม</option>
                                  {% endif %}
                                  {%if no4_4_3_2 == "jun" %}
                                    <option value="jun" selected>มิถุนายน</option>
                                  {% else %}
                                    <option value="jun">มิถุนายน</option>
                                  {% endif %}
                                  {%if no4_4_3_2 == "jul" %}
                                    <option value="jul" selected>กรกฎาคม</option>
                                  {% else %}
                                    <option value="jul">กรกฎาคม</option>
                                  {% endif %}
                                  {%if no4_4_3_2 == "aug" %}
                                    <option value="aug" selected>สิงหาคม</option>
                                  {% else %}
                                    <option value="aug">สิงหาคม</option>
                                  {% endif %}
                                  {%if no4_4_3_2 == "sep" %}
                                    <option value="sep" selected>กันยายน</option>
                                  {% else %}
                                    <option value="sep">กันยายน</option>
                                  {% endif %}
                                  {%if no4_4_3_2 == "oct" %}
                                    <option value="oct" selected>ตุลาคม</option>
                                  {% else %}
                                    <option value="oct">ตุลาคม</option>
                                  {% endif %}
                                  {%if no4_4_3_2 == "nov" %}
                                    <option value="nov" selected>พฤศจิกายน</option>
                                  {% else %}
                                    <option value="nov">พฤศจิกายน</option>
                                  {% endif %}
                                  {%if no4_4_3_2 == "dec" %}
                                    <option value="dec" selected>ธันวาคม</option>
                                  {% else %}
                                    <option value="dec">ธันวาคม</option>
                                  {% endif %}
                                </select>
                              </div>
                            </div>
                          </td>
                          <td width="50%"><textarea rows="4" cols="50" id="no4_4_3_3" class="form-control col-md-2 col-xs-6">{{no4_4_3_3}}</textarea></td>
                        </tr>
                        <tr>
                          <td width="5%">4.</td>
                          <td width="25%"><input type="text" id="no4_4_4_1" required="required" class="form-control col-md-2 col-xs-6" value={{no4_4_4_1}}></td>
                          <td width="20%">
                            <div class="form-group">
                              <div class="col-md-12 col-sm-6 col-xs-12">
                                <select id="no4_4_4_2" class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                  <option value="month">เลือกเดือน</option>
                                  {%if no4_4_4_2 == "jan" %}
                                    <option value="jan" selected>มกราคม</option>
                                  {% else %}
                                    <option value="jan">มกราคม</option>
                                  {% endif %}
                                  {%if no4_4_4_2 == "feb" %}
                                    <option value="feb" selected>กุมภาพันธ์</option>
                                  {% else %}
                                    <option value="feb">กุมภาพันธ์</option>
                                  {% endif %}
                                  {%if no4_4_4_2 == "mar" %}
                                    <option value="mar" selected>มีนาคม</option>
                                  {% else %}
                                    <option value="mar">มีนาคม</option>
                                  {% endif %}
                                  {%if no4_4_4_2 == "apr" %}
                                    <option value="apr" selected>เมษายน</option>
                                  {% else %}
                                    <option value="apr">เมษายน</option>
                                  {% endif %}
                                  {%if no4_4_4_2 == "may" %}
                                    <option value="may" selected>พฤษภาคม</option>
                                  {% else %}
                                    <option value="may">พฤษภาคม</option>
                                  {% endif %}
                                  {%if no4_4_4_2 == "jun" %}
                                    <option value="jun" selected>มิถุนายน</option>
                                  {% else %}
                                    <option value="jun">มิถุนายน</option>
                                  {% endif %}
                                  {%if no4_4_4_2 == "jul" %}
                                    <option value="jul" selected>กรกฎาคม</option>
                                  {% else %}
                                    <option value="jul">กรกฎาคม</option>
                                  {% endif %}
                                  {%if no4_4_4_2 == "aug" %}
                                    <option value="aug" selected>สิงหาคม</option>
                                  {% else %}
                                    <option value="aug">สิงหาคม</option>
                                  {% endif %}
                                  {%if no4_4_4_2 == "sep" %}
                                    <option value="sep" selected>กันยายน</option>
                                  {% else %}
                                    <option value="sep">กันยายน</option>
                                  {% endif %}
                                  {%if no4_4_4_2 == "oct" %}
                                    <option value="oct" selected>ตุลาคม</option>
                                  {% else %}
                                    <option value="oct">ตุลาคม</option>
                                  {% endif %}
                                  {%if no4_4_4_2 == "nov" %}
                                    <option value="nov" selected>พฤศจิกายน</option>
                                  {% else %}
                                    <option value="nov">พฤศจิกายน</option>
                                  {% endif %}
                                  {%if no4_4_4_2 == "dec" %}
                                    <option value="dec" selected>ธันวาคม</option>
                                  {% else %}
                                    <option value="dec">ธันวาคม</option>
                                  {% endif %}
                                </select>
                              </div>
                            </div>
                          </td>
                          <td width="50%"><textarea rows="4" cols="50" id="no4_4_4_3" class="form-control col-md-2 col-xs-6">{{no4_4_4_3}}</textarea></td>
                        </tr>
                        <tr>
                          <td width="5%">5.</td>
                          <td width="25%"><input type="text" id="no4_4_5_1" required="required" class="form-control col-md-2 col-xs-6" value={{no4_4_5_1}}></td>
                          <td width="20%">
                            <div class="form-group">
                              <div class="col-md-12 col-sm-6 col-xs-12">
                                <select id="no4_4_5_2" class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                  <option value="month">เลือกเดือน</option>
                                  {%if no4_4_5_2 == "jan" %}
                                    <option value="jan" selected>มกราคม</option>
                                  {% else %}
                                    <option value="jan">มกราคม</option>
                                  {% endif %}
                                  {%if no4_4_5_2 == "feb" %}
                                    <option value="feb" selected>กุมภาพันธ์</option>
                                  {% else %}
                                    <option value="feb">กุมภาพันธ์</option>
                                  {% endif %}
                                  {%if no4_4_5_2 == "mar" %}
                                    <option value="mar" selected>มีนาคม</option>
                                  {% else %}
                                    <option value="mar">มีนาคม</option>
                                  {% endif %}
                                  {%if no4_4_5_2 == "apr" %}
                                    <option value="apr" selected>เมษายน</option>
                                  {% else %}
                                    <option value="apr">เมษายน</option>
                                  {% endif %}
                                  {%if no4_4_5_2 == "may" %}
                                    <option value="may" selected>พฤษภาคม</option>
                                  {% else %}
                                    <option value="may">พฤษภาคม</option>
                                  {% endif %}
                                  {%if no4_4_5_2 == "jun" %}
                                    <option value="jun" selected>มิถุนายน</option>
                                  {% else %}
                                    <option value="jun">มิถุนายน</option>
                                  {% endif %}
                                  {%if no4_4_5_2 == "jul" %}
                                    <option value="jul" selected>กรกฎาคม</option>
                                  {% else %}
                                    <option value="jul">กรกฎาคม</option>
                                  {% endif %}
                                  {%if no4_4_5_2 == "aug" %}
                                    <option value="aug" selected>สิงหาคม</option>
                                  {% else %}
                                    <option value="aug">สิงหาคม</option>
                                  {% endif %}
                                  {%if no4_4_5_2 == "sep" %}
                                    <option value="sep" selected>กันยายน</option>
                                  {% else %}
                                    <option value="sep">กันยายน</option>
                                  {% endif %}
                                  {%if no4_4_5_2 == "oct" %}
                                    <option value="oct" selected>ตุลาคม</option>
                                  {% else %}
                                    <option value="oct">ตุลาคม</option>
                                  {% endif %}
                                  {%if no4_4_5_2 == "nov" %}
                                    <option value="nov" selected>พฤศจิกายน</option>
                                  {% else %}
                                    <option value="nov">พฤศจิกายน</option>
                                  {% endif %}
                                  {%if no4_4_5_2 == "dec" %}
                                    <option value="dec" selected>ธันวาคม</option>
                                  {% else %}
                                    <option value="dec">ธันวาคม</option>
                                  {% endif %}
                                </select>
                              </div>
                            </div>
                          </td>
                          <td width="50%"><textarea rows="4" cols="50" id="no4_4_5_3" class="form-control col-md-2 col-xs-6">{{no4_4_5_3}}</textarea>
                          </td>
                        </tr>

                    </tbody>
                </table>
              </div>

              <div id="step-4">
                  {% block comment_tab4 %}
                  {% endblock %}
                  <div class="form-group">
                      <label class="control-label col-md-12 col-sm-1 col-xs-12" for="map">
                      ระดับก่อนประถมศึกษา</label>
                  </div>
                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <thead>
                      <tr>
                          <td width="25%">สังกัด</td>
                          <td width="15%">ท้องถิ่น</td>
                          <td width="15%">สพฐ.</td>
                          <td width="15%">กรมสามัญฯ</td>
                          <td width="15%">กรมอาชีวฯ</td>
                          <td width="15%">รวม</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td width="25%">1.จำนวนโรงเรียน </td>
                          <td width="15%"><a href="#" id="no4_5_1_1_1" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_1_1}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_1_1_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_1_2}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_1_1_3" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_1_3}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_1_1_4" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_1_4}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_1_1_5" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_1_5}}</a></td>
                      </tr>
                      <tr>
                          <td width="25%">2.จำนวนห้องเรียน  </td>
                          <td width="15%"><a href="#" id="no4_5_1_2_1" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_2_1}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_1_2_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_2_2}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_1_2_3" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_2_3}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_1_2_4" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_2_4}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_1_2_5" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_2_5}}</a></td>
                      </tr>
                      <tr>
                          <td width="25%">3.จำนวนนักเรียน </td>
                          <td width="15%"><a href="#" id="no4_5_1_3_1" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_3_1}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_1_3_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_3_2}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_1_3_3" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_3_3}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_1_3_4" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_3_4}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_1_3_5" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_3_5}}</a></td>
                      </tr>
                      <tr>
                          <td width="25%">4.จำนวนครู อาจารย์ </td>
                          <td width="15%"><a href="#" id="no4_5_1_4_1" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_4_1}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_1_4_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_4_2}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_1_4_3" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_4_3}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_1_4_4" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_4_4}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_1_4_5" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_1_4_5}}</a></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="form-group">
                      <label class="control-label col-md-12 col-sm-1 col-xs-12" for="map">ระดับประถมศึกษา</label>
                  </div>
                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <thead>
                      <tr>
                          <td width="25%">สังกัด</td>
                          <td width="15%">ท้องถิ่น</td>
                          <td width="15%">สพฐ.</td>
                          <td width="15%">กรมสามัญฯ</td>
                          <td width="15%">กรมอาชีวฯ</td>
                          <td width="15%">รวม</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td width="25%">1.จำนวนโรงเรียน </td>
                          <td width="15%"><a href="#" id="no4_5_2_1_1" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_1_1}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_2_1_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_1_2}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_2_1_3" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_1_3}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_2_1_4" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_1_4}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_2_1_5" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_1_5}}</a></td>
                      </tr>
                      <tr>
                          <td width="25%">2.จำนวนห้องเรียน  </td>
                          <td width="15%"><a href="#" id="no4_5_2_2_1" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_2_1}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_2_2_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_2_2}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_2_2_3" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_2_3}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_2_2_4" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_2_4}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_2_2_5" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_2_5}}</a></td>
                      </tr>
                      <tr>
                          <td width="25%">3.จำนวนนักเรียน </td>
                          <td width="15%"><a href="#" id="no4_5_2_3_1" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_3_1}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_2_3_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_3_2}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_2_3_3" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_3_3}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_2_3_4" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_3_4}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_2_3_5" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_3_5}}</a></td>
                      </tr>
                      <tr>
                          <td width="25%">4.จำนวนครู อาจารย์ </td>
                          <td width="15%"><a href="#" id="no4_5_2_4_1" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_4_1}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_2_4_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_4_2}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_2_4_3" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_4_3}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_2_4_4" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_4_4}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_2_4_5" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_2_4_5}}</a></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="form-group">
                      <label class="control-label col-md-12 col-sm-1 col-xs-12" for="map">
                      ระดับมัธยมศึกษา</label>
                  </div>
                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <thead>
                      <tr>
                          <td width="25%">สังกัด</td>
                          <td width="15%">ท้องถิ่น</td>
                          <td width="15%">สพฐ.</td>
                          <td width="15%">กรมสามัญฯ</td>
                          <td width="15%">กรมอาชีวฯ</td>
                          <td width="15%">รวม</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td width="25%">1.จำนวนโรงเรียน </td>
                          <td width="15%"><a href="#" id="no4_5_3_1_1" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_1_1}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_3_1_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_1_2}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_3_1_3" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_1_3}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_3_1_4" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_1_4}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_3_1_5" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_1_5}}</a></td>
                      </tr>
                      <tr>
                          <td width="25%">2.จำนวนห้องเรียน  </td>
                          <td width="15%"><a href="#" id="no4_5_3_2_1" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_2_1}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_3_2_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_2_2}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_3_2_3" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_2_3}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_3_2_4" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_2_4}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_3_2_5" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_2_5}}</a></td>
                      </tr>
                      <tr>
                          <td width="25%">3.จำนวนนักเรียน </td>
                          <td width="15%"><a href="#" id="no4_5_3_3_1" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_3_1}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_3_3_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_3_2}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_3_3_3" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_3_3}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_3_3_4" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_3_4}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_3_3_5" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_3_5}}</a></td>
                      </tr>
                      <tr>
                          <td width="25%">4.จำนวนครู อาจารย์ </td>
                          <td width="15%"><a href="#" id="no4_5_3_4_1" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_4_1}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_3_4_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_4_2}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_3_4_3" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_4_3}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_3_4_4" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_4_4}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_3_4_5" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_3_4_5}}</a></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-1 col-xs-12" for="map">
                    ระดับอาชีวศึกษา</label>
                  </div>
                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <thead>
                      <tr>
                          <td width="25%">สังกัด</td>
                          <td width="15%">ท้องถิ่น</td>
                          <td width="15%">สพฐ.</td>
                          <td width="15%">กรมสามัญฯ</td>
                          <td width="15%">กรมอาชีวฯ</td>
                          <td width="15%">รวม</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td width="25%">1.จำนวนโรงเรียน </td>
                          <td width="15%"><a href="#" id="no4_5_4_1_1" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_1_1}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_4_1_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_1_2}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_4_1_3" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_1_3}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_4_1_4" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_1_4}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_4_1_5" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_1_5}}</a></td>
                      </tr>
                      <tr>
                          <td width="25%">2.จำนวนห้องเรียน  </td>
                          <td width="15%"><a href="#" id="no4_5_4_2_1" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_2_1}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_4_2_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_2_2}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_4_2_3" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_2_3}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_4_2_4" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_2_4}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_4_2_5" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_2_5}}</a></td>
                      </tr>
                      <tr>
                          <td width="25%">3.จำนวนนักเรียน </td>
                          <td width="15%"><a href="#" id="no4_5_4_3_1" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_3_1}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_4_3_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_3_2}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_4_3_3" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_3_3}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_4_3_4" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_3_4}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_4_3_5" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_3_5}}</a></td>
                      </tr>
                      <tr>
                          <td width="25%">4.จำนวนครู อาจารย์ </td>
                          <td width="15%"><a href="#" id="no4_5_4_4_1" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_4_1}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_4_4_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_4_2}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_4_4_3" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_4_3}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_4_4_4" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_4_4}}</a></td>
                          <td width="15%"><a href="#" id="no4_5_4_4_5" data-type="text" data-pk="1" data-title="Enter username">{{no4_5_4_4_5}}</a></td>
                      </tr>
                    </tbody>
                  </table>

              </div>

              <div id="step-5">
                  {% block comment_tab5 %}
                  {% endblock %}
                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="40%">สนามกีฬาอเนกประสงค์ </td>
                            <td width="40%">จำนวน <a href="#" id="no4_6_1" data-type="text" data-pk="1" data-title="Enter username">{{no4_6_1}}</a> แห่ง</td>

                        </tr>
                        <tr>
                            <td width="40%">สนามฟุตบอล </td>
                            <td width="40%">จำนวน <a href="#" id="no4_6_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_6_2}}</a> แห่ง</td>

                        </tr>
                        <tr>
                            <td width="40%">สนามบาสเกตบอล </td>
                            <td width="40%">จำนวน <a href="#" id="no4_6_3" data-type="text" data-pk="1" data-title="Enter username">{{no4_6_3}}</a> แห่ง</td>

                        </tr>
                        <tr>
                            <td width="40%">สนามตะกร้อ </td>
                            <td width="40%">จำนวน <a href="#" id="no4_6_4" data-type="text" data-pk="1" data-title="Enter username">{{no4_6_4}}</a> แห่ง</td>

                        </tr>
                        <tr>
                            <td width="40%">สระว่ายน้ำ </td>
                            <td width="40%">จำนวน <a href="#" id="no4_6_5" data-type="text" data-pk="1" data-title="Enter username">{{no4_6_5}}</a> แห่ง</td>

                        </tr>
                        <tr>
                            <td width="40%">ห้องสมุดประชาชน </td>
                            <td width="40%">จำนวน <a href="#" id="no4_6_6" data-type="text" data-pk="1" data-title="Enter username">{{no4_6_6}}</a> แห่ง</td>

                        </tr>
                        <tr>
                            <td width="40%">สนามเด็กเล่น </td>
                            <td width="40%">จำนวน <a href="#" id="no4_6_7" data-type="text" data-pk="1" data-title="Enter username">{{no4_6_7}}</a> แห่ง</td>

                        </tr>
                        <tr>
                            <td width="40%">อื่นๆ (ระบุ) <textarea rows="4" cols="50" id="no4_6_8_1" class="form-control col-md-2 col-xs-6">{{no4_6_8_1}}</textarea></td>
                            <td width="40%">จำนวน <a href="#" id="no4_6_8_2" data-type="text" data-pk="1" data-title="Enter username">{{no4_6_8_2}}</a> แห่ง</td>

                        </tr>
                    </tbody>
                  </table>

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
        keyNavigation : false,
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

  {{ assets.outputJs('modules-clinic-no4-js') }}

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