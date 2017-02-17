<!--controls-->
<div class="ui segment">

    <a href="{{ url.get() }}clinic-admin/discovery-survey/add" class="ui button positive">
        <i class="icon plus"></i> {{ helper.at('Add New') }}
    </a>

</div>
<!--/end controls-->

<table class="ui table very compact celled">
    <thead>
    <tr>
        <th style="width: 100px"></th>
        <th>{{ helper.at('No') }}</th>
        <th>{{ helper.at('Office') }}</th>
        <th>{{ helper.at('Survey') }}</th>
        <th>{{ helper.at('End Date') }}</th>
        <!--<th>{{ helper.at('Status') }}</th>-->
    </tr>
    </thead>
    <tbody>
    {% for discovery_survey in entries %}
        <tr>
            {% set url = url.get() ~ 'clinic-admin/discovery-survey/edit/' ~ discovery_survey.id %}
            <td><a href="{{ url }}" class="mini ui icon button"><i class="pencil icon"></i></a></td>
            <td>{{ discovery_survey.Survey.No }}</td>
            <td>{{ discovery_survey.Office.Name }}</td>
            <td>{{ discovery_survey.Survey.Description }}</td>
            <td>{{ discovery_survey.enddate }}</td>
           <!-- <td>{{ discovery_survey.status }}</td>-->
        </tr>
    {% endfor %}
    </tbody>
</table>