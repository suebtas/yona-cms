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
            <h2>ด้านการป้องกันและบรรเทาสาธารณภัย การสำรวจข้อมูลขั้นพื้นฐาน <small>ครั้งที่ {{discoverySurvey.Survey.no}}</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a href="{{ url.get() }}clinic-admin/export-word/printformno7" role="button" aria-expanded="false"><i class="fa fa-print"></i></a></li>
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
                            <span class="step_no" id="st1">7.1-7.2</span>
                            <span class="step_descr">สถิติเพลิงไหม้และความสูญเสียชีวิต<br />
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no" id="st2">7.3-7.6</span>
                            <span class="step_descr">ชนิดรถต่างๆ<br />
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no"  id="st3">7.7-7.11</span>
                            <span class="step_descr">เรือยนต์ เครื่องดับเพลิงและพนักงานดับเพลิง<br />
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
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
                              สถิติเพลิงไหม้ในรอบปี (1 ม.ค. - 31 ธ.ค.) จำนวน <a href="#" id="no7_1" data-type="text" data-pk="1" data-title="Enter username"> {{no7_1}} </a> ครั้ง
                              </center><br>
                              <table id="road" class="table table-striped table-bordered" style="clear: both">
                                <tbody>
                                  <thead>
                                    <th colspan="2">
                                      <center>ความสูญเสียชีวิตและทรัพย์สินจากสาเหตุเพลิงไหม้ในรอบปีที่ผ่านมา</center>
                                    </th>
                                  </thead>
                                  <tr>
                                    <td width="50%">
                                      คิดเป็นผู้เสียชีวิต
                                    </td>
                                    <td>
                                      <a href="#" id="no7_2_1" data-type="text" data-pk="1" data-title="Enter username"> {{no7_2_1}} </a> คน
                                    </td>
                                  </tr>
                                  <tr>
                                    <td width="50%">
                                    บาดเจ็บ
                                    </td>
                                    <td>
                                      <a href="#" id="no7_2_2" data-type="text" data-pk="1" data-title="Enter username"> {{no7_2_2}} </a> คน
                                    </td>
                                  </tr>
                                  <tr>
                                    <td width="50%">
                                    ทรัพย์สินมูลค่า
                                    </td>
                                    <td>
                                      <a href="#" id="no7_2_3" data-type="text" data-pk="1" data-title="Enter username"> {{no7_2_3}} </a> บาท
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                          </div>
                        </form>
                      </div>

                      <div id="step-2">
                          {% block comment_tab2 %}
                          {% endblock %}
                          <form class="form-horizontal form-label-left">
                            <div class="form-group">
                              <!-- table 7.3-->
                              <table class="table table-striped table-bordered">
                                <tbody>
                                  <thead>
                                    <th colspan="5">
                                      รถยนต์ดับเพลิง (แยกตามขนาดบรรจุน้ำ) จำนวน <a href="#" id="no7_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3}} </a> คัน
                                    </th>
                                  </thead>
                                  <thead>
                                    <th>
                                      คันที่
                                    </th>
                                    <th>
                                      จุน้ำได้ (ลบ.ม.)
                                    </th>
                                    <th>
                                      ที่มา
                                    </th>
                                    <th>
                                      ได้มาเมื่อ พ.ศ.
                                    </th>
                                    <th>
                                      ราคา(ถ้าซื้อมา)
                                    </th>
                                  </thead>
                                  <tr>
                                    <td>
                                      1
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_1_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_1_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_3_1_2" name="name" value="{{no7_3_1_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_1_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_1_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_1_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_1_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      2
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_2_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_2_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_3_2_2" name="name" value="{{no7_3_2_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_2_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_2_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_2_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_2_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      3
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_3_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_3_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_3_3_2" name="name" value="{{no7_3_3_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_3_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_3_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_3_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_3_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      4
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_4_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_4_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_3_4_2" name="name" value="{{no7_3_4_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_4_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_4_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_4_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_4_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      5
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_5_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_5_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_3_5_2" name="name" value="{{no7_3_5_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_5_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_5_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_5_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_5_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      6
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_6_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_6_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_3_6_2" name="name" value="{{no7_3_6_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_6_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_6_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_6_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_6_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      7
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_7_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_7_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_3_7_2" name="name" value="{{no7_3_7_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_7_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_7_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_7_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_7_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      8
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_8_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_8_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_3_8_2" name="name" value="{{no7_3_8_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_8_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_8_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_8_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_8_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      9
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_9_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_9_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_3_9_2" name="name" value="{{no7_3_9_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_9_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_9_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_9_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_9_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      10
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_10_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_10_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_3_10_2" name="name" value="{{no7_3_10_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_10_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_10_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_3_10_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_3_10_4}} </a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>

                              <!--table 7.4-->
                              <table class="table table-striped table-bordered">
                                <tbody>
                                  <thead>
                                    <th colspan="5">
                                      รถบรรทุกน้ำ (แยกตามขนาดบรรจุน้ำ) จำนวน <a href="#" id="no7_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4}} </a> คัน
                                    </th>
                                  </thead>
                                  <thead>
                                    <th>
                                      คันที่
                                    </th>
                                    <th>
                                      จุน้ำได้ (ลบ.ม.)
                                    </th>
                                    <th>
                                      ที่มา
                                    </th>
                                    <th>
                                      ได้มาเมื่อ พ.ศ.
                                    </th>
                                    <th>
                                      ราคา(ถ้าซื้อมา)
                                    </th>
                                  </thead>
                                  <tr>
                                    <td>
                                      1
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_1_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_1_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_4_1_2" name="name" value="{{no7_4_1_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_1_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_1_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_1_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_1_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      2
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_2_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_2_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_4_2_2" name="name" value="{{no7_4_2_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_2_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_2_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_2_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_2_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      3
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_3_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_3_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_4_3_2" name="name" value="{{no7_4_3_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_3_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_3_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_3_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_3_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      4
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_4_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_4_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_4_4_2" name="name" value="{{no7_4_4_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_4_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_4_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_4_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_4_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      5
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_5_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_5_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_4_5_2" name="name" value="{{no7_4_5_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_5_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_5_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_5_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_5_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      6
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_6_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_6_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_4_6_2" name="name" value="{{no7_4_6_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_6_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_6_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_6_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_6_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      7
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_7_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_7_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_4_7_2" name="name" value="{{no7_4_7_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_7_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_7_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_7_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_7_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      8
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_8_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_8_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_4_8_2" name="name" value="{{no7_4_8_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_8_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_8_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_8_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_8_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      9
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_9_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_9_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_4_9_2" name="name" value="{{no7_4_9_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_9_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_9_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_9_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_9_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      10
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_10_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_10_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_4_10_2" name="name" value="{{no7_4_10_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_10_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_10_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_4_10_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_4_10_4}} </a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>

                              <!--table 7.5-->
                              <table class="table table-striped table-bordered">
                                <tbody>
                                  <thead>
                                    <th colspan="5">
                                       รถกระเช้า (แยกตามความสูง) จำนวน <a href="#" id="no7_5" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5}} </a> คัน
                                    </th>
                                  </thead>
                                  <thead>
                                    <th>
                                      คันที่
                                    </th>
                                    <th width="18%">
                                       สูง (เมตร)
                                    </th>
                                    <th>
                                      ที่มา
                                    </th>
                                    <th>
                                      ได้มาเมื่อ พ.ศ.
                                    </th>
                                    <th>
                                      ราคา(ถ้าซื้อมา)
                                    </th>
                                  </thead>
                                  <tr>
                                    <td>
                                      1
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_1_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_1_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_5_1_2" name="name" value="{{no7_5_1_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_1_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_1_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_1_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_1_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      2
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_2_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_2_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_5_2_2" name="name" value="{{no7_5_2_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_2_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_2_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_2_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_2_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      3
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_3_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_3_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_5_3_2" name="name" value="{{no7_5_3_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_3_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_3_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_3_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_3_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      4
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_4_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_4_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_5_4_2" name="name" value="{{no7_5_4_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_4_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_4_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_4_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_4_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      5
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_5_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_5_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_5_5_2" name="name" value="{{no7_5_5_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_5_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_5_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_5_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_5_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      6
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_6_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_6_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_5_6_2" name="name" value="{{no7_5_6_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_6_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_6_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_6_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_6_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      7
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_7_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_7_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_5_7_2" name="name" value="{{no7_5_7_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_7_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_7_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_7_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_7_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      8
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_8_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_8_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_5_8_2" name="name" value="{{no7_5_8_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_8_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_8_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_8_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_8_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      9
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_9_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_9_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_5_9_2" name="name" value="{{no7_5_9_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_9_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_9_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_9_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_9_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      10
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_10_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_10_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_5_10_2" name="name" value="{{no7_5_10_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_10_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_10_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_5_10_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_5_10_4}} </a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>

                              <!--table 7.6-->
                              <table class="table table-striped table-bordered">
                                <tbody>
                                  <thead>
                                    <th colspan="5">
                                       รถบันได (แยกตามความสูง) จำนวน <a href="#" id="no7_6" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6}} </a> คัน
                                    </th>
                                  </thead>
                                  <thead>
                                    <th>
                                      คันที่
                                    </th>
                                    <th width="18%">
                                     สูง (เมตร)
                                    </th>
                                    <th>
                                      ที่มา
                                    </th>
                                    <th>
                                      ได้มาเมื่อ พ.ศ.
                                    </th>
                                    <th>
                                      ราคา(ถ้าซื้อมา)
                                    </th>
                                  </thead>
                                  <tr>
                                    <td>
                                      1
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_1_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_1_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_6_1_2" name="name" value="{{no7_6_1_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_1_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_1_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_1_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_1_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      2
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_2_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_2_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_6_2_2" name="name" value="{{no7_6_2_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_2_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_2_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_2_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_2_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      3
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_3_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_3_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_6_3_2" name="name" value="{{no7_6_3_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_3_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_3_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_3_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_3_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      4
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_4_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_4_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_6_4_2" name="name" value="{{no7_6_4_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_4_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_4_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_4_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_4_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      5
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_5_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_5_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_6_5_2" name="name" value="{{no7_6_5_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_5_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_5_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_5_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_5_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      6
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_6_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_6_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_6_6_2" name="name" value="{{no7_6_6_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_6_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_6_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_6_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_6_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      7
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_7_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_7_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_6_7_2" name="name" value="{{no7_6_7_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_7_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_7_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_7_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_7_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      8
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_8_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_8_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_6_8_2" name="name" value="{{no7_6_8_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_8_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_8_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_8_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_8_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      9
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_9_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_9_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_6_9_2" name="name" value="{{no7_6_9_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_9_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_9_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_9_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_9_4}} </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      10
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_10_1" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_10_1}} </a>
                                    </td>
                                    <td>
                                      <input type="text" id="no7_6_10_2" name="name" value="{{no7_6_10_2}}" class="form-control">
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_10_3" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_10_3}} </a>
                                    </td>
                                    <td>
                                      <a href="#" id="no7_6_10_4" data-type="text" data-pk="1" data-title="Enter username" > {{no7_6_10_4}} </a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </form>
                      </div>
                      <div id="step-3">
                        {% block comment_tab3 %}
                        {% endblock %}
                        <form class="form-horizontal form-label-left">
                          <div class="form-group">
                            <table class="table table-bordered table-striped">
                              <tr>
                                <td width="50%">
                                   เรือยนต์ดับเพลิง จำนวน
                                </td>
                                <td>
                                  <a href="#" id="no7_7" data-type="text" data-pk="1" data-title="Enter username" > {{no7_7}} </a> ลำ
                                </td>
                              </tr>
                              <tr>
                                <td width="50%">
                                   เครื่องดับเพลิงชนิดหาบหาม จำนวน
                                </td>
                                <td>
                                  <a href="#" id="no7_8" data-type="text" data-pk="1" data-title="Enter username" > {{no7_8}} </a> เครื่อง
                                </td>
                              </tr>
                              <tr>
                                <td width="50%">
                                   พนักงานดับเพลิง จำนวน
                                </td>
                                <td>
                                <a href="#" id="no7_9" data-type="text" data-pk="1" data-title="Enter username" > {{no7_9}} </a> คน
                                </td>
                              </tr>
                              <tr>
                                <td width="50%">
                                   อาสาสมัครป้องกัน และบรรเทาสาธารณภัย จำนวน
                                </td>
                                <td>
                                  <a href="#" id="no7_10" data-type="text" data-pk="1" data-title="Enter username" > {{no7_10}} </a> คน
                                </td>
                              </tr>
                              <tr>
                                <td width="50%">
                                   ผู้ฝึกซ้อมบรรเทาสาธารณภัยปีที่ผ่านมา จำนวน
                                </td>
                                <td>
                                  <a href="#" id="no7_11" data-type="text" data-pk="1" data-title="Enter username" > {{no7_11}} </a> คน
                                </td>
                              </tr>
                            </table>
                          </div>
                        </form>
                      </div>

                      <div id="step-4">

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
                        $('#st1').width("60px");
                        $('#st2').width("60px");
                        $('#st3').width("60px");
                      };
                      startUp();
                    </script>
                    <!-- /jQuery Smart Wizard -->

                    {{ assets.outputJs('modules-clinic-no7-js') }}

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