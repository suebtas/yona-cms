<!--controls-->
<div class="ui segment">

    <a href="{{ url.get() }}clinic-admin/survey-status/add" class="ui button positive">
        <i class="icon plus"></i> {{ helper.at('Add New') }}
    </a>

</div>
<!--/end controls-->

<table class="ui table very compact celled">
    <thead>
    <tr>
        <th style="width: 100px"></th>
        <th>{{ helper.at('Name') }}</th>
        <th>{{ helper.at('Status') }}</th>
    </tr>
    </thead>
    <tbody>
    {% for surveystatus in entries %}
        <tr>
            {% set url = url.get() ~ 'clinic-admin/survey-status/edit/' ~ surveystatus.getId() %}
            <td><a href="{{ url }}" class="mini ui icon button"><i class="pencil icon"></i></a></td>
            <td>{{ surveystatus.getName() }}</td>
            <td>{{ surveystatus.getStatus() }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>