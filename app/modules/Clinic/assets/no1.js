$(document).ready(function() {
  $(".select2_single").select2({
    placeholder: "Select a state",
    allowClear: true
  });
  $(".select2_group").select2({});
  // no1_1_3_1
  $("#no1_1_3_1").select2({
    maximumSelectionLength: 4,
    placeholder: "เลือกหน่วยงาน",
    allowClear: true,
  }).on("select2:select", function(e) {
      if(e){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_1_3_1:e.params.data.id,
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
      console.log(e);
  }).on("select2:unselect", function(e) {
      if(e){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_1_3_1:e.params.data.id,
              option:'delete'
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
      console.log(e);
  });


  // no1_1_3_2
  $("#no1_1_3_2").select2({
    maximumSelectionLength: 4,
    placeholder: "เลือกหน่วยงาน",
    allowClear: true,
  }).on("select2:select", function(e) {
      if(e){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_1_3_2:e.params.data.id,
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
      console.log(e);
  }).on("select2:unselect", function(e) {
      if(e){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_1_3_2:e.params.data.id,
              option:'delete'
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
      console.log(e);
  });
  // no1_1_3_3
  $("#no1_1_3_3").select2({
    maximumSelectionLength: 4,
    placeholder: "เลือกหน่วยงาน",
    allowClear: true,
  }).on("select2:select", function(e) {
      if(e){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_1_3_3:e.params.data.id,
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
      console.log(e);
  }).on("select2:unselect", function(e) {
      if(e){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_1_3_3:e.params.data.id,
              option:'delete'
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
      console.log(e);
  });


  // no1_1_3_4
  $("#no1_1_3_4").select2({
    maximumSelectionLength: 4,
    placeholder: "เลือกหน่วยงาน",
    allowClear: true,
  }).on("select2:select", function(e) {
      if(e){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_1_3_4:e.params.data.id,
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
      console.log(e);
  }).on("select2:unselect", function(e) {
      if(e){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_1_3_4:e.params.data.id,
              option:'delete'
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
      console.log(e);
  });
});

$(document).ready(function() {

    $.fn.editable.defaults.mode = 'inline';

    $('#no_1_2_6_1').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });
    $('#no_1_2_6_2').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });
    $('#no_1_2_7_1').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });

    $('#no_1_2_7_2').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });
    $('#no_1_2_8_1').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });

    $('#no_1_2_8_2').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });
    $('#no_1_2_9_1').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });

    $('#no_1_2_9_2').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });
    $('#no_1_2_10').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });
    $('#no_1_2_11').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });
    $('#no_1_2_12').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });
    $('#no_1_2_13').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });
    /*
    $('#female').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });
    $('#male').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'male',
           title: 'จำนวนผู้ชาย'
    });*/
    $('#child_female').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'male',
           title: 'จำนวนผู้ชาย'
    });
    $('#child_male').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'male',
           title: 'จำนวนผู้ชาย',
           
    }).on('save', function(e, params) {
      callPopulation();
    });
    $('#mature_female').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'male',
           title: 'จำนวนผู้ชาย'
    }); 
    $('#mature_male').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'male',
           title: 'จำนวนผู้ชาย'
    }).on('save', function(e, params) {
      callPopulation();
    });
    $('#teenager_female').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'male',
           title: 'จำนวนผู้ชาย'
    });
    $('#teenager_male').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'male',
           title: 'จำนวนผู้ชาย'
    }).on('save', function(e, params) {
      callPopulation();
    });
    $('#elder_female').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'male',
           title: 'จำนวนผู้ชาย'
    });
    $('#elder_male').editable({
           url: '/clinic/form/no1',
           type: 'text',
           pk: 1,
           name: 'male',
           title: 'จำนวนผู้ชาย',
           validate: function(value) {
           },
           success: function(e, params) {
              callPopulation();
           }
    });


  function callPopulation(){
    var ic1 = $('#child_male').text();
    if(ic1==''||ic1=='Empty')
      ic1=0;
    var ic2 = $('#mature_male').text();
    if(ic2==''||ic2=='Empty')
      ic2=0;
    var ic3 = $('#teenager_male').text();
    if(ic3==''||ic3=='Empty')
      ic3=0;
    var ic4 = $('#elder_male').text();
    if(ic4==''||ic4=='Empty')
      ic4=0;
    var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
    $('#male').html(sum);
  }
  callPopulation();
});
