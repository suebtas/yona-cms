function jump(str){
  array = str.split("_");
  $('#wizard').smartWizard('goToStep',array[1]);
}
$(document).ready(function() {
//paramitor (name,path,type,display)
    //editable
    Process('no2_1_1','no2','editable',true,'');
    Process('no2_1_2_1','no2','editable',true,'');
    Process('no2_1_2_2','no2','editable',true,'');
    Process('no2_1_3_1','no2','editable',true,'');
    Process('no2_1_3_2','no2','editable',true,'');
    Process('no2_1_4_1','no2','editable',true,'');
    Process('no2_1_4_2','no2','editable',true,'');
    Process('no2_1_5_1','no2','editable',true,'');
    Process('no2_1_5_2','no2','editable',true,'');
    Process('no2_1_5_3','no2','editable',true,'');
    Process('no2_1_6','no2','editable',true,'');

    Process('no2_2_1','no2','editable',true,'');
    Process('no2_2_2','no2','editable',true,'');

    Process('no2_3_1','no2','editable',true,'');
    Process('no2_3_2','no2','editable',true,'');
    Process('no2_3_3','no2','editable',true,'');
    Process('no2_3_4','no2','editable',true,'');
    Process('no2_3_5','no2','editable',true,'');
    Process('no2_3_6','no2','editable',true,'');
    Process('no2_3_7','no2','editable',true,'');
    Process('no2_3_8','no2','editable',true,'');

    Process('no2_4_1','no2','editable',true,'');
    Process('no2_4_2','no2','editable',true,'');
    Process('no2_4_3','no2','editable',true,'');
    Process('no2_4_4','no2','editable',true,'');

    Process('no2_5_1','no2','editable',true,'CalAllArea');
    Process('no2_5_2','no2','editable',true,'CalAllArea');
    Process('no2_5_3','no2','editable',true,'CalAllArea');
    Process('no2_5_4','no2','editable',true,'CalAllArea');
    Process('no2_5_5','no2','editable',true,'CalAllArea');
    Process('no2_5_6','no2','editable',true,'CalAllArea');
    Process('no2_5_7','no2','editable',true,'CalAllArea');
    Process('signing_surveyor','no1','editable',true,'');
    Process('surveyor_phone','no1','editable',true,'');

$("#btnFinish").on('click', function(){
  $("#btnFinishStatus").addClass("glyphicon glyphicon-refresh glyphicon-refresh-animate");
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no1_finish: 'finish',
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {
          //data - response from server
          $("#btnFinishStatus").removeClass("glyphicon glyphicon-refresh glyphicon-refresh-animate");
          $("#btnFinishStatus").addClass("glyphicon glyphicon-ok green");

          var popupTemplate =
          '<div class="modal fade">' +
          '  <div class="modal-dialog">' +
          '    <div class="modal-content">' +
          '      <div class="modal-header">' +
          '        <button type="button" class="close" data-dismiss="modal">&times;</button>' +
          '        <h4 class="modal-title">ยืนยันข้อมูล</h4>' +
          '      </div>' +
          '      <div class="modal-body" >ยืนยันข้อมูลสำเร็จ</div>' +
          '      <div class="modal-footer">' +
          '        <button type="button" onclick="location.reload();" class="btn btn-primary" data-dismiss="modal">Ok</button>' +
          '      </div>' +
          '    </div>' +
          '  </div>' +
          '</div>';

          $(popupTemplate).modal();
      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      },

  });
});
});
