
<div class="right_col" role="main">
    <form id="report" method="post">
        <table class="ui table very compact celled">
            <thead>
                <tr>
                    <th>ปีสำรวจ</th>
                    <th>แบบสำรวจ</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{ select("years", years, 'using': ['id', 'no'] ,'data-placeholder':'เลือกปีสำรวจ','class':"form-control col-md-4 col-xs-12") }}                                            
                    </td>
                    <td>
                        {{ select("groupSession", groupSession,  'emptyText': 'Please Select...', 'using': ['id', 'name'] ,'class':"form-control col-md-4 col-xs-12") }}                        
                    </td>
                    <td>
                       <input id="send" type="button" value=">>สร้าง Excel<<" class="btn btn-success">
                    </td>
                </tr>
        </table>
    </form>
</div>

<!-- jQuery -->
<script src="{{ url.path() }}clinic/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ url.path() }}clinic/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{ url.path() }}clinic/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="{{ url.path() }}clinic/vendors/nprogress/nprogress.js"></script>
<!-- Custom Theme Scripts -->
<!-- <script src="../build/js/custom.min.js"></script> -->
<script src="{{ url.path() }}clinic/vendors/select2/dist/js/select2.full.min.js"></script>

{{ assets.outputJs('modules-clinic-js') }}
<script>
$(document).ready(function() {
    $("#years").select2({
        allowClear: true});
    $("#groupSession").select2();
    $("#send").on("click", function(e){
        e.preventDefault();
        $('#report').attr('action', "/clinic-admin/print-report/no"+$('#groupSession').val()+"/"+$('#years').val()).submit();
});
});
</script>
