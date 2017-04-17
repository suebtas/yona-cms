<!--controls-->
<div class="ui segment">

    <a href="{{ url.get() }}clinic-admin/tambon/add" class="ui button positive">
        <i class="icon plus"></i> {{ helper.at('Add New') }}
    </a>

</div>
<!--/end controls-->

<table class="ui table very compact celled" id="table">
    <thead>
    <tr>
        <th style="width: 100px"></th>
        <th>{{ helper.at('Name') }}</th>
        <th>{{ helper.at('Amphur') }}</th>
    </tr>
    </thead>
    <tbody>
    {% for tambon in entries %}
        <tr>
            {% set url = url.get() ~ 'clinic-admin/tambon/edit/' ~ tambon.getId() %}
            <td><a href="{{ url }}" class="mini ui icon button"><i class="pencil icon"></i></a></td>
            <td>{{ tambon.getName() }}</td>
            <td>{% if tambon.amphurid %} {{ tambon.Amphur.getName() }} {% else %} พื้นที่ติดจังหวัดระยอง {% endif %}</td>            
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
            { "visible": false, "targets": 2 }
        ],

        "order": [[ 2, 'asc' ]],
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(2, {page:'current'} ).data().each( function ( group, i ) {
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