
{{ content() }}

{{ form("post/create", "method":"post", "class" : "form-horizontal") }}

<div class="table-toolbar">
  <div class="btn-group">
    {{ link_to("post/index", 'ย้อนกลับ <i class="icon-arrow-left"></i>',"class":"btn") }} 
  </div>
  <div class="btn-group">
    {{ tag_html("button", ["type": "submit", "class": "btn"], false, true, true) }}
    บันทึก <i class="icon-ok"></i>
    {{ tag_html_close("button") }}
  </div>
</div>

<div align="center">
    <h1>เพิ่มข้อมูล ตอบกระทู้</h1>
</div>

<label for="Detail" class="control-label">รายละเอียด</label>
<div class="controls">
    {{ text_area("Detail", "size" : 30,"class": "span12", "rows":"7") }}</div>
</div>

{{ hidden_field("ReplyPostID") }}
{{ hidden_field("HeadPostID") }}
{{ hidden_field("ForumID") }}
{{ hidden_field("Title") }}

</form>
