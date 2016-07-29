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
                            <span class="step_no">2.1</span>
                            <span class="step_descr">การคมนาคม<br />
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no" id="st2">2.2-2.3</span>
                            <span class="step_descr">ระบบขนส่งและการสื่อสาร<br />
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">2.4</span>
                            <span class="step_descr">ไฟฟ้า<br />
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">2.5</span>
                            <span class="step_descr">ลักษณะการใช้ที่ดิน<br />
                            </span>
                          </a>
                        </li>
                      </ul>


  <div id="step-1">
    <form class="form-horizontal form-label-left">
      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">ถนนจำนวน</label>
          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
          <span id="sumroad"></span>
          </label>
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">สาย</label><br><br>
        <table id="road" class="table table-striped table-bordered" style="clear: both">
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
                  <td>1.ถนนลูกรัง</td>
                  <td><a href="#" id="r1" data-type="text" data-pk="1" data-title="Enter username">68</a></td>
                  <td><a href="#" id="dt1" data-type="text" data-pk="1" data-title="Enter username">78</a></td>
              </tr>
              <tr>
                  <td>2.ถนนลาดยาง</td>
                  <td><a href="#" id="r2" data-type="text" data-pk="1" data-title="Enter username">20</a></td>
                  <td><a href="#" id="dt2" data-type="text" data-pk="1" data-title="Enter username">57</a></td>
              </tr>
              <tr>
                  <td>3.ถนนคอนกรีต</td>
                  <td><a href="#" id="r3" data-type="text" data-pk="1" data-title="Enter username">15</a></td>
                  <td><a href="#" id="dt3" data-type="text" data-pk="1" data-title="Enter username">14</a></td>
              </tr>
              <tr>
                  <td>4.อื่นๆ(ระบุ) <input type="text" name="name" value="" class="btn btn-default"></td>
                  <td><a href="#" id="r4" data-type="text" data-pk="1" data-title="Enter username">0</a></td>
                  <td><a href="#" id="dt4" data-type="text" data-pk="1" data-title="Enter username">0</a></td>
              </tr>
          </tbody>
        </table>
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">สะพาน</label>
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
                <a href="#" id="bridge" data-type="text" data-pk="1" data-title="Enter username">5</a>
              </label>
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">สาย</label>

  </div>
    </form>
  </div>
  <div id="step-2">
    <form class="form-horizontal form-label-left">
      <div class="form-group">
      <table class="table table-striped table-bordered" style="clear: both">
        <thead>
          <th colspan="3">
            <center>ระบบขนส่งมวลชน</center>
          </th>
        </thead>
            <tr>
                <td width="50%">รถโดยสารที่ให้บริการจำนวน</td>
                <td width="25%"><a href="#" id="bus1" data-type="text" data-pk="1" data-title="Enter username">1</a></td>
                <td width="25%">เส้นทาง</td>
            </tr>
            <tr>
              <td width="50%">
                อื่นๆ
              </td>
              <td width="25%"><a href="#" id="bus2" data-type="text" data-pk="1" data-title="Enter username">0</a></td>
              <td width="25%">เส้นทาง</td>
            </tr>
      </table>
    </div>
    <hr>
    <div class="form-group">
    <table class="table table-striped table-bordered">
      <thead>
        <th colspan="3">
          <center>การสื่อสารโทรคมนาคม</center>
        </th>
      </thead>
      <tr>
        <td width="50%">
          ที่ทำการไปรษณีย์
        </td>
        <td>
          <a href="#" id="c1" data-type="text" data-pk="1" data-title="Enter username">0</a>
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
          <a href="#" id="c2" data-type="text" data-pk="1" data-title="Enter username">0</a>
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
          <a href="#" id="c3" data-type="text" data-pk="1" data-title="Enter username">0</a>
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
          <a href="#" id="c4" data-type="text" data-pk="1" data-title="Enter username">0</a>
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
          <a href="#" id="c5" data-type="text" data-pk="1" data-title="Enter username">0</a>
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
          <a href="#" id="c6" data-type="text" data-pk="1" data-title="Enter username">0</a>
        </td>
        <td>
          แห่ง
        </td>
      </tr>
      <tr>
        <td>
          หน่วยงานที่มีข่ายวิทยุสื่อสารในพื้นที่
        </td>
        <td>
          <a href="#" id="c7" data-type="text" data-pk="1" data-title="Enter username">0</a>
        </td>
        <td>
          แห่ง
        </td>
      </tr>
    </table>

    </div>
    </form>
  </div>

  <div id="step-3">
    <form class="form-horizontal form-label-left">

      <div class="form-group">
        <table class="table table-striped table-bordered">
          <tr>
            <td width="50%">
              ครัวเรือนที่ใช้ไฟฟ้า
            </td>
            <td>
              <a href="#" id="e1" data-type="text" data-pk="1" data-title="Enter username">2,657</a>
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
                <a href="#" id="e2" data-type="text" data-pk="1" data-title="Enter username">98.00</a>
            </td>
            <td>
            ของพื้นที่
            </td>
          </tr>
          <tr>
            <td>
              ไฟฟ้าส่องสว่างสารธารณะ จำนวน
            </td>
            <td>
              <a href="#" id="e3" data-type="text" data-pk="1" data-title="Enter username">500</a>
            </td>
            <td>
              จุด
            </td>
          </tr>
          <tr>
            <td>
              จุด/ครอบคลุมถนน
            </td>
            <td>
                <a href="#" id="e4" data-type="text" data-pk="1" data-title="Enter username">20.00</a>
            </td>
            <td>
              สาย
            </td>
          </tr>
        </table>
        </div>
    </form>
  </div>


  <div id="step-4">

    <form class="form-horizontal form-label-left">

      <div class="form-group">
      <table class="table table-striped table-bordered">
        <tr>
          <td width="50%">
            พื้นที่พักอาศัย
          </td>
          <td>
            <a href="#" id="p1" data-type="text" data-pk="1" data-title="Enter username">5,000.00</a>
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
            <a href="#" id="p2" data-type="text" data-pk="1" data-title="Enter username">1,000.00</a>
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
            <a href="#" id="p3" data-type="text" data-pk="1" data-title="Enter username">5.00</a>
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
            <a href="#" id="p4" data-type="text" data-pk="1" data-title="Enter username">20.00</a>
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
            <a href="#" id="p5" data-type="text" data-pk="1" data-title="Enter username">80,000.00</a>
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
            <a href="#" id="p6" data-type="text" data-pk="1" data-title="Enter username">100.00</a>
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
            <a href="#" id="p7" data-type="text" data-pk="1" data-title="Enter username">5,000.00</a>
          </td>
          <td>
            ไร่
          </td>
        </tr>
        <tfoot>
          <td>
            <b>พื้นที่ทั้งหมด</b>
          </td>
          <td class="info">
            <b><span id="sumrai"></span></b>
          </td>
          <td>
              <b>ไร่</b>
          </td>
        </tfoot>

      </table>
    </form>
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
                      function startUp() {
                          $("#st2").width("60px");
                          $("div").removeClass("stepContainer");

                          var r1 = $('#r1').text();
                          var r2 = $('#r2').text();
                          var r3 = $('#r3').text();
                          var r4 = $('#r4').text();
                          var sumr = parseFloat(r1) + parseFloat(r2) + parseFloat(r3) + parseFloat(r4);
                          $('#sumroad').html(sumr);

                          var p1 = $('#p1').text();
                          var p2 = $('#p2').text();
                          var p3 = $('#p3').text();
                          var p4 = $('#p4').text();
                          var p5 = $('#p5').text();
                          var p6 = $('#p6').text();
                          var p7 = $('#p7').text();
                           var rep1 = p1.replace(/,/g,"");
                           var rep2 = p2.replace(/,/g,"");
                           var rep3 = p3.replace(/,/g,"");
                           var rep4 = p4.replace(/,/g,"");
                           var rep5 = p5.replace(/,/g,"");
                           var rep6 = p6.replace(/,/g,"");
                           var rep7 = p7.replace(/,/g,"");
                          var sumpn = parseFloat(rep1) + parseFloat(rep2) + parseFloat(rep3) + parseFloat(rep4) + parseFloat(rep5) + parseFloat(rep6) + parseFloat(rep7);

                          var sump = sumpn.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                          $('#sumrai').html(sump);
                        }
                        startUp();
                    </script>
                    <!-- /jQuery Smart Wizard -->

                    {{ assets.outputJs('modules-clinic-no2-js') }}
