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
            <div class="field">
                {{ form.renderDecorated('start') }}
            </div>
            <div class="field">
                {{ form.renderDecorated('end') }}
            </div>
        </div>
        <div class="one fields">
            <div class="field">
                {{ form.renderDecorated('status') }}
            </div>
        </div>
    </div>

</form>

<script>
    $('.ui.form').form({});
</script>