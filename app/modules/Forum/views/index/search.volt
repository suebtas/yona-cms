
<div class="right_col" role="main">
    {{ content() }}
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
                <div class="muted pull-left">รายละเอียดข้อมูล หมวดหมู่กระทู้</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <table class="table table-striped table-bordered" id="example">
                        <thead>
                            <tr>
                                            
                <th>ชื่อหมวดหมู่</th>
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
                                        <td>{{ link_to("post/index/search?forum="~forum.getId(), forum.Name) }}</td>
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