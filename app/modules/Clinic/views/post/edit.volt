{{ content() }}
{{ form("post/save", "method":"post", "class":"form-horizontal") }}
    <div class="table-toolbar">
      <div class="btn-group">
         {{ link_to("post/index", 'ย้อนกลับ <i class="icon-arrow-left"></i>',"class":"btn") }} 
      </div>
      <div class="btn-group">
        {{ tag_html("button", ["type": "submit", "class": "btn"], false, true, true) }}
        บันทึก <i class="icon-refresh"></i>
        {{ tag_html_close("button") }}
      </div>
    </div>
    <fieldset>
        <legend><h1>แก้ไขข้อมูล กระทู้</h1></legend>
        <div class="control-group">
            <label for="Detail" class="control-label">ชื่อกระทู้</label>
            <div class="controls">
                {{ text_field("Title") }}
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
            <div class="controls">
                {{ text_area("Detail", "size" : 30, "class": "span12", "rows":"7") }}
            </div>
        </div>

        <div class="control-group">
            <label for="Status" class="control-label">สถานะ</label>
            <div class="controls">{{ select('Status', Status, 'using':['ID', 'Name'], 'class':'form-control chzn-select') }}</div>
        </div>
    </fieldset>        
    {{ hidden_field("ID") }}
</form>
