<!--controls-->
<div class="right_col" role="main">
    <div class="ui segment">
    {% if userType != "cc-admin" %}
        <span class="control-label col-md-1 col-sm-1 col-xs-12">Unread News : {{unread}}</span>
    {% endif %}
    </div>
    <div class="ui segment">
        <table class="ui table very compact celled">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>หัวเรื่อง</th>
                    <th>วันที่ส่ง</th>
                    {% if userType == "cc-admin" %}
                        <th>ผู้รับรอง(อ่าน/ไม่อ่าน)</th>
                        <th>ผู้บันทึกข้อมูล(อ่าน/ไม่อ่าน)</th>
                        <th>สถานะ</th>
                        <th>จัดการ</th>
                    {% else %}
                        <th>สถานะ</th>
                    {% endif %}
                </tr>
            </thead>
            <tbody>
            {% set i = 1 %}
            {% for nw in news %}
                <tr>
                    <td>{{i}}</td>{% set i = i+1 %}
                    <td><a href="{{url.get()}}clinic/news/read/{{nw.id}}">{{nw.subject}}</a></td>
                    <td>{{nw.datesent}}</td>
                    {% if userType == "cc-admin" %}
                        <td><a href="{{url.get()}}clinic/news/checklist/{{nw.id}}">{{nw.getRead2()}}/{{nw.getNewsRead2()}}</a></td>
                        <td><a href="{{url.get()}}clinic/news/checklist/{{nw.id}}">{{nw.getRead1()}}/{{nw.getNewsRead1()}}</a></td>
                        <td>{{nw.getNameStatus()}}</td>
                        <td><a href="{{url.get()}}clinic/news/active/{{nw.id}}">เผยแพร่</a>/<a href="{{url.get()}}clinic/news/cancel/{{nw.id}}">ระงับ</a></td>
                    {% else %}
                        <td>{{nw.getStatusNewsUser(userid)}}</td>
                    {% endif %}
                </tr>
            {% endfor %}
            </tbody>
        </table>
        
    </div>
</div
<!--/end controls-->



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

{{ assets.outputJs('modules-clinic-js') }}