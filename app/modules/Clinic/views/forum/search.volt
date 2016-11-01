
<div class="right_col" role="main">

    <div class="row-fluid">
        <div class="table-toolbar">
          <div class="btn-group">
             {{ link_to("clinic/forum/index", 'ย้อนกลับ <i class="icon-arrow-left"></i>',"class":"btn") }} 
          </div>
          {% if isAdmin %}
          <div class="btn-group">
             {{ link_to("clinic/forum/new", 'เพิ่ม <i class="icon-plus"></i>',"class":"btn") }}
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
                    <th>จัดการ</th>
                {% endif %}

                            </tr>
                        </thead>
                        <tbody>
                        {% if page.items is defined %}
                        {% for forum in page.items %}
                            <tr>
                                
                                <td>{{ link_to("clinic/post/search?forum="~forum.getId(), forum.Name) }}</td>
                                
                
                                {% if isAdmin %}
                                <td>
                                    <!-- buton groups -->
                                    <div class="btn-group">
                                        {{ link_to("clinic/forum/edit/"~forum.ID, "<i class='icon-pencil'></i> แก้ไข", "class":"btn")}}
                                        <button data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li>{{ link_to("clinic/forum/edit/"~forum.ID, "<i class='icon-pencil'></i> แก้ไข")}}</li>
                                            <li>{{ link_to("clinic/forum/delete/"~forum.ID, "<i class='icon-remove'></i> ลบ") }}</li>
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