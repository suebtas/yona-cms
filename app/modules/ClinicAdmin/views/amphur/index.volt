<!--controls-->
<div class="ui segment">

    <a href="{{ url.get() }}clinic-admin/amphur/add" class="ui button positive">
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
    {% for amphur in entries %}
        <tr>
            {% set url = url.get() ~ 'clinic-admin/amphur/edit/' ~ amphur.getId() %}
            <td><a href="{{ url }}" class="mini ui icon button"><i class="pencil icon"></i></a></td>
            <td>{{ amphur.getName() }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>