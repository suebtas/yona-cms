
{{ content() }}

{{ form("forum/create", "method":"post", "class" : "form-horizontal") }}

<div class="table-toolbar">
  <div class="btn-group">
    {{ link_to("forum/index", 'ย้อนกลับ <i class="icon-arrow-left"></i>',"class":"btn") }} 
  </div>
  <div class="btn-group">
    {{ tag_html("button", ["type": "submit", "class": "btn"], false, true, true) }}
    บันทึก <i class="icon-ok"></i>
    {{ tag_html_close("button") }}
  </div>
</div>
<div align="center">
    <h1>เพิ่มข้อมูล หมวดหมู่กระทู้</h1>
</div>

      <div class="control-group">
           <label for="Name" class="control-label">ชื่อหมวดหมู่</label>
           <div class="controls">{{ text_field("Name", "size" : 30) }}</div>
      </div>

      <!-- <div class="control-group">
           <label for="Status" class="control-label">สถานะ</label>
           <div class="controls">{{ select('Status', Status, 'using':['ID', 'Name'], 'class':'form-control chzn-select') }}</div>
      </div> -->
</form>
