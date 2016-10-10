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
            <h2>ด้านสิ่งแวดล้อมและทรัพยากรธรรมชาติ การสำรวจข้อมูลขั้นพื้นฐาน <small>ครั้งที่ 1/2559</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a href="#{{ url.get() }}clinic-admin/exportword/printformno8" role="button" aria-expanded="false"><i class="fa fa-print"></i></a></li>
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
                    <span class="step_no">8.1</span>
                    <span class="step_descr">อุณหภูมิ<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-2">
                    <span class="step_no" Id="Id2">8.2-8.3</span>
                    <span class="step_descr">
                        ปริมาณน้ำฝนต่ำสุด - สูงสุด<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-3">
                    <span class="step_no">8.4</span>
                    <span class="step_descr">
                        คลอง ลำธาร ห้วย <br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-4">
                    <span class="step_no">8.5</span>
                    <span class="step_descr">
                        การระบายน้ำ<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-5">
                    <span class="step_no">8.6</span>
                    <span class="step_descr">
                        น้ำเสีย<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-6">
                    <span class="step_no">8.7</span>
                    <span class="step_descr">
                        ขยะ<br />
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
                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="40%">อุณหภูมิสูงสุด </td>
                            <td width="30%"><a href="#" id="no8_1_1_1" data-type="text" data-pk="1" data-title="Enter username">{{no8_1_1_1}}</a> องศาเซลเซียส</td>
                        </tr>
                        <tr>
                            <td width="40%">อุณหภูมิต่ำสุด </td>
                            <td width="30%"><a href="#" id="no8_1_1_2" data-type="text" data-pk="1" data-title="Enter username">{{no8_1_1_2}}</a> องศาเซลเซียส</td>
                        </tr>
                        <tr>
                            <td width="40%">อุณหภูมิเฉลี่ยต่อเดือน มี.ค. - มิ.ย. </td>
                            <td width="30%"><a href="#" id="no8_1_2" data-type="text" data-pk="1" data-title="Enter username">{{no8_1_2}}</a> องศาเซลเซียส</td>
                        </tr>
                        <tr>
                            <td width="40%">อุณหภูมิเฉลี่ยต่อเดือน ก.ค. - ต.ค. </td>
                            <td width="30%"><a href="#" id="no8_1_3" data-type="text" data-pk="1" data-title="Enter username">{{no8_1_3}}</a> องศาเซลเซียส</td>
                        </tr>
                        <tr>
                            <td width="40%">อุณหภูมิเฉลี่ยต่อเดือน พ.ย. - ก.พ. </td>
                            <td width="30%"><a href="#" id="no8_1_4" data-type="text" data-pk="1" data-title="Enter username">{{no8_1_4}}</a> องศาเซลเซียส</td>
                        </tr>
                    </tbody>
                  </table>

              </div>

              <div id="step-2">
                {% block comment_tab2 %}
                {% endblock %}
                <form class="form-horizontal form-label-left">
                  <div class="form-group">

                    <div class="col-md-2">
                        <label> ปริมาณน้ำฝนเฉลี่ย  พ.ศ. </label>
                        <input type="text" id="no8_2_1_1" required="required" class="form-control col-md-3 col-xs-6" value={{no8_2_1_1}}>
                    </div>

                    <div class="col-md-2">
                        <label> ต่ำสุด </label>
                        <input type="text" id="no8_2_1_2" required="required" class="form-control col-md-3 col-xs-6" value={{no8_2_1_2}}>
                        <label > (ลบ.ม.) </label>
                    </div>


                    <div class="col-md-2">
                        <label > สูงสุด </label>
                        <input type="text" id="no8_2_1_3" required="required" class="form-control col-md-3 col-xs-6" value={{no8_2_1_3}}>
                        <label> (ลบ.ม.) </label>
                    </div>

                  </div>

                  <div class="form-group">

                    <div class="col-md-2">
                        <label> ปริมาณน้ำฝนเฉลี่ย  พ.ศ. </label>
                        <input type="text" id="no8_2_2_1" required="required" class="form-control col-md-3 col-xs-6" value={{no8_2_2_1}}>
                    </div>

                    <div class="col-md-2">
                        <label> ต่ำสุด </label>
                        <input type="text" id="no8_2_2_2" required="required" class="form-control col-md-3 col-xs-6" value={{no8_2_2_2}}>
                        <label > (ลบ.ม.) </label>
                    </div>


                    <div class="col-md-2">
                        <label > สูงสุด </label>
                        <input type="text" id="no8_2_2_3" required="required" class="form-control col-md-3 col-xs-6" value={{no8_2_2_3}}>
                        <label> (ลบ.ม.) </label>
                    </div>

                  </div>

                  <div class="form-group">

                    <div class="col-md-2">
                        <label> ปริมาณน้ำฝนเฉลี่ย  พ.ศ. </label>
                        <input type="text" id="no8_2_3_1" required="required" class="form-control col-md-3 col-xs-6" value={{no8_2_3_1}}>
                    </div>

                    <div class="col-md-2">
                        <label> ต่ำสุด </label>
                        <input type="text" id="no8_2_3_2" required="required" class="form-control col-md-3 col-xs-6" value={{no8_2_3_2}}>
                        <label > (ลบ.ม.) </label>
                    </div>


                    <div class="col-md-2">
                        <label > สูงสุด </label>
                        <input type="text" id="no8_2_3_3" required="required" class="form-control col-md-3 col-xs-6" value={{no8_2_3_3}}>
                        <label> (ลบ.ม.) </label>
                    </div>

                  </div>

                </form>
              </div>


              <div id="step-3">
                {% block comment_tab3 %}
                {% endblock %}
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="map">
                    คลอง ลำธาร ห้วย จำนวน </label>
                    <div class="col-md-2">
                        <input type="text" id="no8_4" required="required" class="form-control col-md-3 col-xs-6" tabindex="1" value={{no8_4}}>
                    </div>
                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="map"> แห่ง ได้แก่ </label>
                  </div>

                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                          <td width="5%">1.</td>
                          <td width="40%"><input type="text" id="no8_4_1" required="required" class="form-control col-md-4 col-xs-6" tabindex="2" value={{no8_4_1}}></td>
                          <td width="5%">6.</td>
                          <td width="40%"><input type="text" id="no8_4_6" required="required" class="form-control col-md-4 col-xs-6" tabindex="7" value={{no8_4_6}}></td>
                        </tr>
                        <tr>
                          <td width="5%">2.</td>
                          <td width="40%"><input type="text" id="no8_4_2" required="required" class="form-control col-md-4 col-xs-6" tabindex="3" value={{no8_4_2}}></td>
                          <td width="5%">7.</td>
                          <td width="40%"><input type="text" id="no8_4_7" required="required" class="form-control col-md-4 col-xs-6" tabindex="8" value={{no8_4_7}}></td>
                        </tr>
                        <tr>
                          <td width="5%">3.</td>
                          <td width="40%"><input type="text" id="no8_4_3" required="required" class="form-control col-md-4 col-xs-6" tabindex="4" value={{no8_4_3}}></td>
                          <td width="5%">8.</td>
                          <td width="40%"><input type="text" id="no8_4_8" required="required" class="form-control col-md-4 col-xs-6" tabindex="9" value={{no8_4_8}}></td>
                        </tr>
                        <tr>
                          <td width="5%">4.</td>
                          <td width="40%"><input type="text" id="no8_4_4" required="required" class="form-control col-md-4 col-xs-6" tabindex="5" value={{no8_4_4}}></td>
                          <td width="5%">9.</td>
                          <td width="40%"><input type="text" id="no8_4_9" required="required" class="form-control col-md-4 col-xs-6" tabindex="10" value={{no8_4_9}}></td>
                        </tr>
                        <tr>
                          <td width="5%">5.</td>
                          <td width="40%"><input type="text" id="no8_4_5" required="required" class="form-control col-md-4 col-xs-6" tabindex="6" value={{no8_4_5}}></td>
                          <td width="5%">10.</td>
                          <td width="40%"><input type="text" id="no8_4_10" required="required" class="form-control col-md-4 col-xs-6" tabindex="11" value={{no8_4_10}}></td>
                        </tr>
                    </tbody>
                  </table>
              </div>

              <div id="step-4">
                  {% block comment_tab4 %}
                  {% endblock %}
                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="40%">พื้นที่น้ำท่วมถึง คิดเป็นร้อยละ </td>
                            <td width="30%"><a href="#" id="no8_5_1" data-type="text" data-pk="1" data-title="Enter username">{{no8_5_1}}</a> ของพื้นที่ทั้งหมด</td>
                        </tr>
                        <tr>
                            <td width="40%">ระยะเวลาเฉลี่ยที่น้ำท่วมขังนานที่สุด </td>
                            <td width="30%"><a href="#" id="no8_5_2_1" data-type="text" data-pk="1" data-title="Enter username">{{no8_5_2_1}}</a> วัน</td>
                        </tr>
                        <tr>
                            <td width="40%">ประมาณช่วงเดือน </td>
                            <td width="40%">
                              <div class="form-group">
                                <div class="col-md-4 col-sm-2 col-xs-12">
                                  <select id="no8_5_2_2" class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                    <option value="month">เลือกเดือน</option>
                                    {%if no8_5_2_2 == "jan" %}
                                      <option value="jan" selected>มกราคม</option>
                                    {% else %}
                                      <option value="jan">มกราคม</option>
                                    {% endif %}
                                    {%if no8_5_2_2 == "feb" %}
                                      <option value="feb" selected>กุมภาพันธ์</option>
                                    {% else %}
                                      <option value="feb">กุมภาพันธ์</option>
                                    {% endif %}
                                    {%if no8_5_2_2 == "mar" %}
                                      <option value="mar" selected>มีนาคม</option>
                                    {% else %}
                                      <option value="mar">มีนาคม</option>
                                    {% endif %}
                                    {%if no8_5_2_2 == "apr" %}
                                      <option value="apr" selected>เมษายน</option>
                                    {% else %}
                                      <option value="apr">เมษายน</option>
                                    {% endif %}
                                    {%if no8_5_2_2 == "may" %}
                                      <option value="may" selected>พฤษภาคม</option>
                                    {% else %}
                                      <option value="may">พฤษภาคม</option>
                                    {% endif %}
                                    {%if no8_5_2_2 == "jun" %}
                                      <option value="jun" selected>มิถุนายน</option>
                                    {% else %}
                                      <option value="jun">มิถุนายน</option>
                                    {% endif %}
                                    {%if no8_5_2_2 == "jul" %}
                                      <option value="jul" selected>กรกฎาคม</option>
                                    {% else %}
                                      <option value="jul">กรกฎาคม</option>
                                    {% endif %}
                                    {%if no8_5_2_2 == "aug" %}
                                      <option value="aug" selected>สิงหาคม</option>
                                    {% else %}
                                      <option value="aug">สิงหาคม</option>
                                    {% endif %}
                                    {%if no8_5_2_2 == "sep" %}
                                      <option value="sep" selected>กันยายน</option>
                                    {% else %}
                                      <option value="sep">กันยายน</option>
                                    {% endif %}
                                    {%if no8_5_2_2 == "oct" %}
                                      <option value="oct" selected>ตุลาคม</option>
                                    {% else %}
                                      <option value="oct">ตุลาคม</option>
                                    {% endif %}
                                    {%if no8_5_2_2 == "nov" %}
                                      <option value="nov" selected>พฤศจิกายน</option>
                                    {% else %}
                                      <option value="nov">พฤศจิกายน</option>
                                    {% endif %}
                                    {%if no8_5_2_2 == "dec" %}
                                      <option value="dec" selected>ธันวาคม</option>
                                    {% else %}
                                      <option value="dec">ธันวาคม</option>
                                    {% endif %}
                                  </select>
                                </div>
                                <label class="control-label col-md-1 col-sm-2 col-xs-12" for="map"> ถึง </label>
                                <div class="col-md-4 col-sm-2 col-xs-12">
                                  <select id="no8_5_2_3" class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                    <option value="month">เลือกเดือน</option>
                                    {%if no8_5_2_3 == "jan" %}
                                      <option value="jan" selected>มกราคม</option>
                                    {% else %}
                                      <option value="jan">มกราคม</option>
                                    {% endif %}
                                    {%if no8_5_2_3 == "feb" %}
                                      <option value="feb" selected>กุมภาพันธ์</option>
                                    {% else %}
                                      <option value="feb">กุมภาพันธ์</option>
                                    {% endif %}
                                    {%if no8_5_2_3 == "mar" %}
                                      <option value="mar" selected>มีนาคม</option>
                                    {% else %}
                                      <option value="mar">มีนาคม</option>
                                    {% endif %}
                                    {%if no8_5_2_3 == "apr" %}
                                      <option value="apr" selected>เมษายน</option>
                                    {% else %}
                                      <option value="apr">เมษายน</option>
                                    {% endif %}
                                    {%if no8_5_2_3 == "may" %}
                                      <option value="may" selected>พฤษภาคม</option>
                                    {% else %}
                                      <option value="may">พฤษภาคม</option>
                                    {% endif %}
                                    {%if no8_5_2_3 == "jun" %}
                                      <option value="jun" selected>มิถุนายน</option>
                                    {% else %}
                                      <option value="jun">มิถุนายน</option>
                                    {% endif %}
                                    {%if no8_5_2_3 == "jul" %}
                                      <option value="jul" selected>กรกฎาคม</option>
                                    {% else %}
                                      <option value="jul">กรกฎาคม</option>
                                    {% endif %}
                                    {%if no8_5_2_3 == "aug" %}
                                      <option value="aug" selected>สิงหาคม</option>
                                    {% else %}
                                      <option value="aug">สิงหาคม</option>
                                    {% endif %}
                                    {%if no8_5_2_3 == "sep" %}
                                      <option value="sep" selected>กันยายน</option>
                                    {% else %}
                                      <option value="sep">กันยายน</option>
                                    {% endif %}
                                    {%if no8_5_2_3 == "oct" %}
                                      <option value="oct" selected>ตุลาคม</option>
                                    {% else %}
                                      <option value="oct">ตุลาคม</option>
                                    {% endif %}
                                    {%if no8_5_2_3 == "nov" %}
                                      <option value="nov" selected>พฤศจิกายน</option>
                                    {% else %}
                                      <option value="nov">พฤศจิกายน</option>
                                    {% endif %}
                                    {%if no8_5_2_3 == "dec" %}
                                      <option value="dec" selected>ธันวาคม</option>
                                    {% else %}
                                      <option value="dec">ธันวาคม</option>
                                    {% endif %}
                                  </select>
                                </div>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="40%">เครื่องสูบน้ำ เครื่องที่ 1 เส้นผ่านศูนย์กลาง </td>
                            <td width="30%"><a href="#" id="no8_5_3" data-type="text" data-pk="1" data-title="Enter username">{{no8_5_3}}</a> นิ้ว</td>
                        </tr>
                        <tr>
                            <td width="40%">เครื่องสูบน้ำ เครื่องที่ 2 เส้นผ่านศูนย์กลาง </td>
                            <td width="30%"><a href="#" id="no8_5_4" data-type="text" data-pk="1" data-title="Enter username">{{no8_5_4}}</a> นิ้ว</td>
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
                            <td width="40%">ปริมาณน้ำเสีย </td>
                            <td width="30%"><a href="#" id="no8_6_1" data-type="text" data-pk="1" data-title="Enter username">{{no8_6_1}}</a> ลบ.ม./วัน</td>
                        </tr>
                        <tr>
                            <td width="40%">ระบบบำบัดน้ำเสียที่ใช้ (ระบุ)
                            <textarea id="no8_6_2_1" rows="4" cols="50" class="form-control col-md-2 col-xs-6">{{no8_6_2_1}}</textarea></td>
                            <td width="30%">รวม <a href="#" id="no8_6_2_2" data-type="text" data-pk="1" data-title="Enter username">{{no8_6_2_2}}</a> แห่ง</td>
                        </tr>

                        <tr>
                            <td width="40%">น้ำเสียที่บำบัดได้ จำนวน </td>
                            <td width="30%"><a href="#" id="no8_6_3" data-type="text" data-pk="1" data-title="Enter username">{{no8_6_3}}</a> ลบ.ม./วัน</td>
                        </tr>
                        <tr>
                            <td width="40%">ค่าอินทรีย์สาร (BOD) ในคลอง/ทางระบายน้ำสายหลัก </td>
                            <td width="30%"><a href="#" id="no8_6_4" data-type="text" data-pk="1" data-title="Enter username">{{no8_6_4}}</a></td>
                        </tr>
                    </tbody>
                  </table>

              </div>

              <div id="step-6">
                  {% block comment_tab6 %}
                  {% endblock %}

                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="40%">ปริมาณขยะ </td>
                            <td width="30%"><a href="#" id="no8_7_1" data-type="text" data-pk="1" data-title="Enter username">{{no8_7_1}}</a> ตัน/วัน</td>
                        </tr>
                        <tr>
                            <td width="40%">รถยนต์ที่ใช้จัดเก็บขยะ รวม </td>
                            <td width="30%"><a href="#" id="no8_7_2" data-type="text" data-pk="1" data-title="Enter username">{{no8_7_2}}</a> คัน แยกเป็น (แยกตามขนาดความจุขยะ)</td>
                        </tr>

                        <tr>
                            <td width="40%">รถเก็บขนขยะ ขนาดความจุ </td>
                            <td width="30%"><a href="#" id="no8_7_3" data-type="text" data-pk="1" data-title="Enter username">{{no8_7_3}}</a></td>
                        </tr>
                        <tr>
                            <td width="40%">ได้มาเมื่อ พ.ศ.  </td>
                            <td width="30%"><input type="text" id="no8_7_4" required="required" class="form-control col-md-3 col-xs-6" value={{no8_7_4}}></td>
                        </tr>
                        <tr>
                            <td width="40%">ขยะที่เก็บขนได้ จำนวน </td>
                            <td width="30%"><a href="#" id="no8_7_5" data-type="text" data-pk="1" data-title="Enter username">{{no8_7_5}}</a> ลบ.ม./วัน</td>
                        </tr>
                        <tr>
                            <td width="40%">ขยะที่กำจัดได้ จำนวน </td>
                            <td width="30%"><a href="#" id="no8_7_6" data-type="text" data-pk="1" data-title="Enter username">{{no8_7_6}}</a> ลบ.ม./วัน</td>
                        </tr>
                    </tbody>
                  </table>

                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-1 col-xs-12" for="map">
                    กำจัดโดยวิธี</label>
                  </div>
                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="40%">กองบนพื้น </td>
                            <td width="30%">
                                <div class="col-md-4 col-sm-2 col-xs-12">
                                  <select id="no8_7_7" class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                    <option value="empty">กรุณาเลือก</option>
                                    {% if no8_7_7 == "yes" %}
                                      <option value="yes" selected>ใช้</option>
                                    {% else %}
                                      <option value="yes">ใช้</option>
                                    {% endif %}
                                    {% if no8_7_7 == "no" %}
                                      <option value="no" selected>ไม่ใช้</option>
                                    {% else %}
                                      <option value="no">ไม่ใช้</option>
                                    {% endif %}
                                  </select>
                                </div>
                              </td>
                        </tr>
                        <tr>
                            <td width="40%">กองบนพื้นแล้วเผา </td>
                            <td width="30%">
                                <div class="col-md-4 col-sm-2 col-xs-12">
                                  <select id="no8_7_8" class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                    <option value="empty">กรุณาเลือก</option>
                                    {% if no8_7_8 == "yes" %}
                                      <option value="yes" selected>ใช้</option>
                                    {% else %}
                                      <option value="yes">ใช้</option>
                                    {% endif %}
                                    {% if no8_7_8 == "no" %}
                                      <option value="no" selected>ไม่ใช้</option>
                                    {% else %}
                                      <option value="no">ไม่ใช้</option>
                                    {% endif %}
                                  </select>
                                </div>
                              </td>
                        </tr>
                        <tr>
                            <td width="40%">หมักทำปุ๋ย </td>
                            <td width="30%">
                                <div class="col-md-4 col-sm-2 col-xs-12">
                                  <select id="no8_7_9" class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                    <option value="empty">กรุณาเลือก</option>
                                    {% if no8_7_9 == "yes" %}
                                      <option value="yes" selected>ใช้</option>
                                    {% else %}
                                      <option value="yes">ใช้</option>
                                    {% endif %}
                                    {% if no8_7_9 == "no" %}
                                      <option value="no" selected>ไม่ใช้</option>
                                    {% else %}
                                      <option value="no">ไม่ใช้</option>
                                    {% endif %}
                                  </select>
                                </div>
                              </td>
                        </tr>
                        <tr>
                            <td width="40%">ฝังกลบอย่างถูกสุขลักษณะ </td>
                            <td width="30%">
                                <div class="col-md-4 col-sm-2 col-xs-12">
                                  <select id="no8_7_10" class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                    <option value="empty">กรุณาเลือก</option>
                                    {% if no8_7_10 == "yes" %}
                                      <option value="yes" selected>ใช้</option>
                                    {% else %}
                                      <option value="yes">ใช้</option>
                                    {% endif %}
                                    {% if no8_7_10 == "no" %}
                                      <option value="no" selected>ไม่ใช้</option>
                                    {% else %}
                                      <option value="no">ไม่ใช้</option>
                                    {% endif %}
                                  </select>
                                </div>
                              </td>
                        </tr>
                        <tr>
                            <td width="40%">เผาในเตาขยะ </td>
                            <td width="30%">
                                <div class="col-md-4 col-sm-2 col-xs-12">
                                  <select id="no8_7_11" class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                    <option value="empty">กรุณาเลือก</option>
                                    {% if no8_7_11 == "yes" %}
                                      <option value="yes" selected>ใช้</option>
                                    {% else %}
                                      <option value="yes">ใช้</option>
                                    {% endif %}
                                    {% if no8_7_11 == "no" %}
                                      <option value="no" selected>ไม่ใช้</option>
                                    {% else %}
                                      <option value="no">ไม่ใช้</option>
                                    {% endif %}
                                  </select>
                                </div>
                              </td>
                        </tr>
                        <tr>
                            <td width="40%">อื่นๆ (ระบุ) <textarea id="no8_7_12_1" rows="4" cols="50" class="form-control col-md-2 col-xs-6">{{no8_7_12_1}}</textarea></td>
                            <td width="30%">
                                <div class="col-md-4 col-sm-2 col-xs-12">
                                  <select id="no8_7_12_2" class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                    <option value="empty">กรุณาเลือก</option>
                                    {% if no8_7_12_2 == "yes" %}
                                      <option value="yes" selected>ใช้</option>
                                    {% else %}
                                      <option value="yes">ใช้</option>
                                    {% endif %}
                                    {% if no8_7_12_2 == "no" %}
                                      <option value="no" selected>ไม่ใช้</option>
                                    {% else %}
                                      <option value="no">ไม่ใช้</option>
                                    {% endif %}
                                  </select>
                                </div>
                              </td>
                        </tr>
                        <tr>
                            <td width="40%">ที่ดินสำหรับกำจัดขยะที่กำลังใช้ทั้งหมด จำนวน </td>
                            <td width="30%"><a href="#" id="no8_7_13_1" data-type="text" data-pk="1" data-title="Enter username">{{no8_7_13_1}}</a> ไร่</td>
                        </tr>
                        <tr>
                            <td width="40%">ตั้งอยู่ที่<textarea id="no8_7_13_2" rows="4" cols="50" class="form-control col-md-2 col-xs-6">{{no8_7_13_2}}</textarea></td>
                            <td width="30%"></td>
                        </tr>
                        <tr>
                            <td width="40%">ห่างจากเขตชุมชนเป็นระยะทาง </td>
                            <td width="30%"><a href="#" id="no8_7_14" data-type="text" data-pk="1" data-title="Enter username">{{no8_7_14}}</a> กม.</td>
                        </tr>
                        <tr>
                            <td width="40%">ที่ดินสำหรับกำจัดขยะที่ใช้ไปแล้ว จำนวน </td>
                            <td width="30%"><a href="#" id="no8_7_15" data-type="text" data-pk="1" data-title="Enter username">{{no8_7_15}}</a> ไร่</td>
                        </tr>
                        <tr>
                            <td width="40%">คาดว่าสามารถกำจัดขยะได้อีก จำนวน </td>
                            <td width="30%"><a href="#" id="no8_7_16" data-type="text" data-pk="1" data-title="Enter username">{{no8_7_16}}</a> ไร่</td>
                        </tr>
                    </tbody>
                  </table>

                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-1 col-xs-12" for="map">
                    สภาพการเป็นเจ้าของที่ดินสำหรับกำจัดขยะ</label>
                  </div>
                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="40%">ท้องถิ่นจัดซื้อเองเมื่อ พ.ศ. <input type="text" id="no8_7_17_1_1" required="required" class="form-control col-md-2 col-xs-6" value={{no8_7_17_1_1}}></td>
                            <td width="30%">ราคา <a href="#" id="no8_7_17_1_2" data-type="text" data-pk="1" data-title="Enter username">{{no8_7_17_1_2}}</a> บาท</td>
                        </tr>
                        <tr>
                            <td width="40%">เช่าที่ดินเอกชน ตั้งแต่ พ.ศ. <input type="text" id="no8_7_17_2_1" required="required" class="form-control col-md-2 col-xs-6" value={{no8_7_17_2_1}}></td>
                            <td width="30%">ปัจจุบันเช่าปีละ <a href="#" id="no8_7_17_2_2" data-type="text" data-pk="1" data-title="Enter username">{{no8_7_17_2_2}}</a> บาท</td>
                        </tr>

                        <tr>
                            <td width="40%">อื่นๆ (ระบุ)<textarea id="no8_7_18" rows="4" cols="50" class="form-control col-md-2 col-xs-6">{{no8_7_18}}</textarea></td>
                            <td width="30%"></td>
                        </tr>
                        <tr>
                            <td width="40%">ที่ดินสำรองที่เตรียมไว้สำหรับกำจัดขยะ จำนวน </td>
                            <td width="30%"><a href="#" id="no8_7_19" data-type="text" data-pk="1" data-title="Enter username">{{no8_7_19}}</a> ไร่</td>
                        </tr>
                        <tr>
                            <td width="40%">ที่ตั้งสำรองที่เตรียมไว้สำหรับกำจัดขยะห่างจากท้องถิ่นเป็นระยะทาง </td>
                            <td width="30%"><a href="#" id="no8_7_20" data-type="text" data-pk="1" data-title="Enter username">{{no8_7_20}}</a> กม.</td>
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
        transitionEffect: 'slide'
      });

      $('.buttonNext').addClass('btn btn-success');
      $('.buttonPrevious').addClass('btn btn-primary');
      $('.buttonFinish').addClass('btn btn-default');
    });

    function startUp(){
      $('#Id2').width("60px");
    };
    startUp();
  </script>
  <!-- /jQuery Smart Wizard -->

  {{ assets.outputJs('modules-clinic-no8-js') }}
