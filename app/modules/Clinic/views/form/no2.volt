        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>เทศบาล xxxx</h3>
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
                    <h2>ด้านสภาพทั่วไป การสำรวจข้อมูลขั้นพื้นฐาน <small>ครั้งที่ 1/2558</small></h2>
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
                            <span class="step_no">2.1</span>
                            <span class="step_descr">การคมนาคม<br />
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2.2</span>
                            <span class="step_descr">ระบบขนส่งมวลชน<br />
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">2.3</span>
                            <span class="step_descr">การสื่อสารโทรคมนาคม<br />
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">2.4</span>
                            <span class="step_descr">ไฟฟ้า<br />
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-5">
                            <span class="step_no">2.5</span>
                            <span class="step_descr">ลักษณะการใช้ที่ดิน<br />
                            </span>
                          </a>
                        </li>
                      </ul>

                      <div id="step-1">
                        <form class="form-horizontal form-label-left">
                          <div class="form-group">
                            <table id="road" class="table" style="clear: both">
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
                                      <td>ถนนลูกรัง</td>
                                      <td><a href="#" id="r1" data-type="text" data-pk="1" data-title="Enter username">68</a></td>
                                      <td><a href="#" id="dt1" data-type="text" data-pk="1" data-title="Enter username">78</a></td>
                                  </tr>
                                  <tr>
                                      <td>ถนนลาดยาง</td>
                                      <td><a href="#" id="r2" data-type="text" data-pk="1" data-title="Enter username">20</a></td>
                                      <td><a href="#" id="dt2" data-type="text" data-pk="1" data-title="Enter username">57</a></td>
                                  </tr>
                                  <tr>
                                      <td>ถนนคอนกรีต</td>
                                      <td><a href="#" id="r3" data-type="text" data-pk="1" data-title="Enter username">15</a></td>
                                      <td><a href="#" id="dt3" data-type="text" data-pk="1" data-title="Enter username">14</a></td>
                                  </tr>
                              </tbody>
                            </table>
                            <center>
                            <b>ประเถทถนนอื่นๆ</b><br/>
                            ชื่อถนน <input type="text" name="add_road" class="input-sm">
                            จำนวน <input type="text" name="add_road" class="input-sm"> สาย ระยะทาง <input type="text" name="add_road" class="input-sm"> กม. <br/><br/>
                            <center><a id="add_row" class="btn btn-success">เพิ่มถนน</a><a id='delete_row' class="btn btn-danger">ลบถนน</a>
                            </center>


                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">ถนนจำนวน</label>
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
                                <a href="#" id="r_all" data-type="text" data-pk="1" data-title="Enter username">102</a>
                              </label>
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">สาย</label><br><br>


                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">สะพาน</label>
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
                                  <a href="#" id="s" data-type="text" data-pk="1" data-title="Enter username">5</a>
                                </label>
                                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">สาย</label>

                      </div>
                        </form>
                      </div>
                      <div id="step-2">
                        <form class="form-horizontal form-label-left">
                          <div class="form-group">
                          <table class="table" style="clear: both">
                                <tr>
                                    <td width="50%">รถโดยสารที่ให้บริการจำนวน</td>
                                    <td width="25%">1</td>
                                    <td width="25%">เส้นทาง</td>
                                </tr>
                                <tr>
                                  <td colspan="3">
                                      อื่นๆระบ <input type="text" name="name" value="" class="input-sm"> <button type="button" class="btn btn-success">
                                        เพิ่ม
                                      </button>
                                  </td>

                                </tr>
                          </table>
                        </div>
                        </form>
                      </div>
                      <div id="step-3">

                        <form class="form-horizontal form-label-left">

                          <div class="form-group">
                          <table class="table">
                            <tr>
                              <td>
                                ที่ทำการไปรษณีย์
                              </td>
                              <td>
                                <input type="text" name="name" value="0" class="form-control">
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
                                <input type="text" name="name" value="0" class="form-control">
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
                                <input type="text" name="name" value="0" class="form-control">
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
                                <input type="text" name="name" value="0" class="form-control">
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
                                <input type="text" name="name" value="0" class="form-control">
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
                                <input type="text" name="name" value="0" class="form-control">
                              </td>
                              <td>
                                แห่ง
                              </td>
                            </tr>
                            <tr>
                              <td>
                                ให้บริการครอบคลุมร้อยละ
                              </td>
                              <td>
                                <input type="text" name="name" value="40.00" class="form-control">
                              </td>
                              <td>
                                ของพื้นที่ทั้งหมด
                              </td>
                            </tr>
                            <tr>
                              <td>
                                หน่วยงานที่มีข่ายวิทยุสื่อสารในพื้นที่
                              </td>
                              <td>
                                <input type="text" name="name" value="0" class="form-control">
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
                        <form class="form-horizontal form-label-left">

                          <div class="form-group">
                            <table class="table">
                              <tr>
                                <td>
                                  ครัวเรือนที่ใช้ไฟฟ้า
                                </td>
                                <td>
                                  <input type="text" name="name" value="2657" class="form-control">
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
                                  <input type="text" name="name" value="98.00" class="form-control">
                                </td>
                                <td>
                                ของพื้นที่
                                </td>
                              </tr>
                            </table>
                            <table class="table">
                              <tr>
                                <td>
                                  ไฟฟ้าส่องสว่างสารธารณะ จำนวน
                                </td>
                                <td>
                                  <input type="text" name="name" value="500" class="form-control">
                                </td>
                                <td>
                                  ไร่
                                </td>
                                <td>
                                  จุด/ครอบคลุมถนน
                                </td>
                                <td>
                                  <input type="text" name="name" value="20.00" class="form-control">
                                </td>
                                <td>
                                  สาย
                                </td>
                              </tr>
                            </table>
                          </div>
                        </form>
                      </div>


                      <div id="step-5">

                        <form class="form-horizontal form-label-left">

                          <div class="form-group">
                          <table class="table">
                            <tr>
                              <td>
                                พื้นที่พักอาศัย
                              </td>
                              <td>
                                <input type="text" name="name" value="5000.00" class="form-control">
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
                                <input type="text" name="name" value="1000.00" class="form-control">
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
                                <input type="text" name="name" value="5.00" class="form-control">
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
                                <input type="text" name="name" value="20.00" class="form-control">
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
                                <input type="text" name="name" value="80000.00" class="form-control">
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
                                <input type="text" name="name" value="100.00" class="form-control">
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
                                <input type="text" name="name" value="5000.00" class="form-control">
                              </td>
                              <td>
                                ไร่
                              </td>
                            </tr>
                          </table>
                        </form>
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
                          transitionEffect: 'slide'
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

                    {{ assets.outputJs('modules-clinic-no2-js') }}