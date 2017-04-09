<!--controls-->
<div class="ui segment">

    <a href="{{ url.get() }}clinic-admin/admin-user/add" class="ui button positive">
        <i class="icon plus"></i> {{ helper.at('Add New') }}
    </a>

</div>
<!--/end controls-->

<table class="ui table very compact celled" id="table">
    <thead>
    <tr>
        <th style="width: 100px"></th>
        <th>{{ helper.at('Login') }}</th>
        <th>{{ helper.at('Email') }}</th>
        <th>{{ helper.at('Name') }}</th>
        <th>{{ helper.at('Role') }}</th>
        <th>{{ helper.at('Active') }}</th>
    </tr>
    </thead>
    <tbody>
    {% for user in entries %}
        <tr>
            {% set url = url.get() ~ 'clinic-admin/admin-user/edit/' ~ user.getId() %}
            <td><a href="{{ url }}" class="mini ui icon button"><i class="pencil icon"></i></a></td>
            <td><a href="{{ url }}">{{ user.getLogin() }}</a></td>
            <td>{{ user.getEmail() }}</td>
            <td>{{ user.getName() }}</td>
            <td>{{ user.getRoleTitle() }}</td>
            <td>{% if user.getActive() %}<i class="icon checkmark green"></i>{% endif %}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>


<!-- Datatables -->
<script src="{{ url.path() }}clinic/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ url.path() }}clinic/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
$("table").dataTable(
    {
        "columnDefs": [
            { "visible": false, "targets": 4 }
        ],

        "order": [[ 4, 'asc' ]],
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(4, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    }
);
</script>