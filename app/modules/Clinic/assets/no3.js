function jump(str){
  array = str.split("_");
  $('#wizard').smartWizard('goToStep',array[1]);
}
$(document).ready(function() {
  //paramitor (name,path,type,display)
    //editable
    Process('no3_1','no3','editable',true,'');
    Process('no3_2_1','no3','editable',true,'');
    Process('no3_2_2','no3','editable',true,'');
    Process('no3_2_3','no3','editable',true,'');
    Process('no3_2_4','no3','editable',true,'');
    Process('no3_2_5','no3','editable',true,'');
    Process('no3_2_6','no3','editable',true,'');
    Process('no3_3_1','no3','editable',true,'');
    Process('no3_3_2','no3','editable',true,'');
    Process('no3_3_3','no3','editable',true,'');
    Process('no3_4_1','no3','editable',true,'');
    Process('no3_4_2','no3','editable',true,'');
    Process('no3_4_3','no3','editable',true,'');
    Process('no3_4_4','no3','editable',true,'');
    Process('no3_4_5','no3','editable',true,'');
    Process('no3_4_6','no3','editable',true,'');
    Process('no3_5_1','no3','editable',true,'');
    Process('no3_5_2','no3','editable',true,'');
    Process('no3_6_1','no3','editable',true,'');
    Process('no3_6_2','no3','editable',true,'');
    Process('no3_6_3','no3','editable',true,'');
    Process('signing_surveyor','no1','editable',true,'');
    Process('surveyor_phone','no1','editable',true,'');


$("#btnFinish").on('click', function(){
  $("#btnFinishStatus").addClass("glyphicon glyphicon-refresh glyphicon-refresh-animate");
  $.ajax({
      url : "/clinic/form/no3",
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
