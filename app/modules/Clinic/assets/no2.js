function jump(str){
  array = str.split("_");
  $('#wizard').smartWizard('goToStep',array[1]);
}
$.fn.editable.defaults.mode = 'inline';
//step 1 2.1
$('#no2_1_1').editable({
  type: 'text',
  title: ' ',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
}).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_1_1:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_1_2_1').editable({
  type: 'text',
  title: ' ',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
}).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_1_2_1:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});

$('#no2_1_2_2').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_1_2_2:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});

$('#no2_1_3_1').editable({
  type: 'text',
  title: ' ',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
  }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_1_3_1:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});

$('#no2_1_3_2').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_1_3_2:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_1_4_1').editable({
  type: 'text',
  title: ' ',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
  }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_1_4_1:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_1_4_2').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_1_4_2:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_1_5_1').editable({
  type: 'text',
  title: ' ',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
  }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_1_5_1:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {
      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_1_5_2').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_1_5_2:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_1_5_3').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_1_5_3:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_1_6').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_1_6:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
//step 2 2.2
$('#no2_2_1').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_2_1:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_2_2').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_2_2:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});

//step 2 2.3
$('#no2_3_1').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_3_1:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_3_2').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_3_2:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_3_3').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_3_3:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_3_4').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_3_4:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_3_5').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_3_5:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_3_6').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_3_6:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_3_7').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_3_7:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});

//step 3 2.4
$('#no2_4_1').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_4_1:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_4_2').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_4_2:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_4_3').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_4_3:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_4_4').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_4_4:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {

      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});

//step 4 2.5
$('#no2_5_1').editable({
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
}).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_5_1:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {
        Cal2();
      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_5_2').editable({
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
  }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_5_2:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {
        Cal2();
      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_5_3').editable({
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
  }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_5_3:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {
        Cal2();
      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_5_4').editable({
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
  }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_5_4:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {
        Cal2();
      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_5_5').editable({
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
  }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_5_5:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {
        Cal2();
      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_5_6').editable({
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
  }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_5_6:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {
        Cal2();
      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no2_5_7').editable({
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
  }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_5_7:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {
        Cal2();
      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});

$("#btnFinish").on('click', function(){
  $("#btnFinishStatus").addClass("glyphicon glyphicon-refresh glyphicon-refresh-animate");
  $.ajax({
      url : "/clinic/form/no1",
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
          '        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>' +
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

function Cal2(){
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
