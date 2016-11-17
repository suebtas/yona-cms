<div class="right_col" role="main">
  {{ content() }}

  {{ form("clinic/post/create", "method":"post", "class" : "form-horizontal") }}

  <div class="table-toolbar">
    <div class="btn-group">
      {{ link_to("clinic/post/index", 'ย้อนกลับ <i class="icon-arrow-left"></i>',"class":"btn  btn-info") }} 
    </div>
    <div class="btn-group">
      {{ tag_html("button", ["type": "submit", "class": "btn  btn-success"], false, true, true) }}
      บันทึก <i class="icon-ok"></i>
      {{ tag_html_close("button") }}
    </div>
  </div>

  <div align="center">
      <h1>เพิ่มข้อมูล ตอบกระทู้</h1>
  </div>

  <label for="Detail" class="control-label">รายละเอียด</label>
  <div class="controls">
      {{ text_area("Detail", "size" : 200,"class": "span12", "rows":"10", "class":"form-control") }}
  </div>


  {{ hidden_field("ReplyPostID") }}
  {{ hidden_field("HeadPostID") }}
  {{ hidden_field("ForumID") }}
  {{ hidden_field("Title") }}

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