<!--controls-->
<div class="ui segment">

    <a href="{{ url.get() }}clinic-admin/office/add" class="ui button positive">
        <i class="icon plus"></i> {{ helper.at('Add New') }}
    </a>

</div>
<!--/end controls-->

<table class="ui table very compact celled">
    <thead>
    <tr>
        <th>{{ helper.at('Edit') }}</th>
        <th>{{ helper.at('Name') }}</th>
        <th>{{ helper.at('amphur') }}</th>
        <th>{{ helper.at('Active') }}</th>
    </tr>
    </thead>
    <tbody>
    {% for office in entries %}
        <tr>
            {% set url = url.get() ~ 'clinic-admin/office/edit/' ~ office.getId() %}
            <td><a href="{{ url }}" class="mini ui icon button"><i class="pencil icon"></i></a></td>
            <td>{{ office.getName() }}</td>
            <td>{{ office.amphur.getName() }}</td>
            <td>{% if office.getActive() %}<i class="icon checkmark green"></i>{% endif %}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>