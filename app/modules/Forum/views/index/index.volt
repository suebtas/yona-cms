
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

{#{ assets.outputJs('modules-clinic-js') }#}
