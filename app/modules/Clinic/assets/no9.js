function jump(str){
  array = str.split("_");
  $('#wizard').smartWizard('goToStep',array[1]);
}
$.fn.editable.defaults.mode = 'inline';
//step 1 9.1
$('#no9_1').on('blur', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_1:this.value,
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
//step 1 9.2
$('#no9_2').on('blur', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_2:this.value,
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
//step 2 9.3
$('#no9_3_1_1').editable({
       type: 'text',
       title: ' '
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_3_1_1:params.newValue,
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

$('#no9_3_1_2').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_3_1_2:params.newValue,
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
$('#no9_3_1_3').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_3_1_3:params.newValue,
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
$('#no9_3_2_1').editable({
       type: 'text',
       title: ' '
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_3_2_1:params.newValue,
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

$('#no9_3_2_2').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_3_2_2:params.newValue,
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
$('#no9_3_2_3').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_3_2_3:params.newValue,
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
$('#no9_3_3_1').editable({
       type: 'text',
       title: ' '
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_3_3_1:params.newValue,
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

$('#no9_3_3_2').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_3_3_2:params.newValue,
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
$('#no9_3_3_3').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_3_3_3:params.newValue,
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
$('#no9_3_4_1').editable({
       type: 'text',
       title: ' '
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_3_4_1:params.newValue,
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

$('#no9_3_4_2').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_3_4_2:params.newValue,
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
$('#no9_3_4_3').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_3_4_3:params.newValue,
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
$('#no9_3_5_1').editable({
       type: 'text',
       title: ' '
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_3_5_1:params.newValue,
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

$('#no9_3_5_2').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_3_5_2:params.newValue,
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
$('#no9_3_5_3').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_3_5_3:params.newValue,
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
//step 3 9.4
$('#no9_4_1').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
       }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_4_1:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {
        Cal();
      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});

$('#no9_4_2').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
       }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_4_2:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {
        Cal();
      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});

$('#no9_4_3').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
       }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_4_3:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {
        Cal();
      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
$('#no9_4_4').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
       }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_4_4:params.newValue,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {
        Cal();
      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
});
//step 4 9.5
$('#no9_5_1').on('blur', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_5_1:this.value,
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

$('#no9_5_2').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_5_2:params.newValue,
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

$('#no9_5_3').editable({
       type: 'text',
       title: ' ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_5_3:params.newValue,
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

//step 9.6
$('#no9_6').on('blur', function(e, params) {
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_6:this.value,
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
