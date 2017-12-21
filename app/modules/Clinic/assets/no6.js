function jump(str){
  array = str.split("_");
  $('#wizard').smartWizard('goToStep',array[1]);
}
$(document).ready(function() {
  //paramitor (name,path,type,display)
    //editable
    Process('no6_1','no6','editable',true,'');
    Process('no6_2','no6','editable',true,'');
    Process('no6_3','no6','editable',true,'');
    Process('no6_4','no6','editable',true,'');
    Process('no6_5','no6','editable',true,'');
    Process('no6_6','no6','editable',true,'');
    Process('no6_7','no6','editable',true,'');
    Process('no6_8','no6','editable',true,'');
    Process('no6_9','no6','editable',true,'');
    Process('signing_surveyor','no6','editable',false,'');
    Process('surveyor_phone','no6','editable',false,'');


    $("#btnFinish").on('click', function(){
      $("#btnFinishStatus").addClass("glyphicon glyphicon-refresh glyphicon-refresh-animate");
      $.ajax({
          url : "/clinic/form/no6",
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
