
<div class="right_col" role="main">

{{ form("clinic/forum/search", "method":"post", "autocomplete" : "off","class" : "form-horizontal", "class" : "form-horizontal") }}

<div class="table-toolbar">
  {% if router.getActionName() != 'index' and router.getActionName()!=""%}
      <div class="btn-group">
        {{ link_to("clinic/forum/index", 'Go Back <i class="icon-arrow-left"></i>',"class":"btn") }} 
      </div>
  {% endif %}
  <div class="btn-group">
    {{ link_to("clinic/forum/new", 'Create <i class="icon-plus"></i>',"class":"btn") }}
  </div>
  <div class="btn-group">
    {{ tag_html("button", ["type": "submit", "class": "btn"], false, true, true) }}
    Search <i class="icon-search"></i>
    {{ tag_html_close("button") }}
  </div>
</div>
<div align="center">
    <h1>Search forum</h1>
</div>

                        <div class="control-group">
                            <label for="ID" class="control-label">ID</label>
            <div class="controls">{{ text_field("ID", "type" : "numeric") }}</div></div>                        <div class="control-group">
                            <label for="Name" class="control-label">Name</label>
            <div class="controls">{{ text_field("Name", "size" : 30) }}</div></div>                        <div class="control-group">
                            <label for="Status" class="control-label">Status</label>
            <div class="controls">{{ text_field("Status", "size" : 30) }}</div></div>

</form>
<div>
