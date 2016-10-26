
<div class="right_col" role="main">

    <!--controls-->
    

    <form action="{{ url.get() }}clinic/news/edit/{{newsid}}" method="post">

        <div class="form-group">
            <input type="submit" value="Edit News">
        </div>

    </form>

    <table class="ui table very compact celled">
        <thead>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="col-md-12">
                        <span class="control-label">ประเภทข่าวสาร</span>
                        <input type="text" id="NewsType" name="NewsType" required="required" class="form-control col-md-2 col-xs-12" value="{{newstype}}" disabled="1">
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <span class="control-label">ระดับความเร่งด่วน</span>
                        <input type="text" id="NewsLevel" name="NewsLevel" required="required" class="form-control col-md-2 col-xs-12" value="{{newslevel}}" disabled="1">
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <span class="control-label">ระดับความสำคัญ</span>
                        <input type="text" id="NewsImportant" name="NewsImportant" required="required" class="form-control col-md-2 col-xs-12" value="{{newsimportant}}" disabled="1">
                    </div>
                </td>
            </tr>
            <tr>
                <span class="control-label col-md-1 col-sm-1 col-xs-12">หัวเรื่อง</span>
                <div class="col-md-12 col-sm-3 col-xs-12">
                    <input type="text" id="subject" name="subject" required="required" class="form-control col-md-2 col-xs-12" value="{{subject}}" disabled="1">
                </div>
            </tr>
            <tr>
                <span class="control-label col-md-1 col-sm-1 col-xs-12">เนื้อข่าว</span>
                <div class="col-md-12 col-sm-3 col-xs-12">
                    <textarea rows="10" cols="50" id="detail" name="detail" class="form-control col-md-2 col-xs-6" disabled="1">{{detail}}</textarea>
                </div>
            </tr>
        </tbody>
    </table>
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

{{ assets.outputJs('modules-clinic-js') }}
<script>
$(document).ready(function() {

    $.fn.editable.defaults.mode = 'inline';

    $("#listOffice").select2();


}
</script>