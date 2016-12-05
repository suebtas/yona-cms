
<div class="right_col" role="main" style="background-color:rgb(215, 215, 215)">
    {{ content() }}
    <style media="screen">
    @font-face {
    font-family: thfont;
    src: url(assets/Cloud-Light.otf);
      }
      @font-face {
        font-family: thfontb;
        src: url(assets/fonts/Cloud-Bold.otf);
      }
      .thfontb{
        font-family: thfontb;
        font-size: 150%;
            }
      .thfont{
        font-family: thfont;
      }
      #csstd td{
        vertical-align:middle;
      }
      .bd {
          background-color: rgb(255, 255, 255);
          margin: 1%;
          border-radius: 5px;
          color: rgb(37, 37, 37);
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
          padding: 2%;

      }
      .text-blue{
        color:rgb(0, 163, 255)
      }
      .text-dark{
        color:rgb(62, 62, 62)
      }
    </style>
     <div class="row-fluid">
        <div align="center">
            <h1>กระทู้</h1>
        </div>
        <!-- block -->
        <a href="../../forum/index/search" class="btn btn-xl btn-success">ย้อนกลับ</a>
        <div class="block">
          <div class="bd text-center navbar navbar-inner block-header" style="background-color:rgb(50, 50, 50);color:white">
            <h1 class="thfontb" style="font-size:150%">รายละเอียดข้อมูล กระทู้</h1>
          </div>
            <!-- <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">รายละเอียดข้อมูล กระทู้</div>
            </div>-->
            <div class="block-content collapse in">
                <div class="span12">
                    <table class="table  table-bordered" id="example">
                        <thead>
                            <tr>

                                <th>กระทู้</th>
                                <th>จำนวนคนตอบ</th>
                                <th>สร้างเมื่อเวลา</th>
                                <th>ตอบล่าสุดเมื่อเวลา</th>

                                {% if isAdmin %}
                                <th>สถานะ</th>
                                <th>จัดการ</th>
                                {% endif %}
                            </tr>
                        </thead>
                        <tbody>
                        {% if page.items is defined %}
                        {% for post in page.items %}
                            {% if post.Status == 1 AND isAdmin == false %}
                                {% continue %}
                            {% endif %}
                            <tr>
                              <div class="row  bd text-blue">
                                  <div class="col-xs-1">
                                      <img src="{{ url.path() }}website/img/forumi.png" style="max-width:40px" alt="" />
                                  </div>
                                  <div class="col-xs-11">
                                      <a class="text-blue"><h1 class="thfontb">{{ link_to("post/index/comment?topic="~post.ID, post.Title) }}</h1></a>
                                      <p> <span style="color:rgb(223, 81, 81);margin-right:1%"><i class="ion-icon ion-chatbox-working" style="font-size:25px"></i> {{post.counting-1}} Answers</span>
                                          <small style="color:rgb(84, 159, 0);margin-right:1%">ตั้งหัวข้อเมื่อวันที่ {{ post.postdate }}	ตอบล่าสุดเมื่อเวลา {{ post.maxpostdate }} </small></p>
                                  </div>
                              </div>

                                {% if isAdmin %}
                                <td>{{ func.getStatusNameById(post.Status) }}</td>
                                <td>
                                    <!-- buton groups -->
                                    <div class="btn-group">
                                    {{ link_to("clinic/post/edit/"~post.ID, "<i class='icon-pencil'></i> แก้ไข", "class":"btn")}}
                                    <button data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li>{{ link_to("clinic/post/edit/"~post.ID, "<i class='icon-pencil'></i> แก้ไข")}}</li>
                                        <li>{{ link_to("clinic/post/delete/"~post.ID, "<i class='icon-remove'></i> ลบ") }}</li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                </td>
                                {% endif %}
                            </tr>
                        {% endfor %}
                        {% endif %}
                        </tbody>
                    </table>

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
<!-- Custom Theme Scripts -->
<!-- <script src="../build/js/custom.min.js"></script> -->
<script src="{{ url.path() }}clinic/vendors/select2/dist/js/select2.full.min.js"></script>

{#{ assets.outputJs('modules-clinic-js') }#}
