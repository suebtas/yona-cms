<form method="post" action="" class="ui form">

    <!--controls-->
    <div class="ui segment">

        <a href="{{ url.get() }}clinic-admin/survey" class="ui button">
            <i class="icon left arrow"></i> Back
        </a>

        <div class="ui positive submit button">
            <i class="save icon"></i> Save
        </div>

        {% if model.getId() %}
            <a href="{{ url.get() }}clinic-admin/survey/delete/{{ model.getId() }}" class="ui button red">
                <i class="icon trash"></i> Delete
            </a>
        {% endif %}

    </div>
    <!--end controls-->

    <div class="ui segment">
        <div class="two fields">
            <div class="field">
                {{ form.renderDecorated('no') }}
            </div>
            <div class="field">
                {{ form.renderDecorated('description') }}
            </div>
        </div>
        <div class="two fields">
                {{ form.renderDecorated('start') }}
                {{ form.renderDecorated('end') }}
        </div>
        <div class="two fields">
            <div class="field">
                {{ form.renderDecorated('notification') }}
            </div>
        </div>
        <div class="two fields">
            <div class="field">
                {{ form.renderDecorated('status') }}
            </div>
            <div class="field">
                <label for="status">Expired icon</label>
                <div><i class="{% if model.isExpired() %}unlock alternate icon{% else %}unlock icon{% endif %}"></i></div>
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
        $('#start').datetimepicker({
            locale: 'en',
            format: 'YYYY-MM-DD',
            showClose: true
        });
        $('#end').datetimepicker({
            locale: 'en',
            format: 'YYYY-MM-DD',
            showClose: true,
            useCurrent: false, //Important! See issue #1075
            widgetPositioning: {
                horizontal: 'right',
                vertical: 'bottom'
            }
        });
        $("#start").on("dp.change", function (e) {
            $('#end').data("DateTimePicker").minDate(e.date);
        });
        $("#end").on("dp.change", function (e) {
            $('#start').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>