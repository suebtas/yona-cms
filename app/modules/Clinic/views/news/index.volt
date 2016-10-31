
<div class="right_col" role="main">

    <!--controls-->
    

    <form action="{{ url.get() }}clinic/news/add" method="post">
    <table class="ui table very compact celled">
        <thead>
            <tr>
                <td>
                    <div class="form-group">
                        <input type="submit" value="บันทึกข่าว" class="btn btn-success">
                        <a href="{{url.get()}}clinic/news/check"  class="btn btn-info" role="button">ดูข่าวทั้งหมด</a>
                    </div>
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="col-md-2 ">
                        {{ check_field("allarea", "value" : "0") }}
                        <label for="HolidayOT" class="control-label">ส่งทุกเขตพื้นที่</label>
                    </div>
                    <div class="col-md-10 ">
                        <span class="control-label ">รายชื่อเขตพื้นที่</span>

                        <select id="listOffice" name="ListOffice[]"  multiple="multiple">
                            <option selected="1" value="0">เลือกส่งเฉพาะเขตพื้นที่</option>
                            {% for off in listoffices %}
                                <option value="{{off.id}}">{{off.name}}</option>
                            {% endfor %}
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-md-4">
                        <span class="control-label">ประเภทข่าวสาร</span>
                        {{ select('NewsType', newstype, 'using': ['id', 'name' ],'useEmpty': true, 'emptyText': 'กรุณาเลือก', 'emptyValue': '@','class':'form-control col-md-4 col-xs-12') }}
                    </div>
                    <div class="col-md-4">
                        <span class="control-label">ระดับความเร่งด่วน</span>
                        {{ select('NewsLevel', newslevel, 'using': ['id', 'name' ],'useEmpty': true, 'emptyText': 'กรุณาเลือก', 'emptyValue': '@','class':'form-control col-md-4 col-xs-12') }}
                    </div>
                    <div class="col-md-4">
                        <span class="control-label">ระดับความสำคัญ</span>
                        {{ select('NewsImportant', newsimportant, 'using': ['id', 'name' ],'useEmpty': true, 'emptyText': 'กรุณาเลือก', 'emptyValue': '@','class':'form-control col-md-4 col-xs-12') }}
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="control-label col-md-1 col-sm-1 col-xs-12">หัวเรื่อง</span>
                    <div class="col-md-12 col-sm-3 col-xs-12">
                        <input type="text" id="subject" name="subject" required="required" class="form-control col-md-2 col-xs-12">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="control-label col-md-1 col-sm-1 col-xs-12">เนื้อข่าว</span>
                    <div class="col-md-12 col-sm-3 col-xs-12">
                        <textarea rows="10" cols="50" id="detail" name="detail" required="required" class="form-control col-md-2 col-xs-6"></textarea>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <!--/end controls-->
    </form>

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

    $("#listOffice").select2();


});
</script>