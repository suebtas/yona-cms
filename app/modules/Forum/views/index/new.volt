<div class="right_col" role="main">
  {{ content() }}

  {{ form("clinic/forum/create", "method":"post", "class" : "form-horizontal") }}

  <div class="table-toolbar">
    <div class="btn-group">
      {{ link_to("clinic/forum/index", 'ย้อนกลับ <i class="icon-arrow-left"></i>',"class":"btn btn-info") }} 
    </div>
    <div class="btn-group">
      {{ tag_html("button", ["type": "submit", "class": "btn btn-success"], false, true, true) }}
      บันทึก <i class="icon-ok"></i>
      {{ tag_html_close("button") }}
    </div>
  </div>
  <div align="center">
      <h1>เพิ่มข้อมูล หมวดหมู่กระทู้</h1>
  </div>

        <div class="control-group">

             <label for="Status" class="control-label">ชื่อหมวดหมู่</label>
             <input type="text" id="Name" name="Name" required="required" class="form-control">
        </div>

        <!-- <div class="control-group">
             <label for="Status" class="control-label">สถานะ</label>
             <div class="controls">{{ select('Status', Status, 'using':['ID', 'Name'], 'class':'form-control chzn-select') }}</div>
        </div> -->
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
