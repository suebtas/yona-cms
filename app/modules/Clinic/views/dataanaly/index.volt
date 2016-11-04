
<div class="right_col" role="main">
    <form action="{{ url.get() }}clinic/dataanaly" method="post">
    <div class="form-group">
        <input name="Query" type="submit" value=">>Query<<" class="btn btn-success">
        <input name="Refrest" type="submit" value=">>Refresh<<" class="btn btn-info">
    </div>
        <table class="ui table very compact celled">
            <thead>
                <tr>
                    <th>ปีสำรวจ</th>
                    <th>ข้อคำถามหลัก</th>
                    <th>ข้อคำถามย่อย</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <select id="Years" name="Years"  class="form-control col-md-2 col-xs-12" >
                            {% if year == 0 %}
                                <option selected="1" value="0">เลือกปีสำรวจ</option>
                            {% else %}
                                <option value="0">เลือกปีสำรวจ</option>
                            {% endif %}
                            {% for Year in years %}
                                {% if year == Year.getYear() %}
                                    <option value="{{Year.getYear()}}"  selected="1">{{Year.getYear()}}</option>
                                {% else %}
                                    <option value="{{Year.getYear()}}" >{{Year.getYear()}}</option>
                                {% endif %}
                            {% endfor %}
                        </select>
                    </td>
                    <td>
                        <select id="Sessiones" name="Sessiones"  class="form-control col-md-2 col-xs-12">
                            {% for Session in sessiones %}
                                {% if Session.getId() == questid %}
                                    <option value="{{Session.getId()}}"  selected="1">{{Session.getName()}}</option>
                                {% else %}
                                    <option value="{{Session.getId()}}" >{{Session.getName()}}</option>
                                {% endif %}
                            {% endfor %}
                        </select>
                    </td>
                    <td>
                        <select id="Questions" name="Questions"  class="form-control col-md-2 col-xs-12" >
                            <option selected="1" value="0">เลือกข้อคำถามย่อย</option>
                            {% for Question in questions %}
                                <option value="{{Question.getId()}}">{{Question.getName()}}</option>
                            {% endfor %}
                        </select>
                    </td>
                </tr>
        </table>
        <table class="ui table very compact celled">
            <thead>
                <tr>
                    <th>เงื่อนไข</th>
                    <th>ค่า</th>
                    <th>ตรรกะเชื่อม</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <select id="Condition1" name="Condition1" class="form-control col-md-2 col-xs-12" >
                                <option selected="1" value="0">เลือกเงื่อนไข 1</option>
                                <option value="1">=</option>
                                <option value="2">!=</option>
                                <option value="3">></option>
                                <option value="4"><</option>
                                <option value="5">>=</option>
                                <option value="6"><=</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <input type="text" id="txtcon1" name="txtcon1"  class="form-control col-md-2 col-xs-12">
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <select id="Logic1" name="Logic1" class="form-control col-md-2 col-xs-12" >
                                <option selected="1" value="0">เลือกตรรกะเชื่อม 1</option>
                                <option value="1">AND</option>
                                <option value="2">OR</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <select id="Condition2" name="Condition2" class="form-control col-md-2 col-xs-12" >
                                <option selected="1" value="0">เลือกเงื่อนไข 2</option>
                                <option value="1">=</option>
                                <option value="2">!=</option>
                                <option value="3">></option>
                                <option value="4"><</option>
                                <option value="5">>=</option>
                                <option value="6"><=</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <input type="text" id="txtcon2" name="txtcon2" class="form-control col-md-2 col-xs-12">
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <select id="Logic2" name="Logic2" class="form-control col-md-2 col-xs-12" >
                                <option selected="1" value="0">เลือกตรรกะเชื่อม 2</option>
                                <option value="1">AND</option>
                                <option value="2">OR</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <select id="Condition2" name="Condition2" class="form-control col-md-2 col-xs-12" >
                                <option selected="1" value="0">เลือกเงื่อนไข 3</option>
                                <option value="1">=</option>
                                <option value="2">!=</option>
                                <option value="3">></option>
                                <option value="4"><</option>
                                <option value="5">>=</option>
                                <option value="6"><=</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <input type="text" id="txtcon3" name="txtcon3" class="form-control col-md-2 col-xs-12">
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <select id="Logic3" name="Logic3" class="form-control col-md-2 col-xs-12" >
                                <option selected="1" value="0">เลือกตรรกะเชื่อม 3</option>
                                <option value="1">AND</option>
                                <option value="2">OR</option>
                            </select>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="form-group">
            <input type="button" value=">> ผลลัพธ์ <<" class="btn btn-info">
        </div>
        <table class="ui table very compact celled">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>เขตพื้นที่</th>
                    <th>ข้อมูลปี ({{year1}})</th>
                    <th>ข้อมูลปี ({{year2}})</th>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
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
    $("#Years").select2();
    $("#Sessiones").select2();
    $("#Questions").select2();
});
</script>
