<form method="post" action="" class="ui form">

    <!--controls-->
    <div class="ui segment">

        <div class="ui positive submit button">
            <i class="save icon"></i> Save
        </div>

        {% if model.getId() %}
            <a href="{{ url.get() }}clinic-admin/amphur/delete/{{ model.getId() }}" class="ui button red">
                <i class="icon trash"></i> Delete
            </a>
        {% endif %}

    </div>
    <!--end controls-->

    <div class="ui segment">
        <div class="two fields">
            <div class="field">
                {{ form.renderDecorated('name') }}
            </div>
            <div class="field">
                {{ form.renderDecorated('active') }}
            </div>
        </div>
    </div>

</form>

<script>
    $('.ui.form').form({});
</script>