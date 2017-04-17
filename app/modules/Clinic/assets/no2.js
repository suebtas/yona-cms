function jump(str){
  array = str.split("_");
  $('#wizard').smartWizard('goToStep',array[1]);
}

$(document).ready(function() {
//paramitor (name,path,type,display)
    //editable
    Process('no2_1_1','no2','editable',true);
    Process('no2_1_2_1','no2','editable',true);
    Process('no2_1_2_2','no2','editable',true);
    Process('no2_1_3_1','no2','editable',true);
    Process('no2_1_3_2','no2','editable',true);
    Process('no2_1_4_1','no2','editable',true);
    Process('no2_1_4_2','no2','editable',true);
    Process('no2_1_5_1','no2','editable',true);
    Process('no2_1_5_2','no2','editable',true);
    Process('no2_1_5_3','no2','editable',true);
    Process('no2_1_6','no2','editable',true);

    Process('no2_2_1','no2','editable',true);
    Process('no2_2_2','no2','editable',true);

    Process('no2_3_1','no2','editable',true);
    Process('no2_3_2','no2','editable',true);
    Process('no2_3_3','no2','editable',true);
    Process('no2_3_4','no2','editable',true);
    Process('no2_3_5','no2','editable',true);
    Process('no2_3_6','no2','editable',true);
    Process('no2_3_7','no2','editable',true);

    Process('no2_4_1','no2','editable',true);
    Process('no2_4_2','no2','editable',true);
    Process('no2_4_3','no2','editable',true);
    Process('no2_4_4','no2','editable',true);

    Process('no2_5_1','no2','editable',true);
    Process('no2_5_2','no2','editable',true);
    Process('no2_5_3','no2','editable',true);
    Process('no2_5_4','no2','editable',true);
    Process('no2_5_5','no2','editable',true);
    Process('no2_5_6','no2','editable',true);
    Process('no2_5_7','no2','editable',true);
    Process('signing_surveyor','no1','editable',true);
    Process('surveyor_phone','no1','editable',true);

    function Process(name,path,type,display){
        //editable
        if(type == 'editable'){
        $.fn.editable.defaults.mode = 'inline';
        $('#'+name).editable({
               type: 'text',
               title: '',
               display: function(value) {
                 if(display == true)
                 $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                 else
                 $(this).text(value);
               },
             }).on('save', function(e, params) {
               //property key for insert or update
               dataStringAdd={};
               dataStringAdd[name]=params.newValue;
               dataStringAdd['option']='add';

                //property key for delete
               dataStringDelete={};
               dataStringDelete[name]='delete';
               dataStringDelete['option']='delete';
            if(params.newValue!=''){
            $.ajax({
                url : "/clinic/form/" + path,
                type: "POST",
                data : dataStringAdd,
                success: function(data, textStatus, jqXHR)
                {
                    if(name == 'no2_5_1' || name == 'no2_5_2' || name == 'no2_5_3' || name == 'no2_5_4' || name == 'no2_5_5' || name == 'no2_5_6' || name == 'no2_5_7')
                    CalAllArea();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {

                }
            });
          }else if(params.newValue==''){
            $.ajax({
                url : "/clinic/form/" + path,
                type: "POST",
                data : dataStringDelete,
                success: function(data, textStatus, jqXHR)
                {
                },
                error: function (jqXHR, textStatus, errorThrown)
                {

                }
            });
          }
        });
      }

    }

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

function CalAllArea(){
  var i1 = $('#no2_5_1').text();
  if(i1==''||i1=='Empty')
    i1=0;
  var i2 = $('#no2_5_2').text();
  if(i2==''||i2=='Empty')
    i2=0;
  var i3 = $('#no2_5_3').text();
  if(i3==''||i3=='Empty')
    i3=0;
  var i4 = $('#no2_5_4').text();
  if(i4==''||i4=='Empty')
    i4=0;
  var i5 = $('#no2_5_5').text();
  if(i5==''||i5=='Empty')
    i5=0;
  var i6 = $('#no2_5_6').text();
  if(i6==''||i6=='Empty')
    i6=0;
  var i7 = $('#no2_5_7').text();

  if(i7==''||i7=='Empty')
    i7=0;

  if(!i1) i1="0";
  if(!i2) i2="0";
  if(!i3) i3="0";
  if(!i4) i4="0";
  if(!i5) i5="0";
  if(!i6) i6="0";
  if(!i7) i7="0";
  var rei1 = i1.replace(/,/g,"");
  var rei2 = i2.replace(/,/g,"");
  var rei3 = i3.replace(/,/g,"");
  var rei4 = i4.replace(/,/g,"");
  var rei5 = i5.replace(/,/g,"");
  var rei6 = i6.replace(/,/g,"");
  var rei7 = i7.replace(/,/g,"");
  var sumd = parseFloat(rei1) + parseFloat(rei2) + parseFloat(rei3) + parseFloat(rei4) +parseFloat(rei5) + parseFloat(rei6) + parseFloat(rei7);
    sumd = parseFloat(Math.round(sumd * 100) / 100).toFixed(2);
  var sums = sumd.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
  $('#no2_5_8').html(sums);

  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_5_8:sums,
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
