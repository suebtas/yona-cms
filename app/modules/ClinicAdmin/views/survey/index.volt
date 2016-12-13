<!--controls-->
<div class="ui segment">

    <a href="{{ url.get() }}clinic-admin/survey/add" class="ui button positive">
        <i class="icon plus"></i> {{ helper.at('Add New') }}
    </a>

</div>
<!--/end controls-->

<table class="ui table very compact celled">
    <thead>
    <tr>
        <th style="width: 100px"></th>
        <th>{{ helper.at('No') }}</th>
        <th>{{ helper.at('Description') }}</th>
        <th>{{ helper.at('Start') }}</th>
        <th>{{ helper.at('End') }}</th>
        <th>Expired</th>
    </tr>
    </thead>
    <tbody>
    {% for survey in entries %}
        <tr>
            {% set url = url.get() ~ 'clinic-admin/survey/edit/' ~ survey.getId() %}
            <td><a href="{{ url }}" class="mini ui icon button"><i class="pencil icon"></i></a></td>
            <td>{{ survey.getNo() }}</td>
            <td>{{ survey.getDescription() }}</td>
            <td>{{ survey.getStart() }}</td>
            <td>{{ survey.getEnd() }}</td>
            <td><i class="{% if survey.isExpired() %}unlock alternate icon{% else %}unlock icon{% endif %}"></i></td>
        </tr>
    {% endfor %}
    </tbody>
</table>