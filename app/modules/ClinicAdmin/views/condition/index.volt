<!--controls-->
<div class="ui segment">

    <a href="{{ url.get() }}clinic-admin/condition/add" class="ui button positive">
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
    {% for NewsType in entries %}
        <tr>
            {% set url = url.get() ~ 'clinic-admin/condition/edit/' ~ NewsType.getId() %}
            <td><a href="{{ url }}" class="mini ui icon button"><i class="pencil icon"></i></a></td>
            <td>{{ NewsType.getName() }}</td>
            <td>{{ NewsType.getStatus() }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
