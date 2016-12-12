<br><br><br><br><br>
<div class="right_col" role="main">
    {{ content() }}
    <!--controls-->
    {{flash.output()}}
    <form action="{{ url.get() }}message/index/save" method="post">
        <input type="submit" value="ส่งข้อความ" class="btn btn-success">
        <table class="ui table very compact celled">
            <thead>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <span class="control-label col-md-1 col-sm-1 col-xs-12">หัวเรื่อง</span>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <input type="text" id="subject" name="subject" required="required" class="form-control col-md-2 col-xs-12" >
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="control-label col-md-1 col-sm-1 col-xs-12">เนื้อความ</span>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <textarea rows="10" cols="50" id="detail" name="detail" class="form-control col-md-2 col-xs-6" required="required"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="control-label col-md-1 col-sm-1 col-xs-12">ชื่อผู้ส่ง</span>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <input type="text" id="name" name="name" class="form-control col-md-2 col-xs-12" required="required">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="control-label col-md-1 col-sm-1 col-xs-12">E-mail</span>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <input type="text" id="email" name="email" class="form-control col-md-2 col-xs-12" required="required">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="control-label col-md-1 col-sm-1 col-xs-12">เบอร์โทรศัพท์</span>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <input type="text" id="tel" name="tel" class="form-control col-md-2 col-xs-12" required="required">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <!--/end controls-->

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