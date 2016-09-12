<!--controls-->
<div class="ui segment">

    <a href="{{ url.get() }}clinic-admin/newslevel/add" class="ui button positive">
        <i class="icon plus"></i> {{ helper.at('Add New') }}
    </a>

</div>
<!--/end controls-->

<table class="ui table very compact celled">
    <thead>
    <tr>
        <th style="width: 100px"></th>
        <th>{{ helper.at('Name') }}</th>
    </tr>
    </thead>
    <tbody>
    {% for NewsLevel in entries %}
        <tr>
            {% set url = url.get() ~ 'clinic-admin/newslevel/edit/' ~ NewsLevel.getId() %}
            <td><a href="{{ url }}" class="mini ui icon button"><i class="pencil icon"></i></a></td>
            <td>{{ NewsLevel.getName() }}</td>
            <td>{{ NewsLevel.getStatus() }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
