<!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> สำรวจข้อมูลขั้นพื้นฐาน</span>
              <div class="count">2,500</div>
              <span class="count_bottom">เพิ่มขึ้น <i class="green">40% </i> จากเดือนก่อน</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> โครงสร้างพื้นฐาน</span>
              <div class="count">1,230</div>
              <span class="count_bottom">เพิ่มขึ้น <i class="green">30% </i> จากเดือนก่อน</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> เศรษฐกิจ </span>
              <div class="count green">2,500</div>
              <span class="count_bottom">เพิ่มขึ้น <i class="green">90% </i> จากเดือนก่อน</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> สังคม</span>
              <div class="count">4,567</div>
              <span class="count_bottom">เพิ่มขึ้น <i class="green">90% </i> จากเดือนก่อน</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> สาธารณสุข</span>
              <div class="count">2,315</div>
              <span class="count_bottom">เพิ่มขึ้น <i class="green">90% </i> จากเดือนก่อน</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> คุณภาพชีวิตและความปลอดภัยในทรัพย์สิน</span>
              <div class="count">7,325</div>
              <span class="count_bottom">เพิ่มขึ้น <i class="green">90% </i> จากเดือนก่อน</span>
            </div>
          </div>
          <!-- /top tiles -->
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ข้อมูลการสำรวจ <small>Clinic Center</small></h2>
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
                    <p class="text-muted font-13 m-b-30">
                      ข้อมูลการสำรวจ Clinic Center แยกตามปีที่จัดทำ
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>ท้องถิ่น</th>
                          <th>สถานะการตอบคำถาม</th>
                          <th>สถานะการยืนยันของท้องถิ่น</th>
                          <th>สถานะการยืนยันของจังหวัด</th>
                          <th>icon</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Name</th>
                          <th>ท้องถิ่น</th>
                          <th>สถานะการตอบคำถาม</th>
                          <th>สถานะการยืนยันของท้องถิ่น</th>
                          <th>สถานะการยืนยันของจังหวัด</th>
                          <th>icon</th>
                        </tr>
                      </tfoot>


                      <tbody>
                        {% for discoverySurvey in listDiscoverySurvey %}
                        <tr>
                          <td>{{link_to("clinic/form/showdiscoverysurvey/"~discoverySurvey.id,discoverySurvey.Office.name)}}</td>
                          <td>{{discoverySurvey.Survey.description}} ({{discoverySurvey.Survey.getDateOfStartSurvey()}} ถึง {{discoverySurvey.Survey.getDateOfEndSurvey()}})</td>                          
                          <td>{{discoverySurvey.getStatusWithSymbol()}}</td>
                          {% set adminApprove = discoverySurvey.getApproval(['level=2']) %}
                          {% set approverApprove = discoverySurvey.getApproval(['level=1']) %}
                          <td>{%if approverApprove!=null %} {{approverApprove.getStatusWithSymbol()}} {%else%}<i class="fa fa-hourglass-start fa-2x"></i> กำลังตรวจข้อมูล {%endif%}</td>
                          <td>{%if adminApprove!=null %} {{adminApprove.getStatusWithSymbol()}} {%else%}<i class="fa fa-hourglass-start  fa-2x"></i> กำลังตรวจข้อมูล {%endif%}</td>
                          <td>{{discoverySurvey.Survey.getStatusWithSymbol()}}</td>

                        </tr>
                        {% endfor %}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="myplaceholder" class="demo-placeholder"></div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="myplaceholder2" class="demo-placeholder"></div>
            </div>
          </div>

          <div class="row">
            <div class="col-md12 col-sm-12 col-xs-12">
            <!-- End .panel -->
                <div class="panel panel-default panelToggle panelMove panelClose panelRefresh">
                    <!-- Start .panel -->
                    <div class="panel-heading">
                        <h4 class="panel-title"><i class="fa fa-bar-chart"></i> Ordered Bars chart</h4>
                    </div>
                    <div class="panel-body">
                        <div id="ordered-bars-chart" class="mt10" style="width: 100%; height:250px;"></div>
                    </div>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>ประวัติการบันทึก <small>(จำนวนข้อมูล)</small></h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
                  <div style="width: 100%;">
                    <div id="canvas_dahs" class="demo-placeholder" style="width: 100%; height:270px;"></div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>ประเภทข้อมูล</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>ข้อมูลขั้นพื้นฐาน</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>โครงสร้างพื้นฐาน</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>เศรษฐกิจ</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>สังคม</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />

          <div class="row">

          {%for key , item in summary %}
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Surver Summary {{key}} </h2>
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
                  <h4>มีการทำแบบสำรวจจำนวน {{item["summaryTotal"]}} หน่วยงาน</h4>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>กรอกข้อมูลเสร็จ</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{item["percentSurveyReady"]}}%;">
                          <span class="sr-only">{{item["percentSurveyReady"]}}% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>{{item["summarySurveyReady"]}}</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>


                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>ท้องถิ่นรับรองข้อมูล</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{item["summaryApprovalReady"]}}%;">
                          <span class="sr-only">{{item["percentApprovalReady"]}}% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>{{item["summaryApprovalReady"]}}</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>


                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>จังหวัดรับรองข้อมูล</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0"  aria-valuemax="100" style="width: {{item["summaryAdminReady"]}}%;">
                          <span class="sr-only">{{item["percentAdminReady"]}}% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>{{item["summaryAdminReady"]}}</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                

                </div>
              </div>
            </div>

          {%endfor%}
        {#            
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>App Versions</h2>
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
                  <h4>App Usage across versions</h4>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.2</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>123k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.3</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>53k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.4</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>23k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.5</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>3k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.6</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>1k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title">
                  <h2>Device Usage</h2>
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
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:37%;">
                        <p>Top 5</p>
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                          <p class="">Device</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                          <p class="">Progress</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                      </td>
                      <td>
                        <table class="tile_info">
                          <tr>
                            <td>
                              <p><i class="fa fa-square blue"></i>IOS </p>
                            </td>
                            <td>30%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square green"></i>Android </p>
                            </td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square purple"></i>Blackberry </p>
                            </td>
                            <td>20%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square aero"></i>Symbian </p>
                            </td>
                            <td>15%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square red"></i>Others </p>
                            </td>
                            <td>30%</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>


            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Quick Settings</h2>
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
                  <div class="dashboard-widget-content">
                    <ul class="quick-list">
                      <li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
                      </li>
                      <li><i class="fa fa-bars"></i><a href="#">Subscription</a>
                      </li>
                      <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                      <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                      </li>
                      <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                      <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                      </li>
                      <li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
                      </li>
                    </ul>

                    <div class="sidebar-widget">
                      <h4>Profile Completion</h4>
                      <canvas width="150" height="80" id="foo" class="" style="width: 160px; height: 100px;"></canvas>
                      <div class="goal-wrapper">
                        <span class="gauge-value pull-left">$</span>
                        <span id="gauge-text" class="gauge-value pull-left">3,200</span>
                        <span id="goal-text" class="goal-value pull-right">$5,000</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        #}
          </div>
        {#
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Recent Activities <small>Sessions</small></h2>
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
                  <div class="dashboard-widget-content">

                    <ul class="list-unstyled timeline widget">
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                              <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                          </h2>
                            <div class="byline">
                              <span>13 hours ago</span> by <a>Jane Smith</a>
                            </div>
                            <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                              <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                          </h2>
                            <div class="byline">
                              <span>13 hours ago</span> by <a>Jane Smith</a>
                            </div>
                            <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                              <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                          </h2>
                            <div class="byline">
                              <span>13 hours ago</span> by <a>Jane Smith</a>
                            </div>
                            <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                              <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                          </h2>
                            <div class="byline">
                              <span>13 hours ago</span> by <a>Jane Smith</a>
                            </div>
                            <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-8 col-sm-8 col-xs-12">



              <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Visitors location <small>geo-presentation</small></h2>
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
                      <div class="dashboard-widget-content">
                        <div class="col-md-4 hidden-small">
                          <h2 class="line_30">125.7k Views from 60 countries</h2>

                          <table class="countries_list">
                            <tbody>
                              <tr>
                                <td>United States</td>
                                <td class="fs15 fw700 text-right">33%</td>
                              </tr>
                              <tr>
                                <td>France</td>
                                <td class="fs15 fw700 text-right">27%</td>
                              </tr>
                              <tr>
                                <td>Germany</td>
                                <td class="fs15 fw700 text-right">16%</td>
                              </tr>
                              <tr>
                                <td>Spain</td>
                                <td class="fs15 fw700 text-right">11%</td>
                              </tr>
                              <tr>
                                <td>Britain</td>
                                <td class="fs15 fw700 text-right">10%</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div id="world-map-gdp" class="col-md-8 col-sm-12 col-xs-12" style="height:230px;"></div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="row">


                <!-- Start to do list -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>To Do List <small>Sample tasks</small></h2>
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

                      <div class="">
                        <ul class="to_do">
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Schedule meeting with new client </p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Create email address for new intern</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Create email address for new intern</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End to do list -->

                <!-- start of weather widget -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Daily active users <small>Sessions</small></h2>
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
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="temperature"><b>Monday</b>, 07:30 AM
                            <span>F</span>
                            <span><b>C</b></span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="weather-icon">
                            <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                          </div>
                        </div>
                        <div class="col-sm-8">
                          <div class="weather-text">
                            <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="weather-text pull-right">
                          <h3 class="degrees">23</h3>
                        </div>
                      </div>

                      <div class="clearfix"></div>

                      <div class="row weather-days">
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Mon</h2>
                            <h3 class="degrees">25</h3>
                            <canvas id="clear-day" width="32" height="32"></canvas>
                            <h5>15 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Tue</h2>
                            <h3 class="degrees">25</h3>
                            <canvas height="32" width="32" id="rain"></canvas>
                            <h5>12 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Wed</h2>
                            <h3 class="degrees">27</h3>
                            <canvas height="32" width="32" id="snow"></canvas>
                            <h5>14 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Thu</h2>
                            <h3 class="degrees">28</h3>
                            <canvas height="32" width="32" id="sleet"></canvas>
                            <h5>15 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Fri</h2>
                            <h3 class="degrees">28</h3>
                            <canvas height="32" width="32" id="wind"></canvas>
                            <h5>11 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Sat</h2>
                            <h3 class="degrees">26</h3>
                            <canvas height="32" width="32" id="cloudy"></canvas>
                            <h5>10 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>
        #}        
        <!-- /page content -->

        <!-- jQuery -->
        <script src="{{ url.path() }}clinic/vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="{{ url.path() }}clinic/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!--DataTable-->

    <!-- Datatables -->
      <script src="{{ url.path() }}clinic/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="{{ url.path() }}clinic/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="{{ url.path() }}clinic/vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="{{ url.path() }}clinic/vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
	    <script src="{{ url.path() }}clinic/vendors/Chart.js/dist/Chart.min.js"></script>
	    <!-- gauge.js -->
	    <script src="{{ url.path() }}clinic/vendors/gauge.js/dist/gauge.min.js"></script>
	    <!-- bootstrap-progressbar -->
	    <script src="{{ url.path() }}clinic/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	    <!-- iCheck -->
	    <script src="{{ url.path() }}clinic/vendors/iCheck/icheck.min.js"></script>
	    <!-- Skycons -->
	    <script src="{{ url.path() }}clinic/vendors/skycons/skycons.js"></script>
	    <!-- Flot -->
	    <script src="{{ url.path() }}clinic/vendors/Flot/jquery.flot.js"></script>
	    <script src="{{ url.path() }}clinic/vendors/Flot/jquery.flot.pie.js"></script>
	    <script src="{{ url.path() }}clinic/vendors/Flot/jquery.flot.time.js"></script>
	    <script src="{{ url.path() }}clinic/vendors/Flot/jquery.flot.stack.js"></script>
	    <script src="{{ url.path() }}clinic/vendors/Flot/jquery.flot.resize.js"></script>
	    <!-- Flot plugins -->
	    <script src="{{ url.path() }}clinic/js/flot/jquery.flot.orderBars.js"></script>
	    <script src="{{ url.path() }}clinic/js/flot/date.js"></script>
	    <script src="{{ url.path() }}clinic/js/flot/jquery.flot.spline.js"></script>
	    <script src="{{ url.path() }}clinic/js/flot/curvedLines.js"></script>
	    <!-- jVectorMap -->
	    <script src="{{ url.path() }}clinic/js/maps/jquery-jvectormap-2.0.3.min.js"></script>
	    <!-- bootstrap-daterangepicker -->
	    <script src="{{ url.path() }}clinic/js/moment/moment.min.js"></script>
	    <script src="{{ url.path() }}clinic/js/datepicker/daterangepicker.js"></script>
        <!-- Custom Theme Scripts -->
        <!-- <script src="../build/js/custom.min.js"></script> -->
        {{ assets.outputJs('modules-clinic-js') }}

        {{ assets.outputJs('modules-clinic-dashboard-js') }}


	    <!-- jVectorMap -->
	    <script src="{{ url.path() }}clinic/js/maps/jquery-jvectormap-world-mill-en.js"></script>
	    <script src="{{ url.path() }}clinic/js/maps/jquery-jvectormap-us-aea-en.js"></script>
	    <script src="{{ url.path() }}clinic/js/maps/gdp-data.js"></script>
	    <script>
	      $(document).ready(function(){
	        $('#world-map-gdp').vectorMap({
	          map: 'world_mill_en',
	          backgroundColor: 'transparent',
	          zoomOnScroll: false,
	          series: {
	            regions: [{
	              values: gdpData,
	              scale: ['#E6F2F0', '#149B7E'],
	              normalizeFunction: 'polynomial'
	            }]
	          },
	          onRegionTipShow: function(e, el, code) {
	            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
	          }
	        });
	      });
	    </script>
	    <!-- /jVectorMap -->

	    <!-- Skycons -->
	    <script>
	      $(document).ready(function() {
	        var icons = new Skycons({
	            "color": "#73879C"
	          }),
	          list = [
	            "clear-day", "clear-night", "partly-cloudy-day",
	            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
	            "fog"
	          ],
	          i;

	        for (i = list.length; i--;)
	          icons.set(list[i], list[i]);

	        icons.play();
	      });
	    </script>
	    <!-- /Skycons -->

	    <!-- Doughnut Chart -->
	    <script>
	      $(document).ready(function(){
	        var options = {
	          legend: false,
	          responsive: false
	        };

	        new Chart(document.getElementById("canvas1"), {
	          type: 'doughnut',
	          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
	          data: {
	            labels: [
	              "Symbian",
	              "Blackberry",
	              "Other",
	              "Android",
	              "IOS"
	            ],
	            datasets: [{
	              data: [15, 20, 30, 10, 30],
	              backgroundColor: [
	                "#BDC3C7",
	                "#9B59B6",
	                "#E74C3C",
	                "#26B99A",
	                "#3498DB"
	              ],
	              hoverBackgroundColor: [
	                "#CFD4D8",
	                "#B370CF",
	                "#E95E4F",
	                "#36CAAB",
	                "#49A9EA"
	              ]
	            }]
	          },
	          options: options
	        });
	      });
	    </script>
	    <!-- /Doughnut Chart -->

	    <!-- bootstrap-daterangepicker -->
	    <script>
	      $(document).ready(function() {

	        var cb = function(start, end, label) {
	          console.log(start.toISOString(), end.toISOString(), label);
	          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
	        };

	        var optionSet1 = {
	          startDate: moment().subtract(29, 'days'),
	          endDate: moment(),
	          minDate: '01/01/2012',
	          maxDate: '12/31/2015',
	          dateLimit: {
	            days: 60
	          },
	          showDropdowns: true,
	          showWeekNumbers: true,
	          timePicker: false,
	          timePickerIncrement: 1,
	          timePicker12Hour: true,
	          ranges: {
	            'Today': [moment(), moment()],
	            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
	            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
	            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
	            'This Month': [moment().startOf('month'), moment().endOf('month')],
	            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
	          },
	          opens: 'left',
	          buttonClasses: ['btn btn-default'],
	          applyClass: 'btn-small btn-primary',
	          cancelClass: 'btn-small',
	          format: 'MM/DD/YYYY',
	          separator: ' to ',
	          locale: {
	            applyLabel: 'Submit',
	            cancelLabel: 'Clear',
	            fromLabel: 'From',
	            toLabel: 'To',
	            customRangeLabel: 'Custom',
	            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
	            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
	            firstDay: 1
	          }
	        };
	        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
	        $('#reportrange').daterangepicker(optionSet1, cb);
	        $('#reportrange').on('show.daterangepicker', function() {
	          console.log("show event fired");
	        });
	        $('#reportrange').on('hide.daterangepicker', function() {
	          console.log("hide event fired");
	        });
	        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
	          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
	        });
	        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
	          console.log("cancel event fired");
	        });
	        $('#options1').click(function() {
	          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
	        });
	        $('#options2').click(function() {
	          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
	        });
	        $('#destroy').click(function() {
	          $('#reportrange').data('daterangepicker').remove();
	        });
	      });
	    </script>
	    <!-- /bootstrap-daterangepicker -->

	    <!-- gauge.js -->
	    <script>
	      var opts = {
	          lines: 12,
	          angle: 0,
	          lineWidth: 0.4,
	          pointer: {
	              length: 0.75,
	              strokeWidth: 0.042,
	              color: '#1D212A'
	          },
	          limitMax: 'false',
	          colorStart: '#1ABC9C',
	          colorStop: '#1ABC9C',
	          strokeColor: '#F0F3F3',
	          generateGradient: true
	      };
	      var target = document.getElementById('foo'),
	          gauge = new Gauge(target).setOptions(opts);

	      gauge.maxValue = 6000;
	      gauge.animationSpeed = 32;
	      gauge.set(3200);
	      gauge.setTextField(document.getElementById("gauge-text"));
	    </script>
	    <!-- /gauge.js -->
