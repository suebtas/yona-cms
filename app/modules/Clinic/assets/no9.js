$.fn.editable.defaults.mode = 'inline';
//step 1 9.1 - 9.2
$('#no9_1').editable({
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
        no9_1:params.newValue,
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
$('#no9_2').editable({
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
        no9_2:params.newValue,
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
$('#no9_3_1').editable({
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
        no9_3_1:params.newValue,
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
$('#no9_3_2').editable({
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
        no9_3_2:params.newValue,
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
        cal();
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
        cal();
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
        cal();
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
        cal();
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

function cal(){
  var no9_4_1 = $('#no9_4_1').text();
  if(no9_4_1==''||no9_4_1=='Empty')
    no9_4_1=0;
  var no9_4_2 = $('#no9_4_2').text();
  if(no9_4_2==''||no9_4_2=='Empty')
    no9_4_2=0;
  var no9_4_3 = $('#no9_4_3').text();
  if(no9_4_3==''||no9_4_3=='Empty')
    no9_4_3=0;
  var no9_4_4 = $('#no9_4_4').text();
  if(no9_4_4==''||no9_4_4=='Empty')
    no9_4_4=0;
  var reic1 = no9_4_1.replace(/,/g,"");
  var reic2 = no9_4_2.replace(/,/g,"");
  var reic3 = no9_4_3.replace(/,/g,"");
  var reic4 = no9_4_4.replace(/,/g,"");
  var no9_4_5n = parseFloat(reic1) + parseFloat(reic2) + parseFloat(reic3) + parseFloat(reic4);

  var no9_4_5 = no9_4_5n.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
  $.ajax({
      url : "/clinic/form/no9",
      type: "POST",
      data : {
        no9_4_5:no9_4_5,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {
        $('#no9_4_5').html(no9_4_5);
      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
}
cal();
