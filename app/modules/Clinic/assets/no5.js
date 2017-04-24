function jump(str){
  array = str.split("_");
  $('#wizard').smartWizard('goToStep',array[1]);
}
$(document).ready(function() {
    //paramitor (name,path,type,display)
    //editable
    Process('no5_1_1_1','no5','editable',true,'');
    Process('no5_1_1_2','no5','editable',true,'');
    Process('no5_1_2_1','no5','editable',true,'');
    Process('no5_1_2_2','no5','editable',true,'');
    Process('no5_1_3_1','no5','editable',true,'');
    Process('no5_1_3_2','no5','editable',true,'');
    Process('no5_1_4_1','no5','editable',true,'');
    Process('no5_1_4_2','no5','editable',true,'');
    Process('no5_2','no5','editable',true,'');
    Process('no5_3_1','no5','editable',true,'');
    Process('no5_3_2','no5','editable',true,'');
    Process('no5_3_3','no5','editable',true,'');
    Process('no5_3_4','no5','editable',true,'');
    Process('no5_3_5','no5','editable',true,'');
    Process('no5_3_6','no5','editable',true,'');
    Process('no5_3_7','no5','editable',true,'');
    Process('no5_3_8','no5','editable',true,'');
    Process('no5_3_9','no5','editable',true,'');
    Process('no5_3_1_1','no5','editable',true,'');
    Process('no5_3_1_2','no5','editable',true,'');
    Process('no5_3_1_3','no5','editable',true,'');
    Process('no5_3_1_4','no5','editable',true,'');
    Process('no5_3_1_5','no5','editable',true,'');
    Process('no5_3_1_6','no5','editable',true,'');
    Process('no5_3_1_7','no5','editable',true,'');
    Process('no5_3_1_8','no5','editable',true,'');
    Process('no5_3_1_9','no5','editable',true,'');
    Process('no5_3_1_10','no5','editable',true,'');
    Process('no5_3_2_1','no5','editable',true,'');
    Process('no5_3_2_2','no5','editable',true,'');
    Process('no5_3_2_3','no5','editable',true,'');
    Process('no5_3_2_4','no5','editable',true,'');
    Process('no5_3_2_5','no5','editable',true,'');
    Process('no5_3_2_6','no5','editable',true,'');
    Process('no5_3_2_7','no5','editable',true,'');
    Process('no5_3_2_8','no5','editable',true,'');
    Process('no5_3_2_9','no5','editable',true,'');
    Process('no5_3_2_10','no5','editable',true,'');
    Process('no5_3_3_1','no5','editable',true,'');
    Process('no5_3_3_2','no5','editable',true,'');
    Process('no5_3_3_3','no5','editable',true,'');
    Process('no5_3_3_4','no5','editable',true,'');
    Process('no5_3_3_5','no5','editable',true,'');
    Process('no5_3_3_6','no5','editable',true,'');
    Process('no5_3_3_7','no5','editable',true,'');
    Process('no5_3_3_8','no5','editable',true,'');
    Process('no5_3_3_9','no5','editable',true,'');
    Process('no5_3_3_10','no5','editable',true,'');
    Process('no5_3_4_1','no5','editable',true,'');
    Process('no5_3_4_2','no5','editable',true,'');
    Process('no5_3_4_3','no5','editable',true,'');
    Process('no5_3_4_4','no5','editable',true,'');
    Process('no5_3_4_5','no5','editable',true,'');
    Process('no5_3_4_6','no5','editable',true,'');
    Process('no5_3_4_7','no5','editable',true,'');
    Process('no5_3_4_8','no5','editable',true,'');
    Process('no5_3_4_9','no5','editable',true,'');
    Process('no5_3_4_10','no5','editable',true,'');
    Process('no5_3_10_1','no5','editable',true,'');
    Process('no5_3_10_2','no5','editable',true,'');
    Process('no5_4_1_1','no5','editable',true,'');
    Process('no5_4_1_2','no5','editable',true,'');
    Process('no5_4_1_3','no5','editable',true,'');
    Process('no5_4_2_1','no5','editable',true,'');
    Process('no5_4_2_2','no5','editable',true,'');
    Process('no5_4_2_3','no5','editable',true,'');
    Process('no5_4_3_1','no5','editable',true,'');
    Process('no5_4_3_2','no5','editable',true,'');
    Process('no5_4_3_3','no5','editable',true,'');
    Process('no5_4_4','no5','editable',true,'');
    Process('no5_5_1_1','no5','editable',true,'');
    Process('no5_5_1_2','no5','editable',true,'');
    Process('no5_5_2_1','no5','editable',true,'');
    Process('no5_5_2_2','no5','editable',true,'');
    Process('signing_surveyor','no5','editable',true,'');
    Process('surveyor_phone','no5','editable',true,'');

    //input blur
    Process('no5_6_1','no5','blur',true,'');
    Process('no5_6_2','no5','blur',true,'');
    Process('no5_6_3','no5','blur',true,'');
    Process('no5_6_4','no5','blur',true,'');
    Process('no5_6_5','no5','blur',true,'');

    $("#btnFinish").on('click', function(){
      $("#btnFinishStatus").addClass("glyphicon glyphicon-refresh glyphicon-refresh-animate");
      $.ajax({
          url : "/clinic/form/no5",
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
