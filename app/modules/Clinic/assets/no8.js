function jump(str){
  array = str.split("_");
  $('#wizard').smartWizard('goToStep',array[1]);
}
$(document).ready(function() {

    //paramitor (name,path,type,display)
    //editable
    Process('no8_1_1_1','no8','editable',true,'');
    Process('no8_1_1_2','no8','editable',true,'');
    Process('no8_1_2','no8','editable',true,'');
    Process('no8_1_3','no8','editable',true,'');
    Process('no8_1_4','no8','editable',true,'');
    Process('no8_5_1','no8','editable',true,'');
    Process('no8_5_2_1','no8','editable',true,'');
    Process('no8_5_3','no8','editable',true,'');
    Process('no8_5_4','no8','editable',true,'');
    Process('no8_6_1','no8','editable',true,'');
    Process('no8_6_2_2','no8','editable',true,'');
    Process('no8_6_3','no8','editable',true,'');
    Process('no8_6_4','no8','editable',true,'');
    Process('no8_7_1','no8','editable',true,'');
    Process('no8_7_2','no8','editable',true,'');
    Process('no8_7_3','no8','editable',true,'');
    Process('no8_7_5','no8','editable',true,'');
    Process('no8_7_6','no8','editable',true,'');
    Process('no8_7_13_1','no8','editable',true,'');
    Process('no8_7_14','no8','editable',true,'');
    Process('no8_7_15','no8','editable',true,'');
    Process('no8_7_16','no8','editable',true,'');
    Process('no8_7_17_1_2','no8','editable',true,'');
    Process('no8_7_17_2_2','no8','editable',true,'');
    Process('no8_7_19','no8','editable',true,'');
    Process('no8_7_20','no8','editable',true,'');
    Process('signing_surveyor','no8','editable',false,'');
    Process('surveyor_phone','no8','editable',false,'');

    //input blur
    Process('no8_2_1_1','no8','blur',true,'');
    Process('no8_2_1_2','no8','blur',true,'');
    Process('no8_2_1_3','no8','blur',true,'');
    Process('no8_2_2_1','no8','blur',true,'');
    Process('no8_2_2_2','no8','blur',true,'');
    Process('no8_2_2_3','no8','blur',true,'');
    Process('no8_2_3_1','no8','blur',true,'');
    Process('no8_2_3_2','no8','blur',true,'');
    Process('no8_2_3_3','no8','blur',true,'');
    Process('no8_4','no8','blur',true,'');
    Process('no8_4_1','no8','blur',true,'');
    Process('no8_4_2','no8','blur',true,'');
    Process('no8_4_3','no8','blur',true,'');
    Process('no8_4_4','no8','blur',true,'');
    Process('no8_4_5','no8','blur',true,'');
    Process('no8_4_6','no8','blur',true,'');
    Process('no8_4_7','no8','blur',true,'');
    Process('no8_4_8','no8','blur',true,'');
    Process('no8_4_9','no8','blur',true,'');
    Process('no8_4_10','no8','blur',true,'');
    Process('no8_4_11','no8','blur',true,'');
    Process('no8_4_12','no8','blur',true,'');
    Process('no8_4_13','no8','blur',true,'');
    Process('no8_4_14','no8','blur',true,'');
    Process('no8_4_15','no8','blur',true,'');
    Process('no8_4_16','no8','blur',true,'');
    Process('no8_4_17','no8','blur',true,'');
    Process('no8_4_18','no8','blur',true,'');
    Process('no8_4_19','no8','blur',true,'');
    Process('no8_4_20','no8','blur',true,'');
    Process('no8_4_21','no8','blur',true,'');
    Process('no8_4_22','no8','blur',true,'');
    Process('no8_4_23','no8','blur',true,'');
    Process('no8_4_24','no8','blur',true,'');
    Process('no8_4_25','no8','blur',true,'');
    Process('no8_4_26','no8','blur',true,'');
    Process('no8_4_27','no8','blur',true,'');
    Process('no8_4_28','no8','blur',true,'');
    Process('no8_4_29','no8','blur',true,'');
    Process('no8_4_30','no8','blur',true,'');

    Process('no8_5_2_2','no8','blur',true,'');
    Process('no8_5_2_3','no8','blur',true,'');
    Process('no8_6_2_1','no8','blur',true,'');
    Process('no8_7_4','no8','blur',true,'');
    Process('no8_7_7','no8','blur',true,'');
    Process('no8_7_8','no8','blur',true,'');
    Process('no8_7_9','no8','blur',true,'');
    Process('no8_7_10','no8','blur',true,'');
    Process('no8_7_11','no8','blur',true,'');
    Process('no8_7_12_1','no8','blur',true,'');
    Process('no8_7_12_2','no8','blur',true,'');
    Process('no8_7_13_2','no8','blur',true,'');
    Process('no8_7_17_1_1','no8','blur',true,'');
    Process('no8_7_17_2_1','no8','blur',true,'');
    Process('no8_7_18','no8','blur',true,'');

    $("#btnFinish").on('click', function(){
      obj = $('#signing_surveyor').editable('getValue');
      if(obj.signing_surveyor=="") {
            alert( 'โปรดกำหนด ชื่อผู้บันทึกข้อมูล');
            return false;
      }
      $("#btnFinishStatus").addClass("glyphicon glyphicon-refresh glyphicon-refresh-animate");
      $.ajax({
          url : "/clinic/form/no8",
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
