<!--controls-->
<div class="right_col" role="main">
    <div class="ui segment">

    </div>
    <div class="ui segment">
        <table class="ui table very compact celled">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>เขตพื้นที่</th>
                    <th>ผู้รับรอง(อ่าน/ไม่อ่าน)</th>
                </tr>
            </thead>
            <tbody>
            {% set i = 1 %}
            {% for nw in newsAppr %}
                <tr>
                    <td>{{i}}</td>{% set i = i+1 %}
                    <td>{{nw.getOffice()}}</td>
                    <td>{{nw.getTHStatus()}}</td>
            {% endfor %}
            </tbody>
        </table>

        <table class="ui table very compact celled">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>เขตพื้นที่</th>
                    <th>ผู้บันทึกข้อมูล(อ่าน/ไม่อ่าน)</th>
                </tr>
            </thead>
            <tbody>
            {% set i = 1 %}
            {% for nw in newsUser %}
                <tr>
                    <td>{{i}}</td>{% set i = i+1 %}
                    <td>{{nw.getOffice()}}</td>
                    <td>{{nw.getTHStatus()}}</td>
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