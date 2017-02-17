<form method="post" action="" class="ui form">

    <!--controls-->
    <div class="ui segment">

        <a href="{{ url.get() }}clinic-admin/discovery-survey" class="ui button">
            <i class="icon left arrow"></i> Back
        </a>

        <div class="ui positive submit button">
            <i class="save icon"></i> Save
        </div>

        {% if model.id %}
            <a href="{{ url.get() }}clinic-admin/discovery-survey/delete/{{ model.id }}" class="ui button red">
                <i class="icon trash"></i> Delete
            </a>
        {% endif %}

    </div>
    <!--end controls-->

    <div class="ui segment">
        <div class="one fields">
            <div class="field">
                {{ form.renderDecorated('enddate') }}
            </div>
        </div>
    </div>

</form>



<script>
    $('.ui.form').form({});
</script>


<link rel="stylesheet" href="{{ url.path() }}vendor/bootstrap/datetimepicker/bootstrap-datetimepicker.min.css">
<script src="{{ url.path() }}vendor/bootstrap/datetimepicker/moment.js"></script>
<script src="{{ url.path() }}vendor/bootstrap/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script>
    $( document ).ready(function() {
        $('#enddate').datetimepicker({
            locale: 'en',
            format: 'YYYY-MM-DD',
            showClose: true
        });
    });
</script>