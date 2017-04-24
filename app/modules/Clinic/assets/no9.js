function jump(str){
  array = str.split("_");
  $('#wizard').smartWizard('goToStep',array[1]);
}
$(document).ready(function() {
    //paramitor (name,path,type,display)
    //editable
    Process('no9_3_1_1','no9','editable',false,'');
    Process('no9_3_1_2','no9','editable',true,'');
    Process('no9_3_1_3','no9','editable',true,'');
    Process('no9_3_2_1','no9','editable',false,'');
    Process('no9_3_2_2','no9','editable',true,'');
    Process('no9_3_2_3','no9','editable',true,'');
    Process('no9_3_3_1','no9','editable',false,'');
    Process('no9_3_3_2','no9','editable',true,'');
    Process('no9_3_3_3','no9','editable',true,'');
    Process('no9_3_4_1','no9','editable',false,'');
    Process('no9_3_4_2','no9','editable',true,'');
    Process('no9_3_4_3','no9','editable',true,'');
    Process('no9_3_5_1','no9','editable',false,'');
    Process('no9_3_5_2','no9','editable',true,'');
    Process('no9_3_5_3','no9','editable',true,'');
    Process('no9_4_1','no9','editable',true,'Cal');
    Process('no9_4_2','no9','editable',true,'Cal');
    Process('no9_4_3','no9','editable',true,'Cal');
    Process('no9_4_4','no9','editable',true,'Cal');
    Process('no9_5_2','no9','editable',true,'');
    Process('no9_5_3','no9','editable',true,'');
    Process('signing_surveyor','no1','editable',true,'');
    Process('surveyor_phone','no1','editable',true,'');
    //input blur
    Process('no9_1','no9','blur',true,'');
    Process('no9_2','no9','blur',true,'');
    Process('no9_5_1','no9','blur',true,'');
    Process('no9_6','no9','blur',true,'');

function Cal(){
  var id1 = $('#no9_4_1').text();
  if(id1==''||id1=='Empty')
    id1=0;
  var id2 = $('#no9_4_2').text();
  if(id2==''||id2=='Empty')
    id2=0;
  var id3 = $('#no9_4_3').text();
  if(id3==''||id3=='Empty')
    id3=0;
  var id4 = $('#no9_4_4').text();
  if(id4==''||id4=='Empty')
    id4=0;
    if(!id1) id1="0";
    if(!id2) id2="0";
    if(!id3) id3="0";
    if(!id4) id4="0";
    var id1 = id1.replace(/,/g,"");
    var id2 = id2.replace(/,/g,"");
    var id3 = id3.replace(/,/g,"");
    var id4 = id4.replace(/,/g,"");
  var sumall = parseFloat(id1) + parseFloat(id2) + parseFloat(id3) + parseFloat(id4);
    sumall = parseFloat(Math.round(sumall * 100) / 100).toFixed(2);
  var sumall = sumall.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
  $('#no9_4_5').html(sumall);

  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_4_5:sumall,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {
          //data - response from server
      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
}
Cal();


$("#btnFinish").on('click', function(){

  $("#btnFinishStatus").addClass("glyphicon glyphicon-refresh glyphicon-refresh-animate");
  $.ajax({
      url : "/clinic/form/no9",
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
