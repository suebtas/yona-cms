
<div class="right_col" role="main">
  {{ form("clinic/post/create", "method":"post", "class" : "form-horizontal", "enctype":"multipart/form-data") }}

  <div class="table-toolbar">
    <div class="btn-group">
      {{ link_to("clinic/post/index", 'ย้อนกลับ <i class="icon-arrow-left"></i>',"class":"btn btn-info") }} 
    </div>
    <div class="btn-group">
      {{ tag_html("button", ["type": "submit", "class": "btn btn-success"], false, true, true) }}
      บันทึก <i class="icon-ok"></i>
      {{ tag_html_close("button") }}
    </div>
  </div>

  <div align="center">
      <h1>เพิ่มข้อมูล กระทู้</h1>
  </div>
            <div class="control-group">
                <label for="Detail" class="control-label">ชื่อกระทู้</label>
                <div class="controls">
                    {{ text_field("Title", "class":"form-control") }}
                </div>
            </div>

            <div class="control-group">
                <label for="ForumID" class="control-label">หมวดหมู่กระทู้</label>
                <div class="controls">
                    {{ select("ForumID", forum, "using": ["ID", "Name"], "class":"form-control chzn-select") }}
                </div>
            </div>
  <div class="control-group">
    <label for="Detail" class="control-label">รายละเอียด</label>
        {{ text_area("Detail", "size" : 30, "class": "span12", "rows":"7", "class":"form-control") }}
  </div>

  <div class="control-group">
  <label for="Detail" class="control-label">แนบไฟล์</label>
  <div class="controls">
      {{ file_field("File", "class":"form-control") }}
  </div>
  </div>

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