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
            <h2>ด้านสิ่งแวดล้อมและทรัพยากรธรรมชาติ การสำรวจข้อมูลขั้นพื้นฐาน <small>ครั้งที่ 1/2558</small></h2>
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
                        ปริมาณน้ำฝนสูงสุด - ต่ำสุด<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-4">
                    <span class="step_no">8.4</span>
                    <span class="step_descr">
                        คลอง ลำธาร ห้วย <br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-5">
                    <span class="step_no">8.5</span>
                    <span class="step_descr">
                        การระบายน้ำ<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-6">
                    <span class="step_no">8.6</span>
                    <span class="step_descr">
                        น้ำเสีย<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-7">
                    <span class="step_no">8.7</span>
                    <span class="step_descr">
                        ขยะ<br />
                    </span>
                  </a>
                </li>
              </ul>

              <div id="step-1">

                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="40%">อุณหภูมิสูงสุด </td>
                            <td width="30%"><a href="#" id="t1" data-type="text" data-pk="1" data-title="Enter username">00</a> องศาเซลเซียส</td>
                        </tr>
                        <tr>
                            <td width="40%">อุณหภูมิต่ำสุด </td>
                            <td width="30%"><a href="#" id="t2" data-type="text" data-pk="1" data-title="Enter username">00</a> องศาเซลเซียส</td>
                        </tr>
                        <tr>
                            <td width="40%">อุณหภูมิเฉลี่ยต่อเดือน มี.ค. - มิ.ย. </td>
                            <td width="30%"><a href="#" id="t3" data-type="text" data-pk="1" data-title="Enter username">00</a> องศาเซลเซียส</td>
                        </tr>
                        <tr>
                            <td width="40%">อุณหภูมิเฉลี่ยต่อเดือน ก.ค. - ต.ค. </td>
                            <td width="30%"><a href="#" id="t4" data-type="text" data-pk="1" data-title="Enter username">00</a> องศาเซลเซียส</td>
                        </tr>
                        <tr>
                            <td width="40%">อุณหภูมิเฉลี่ยต่อเดือน พ.ย. - ก.พ. </td>
                            <td width="30%"><a href="#" id="t5" data-type="text" data-pk="1" data-title="Enter username">00</a> องศาเซลเซียส</td>
                        </tr>
                    </tbody>
                  </table>

              </div>

              <div id="step-2">
                <form class="form-horizontal form-label-left">
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="map"> ปริมาณน้ำฝนเฉลี่ย  พ.ศ. 
                    </label>
                    <div class="col-md-2">
                        <input type="text" id="area-rai" required="required" class="form-control col-md-3 col-xs-6">
                    </div>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="map"> สูงสุด 
                    </label>
                    <div class="col-md-2">
                        <input type="text" id="area-rai" required="required" class="form-control col-md-3 col-xs-6">
                    </div>
                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="map"> ลบ.ม. </label>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="map"> ปริมาณน้ำฝนเฉลี่ย  พ.ศ. 
                    </label>
                    <div class="col-md-2">
                        <input type="text" id="area-rai" required="required" class="form-control col-md-3 col-xs-6">
                    </div>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="map"> ต่ำสุด 
                    </label>
                    <div class="col-md-2">
                        <input type="text" id="area-rai" required="required" class="form-control col-md-3 col-xs-6">
                    </div>
                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="map"> ลบ.ม. </label>
                  </div>

                </form>
              </div>


              <div id="step-4">
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-3 col-xs-12" for="map"> 
                    คลอง ลำธาร ห้วย จำนวน </label>
                    <div class="col-md-2">
                        <input type="text" id="area-rai" required="required" class="form-control col-md-3 col-xs-6">
                    </div>
                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="map"> แห่ง ได้แก่ </label>
                  </div>       

                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                          <td width="5%">1.</td>
                          <td width="40%"><input type="text" id="area-rai" required="required" class="form-control col-md-4 col-xs-6"></td>
                          <td width="5%">6.</td>
                          <td width="40%"><input type="text" id="area-rai" required="required" class="form-control col-md-4 col-xs-6"></td>
                        </tr>
                        <tr>
                          <td width="5%">2.</td>
                          <td width="40%"><input type="text" id="area-rai" required="required" class="form-control col-md-4 col-xs-6"></td>
                          <td width="5%">7.</td>
                          <td width="40%"><input type="text" id="area-rai" required="required" class="form-control col-md-4 col-xs-6"></td>
                        </tr>
                        <tr>
                          <td width="5%">3.</td>
                          <td width="40%"><input type="text" id="area-rai" required="required" class="form-control col-md-4 col-xs-6"></td>
                          <td width="5%">8.</td>
                          <td width="40%"><input type="text" id="area-rai" required="required" class="form-control col-md-4 col-xs-6"></td>
                        </tr>
                        <tr>
                          <td width="5%">4.</td>
                          <td width="40%"><input type="text" id="area-rai" required="required" class="form-control col-md-4 col-xs-6"></td>
                          <td width="5%">9.</td>
                          <td width="40%"><input type="text" id="area-rai" required="required" class="form-control col-md-4 col-xs-6"></td>
                        </tr>
                        <tr>
                          <td width="5%">5.</td>
                          <td width="40%"><input type="text" id="area-rai" required="required" class="form-control col-md-4 col-xs-6"></td>
                          <td width="5%">10.</td>
                          <td width="40%"><input type="text" id="area-rai" required="required" class="form-control col-md-4 col-xs-6"></td>
                        </tr>
                    </tbody>
                  </table>
              </div>

              <div id="step-5">

                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="40%">พื้นที่น้ำท่วมถึง คิดเป็นร้อยละ </td>
                            <td width="30%"><a href="#" id="f1" data-type="text" data-pk="1" data-title="Enter username">00</a> ของพื้นที่ทั้งหมด</td>
                        </tr>
                        <tr>
                            <td width="40%">ระยะเวลาเฉลี่ยที่น้ำท่วมขังนานที่สุด </td>
                            <td width="30%"><a href="#" id="f2" data-type="text" data-pk="1" data-title="Enter username">00</a> วัน</td>
                        </tr>
                        <tr>
                            <td width="40%">ประมาณช่วงเดือน </td>
                            <td width="30%">
                              <div class="form-group">
                                <div class="col-md-3 col-sm-2 col-xs-12">
                                  <select class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                    <option value="jan">มกราคม</option>
                                    <option value="feb">กุมภาพันธ์</option>
                                    <option value="mar" selected>มีนาคม</option>
                                    <option value="apr">เมษายน</option>
                                    <option value="may">พฤษภาคม</option>
                                    <option value="jun">มิถุนายน</option>
                                    <option value="jul">กรกฎาคม</option>
                                    <option value="aug">สิงหาคม</option>
                                    <option value="sep">กันยายน</option>
                                    <option value="oct">ตุลาคม</option>
                                    <option value="nov">พฤศจิกายน</option>
                                    <option value="dec">ธันวาคม</option>
                                  </select>
                                </div>
                                <label class="control-label col-md-1 col-sm-2 col-xs-12" for="map"> ถึง </label>
                                <div class="col-md-3 col-sm-2 col-xs-12">
                                  <select class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                    <option value="jan">มกราคม</option>
                                    <option value="feb">กุมภาพันธ์</option>
                                    <option value="mar" selected>มีนาคม</option>
                                    <option value="apr">เมษายน</option>
                                    <option value="may">พฤษภาคม</option>
                                    <option value="jun">มิถุนายน</option>
                                    <option value="jul">กรกฎาคม</option>
                                    <option value="aug">สิงหาคม</option>
                                    <option value="sep">กันยายน</option>
                                    <option value="oct">ตุลาคม</option>
                                    <option value="nov">พฤศจิกายน</option>
                                    <option value="dec">ธันวาคม</option>
                                  </select>
                                </div>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="40%">เครื่องสูบน้ำ เครื่องที่ 1 เส้นผ่านศูนย์กลาง </td>
                            <td width="30%"><a href="#" id="f3" data-type="text" data-pk="1" data-title="Enter username">00</a> นิ้ว</td>
                        </tr>
                        <tr>
                            <td width="40%">เครื่องสูบน้ำ เครื่องที่ 2 เส้นผ่านศูนย์กลาง </td>
                            <td width="30%"><a href="#" id="f4" data-type="text" data-pk="1" data-title="Enter username">00</a> นิ้ว</td>
                        </tr>
                    </tbody>
                  </table>

              </div>

              <div id="step-6">

                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="40%">ปริมาณน้ำเสีย </td>
                            <td width="30%"><a href="#" id="r1" data-type="text" data-pk="1" data-title="Enter username">00</a> ลบ.ม./วัน</td>
                        </tr>
                        <tr>
                            <td width="40%">ระบบบำบัดน้ำเสียที่ใช้ (ระบุ) 
                            <textarea rows="4" cols="50" class="form-control col-md-2 col-xs-6"></textarea></td>
                            <td width="30%">รวม <a href="#" id="r2" data-type="text" data-pk="1" data-title="Enter username">00</a> แห่ง</td>
                        </tr>
                        
                        <tr>
                            <td width="40%">น้ำเสียที่บำบัดได้ จำนวน </td>
                            <td width="30%"><a href="#" id="r3" data-type="text" data-pk="1" data-title="Enter username">00</a> ลบ.ม./วัน</td>
                        </tr>
                        <tr>
                            <td width="40%">ค่าอินทรีย์สาร (BOD) ในคลอง/ทางระบายน้ำสายหลัก </td>
                            <td width="30%"><a href="#" id="r4" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                        </tr>
                    </tbody>
                  </table>

              </div>

              <div id="step-7">

                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="40%">ปริมาณขยะ </td>
                            <td width="30%"><a href="#" id="y1" data-type="text" data-pk="1" data-title="Enter username">00</a> ตัน/วัน</td>
                        </tr>
                        <tr>
                            <td width="40%">รถยนต์ที่ใช้จัดเก็บขยะ รวม </td>
                            <td width="30%"><a href="#" id="y2" data-type="text" data-pk="1" data-title="Enter username">00</a> คัน แยกเป็น (แยกตามขนาดความจุขยะ)</td>
                        </tr>
                        
                        <tr>
                            <td width="40%">รถเก็บขนขยะ ขนาดความจุ </td>
                            <td width="30%"><a href="#" id="y3" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                        </tr>
                        <tr>
                            <td width="40%">ได้มาเมื่อ พ.ศ.  </td>
                            <td width="30%"><input type="text" id="area-rai" required="required" class="form-control col-md-3 col-xs-6"></td>
                        </tr>
                        <tr>
                            <td width="40%">ขยะที่เก็บขนได้ จำนวน </td>
                            <td width="30%"><a href="#" id="y4" data-type="text" data-pk="1" data-title="Enter username">00</a> ลบ.ม./วัน</td>
                        </tr>
                        <tr>
                            <td width="40%">ขยะที่กำจัดได้ จำนวน </td>
                            <td width="30%"><a href="#" id="y5" data-type="text" data-pk="1" data-title="Enter username">00</a> ลบ.ม./วัน</td>
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
                                <div class="col-md-3 col-sm-2 col-xs-12">
                                  <select class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                    <option value="feb">ใช้</option>
                                    <option value="mar" selected>ไม่ใช้</option>
                                  </select>
                                </div>
                              </td>
                        </tr>
                        <tr>
                            <td width="40%">กองบนพื้นแล้วเผา </td>
                            <td width="30%">
                                <div class="col-md-3 col-sm-2 col-xs-12">
                                  <select class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                    <option value="feb">ใช้</option>
                                    <option value="mar" selected>ไม่ใช้</option>
                                  </select>
                                </div>
                              </td>
                        </tr>
                        <tr>
                            <td width="40%">หมักทำปุ๋ย </td>
                            <td width="30%">
                                <div class="col-md-3 col-sm-2 col-xs-12">
                                  <select class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                    <option value="feb">ใช้</option>
                                    <option value="mar" selected>ไม่ใช้</option>
                                  </select>
                                </div>
                              </td>
                        </tr>
                        <tr>
                            <td width="40%">ฝังกลบอย่างถูกสุขลักษณะ </td>
                            <td width="30%">
                                <div class="col-md-3 col-sm-2 col-xs-12">
                                  <select class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                    <option value="feb">ใช้</option>
                                    <option value="mar" selected>ไม่ใช้</option>
                                  </select>
                                </div>
                              </td>
                        </tr>
                        <tr>
                            <td width="40%">เผาในเตาขยะ </td>
                            <td width="30%">
                                <div class="col-md-3 col-sm-2 col-xs-12">
                                  <select class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                    <option value="feb">ใช้</option>
                                    <option value="mar" selected>ไม่ใช้</option>
                                  </select>
                                </div>
                              </td>
                        </tr>
                        <tr>
                            <td width="40%">อื่นๆ (ระบุ) <textarea rows="4" cols="50" class="form-control col-md-2 col-xs-6"></textarea></td>
                            <td width="30%">
                                <div class="col-md-3 col-sm-2 col-xs-12">
                                  <select class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                    <option value="feb">ใช้</option>
                                    <option value="mar" selected>ไม่ใช้</option>
                                  </select>
                                </div>
                              </td>
                        </tr>
                        <tr>
                            <td width="40%">ที่ดินสำหรับกำจัดขยะที่กำลังใช้ทั้งหมด จำนวน </td>
                            <td width="30%"><a href="#" id="y6" data-type="text" data-pk="1" data-title="Enter username">00</a> ไร่</td>
                        </tr>
                        <tr>
                            <td width="40%">ตั้งอยู่ที่<textarea rows="4" cols="50" class="form-control col-md-2 col-xs-6"></textarea></td>
                            <td width="30%"></td>
                        </tr>
                        <tr>
                            <td width="40%">ห่างจากเขตชุมชนเป็นระยะทาง </td>
                            <td width="30%"><a href="#" id="y7" data-type="text" data-pk="1" data-title="Enter username">00</a> กม.</td>
                        </tr>
                        <tr>
                            <td width="40%">ที่ดินสำหรับกำจัดขยะที่ใช้ไปแล้ว จำนวน </td>
                            <td width="30%"><a href="#" id="y8" data-type="text" data-pk="1" data-title="Enter username">00</a> ไร่</td>
                        </tr>
                        <tr>
                            <td width="40%">คาดว่าสามารถกำจัดขยะได้อีก จำนวน </td>
                            <td width="30%"><a href="#" id="y9" data-type="text" data-pk="1" data-title="Enter username">00</a> ไร่</td>
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
                            <td width="40%">ท้องถิ่นจัดซื้อเองเมื่อ พ.ศ. <input type="text" id="area-rai" required="required" class="form-control col-md-2 col-xs-6"></td>
                            <td width="30%">ราคา <a href="#" id="y10" data-type="text" data-pk="1" data-title="Enter username">00</a> บาท</td>
                        </tr>
                        <tr>
                            <td width="40%">เช่าที่ดินเอกชน ตั้งแต่ พ.ศ. <input type="text" id="area-rai" required="required" class="form-control col-md-2 col-xs-6"></td>
                            <td width="30%">ปัจจุบันเช่าปีละ <a href="#" id="y11" data-type="text" data-pk="1" data-title="Enter username">00</a> บาท</td>
                        </tr>
                        
                        <tr>
                            <td width="40%">อื่นๆ (ระบุ)<textarea rows="4" cols="50" class="form-control col-md-2 col-xs-6"></textarea></td>
                            <td width="30%"></td>
                        </tr>
                        <tr>
                            <td width="40%">ที่ดินสำรองที่เตรียมไว้สำหรับกำจัดขยะ จำนวน </td>
                            <td width="30%"><a href="#" id="y12" data-type="text" data-pk="1" data-title="Enter username">00</a> ไร่</td>
                        </tr>
                        <tr>
                            <td width="40%">ที่ตั้งสำรองที่เตรียมไว้สำหรับกำจัดขยะห่างจากท้องถิ่นเป็นระยะทาง </td>
                            <td width="30%"><a href="#" id="y13" data-type="text" data-pk="1" data-title="Enter username">00</a> กม.</td>
                        </tr>
                        
                    </tbody>
                  </table>

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