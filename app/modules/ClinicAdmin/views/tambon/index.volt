<!--controls-->
<div class="ui segment">

    <a href="{{ url.get() }}clinic-admin/tambon/add" class="ui button positive">
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
            <td colspan="2">{{amphur.getName()}}</td>
            {% for tambon in amphur.Tambon %}
        </tr>
            {% set url = url.get() ~ 'clinic-admin/tambon/edit/' ~ tambon.getId() %}
            <td><a href="{{ url }}" class="mini ui icon button"><i class="pencil icon"></i></a></td>
            <td>{{ tambon.getName() }}</td>
            {% endfor %}
        </tr>
    {% endfor %}
    </tbody>
</table>