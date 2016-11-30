
{{ content() }}

{{ form("clinic/post/search", "method":"post", "autocomplete" : "off","class" : "form-horizontal", "class" : "form-horizontal") }}

<div class="table-toolbar">
  {% if router.getActionName() != 'index' and router.getActionName()!=""%}
      <div class="btn-group">
        {{ link_to("post/index", 'Go Back <i class="icon-arrow-left"></i>',"class":"btn") }} 
      </div>
  {% endif %}
  <div class="btn-group">
    {{ link_to("post/new", 'Create <i class="icon-plus"></i>',"class":"btn") }}
  </div>
  <div class="btn-group">
    {{ tag_html("button", ["type": "submit", "class": "btn"], false, true, true) }}
    Search <i class="icon-search"></i>
    {{ tag_html_close("button") }}
  </div>
</div>
<div align="center">
    <h1>Search post</h1>
</div>

                        <div class="control-group">
                            <label for="ID" class="control-label">ID</label>
            <div class="controls">{{ text_field("ID", "type" : "numeric") }}</div></div>                        <div class="control-group">
                            <label for="PersonnelID" class="control-label">PersonnelID</label>
            <div class="controls">{{ text_field("PersonnelID", "type" : "numeric") }}</div></div>                        <div class="control-group">
                            <label for="ReplyPostID" class="control-label">ReplyPostID</label>
            <div class="controls">{{ text_field("ReplyPostID", "type" : "numeric") }}</div></div>                        <div class="control-group">
                            <label for="ForumID" class="control-label">ForumID</label>
            <div class="controls">{{ text_field("ForumID", "type" : "numeric") }}</div></div>                        <div class="control-group">
                            <label for="Title" class="control-label">Title</label>
            <div class="controls">{{ text_field("Title", "size" : 30) }}</div></div>                        <div class="control-group">
                            <label for="Detail" class="control-label">Detail</label>
            <div class="controls">{{ text_field("Detail", "size" : 30) }}</div></div>                        <div class="control-group">
                            <label for="PostDate" class="control-label">PostDate</label>
            <div class="controls">{{ text_field("PostDate", "size" : 30) }}</div></div>                        <div class="control-group">
                            <label for="Status" class="control-label">Status</label>
            <div class="controls">{{ text_field("Status", "size" : 30) }}</div></div>

</form>
