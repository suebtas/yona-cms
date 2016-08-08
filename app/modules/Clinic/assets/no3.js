$.fn.editable.defaults.mode = 'inline';
//step 1 3.1
$('#no3_1').editable({
       type: 'text',
       title: 'รายได้เฉลี่ยประชากร ',
       display: function(value) {
         $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
       },
     }).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no3",
      type: "POST",
      data : {
        no3_1:params.newValue,
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

//step 1 3.2
$('#no3_2_1').editable({
  type: 'text',
  title:'สถานีบริการน้ำมัน',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
}).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no3",
      type: "POST",
      data : {
        no3_2_1:params.newValue,
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
$('#no3_2_2').editable({
  type: 'text',
  title:'ศูนย์การค้า/ห้างสรรพสินค้า',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
}).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no3",
      type: "POST",
      data : {
        no3_2_2:params.newValue,
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
$('#no3_2_3').editable({
  type: 'text',
  title:'ตลาดสด',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
}).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no3",
      type: "POST",
      data : {
        no3_2_3:params.newValue,
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
$('#no3_2_4').editable({
  type: 'text',
  title:'ร้านค้าทั่วไป',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
}).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no3",
      type: "POST",
      data : {
        no3_2_4:params.newValue,
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

//step 1 3.3
$('#no3_3_1').editable({
  type: 'text',
  title:'สถานธนานุบาล',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
}).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no3",
      type: "POST",
      data : {
        no3_3_1:params.newValue,
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
$('#no3_3_2').editable({
  type: 'text',
  title:'ท่าเทียบเรือ',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
}).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no3",
      type: "POST",
      data : {
        no3_3_2:params.newValue,
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
$('#no3_3_3').editable({
  type: 'text',
  title:'โรงฆ่าสัตว์',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
}).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no3",
      type: "POST",
      data : {
        no3_3_3:params.newValue,
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

//step 1 3.4
$('#no3_4_1').editable({
  type: 'text',
  title:'โรงแรม',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
}).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no3",
      type: "POST",
      data : {
        no3_4_1:params.newValue,
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
$('#no3_4_2').editable({
  type: 'text',
  title:'ธนาคาร',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
}).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no3",
      type: "POST",
      data : {
        no3_4_2:params.newValue,
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
$('#no3_4_3').editable({
  type: 'text',
  title:'โรงภาพยนตร์',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
}).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no3",
      type: "POST",
      data : {
        no3_4_3:params.newValue,
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
$('#no3_4_4').editable({
  type: 'text',
  title:'สถานที่จำหน่ายอาหาร ตาม พ.ร.บ. สาธารณสุข',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
}).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no3",
      type: "POST",
      data : {
        no3_4_4:params.newValue,
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

//step 1 3.5
$('#no3_5_1').editable({
  type: 'text',
  title:'โรงงาน จำนวน ',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
}).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no3",
      type: "POST",
      data : {
        no3_5_1:params.newValue,
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
$('#no3_5_2').editable({
  type: 'text',
  title:'แรงงาน จำนวน',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
}).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no3",
      type: "POST",
      data : {
        no3_5_2:params.newValue,
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

//step 1 3.6
$('#no3_6_1').editable({
  type: 'text',
  title:'แหล่งท่องเที่ยว จำนวน',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
}).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no3",
      type: "POST",
      data : {
        no3_6_1:params.newValue,
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
$('#no3_6_2').editable({
  type: 'text',
  title:'นักท่องเที่ยว จำนวน',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
}).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no3",
      type: "POST",
      data : {
        no3_6_2:params.newValue,
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
$('#no3_6_3').editable({
  type: 'text',
  title:'รายได้จากการท่องเที่ยว จำนวน',
  display: function(value) {
    $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  },
}).on('save', function(e, params) {
  $.ajax({
      url : "/clinic/form/no3",
      type: "POST",
      data : {
        no3_6_3:params.newValue,
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
