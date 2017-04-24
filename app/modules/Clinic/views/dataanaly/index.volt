
<div class="right_col" role="main">
    <form action="{{ url.get() }}clinic/dataanaly" method="post">
    <div class="form-group">
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
                                {% if Session.getId() == sessid %}
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
                                {% if Question.getId() == questid %}
                                    <option value="{{Question.getId()}}" selected="1">{{Question.getName()}}</option>
                                {% else %}
                                    <option value="{{Question.getId()}}">{{Question.getName()}}</option>
                                {% endif %}
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
                                {% for con in conditions %}
                                    {% if con1 == con.getName() %}
                                        <option value="{{con.getName()}}" selected="1">{{con.getName()}}</option>
                                    {% else %}
                                        <option value="{{con.getName()}}">{{con.getName()}}</option>
                                    {% endif %}
                                {% endfor %}
                                

                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <input type="text" id="txtcon1" name="txtcon1"  class="form-control col-md-2 col-xs-12" value="{{val1}}">
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <select id="Logic1" name="Logic1" class="form-control col-md-2 col-xs-12" >
                                <option selected="1" value="0">เลือกตรรกะเชื่อม</option>
                                {% if logic1 == "AND" %}
                                    <option value="AND" selected="1">AND</option>
                                {% else %}
                                    <option value="AND">AND</option>
                                {% endif %}
                                {% if logic1 == "OR" %}
                                    <option value="OR" selected="1">OR</option>
                                {% else %}
                                    <option value="OR">OR</option>
                                {% endif %}
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <select id="Condition2" name="Condition2" class="form-control col-md-2 col-xs-12" >
                                <option selected="1" value="0">เลือกเงื่อนไข 2</option>
                                {% for con in conditions %}
                                    {% if con2 == con.getName() %}
                                        <option value="{{con.getName()}}" selected="1">{{con.getName()}}</option>
                                    {% else %}
                                        <option value="{{con.getName()}}">{{con.getName()}}</option>
                                    {% endif %}
                                {% endfor %}
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <input type="text" id="txtcon2" name="txtcon2" class="form-control col-md-2 col-xs-12" value="{{val2}}">
                        </div>
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <h2><label for="lbl" class="control-label">ค้นหาค่าข้อความ</label></h2>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <input type="text" id="txtcon3" name="txtcon3" class="form-control col-md-2 col-xs-12" value="{{val3}}">
                        </div>
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <h2><label for="lbl" class="control-label">ข้อความเตือน</label></h2>
                        </div>
                    </td>
                    <td><textarea rows="5" cols="50" id="message" class="form-control col-md-2 col-xs-6">{{message}}</textarea></td>
                    <td>
                        
                    </td>
                </tr>
            </tbody>
        </table>

        <input name="Query" type="submit" value=">>ผลลัพธ์<<" class="btn btn-success">
        <input name="Report" type="submit" value=">>พิมพ์รายงาน<<" class="btn btn-info">

        <table class="ui table very compact celled">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>เขตพื้นที่</th>
                    <th>ข้อมูลปี ({{year1}})</th>
                    <th>ข้อมูลปี ({{year2}})</th>
            </thead>
            <tbody>
            {% set i=1 %}
            {% if test != null %}
                {% for d, answer in test %}
                <tr>
                    <td>{{i}}{% set i=i+1 %}</td>
                    <td>{{d}}</td>
                    <td>{{answer[year1]}}</td>
                    <td>{{answer[year2]}}</td>
                </tr>
                {% endfor %}
            {% endif %}
            </tbody>
        </table>




        <input name="Amphur" type="button" value=">>สถิติ<<" class="btn btn-success">
        <table class="ui table very compact celled">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>อำเภอ</th>
                    <th>จำนวนเขตพื้นที่ ({{year1}})</th>
                    <th>จำนวนเขตพื้นที่ ({{year2}})</th>
            </thead>
            <tbody>
            {% set i=1 %}
            {% if amphurs != null %}
                {% for a in amphurs %}
                <tr>
                    <td>{{i}}{% set i=i+1 %}</td>
                    <td>{{a.name}}</td>
                    <td>{{countAmphs[a.id]}}</td>                    
                    <td>{{countAmphs2[a.id]}}</td>
                </tr>
                {% endfor %}
            {% endif %}
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
