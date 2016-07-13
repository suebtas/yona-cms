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
                            <span class="step_no">1.1</span>
                            <span class="step_descr">ลักษณะที่ตั้ง<br />
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">1.2</span>
                            <span class="step_descr">
                                ประชากร<br />
                            </span>
                          </a>
                        </li>
                      </ul>

                      <div id="step-1">
                        <form class="form-horizontal form-label-left">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="map">แผนที่แสดงอาณาเขตการปกครอง
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="file" id="map" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="map"> พื้นที่
                            </label>
                            <div class="col-md-2">
                                <input type="text" id="area-rai" required="required" class="form-control col-md-3 col-xs-6">
                            </div>
                            <span class="col-md-1">ไร่ หรือ</span>
                            <div class="col-md-2 col-sm-3 col-xs-12">
                                <input type="text" id="area-kgm" name="area-kgm" required="required" class="form-control col-md-2 col-xs-12">
                            </div>
                            <span class="control-label">ตร.กม</span>
                          </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">อาณาเขตทางทิศเหนือ ติดต่อกับ</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                <option value="AK" selected>พื้นที่เทศบาลทับมา เทศบาลตำบลน้ำคอกและ เทศบาลตำบลเชิงเนิน</option>
                                <option value="CA">ทะเลอ่าวไทย</option>
                                <option value="NV">พื้นที่เทศบาลตำบลเชิงเนิน</option>
                                <option value="OR">พื้นที่เทศบาลตำบลเนินพระ</option>
                              </select>
                            </div>
                          </div>

                           <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">อาณาเขตทางทิศใต้ ติดต่อกับ</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                <option value="AK">พื้นที่เทศบาลทับมา เทศบาลตำบลน้ำคอกและ เทศบาลตำบลเชิงเนิน</option>
                                <option value="CA" selected>ทะเลอ่าวไทย</option>
                                <option value="NV">พื้นที่เทศบาลตำบลเชิงเนิน</option>
                                <option value="OR">พื้นที่เทศบาลตำบลเนินพระ</option>
                              </select>
                            </div>
                          </div>

                           <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">อาณาเขตทางทิศตะวันตก ติดต่อกับ</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                <option value="AK">พื้นที่เทศบาลทับมา เทศบาลตำบลน้ำคอกและ เทศบาลตำบลเชิงเนิน</option>
                                <option value="CA">ทะเลอ่าวไทย</option>
                                <option value="NV" selected>พื้นที่เทศบาลตำบลเชิงเนิน</option>
                                <option value="OR">พื้นที่เทศบาลตำบลเนินพระ</option>
                              </select>
                            </div>
                          </div>

                           <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">อาณาเขตทางทิศตะวันออก ติดต่อกับ</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="select2_single form-control" tabindex="-1" placeholder: "Select a state">
                                <option value="AK">พื้นที่เทศบาลทับมา เทศบาลตำบลน้ำคอกและ เทศบาลตำบลเชิงเนิน</option>
                                <option value="CA">ทะเลอ่าวไทย</option>
                                <option value="NV">พื้นที่เทศบาลตำบลเชิงเนิน</option>
                                <option value="OR" selected>พื้นที่เทศบาลตำบลเนินพระ</option>
                              </select>
                            </div>
                          </div>
                        </form>

                      </div>

                      <div id="step-2">
                        <form class="form-horizontal form-label-left">

                          <table id="user" class="table table-bordered table-striped" style="clear: both">
                            <tbody>
                                <tr>
                                    <td width="40%">ชาย</td>
                                    <td width="10%"><a href="#" id="male" data-type="text" data-pk="1" data-title="Enter username">2345</a> คน</td>
                                    <td width="40%">หญิง</td>
                                    <td width="10%"><a href="#" id="female" data-type="text" data-pk="1" data-title="Enter username">2407</a> คน</td>
                                </tr>
                                <tr>
                                    <td width="40%">เด็ก (ทารก - 17 ปี) ชาย</td>
                                    <td width="10%"><a href="#" id="child_male" data-type="text" data-pk="1" data-title="Enter username">522</a> คน</td>
                                    <td width="40%">เด็ก (ทารก - 17 ปี) หญิง</td>
                                    <td width="10%"><a href="#" id="child_female" data-type="text" data-pk="1" data-title="Enter username">487</a> คน</td>
                                </tr>
                                <tr>
                                    <td width="40%">วัยรุ่น (18 - 25 ปี) ชาย</td>
                                    <td width="10%"><a href="#" id="mature_male" data-type="text" data-pk="1" data-title="Enter username">522</a> คน</td>
                                    <td width="40%">วัยรุ่น (18 - 25 ปี) หญิง</td>
                                    <td width="10%"><a href="#" id="mature_female" data-type="text" data-pk="1" data-title="Enter username">487</a> คน</td>
                                </tr>
                                <tr>
                                    <td width="40%">ผู้ใหญ่ (26 - 60 ปี) ชาย</td>
                                    <td width="10%"><a href="#" id="mature_male" data-type="text" data-pk="1" data-title="Enter username">1258</a> คน</td>
                                    <td width="40%">ผู้ใหญ่ (26 - 60 ปี) หญิง</td>
                                    <td width="10%"><a href="#" id="mature_female" data-type="text" data-pk="1" data-title="Enter username">1318</a> คน</td>
                                </tr>
                                <tr>
                                    <td width="40%">คนชรา (60 ปี ขึ้นไป) ชาย</td>
                                    <td width="10%"><a href="#" id="elder_male" data-type="text" data-pk="1" data-title="Enter username">311</a> คน</td>
                                    <td width="40%">คนชรา (60 ปี ขึ้นไป) หญิง</td>
                                    <td width="10%"><a href="#" id="elder_female" data-type="text" data-pk="1" data-title="Enter username">417</a> คน</td>
                                </tr>
                            </tbody>
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

        {{ assets.outputJs('modules-clinic-no1-js') }}