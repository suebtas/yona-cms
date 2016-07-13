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
            <h2>ด้านสังคม การสำรวจข้อมูลขั้นพื้นฐาน <small>ครั้งที่ 1/2558</small></h2>
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
                    <span class="step_no" Id="Id1">4.1-4.2</span>
                    <span class="step_descr">ชุมชน - ครัวเรือน<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-3">
                    <span class="step_no">4.3</span>
                    <span class="step_descr">
                        ศาสนา<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-4">
                    <span class="step_no">4.4</span>
                    <span class="step_descr">
                        วัฒนธรรม<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-5">
                    <span class="step_no">4.5</span>
                    <span class="step_descr">
                        การศึกษา<br />
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#step-6">
                    <span class="step_no">4.6</span>
                    <span class="step_descr">
                        กีฬา<br />
                    </span>
                  </a>
                </li>
              </ul>

              <div id="step-1">
                <form class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="map"> ชุมชน จำนวน 
                    </label>
                    <div class="col-md-2">
                        <input type="text" id="area-rai" required="required" class="form-control col-md-3 col-xs-6">
                    </div>
                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="map"> แห่ง  </label>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="map"> ครัวเรือน จำนวน 
                    </label>
                    <div class="col-md-2">
                        <input type="text" id="area-rai" required="required" class="form-control col-md-3 col-xs-6">
                    </div>
                    <label class="control-label col-md-1 col-sm-1 col-xs-12" for="map"> ครัวเรือน  </label>
                  </div>
                </form>

              </div>

              <div id="step-3">
                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="40%">ผู้นับถือศาสนาพุทธ </td>
                            <td width="40%">ร้อยละ <a href="#" id="p1" data-type="text" data-pk="1" data-title="Enter username">000</a> ของจำนวนประชากรทั้งหมด</td>
                            
                        </tr>
                        <tr>
                            <td width="40%">วัด </td>
                            <td width="40%">จำนวน <a href="#" id="p2" data-type="text" data-pk="1" data-title="Enter username">000</a> วัด</td>
                            
                        </tr>
                        <tr>
                            <td width="40%">ผู้นับถือศาสนาอิสลาม </td>
                            <td width="40%">ร้อยละ <a href="#" id="p3" data-type="text" data-pk="1" data-title="Enter username">000</a> ของจำนวนประชากรทั้งหมด</td>
                            
                        </tr>
                        <tr>
                            <td width="40%">มัสยิด </td>
                            <td width="40%">จำนวน <a href="#" id="p4" data-type="text" data-pk="1" data-title="Enter username">000</a> มัสยิด</td>
                            
                        </tr>
                        <tr>
                            <td width="40%">ผู้นับถือศาสนาคริสต์ </td>
                            <td width="40%">ร้อยละ <a href="#" id="p5" data-type="text" data-pk="1" data-title="Enter username">000</a> ของจำนวนประชากรทั้งหมด</td>
                            
                        </tr>
                        <tr>
                            <td width="40%">โบสถ์ทางคริสต์ศาสนา </td>
                            <td width="40%">จำนวน <a href="#" id="p6" data-type="text" data-pk="1" data-title="Enter username">000</a> โบสถ์</td>
                            
                        </tr>
                        <tr>
                            <td width="40%">ผู้นับถือศาสนาอื่นๆ </td>
                            <td width="40%">ร้อยละ <a href="#" id="p7" data-type="text" data-pk="1" data-title="Enter username">000</a> ของจำนวนประชากรทั้งหมด</td>
                            
                        </tr>
                        <tr>
                            <td width="40%">ผู้ไม่นับถือศาสนาใดเลย </td>
                            <td width="40%">ร้อยละ <a href="#" id="p8" data-type="text" data-pk="1" data-title="Enter username">000</a> ของจำนวนประชากรทั้งหมด</td>
                            
                        </tr>
                    </tbody>
                  </table>

              </div>
              
              <div id="step-4">
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
                          <td width="25%"><input type="text" id="area-rai" required="required" class="form-control col-md-2 col-xs-6"></td>
                            <td width="20%">
                              <div class="form-group">
                                <div class="col-md-2 col-sm-2 col-xs-12">
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
                            <td width="50%"><textarea rows="4" cols="50" class="form-control col-md-2 col-xs-6"></textarea></td>
                            
                        </tr>
                        <tr>
                          <td width="5%">2.</td>
                          <td width="25%"><input type="text" id="area-rai" required="required" class="form-control col-md-2 col-xs-6"></td>
                            <td width="20%">
                              <div class="form-group">
                                <div class="col-md-2 col-sm-2 col-xs-12">
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
                            <td width="50%"><textarea rows="4" cols="50" class="form-control col-md-2 col-xs-6"></textarea></td>                                    
                        </tr>
                        <tr>
                          <td width="5%">3.</td>
                          <td width="25%"><input type="text" id="area-rai" required="required" class="form-control col-md-2 col-xs-6"></td>
                            <td width="20%">
                              <div class="form-group">
                                <div class="col-md-2 col-sm-2 col-xs-12">
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
                            <td width="50%"><textarea rows="4" cols="50" class="form-control col-md-2 col-xs-6"></textarea></td>                                    
                        </tr>
                        <tr>
                          <td width="5%">4.</td>
                          <td width="25%"><input type="text" id="area-rai" required="required" class="form-control col-md-2 col-xs-6"></td>
                            <td width="20%">
                              <div class="form-group">
                                <div class="col-md-2 col-sm-2 col-xs-12">
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
                            <td width="50%"><textarea rows="4" cols="50" class="form-control col-md-2 col-xs-6"></textarea></td>                                    
                        </tr>
                        <tr>
                          <td width="5%">5.</td>
                          <td width="25%"><input type="text" id="area-rai" required="required" class="form-control col-md-2 col-xs-6"></td>
                            <td width="20%">
                              <div class="form-group">
                                <div class="col-md-2 col-sm-2 col-xs-12">
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
                            <td width="50%"><textarea rows="4" cols="50" class="form-control col-md-2 col-xs-6"></textarea></td>                                    
                        </tr>
                        
                    </tbody>
                  </table>
              </div>

              <div id="step-5">
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
                          <td width="15%"><a href="#" id="e111" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e112" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e113" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e114" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%">000</td>
                      </tr>
                      <tr>
                          <td width="25%">2.จำนวนห้องเรียน  </td>
                          <td width="15%"><a href="#" id="e121" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e122" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e123" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e124" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%">000</td>
                      </tr>
                      <tr>
                          <td width="25%">3.จำนวนนักเรียน </td>
                          <td width="15%"><a href="#" id="e131" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e132" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e133" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e134" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%">000</td>
                      </tr>
                      <tr>
                          <td width="25%">4.จำนวนครู อาจารย์ </td>
                          <td width="15%"><a href="#" id="e141" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e142" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e143" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e144" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%">000</td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-1 col-xs-12" for="map">
                    ระดับประถมศึกษา</label>
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
                          <td width="15%"><a href="#" id="e211" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e212" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e213" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e214" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%">000</td>
                      </tr>
                      <tr>
                          <td width="25%">2.จำนวนห้องเรียน  </td>
                          <td width="15%"><a href="#" id="e221" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e222" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e223" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e224" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%">000</td>
                      </tr>
                      <tr>
                          <td width="25%">3.จำนวนนักเรียน </td>
                          <td width="15%"><a href="#" id="e231" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e232" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e233" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e234" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%">000</td>
                      </tr>
                      <tr>
                          <td width="25%">4.จำนวนครู อาจารย์ </td>
                          <td width="15%"><a href="#" id="e241" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e242" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e243" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e244" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%">000</td>
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
                          <td width="15%"><a href="#" id="e311" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e312" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e313" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e314" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%">000</td>
                      </tr>
                      <tr>
                          <td width="25%">2.จำนวนห้องเรียน  </td>
                          <td width="15%"><a href="#" id="e321" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e322" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e323" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e324" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%">000</td>
                      </tr>
                      <tr>
                          <td width="25%">3.จำนวนนักเรียน </td>
                          <td width="15%"><a href="#" id="e331" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e332" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e333" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e334" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%">000</td>
                      </tr>
                      <tr>
                          <td width="25%">4.จำนวนครู อาจารย์ </td>
                          <td width="15%"><a href="#" id="e341" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e342" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e343" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%"><a href="#" id="e344" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                          <td width="15%">000</td>
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
                            <td width="15%"><a href="#" id="e411" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                            <td width="15%"><a href="#" id="e412" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                            <td width="15%"><a href="#" id="e413" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                            <td width="15%"><a href="#" id="e414" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                            <td width="15%">000</td>
                        </tr>
                        <tr>
                            <td width="25%">2.จำนวนห้องเรียน  </td>
                            <td width="15%"><a href="#" id="e421" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                            <td width="15%"><a href="#" id="e422" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                            <td width="15%"><a href="#" id="e423" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                            <td width="15%"><a href="#" id="e424" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                            <td width="15%">000</td>
                        </tr>
                        <tr>
                            <td width="25%">3.จำนวนนักเรียน </td>
                            <td width="15%"><a href="#" id="e431" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                            <td width="15%"><a href="#" id="e432" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                            <td width="15%"><a href="#" id="e433" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                            <td width="15%"><a href="#" id="e434" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                            <td width="15%">000</td>
                        </tr>
                        <tr>
                            <td width="25%">4.จำนวนครู อาจารย์ </td>
                            <td width="15%"><a href="#" id="e441" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                            <td width="15%"><a href="#" id="e442" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                            <td width="15%"><a href="#" id="e443" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                            <td width="15%"><a href="#" id="e444" data-type="text" data-pk="1" data-title="Enter username">00</a></td>
                            <td width="15%">000</td>
                        </tr>
                      </tbody>
                    </table>

              </div>

              <div id="step-6">
                  <table id="user" class="table table-bordered table-striped" style="clear: both">
                    <tbody>
                        <tr>
                            <td width="40%">สนามกีฬาอเนกประสงค์ </td>
                            <td width="40%">จำนวน <a href="#" id="s1" data-type="text" data-pk="1" data-title="Enter username">00</a> แห่ง</td>
                            
                        </tr>
                        <tr>
                            <td width="40%">สนามฟุตบอล </td>
                            <td width="40%">จำนวน <a href="#" id="s2" data-type="text" data-pk="1" data-title="Enter username">00</a> แห่ง</td>
                            
                        </tr>
                        <tr>
                            <td width="40%">สนามบาสเกตบอล </td>
                            <td width="40%">จำนวน <a href="#" id="s3" data-type="text" data-pk="1" data-title="Enter username">00</a> แห่ง</td>
                            
                        </tr>
                        <tr>
                            <td width="40%">สนามตะกร้อ </td>
                            <td width="40%">จำนวน <a href="#" id="s4" data-type="text" data-pk="1" data-title="Enter username">00</a> แห่ง</td>
                            
                        </tr>
                        <tr>
                            <td width="40%">สระว่ายน้ำ </td>
                            <td width="40%">จำนวน <a href="#" id="s5" data-type="text" data-pk="1" data-title="Enter username">00</a> แห่ง</td>
                            
                        </tr>
                        <tr>
                            <td width="40%">ห้องสมุดประชาชน </td>
                            <td width="40%">จำนวน <a href="#" id="s6" data-type="text" data-pk="1" data-title="Enter username">00</a> แห่ง</td>
                            
                        </tr>
                        <tr>
                            <td width="40%">สนามเด็กเล่น </td>
                            <td width="40%">จำนวน <a href="#" id="s7" data-type="text" data-pk="1" data-title="Enter username">00</a> แห่ง</td>
                            
                        </tr>
                        <tr>
                            <td width="40%">อื่นๆ (ระบุ) </td>
                            <td width="40%">จำนวน <a href="#" id="s8" data-type="text" data-pk="1" data-title="Enter username">00</a> แห่ง</td>
                            
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
      $('#Id1').width("60px");
    };
    startUp();
  </script>
  <!-- /jQuery Smart Wizard -->

  {{ assets.outputJs('modules-clinic-no4-js') }}
  