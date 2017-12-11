{# app/modules/Clinic/views/review/no1.volt #}

{% extends "form/no1.volt" %}

{% block review %}

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>ยืนยันข้อมูล <small>อนุมัติ</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        {% if user.role == "cc-admin" %}
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="setAdmin/{{ dispatcher.getActionName() }}">{% if adminEnable==false %} แก้ไข {% else %} ยกเลิกแก้ไข{% endif %}</a>
            </li>
          </ul>
        </li>
        {% endif %}
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="form-group">

        {%set approval = discoverySurvey.getApproval(["level=:0:","bind":[user.getLevel()]])%}
        {%if approval != null %}
        <div class="alert alert-{% if approval.status != 3 %}warning{%elseif approval.status == 3%}info{%endif%} alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
          </button>
          <strong>ยืนยันข้อมูล ครั้งที่ {{approval.order}}</strong> สถานะปัจจุบัน: {{approval.getStatusName()}}
        </div>
        {% endif %}

        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="text-center">
            <h2><i class="fa fa-user"></i> ผู้ยืนยันข้อมูลสำรวจ<span>
                <a id="signing_approver"  data-type="text" data-pk="1" data-title="Enter username">{{signing_approver}}</a>
                </span>
            </h2>
          </div>
        </div>

        <div class="col-md-12 col-sm-6 col-xs-12  col-md-offset-5">
          <div id="approval" class="btn-group" data-toggle="buttons">
              <input type="radio" name="approve" value="3"> &nbsp; ผ่าน &nbsp;
              <input type="radio" name="approve" value="2"> ไม่ผ่าน
          </div>
        </div>
    </div>

  </div>
</div>

{% endblock %}

{% block comment_tab1 %}
    <div class="alert alert-warning alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <div id="note_session_1" data-pk="1" data-type="wysihtml5" data-toggle="manual" data-original-title="Enter notes">{{comment_session_1}}</div>
    </div>
		<a href="#" id="pencil_session_1"><i class="fa fa-pencil"></i> [แก้ไขข้อคิดเห็น ประกอบการพิจารณาข้อมูล]</a> :
        <a href="#" id="status_session_1" data-type="select" data-pk="1"  data-title="Select status" data-value="{{status_comment_session_1}}"></a><br>
		<span class="text-muted"> <br>
		 ตรวจสอบข้อมูล</span>

		<br />
		<div class="ln_solid"></div>
{% endblock%}
{% block comment_tab2 %}
		<div class="ln_solid"></div>
		<div class="alert alert-warning alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
        </button>
        <div id="note_session_2" data-pk="1" data-type="wysihtml5" data-toggle="manual" data-original-title="Enter notes">{{comment_session_2}}</div>
    </div>


		<a href="#" id="pencil_session_2"><i class="fa fa-pencil"></i> [แก้ไขข้อคิดเห็น ประกอบการพิจารณาข้อมูล]</a>:
        <a href="#" id="status_session_2" data-type="select" data-pk="1"  data-title="Select status" data-value="{{status_comment_session_2}}"></a><br>
		<span class="text-muted"> <br>
		 ตรวจสอบข้อมูล</span>

		<br />
		<div class="ln_solid"></div>
{% endblock %}

{% block script %}
    <link href="{{ url.path() }}clinic/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <script src="{{ url.path() }}clinic/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="{{ url.path() }}clinic/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="{{ url.path() }}clinic/vendors/google-code-prettify/src/prettify.js"></script>
    <script src="{{ url.path() }}clinic/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
    
{% endblock %}
