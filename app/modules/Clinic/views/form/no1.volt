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
                    <h2>ด้านสภาพทั่วไป การสำรวจข้อมูลขั้นพื้นฐาน <small>ครั้งที่ 1/2559</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a href="#{{ url.get() }}clinic-admin/exportword/printformno1" role="button" aria-expanded="false"><i class="fa fa-print"></i></a></li>
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
                        <li>
                          <a href="#step-3">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="map">แผนที่แสดงอาณาเขตการปกครอง
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <!--<input type="file" id="map" class="form-control col-md-7 col-xs-12">-->
                              <div id="dropzone" class="dropzone">

                                <div class="dz-message needsclick">
                                  ลากไฟล์มาปล่อยตรงนี้ หรือคลิกเพื่ออัพโหลดไฟล์<br />
                                  <span class="note needsclick">ส่วนแสดงผล</span>
                                </div>

                              </div>
                            </div>
                          </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="map"> พื้นที่
                            </label>
                            <div class="col-md-2 col-sm-3 col-xs-12">
                               {{ form.render('no1_1_2') }}

                            </div>
                            <span class="control-label col-md-1 col-sm-1 col-xs-12">ไร่ หรือ</span>
                            <div class="col-md-2 col-sm-3 col-xs-12">
                                <input type="text" id="area-kgm" name="area-kgm" required="required" class="form-control col-md-2 col-xs-12">
                            </div>
                            <span class="control-label col-md-1 col-sm-1 col-xs-12">ตร.กม</span>
                          </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">อาณาเขตทางทิศเหนือ ติดต่อกับ</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                             {{ form.render('no1_1_3_1') }}
                            </div>
                          </div>

                           <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">อาณาเขตทางทิศใต้ ติดต่อกับ</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                             {{ form.render('no1_1_3_2') }}
                            </div>
                          </div>

                           <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">อาณาเขตทางทิศตะวันตก ติดต่อกับ</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                             {{ form.render('no1_1_3_3') }}
                            </div>
                          </div>

                           <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">อาณาเขตทางทิศตะวันออก ติดต่อกับ</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                             {{ form.render('no1_1_3_4') }}
                            </div>
                          </div>
                        </form>
                      </div>

                      <div id="step-2">

                        {% block comment_tab2 %}
                        {% endblock %}
                        <form class="form-horizontal form-label-left">
                          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">จำนวนประชากรทั้งหมด</label>
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
                            <a href="#" id="no1_2_1" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_1}}</a>
                            </label>
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">คน</label><br><br>
                          <table id="road" class="table table-striped table-bordered" style="clear: both">
                          <table id="user" class="table table-bordered table-striped" style="clear: both">
                            <tbody>
                                <tr>
                                    <td width="40%">ชาย</td>
                                    <td width="10%"><a href="#" id="no1_2_1_1" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_1_1}}</a> คน</td>
                                    <td width="40%">หญิง</td>
                                    <td width="10%"><a href="#" id="no1_2_1_2" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_1_2}}</a> คน</td>
                                </tr>
                                <tr>
                                    <td width="40%">เด็ก (ทารก - 17 ปี) ชาย</td>
                                    <td width="10%"><a href="#" id="no1_2_2_1" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_2_1}}</a> คน</td>
                                    <td width="40%">เด็ก (ทารก - 17 ปี) หญิง</td>
                                    <td width="10%"><a href="#" id="no1_2_2_2" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_2_2}}</a> คน</td>
                                </tr>
                                <tr>
                                    <td width="40%">วัยรุ่น (18 - 25 ปี) ชาย</td>
                                    <td width="10%"><a href="#" id="no1_2_3_1" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_3_1}}</a> คน</td>
                                    <td width="40%">วัยรุ่น (18 - 25 ปี) หญิง</td>
                                    <td width="10%"><a href="#" id="no1_2_3_2" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_3_2}}</a> คน</td>
                                </tr>
                                <tr>
                                    <td width="40%">ผู้ใหญ่ (26 - 60 ปี) ชาย</td>
                                    <td width="10%"><a href="#" id="no1_2_4_1" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_4_1}}</a> คน</td>
                                    <td width="40%">ผู้ใหญ่ (26 - 60 ปี) หญิง</td>
                                    <td width="10%"><a href="#" id="no1_2_4_2" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_4_2}}</a> คน</td>
                                </tr>
                                <tr>
                                    <td width="40%">คนชรา (60 ปี ขึ้นไป) ชาย</td>
                                    <td width="10%"><a href="#" id="no1_2_5_1" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_5_1}}</a> คน</td>
                                    <td width="40%">คนชรา (60 ปี ขึ้นไป) หญิง</td>
                                    <td width="10%"><a href="#" id="no1_2_5_2" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_5_2}}</a> คน</td>
                                </tr>
                            </tbody>
                          </table>


                          <table id="population" class="table table-bordered table-striped" style="clear: both">
                            <tbody>
                                <tr>
                                  <th width="40%">ประเภทประชากร</th>
                                  <th width="10%">จำนวน</th>
                                  <th width="50%">ที่มาของข้อมูล</th>
                                </tr>
                                <tr>
                                    <td width="40%">ประชากรแฝงจำนวน</td>
                                    <td width="10%"><a href="#" id="no1_2_6_1" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_6_1}}</a> คน</td>
                                    <td width="50%"><a href="#" id="no1_2_6_2" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_6_2}}</a></td>
                                </tr>
                                <tr>
                                    <td width="40%">ประชากรแฝง(ต่างด้าว)</td>
                                    <td width="10%"><a href="#" id="no1_2_7_1" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_7_1}}</a> คน</td>
                                    <td width="50%"><a href="#" id="no1_2_7_2" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_7_2}}</a></td>
                                </tr>
                                <tr>
                                    <td width="40%">ประชากรที่พิการหรือทุพพลภาพหรือป่วยเรื้อรังในเขตพี้นที่ จำนวน </td>
                                    <td width="10%"><a href="#" id="no1_2_8_1" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_8_1}}</a> คน</td>
                                    <td width="50%"><a href="#" id="no1_2_8_2" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_8_2}}</a> </td>
                                </tr>
                                <tr>
                                    <td width="40%">ความหนาแน่นของประชากร </td>
                                    <td width="10%"><a href="#" id="no1_2_9" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_9}}</a> คน/ตร.กม.</td>
                                    <td width="50%"> </td>
                                </tr>
                            </tbody>
                          </table>


                          <table id="job" class="table table-bordered table-striped" style="clear: both">
                            <tbody>
                                <tr>
                                  <th width="40%">ลักษณะอาชีพของประชากร </th>
                                  <th width="10%">จำนวน</th>
                                </tr>
                                <tr>
                                    <td width="40%">ประชากรที่ประกอบอาชีพเกษตรกรรมจำนวน</td>
                                    <td width="60%"><a href="#" id="no1_2_10" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_10}}</a> คน</td>
                                </tr>
                                <tr>
                                    <td width="40%">ประชากรที่ประกอบอาชีพรับจ้างในโรงงานอุตสาหกรรมจำนวน </td>
                                    <td width="60%"><a href="#" id="no1_2_11" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_11}}</a> คน</td>
                                </tr>
                                <tr>
                                    <td width="40%">ประชากรที่ประกอบอาชีพอื่นจำนวน  </td>
                                    <td width="60%"><a href="#" id="no1_2_12" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_12}}</a> คน</td>
                                </tr>
                            </tbody>
                          </table>



                          <table id="travel" class="table table-bordered table-striped" style="clear: both">
                            <tbody>
                                <tr>
                                    <td width="40%">สถานที่ท่องเที่ยวที่สำคัญในเขตพื้นที่รับผิดชอบจำนวน</td>
                                    <td width="60%"><a href="#" id="no1_2_13" data-type="text" data-pk="1" data-title="Enter username">{{no1_2_13}}</a> แห่ง</td>
                                </tr>
                            </tbody>
                          </table>
                        </form>
                      </div>
                      <div id="step-3">

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

        <!-- Dropzone.js -->
        <script src="{{ url.path() }}clinic/vendors/dropzone/dist/min/dropzone.min.js"></script>
        <!-- Custom Theme Scripts -->
        <!-- <script src="../build/js/custom.min.js"></script> -->


        <link href="{{ url.path() }}clinic/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
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
            $('.buttonNext').addClass('btn btn-success');
            $('.buttonPrevious').addClass('btn btn-primary');
            $('.buttonFinish').addClass('btn btn-default');

          });
        </script>
        <!-- /jQuery Smart Wizard -->

        {{ assets.outputJs('modules-clinic-no1-js') }}

    {% block script %}
    {% endblock %}
