<!--controls-->
<div class="right_col" role="main">
    <div class="ui segment">
        <table class="ui table very compact celled">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>หัวเรื่อง</th>
                    <th>วันที่ส่ง</th>
                    <th>สถานะ</th>
                </tr>
            </thead>
            <tbody>
            {% set i = 1 %}
            {% for msg in messages %}
                <tr>
                    <td>{{i}}</td>{% set i = i+1 %}
                    <td><a href="{{url.get()}}clinic/webmessage/read/{{msg.id}}">{{msg.subject}}</a></td>
                    <td>{{msg.datesent}}</td>
                    <td><a href="{{url.get()}}clinic/webmessage/read/{{msg.id}}"><img src="{{ url.path() }}images/{{msg.getStatus()}}.jpg" alt="..." class="img-circle" ></a></td>
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