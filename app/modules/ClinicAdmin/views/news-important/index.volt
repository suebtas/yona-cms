<!--controls-->
<div class="ui segment">

    <a href="{{ url.get() }}clinic-admin/news-important/add" class="ui button positive">
        <i class="icon plus"></i> {{ helper.at('Add New') }}
    </a>

</div>
<!--/end controls-->

<table class="ui table very compact celled">
    <thead>
    <tr>
        <th>{{ helper.at('Edit') }}</th>
        <th>{{ helper.at('Name') }}</th>
        <th>{{ helper.at('Status') }}</th>
    </tr>
    </thead>
    <tbody>
    {% for NewsImportant in entries %}
        <tr>
            {% set url = url.get() ~ 'clinic-admin/news-important/edit/' ~ NewsImportant.getId() %}
            <td><a href="{{ url }}" class="mini ui icon button"><i class="pencil icon"></i></a></td>
            <td>{{ NewsImportant.getName() }}</td>
            <td>{% if NewsImportant.getStatus() %}<i class="icon checkmark green"></i>{% endif %}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
