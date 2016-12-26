        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>{{ office.name }}</h3> 
                สถานะการยืนยันของท้องถิ่น <small>{{discoverySurvey.getApprovalStatusWithSymbol(["level=:0:","bind":[1]])}}</small> สถานะการยืนยันของจังหวัด <small>{{discoverySurvey.getApprovalStatusWithSymbol(["level=:0:","bind":[2]])}}</small>
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
                    <h2>คำถามเพิ่มเติม <small>ครั้งที่ {{discoverySurvey.Survey.no}}</small></h2> 
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a href="{{ url.get() }}clinic-admin/exportword/printformno1" role="button" aria-expanded="false"><i class="fa fa-print"></i></a></li>
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
                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                      <thead>
                        <th width="10%">ลำดับ</th>
                        <th width="60%">คำถาม</th>
                        <th width="30%">คำตอบ</th>
                      </thead>
                      
                      <tbody>
                        {% set i = 1 %}
                        {% for quest in questions %}
                          <tr>
                            <td>{{i}}</td> {% set i = i +1 %}
                            <td>{{quest.name}}</td>
                            <td><textarea rows="4" cols="50" id="no4_4_2_3" class="form-control col-md-2 col-xs-6"></textarea>
                            </td>
                          </tr>
                        {% endfor %}
                      </tbody>
                      
                    </table>
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
            $('.buttonNext').addClass('btn btn-success');
            $('.buttonPrevious').addClass('btn btn-primary');
            $('.buttonFinish').addClass('btn btn-default');

          });
        </script>
        <!-- /jQuery Smart Wizard -->

        {#{ assets.outputJs('modules-clinic-no10-js') }#}
        
    {% block script %}
    {% endblock %}
