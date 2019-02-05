
<div class="right_col" role="main">
    <form id="report" method="post">

<div class="form-group">
    <label for="years">ครั้งที่สำรวจ/ปี</label>
    {{ select("years", years, 'using': ['id', 'no'] ,'data-placeholder':'เลือกปีสำรวจ','class':"form-control col-md-4 col-xs-12") }}                                            
    <small id="yearsHelp" class="form-text text-muted">ข้อมูลปีตั้งต้น(ครั้งเก่ากว่า)</small>
</div>
  <div class="form-group">
    <label for="years2">ครั้งที่สำรวจ/ปี</label>
    {{ select("years2", years, 'using': ['id', 'no'] ,'data-placeholder':'เลือกปีสำรวจ','class':"form-control col-md-4 col-xs-12") }}                                            
     <small id="years2Help" class="form-text text-muted">ข้อมูลปีเปรียบเทียบ(ครั้งนี้)</small>
  </div>
  <div class="form-group">
    {{ select("groupSession", groupSession,  'emptyText': 'Please Select...', 'using': ['id', 'name'] ,'class':"form-control col-md-4 col-xs-12") }}
    <label class="form-check-label" for="exampleCheck1">การสำรวจข้อมูลพื้นฐาน</label>
</div>
   <input id="send" type="button" value=">>สร้าง Excel<<" class="btn btn-success">

       
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
    $("#years2").select2({
        allowClear: true});
    $("#groupSession").select2();
    $("#send").on("click", function(e){
        e.preventDefault();
        $('#report').attr('action', "/clinic-admin/print-report/no"+$('#groupSession').val()+"/"+$('#years').val()+"/"+$('#years2').val()).submit();
});
});
</script>
