function jump(str){
  array = str.split("_");
  $('#wizard').smartWizard('goToStep',array[1]);
}
$.fn.editable.defaults.mode = 'inline';
//step 1 2.1
$('#no2_1_2_1').editable({
       type: 'text',
       title: ' ',
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
        Cal1();
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
        Cal1();
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
        Cal1();
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
        Cal1();
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
       type: 'text',
       title: ' ',
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
       type: 'text',
       title: ' ',
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
       type: 'text',
       title: ' ',
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
       type: 'text',
       title: ' ',
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
       type: 'text',
       title: ' ',
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
       type: 'text',
       title: ' ',
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
       type: 'text',
       title: ' ',
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

function Cal1(){
  var id1 = $('#no2_1_2_1').text();
  if(id1==''||id1=='Empty')
    id1=0;
  var id2 = $('#no2_1_3_1').text();
  if(id2==''||id2=='Empty')
    id2=0;
  var id3 = $('#no2_1_4_1').text();
  if(id3==''||id3=='Empty')
    id3=0;
  var id4 = $('#no2_1_5_1').text();
  if(id4==''||id4=='Empty')
    id4=0;
<<<<<<< HEAD

  if(!id1) id1="0";
  if(!id2) id2="0";
  if(!id3) id3="0";
  if(!id4) id4="0";
  var reic1 = id1.replace(/,/g,"");
  var reic2 = id2.replace(/,/g,"");
  var reic3 = id3.replace(/,/g,"");
  var reic4 = id4.replace(/,/g,"");
  var sumall = parseFloat(reic1) + parseFloat(reic2) + parseFloat(reic3) + parseFloat(reic4);
  var sumall = sumall.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
=======
  var sumall = parseFloat(id1) + parseFloat(id2) + parseFloat(id3) + parseFloat(id4);
  sumall = sumall.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
>>>>>>> origin/clinic-center
  $('#no2_1_1').html(sumall);

  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_1_1:sumall,
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
  var sums = parseFloat(rei1) + parseFloat(rei2) + parseFloat(rei3) + parseFloat(rei4) +parseFloat(rei5) + parseFloat(rei6) + parseFloat(rei7);

  var sums = sums.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
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
