
<div class="right_col" role="main">


     <div class="row-fluid">
        <div class="table-toolbar">
          <div class="btn-group">
             {{ link_to("clinic/forum/index", 'ย้อนกลับ <i class="icon-arrow-left"></i>',"class":"btn") }} 
          </div>
          <div class="btn-group">
             {{ link_to("clinic/post/new", 'เพิ่ม <i class="icon-plus"></i>',"class":"btn") }}
          </div>
        </div>
        <div align="center">
            <h1>กระทู้</h1>
        </div>
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">รายละเอียดข้อมูล กระทู้</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <table class="table table-striped table-bordered" id="example">
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
                                <td>{{ link_to("clinic/post/comment?topic="~post.ID, post.Title) }}</td>
                                <td><span class="badge badge-info">{{post.counting-1}}</span></td>
                                <td>{{ post.postdate }}</td>
                                <td>{{ post.maxpostdate }}</td>
                                
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

