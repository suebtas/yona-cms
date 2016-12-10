
<div class="right_col" role="main" style="background-color:rgb(233, 233, 233)">
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
          padding: 1%;

      }
      .text-blue{
        color:rgb(0, 163, 255)
      }
      .text-dark{
        color:rgb(62, 62, 62)
      }
      .line {
          margin-top: 1%;
          margin-bottom: 1%;
          border-bottom: 2px solid rgb(51, 51, 51);
      }
    </style>
    <div class="row-fluid">
        <div class="table-toolbar">
          {% if isAdmin %}
          <div class="btn-group">
             {{ link_to("forum/index/new", 'เพิ่มหมวดหมู่',"class":"btn btn-success") }}
          </div>
          {% endif %}
        </div>

        <div align="center">
            <h1>หมวดหมู่กระทู้</h1>
        </div>

        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
              <div class="bd  navbar navbar-inner block-header" style="background-color:rgb(50, 50, 50);color:white;margin:0">
                <h1 class="thfontb" style="font-size:150%">รายละเอียดข้อมูล หมวดหมู่กระทู้</h1>
              </div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <table class="table table-striped table-bordered" id="example">
                        <thead>
                            <tr>

                              <div class="bd  navbar navbar-inner block-header" style="background-color:rgb(0, 117, 238);color:white">
                                <h1 class="thfontb" style="font-size:150%">ชื่อหมวดหมู่</h1>
                              </div>

                {% if isAdmin %}
                    <th>สถานะ</th>
                    <th>จัดการ</th>
                {% endif %}

                            </tr>
                        </thead>
                        <tbody>
                        {% if page.items is defined %}
                        {% for forum in page.items %}
                            <tr>




                                {% if isAdmin %}
                                <td>{{ link_to("post/index/search?forum="~forum.getId(), forum.Name) }}</td>
                                <td>
                                    {% if forum.Status == 0 %}
                                       {{"ใช้งาน"}}
                                    {% else %}
                                        {{"ระงับใช้งาน"}}
                                    {% endif %}

                                </td>
                                <td>
                                    <div class="btn-group">
                                        {{ link_to("forum/index/edit/"~forum.ID, "<i class='icon-pencil'></i> แก้ไข", "class":"btn")}}
                                        <button data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li>{{ link_to("forum/index/edit/"~forum.ID, "<i class='icon-pencil'></i> แก้ไข")}}</li>
                                            <li>{{ link_to("forum/index/delete/"~forum.ID, "<i class='icon-remove'></i> ลบ") }}</li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                </td>
                                {% else %}
                                    {% if forum.Status == 0 %}

                                    <div class="row  bd text-blue">
                                        <div class="col-xs-1">
                                            <img src="{{ url.path() }}website/img/forumi.png" style="max-width:40px" alt="" />
                                        </div>
                                        <div class="col-xs-11">
                                            <span class="text-blue"><h1 class="thfontb">{{ link_to("post/index/search?forum="~forum.getId(), forum.Name) }}</h1></span>
                                        </div>
                                    </div>
                                        <!--{{ link_to("post/index/search?forum="~forum.getId(), forum.Name) }}-->
                                    {% endif %}
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
