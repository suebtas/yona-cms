{# app/modules/Clinic/views/review/no1.volt #}
{% extends "form/no1.volt" %}

{% block review %}
<p>ส่วนพื้นที่ยืนยันข้อมูล</p>
<div class="x_content">
    <br />
    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">อนุมัติ</label>
        <div class="col-md-12 col-sm-6 col-xs-12  col-md-offset-5">
          <div id="approval" class="btn-group" data-toggle="buttons">
              <input type="radio" name="approve" value="1"> &nbsp; ผ่าน &nbsp;
              <input type="radio" name="approve" value="2"> ไม่ผ่าน
          </div>
        </div>
      </div>

<div class="ln_solid"></div>
    </form>
</div>

{% endblock %}

{% block comment_tab1 %}
		<div id="note_session_1" data-pk="1" data-type="wysihtml5" data-toggle="manual" data-original-title="Enter notes">
			{{comment_session_1}}
		</div>

		<a href="#" id="pencil_session_1"><i class="fa fa-pencil"></i> [แก้ไขข้อคิดเห็น ประกอบการพิจารณาข้อมูล]</a><br>
		<span class="text-muted"> <br>
		 ตรวจสอบข้อมูล</span>

		<br />
		<div class="ln_solid"></div>
{% endblock%}
{% block comment_tab2 %}
		<div class="ln_solid"></div>
		<div id="note_session_2" data-pk="1" data-type="wysihtml5" data-toggle="manual" data-original-title="Enter notes">
			{{comment_session_2}}
		</div>

		<a href="#" id="pencil_session_2"><i class="fa fa-pencil"></i> [แก้ไขข้อคิดเห็น ประกอบการพิจารณาข้อมูล]</a><br>
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