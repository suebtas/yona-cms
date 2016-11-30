<!--controls-->
<div class="ui segment">

    <a href="{{ url.get() }}clinic-admin/session/add" class="ui button positive">
        <i class="icon plus"></i> {{ helper.at('Add New') }}
    </a>

</div>
<!--/end controls-->

<table class="ui table very compact celled">
    <thead>
    <tr>
        <th>{{ helper.at('Edit') }}</th>
        <th>{{ helper.at('Name') }}</th>
        <th>{{ helper.at('Active') }}</th>
    </tr>
    </thead>
    <tbody>
    {% for Session in entries %}
        <tr>
            {% set url = url.get() ~ 'clinic-admin/session/edit/' ~ Session.getId() %}
            <td><a href="{{ url }}" class="mini ui icon button"><i class="pencil icon"></i></a></td>
            <td>{{ Session.getName() }}</td>
            <td>{% if Session.getActive() %}<i class="icon checkmark green"></i>{% endif %}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>