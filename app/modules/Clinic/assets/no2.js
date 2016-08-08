
$.fn.editable.defaults.mode = 'inline';
//step 1 2.1
$('#no2_1_2_1').editable({
       type: 'text',
       title: 'จำนวน 1'
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
          cal();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {

        }
    });
});
$('#no2_1_2_2').editable({
       type: 'text',
       title: 'ระยะทางถนนลูกรัง'
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
       title: 'จำนวนถนนลาดยาง'
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
               cal();
             },
             error: function (jqXHR, textStatus, errorThrown)
             {

             }
         });
});
$('#no2_1_3_2').editable({
  type: 'text',
  title: 'ระยะทางถนนลาดยาง'
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
       title: 'จำนวนถนนคอนกรีต'
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
               cal();
             },
             error: function (jqXHR, textStatus, errorThrown)
             {

             }
         });
});
$('#no2_1_4_2').editable({
       type: 'text',
       title: 'ระยะทางถนนคอนกรีต'
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
       title: 'จำนวนถนนคอนกรีต'
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
       title: 'จำนวนถนนคอนกรีต'
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
               cal();
             },
             error: function (jqXHR, textStatus, errorThrown)
             {

             }
         });
});
$('#no2_1_5_3').editable({
       type: 'text',
       title: 'ระยะทางถนนคอนกรีต'
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
               cal();
             },
             error: function (jqXHR, textStatus, errorThrown)
             {

             }
         });
});
$('#no2_1_6').editable({
       type: 'text',
       title: 'สะพาน'
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
       title: 'รถโดยสารที่ให้บริการจำนวน'
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
       title: 'รถโดยสารที่ให้บริการจำนวน'
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
       title: 'ที่ทำการไปรษณีย์'
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
       title: 'สถานีวิทยุกระจายเสียง'
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
       title: 'สถานีวิทยุโทรทัศน์'
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
       title: 'สื่อมวลชนในพื้นที่/หนังสือพิมพ์'
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
       title: 'การให้บริการอินเตอร์เน็ต'
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
       title: 'ระบบเสียงตามสาย/หอกระจายข่าวในพื้นที่'
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
       title: 'หน่วยงานที่มีข่ายวิทยุสื่อสารในพื้นที่communication'
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
       title: 'ครัวเรือนที่ใช้ไฟฟ้า'
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
       title: 'พื้นที่ที่ได้รับบริการไฟฟ้า ร้อยละ'
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
       title: 'ไฟฟ้าส่องสว่างสารธารณะ จำนวน'
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
       title: 'จุด/ครอบคลุมถนน'
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
       title: 'พื้นที่พักอาศัย '
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
               cal();
             },
             error: function (jqXHR, textStatus, errorThrown)
             {

             }
         });
});
$('#no2_5_2').editable({
       type: 'text',
       title: 'พื้นที่พาณิชยกรรม '
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
               cal();
             },
             error: function (jqXHR, textStatus, errorThrown)
             {

             }
         });
});
$('#no2_5_3').editable({
       type: 'text',
       title: 'พื้นที่ตั้งหน่วยงานของรัฐ '
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
               cal();
             },
             error: function (jqXHR, textStatus, errorThrown)
             {

             }
         });
});
$('#no2_5_4').editable({
       type: 'text',
       title: 'สวนสาธารณะ/นันทนาการ '
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
               cal();
             },
             error: function (jqXHR, textStatus, errorThrown)
             {

             }
         });
});
$('#no2_5_5').editable({
       type: 'text',
       title: 'พื้นที่เกษตรกรรม '
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
               cal();
             },
             error: function (jqXHR, textStatus, errorThrown)
             {

             }
         });
});
$('#no2_5_6').editable({
       type: 'text',
       title: 'พื้นที่ตั้งสถานศึกษา'
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
               cal();
             },
             error: function (jqXHR, textStatus, errorThrown)
             {

             }
         });
});
$('#no2_5_7').editable({
       type: 'text',
       title: 'พื้นที่ว่าง'
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
               cal();
             },
             error: function (jqXHR, textStatus, errorThrown)
             {

             }
         });
});
function cal(){
  var no2_1_2_1 = $('#no2_1_2_1').text();
  if(no2_1_2_1==''||no2_1_2_1=='Empty')
      no2_1_2_1=0;
  var no2_1_3_1 = $('#no2_1_3_1').text();
  if(no2_1_3_1==''||no2_1_3_1=='Empty')
      no2_1_3_1=0;
  var no2_1_4_1 = $('#no2_1_4_1').text();
  if(no2_1_4_1==''||no2_1_4_1=='Empty')
      no2_1_4_1=0;
  var no2_1_5_2 = $('#no2_1_5_2').text();
  if(no2_1_5_2==''||no2_1_5_2=='Empty')
      no2_1_5_2=0;
  var no2_1_1 = parseFloat(no2_1_2_1) + parseFloat(no2_1_3_1) + parseFloat(no2_1_4_1) + parseFloat(no2_1_5_2);
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_1_1:no2_1_1,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {
          $('#no2_1_1').html(no2_1_1);
      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });

  var no2_5_1 = $('#no2_5_1').text();
  if(no2_5_1==''||no2_5_1=='Empty')
      no2_5_1=0;
  var no2_5_2 = $('#no2_5_2').text();
  if(no2_5_2==''||no2_5_2=='Empty')
      no2_5_2=0;
  var no2_5_3 = $('#no2_5_3').text();
  if(no2_5_3==''||no2_5_3=='Empty')
      no2_5_3=0;
  var no2_5_4 = $('#no2_5_4').text();
  if(no2_5_4==''||no2_5_4=='Empty')
      no2_5_4=0;
  var no2_5_5 = $('#no2_5_5').text();
  if(no2_5_5==''||no2_5_5=='Empty')
      no2_5_5=0;
  var no2_5_6 = $('#no2_5_6').text();
  if(no2_5_6==''||no2_5_6=='Empty')
      no2_5_6=0;
  var no2_5_7 = $('#no2_5_7').text();
  if(no2_5_7==''||no2_5_7=='Empty')
      no2_5_7=0;
   var rep1 = no2_5_1.replace(/,/g,"");
   var rep2 = no2_5_2.replace(/,/g,"");
   var rep3 = no2_5_3.replace(/,/g,"");
   var rep4 = no2_5_4.replace(/,/g,"");
   var rep5 = no2_5_5.replace(/,/g,"");
   var rep6 = no2_5_6.replace(/,/g,"");
   var rep7 = no2_5_7.replace(/,/g,"");
  var sumpn = parseFloat(rep1) + parseFloat(rep2) + parseFloat(rep3) + parseFloat(rep4) + parseFloat(rep5) + parseFloat(rep6) + parseFloat(rep7);

  var no2_5_8 = sumpn.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
  $.ajax({
      url : "/clinic/form/no2",
      type: "POST",
      data : {
        no2_5_8:no2_5_8,
        option:'add'
      },
      success: function(data, textStatus, jqXHR)
      {
        $('#no2_5_8').html(no2_5_8);
      },
      error: function (jqXHR, textStatus, errorThrown)
      {

      }
  });
}
cal();
