
function jump(str){
  array = str.split("_");
  $('#wizard').smartWizard('goToStep',array[1]);
}
$(document).ready(function() {
  function calculateAreaRaiToKmSquare(value){
    return 1.6*value;
  }

  function calculateAreaKmSquareToRai(value){
    return value/1.6;
  }
  //โหลดค่าพื้นที่
  $("#area-kgm").val(calculateAreaRaiToKmSquare($("#no1_1_2").val()));

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
  $("#btnFinish").on('click', function(){
    //$('#wizard').smartWizard.keyNavigation = keyNavigation;
    keyNavigation = false;

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
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
     
        },

    });
  });
  $("#no1_1_2").on('blur',function(e){
    //alert('Changed!');

    $("#area-kgm").val(calculateAreaRaiToKmSquare(this.value));
    $.ajax({
        url : "/clinic/form/no1",
        type: "POST",
        data : {
          no1_1_2: this.value,
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
  });

  $("#area-kgm").on('blur',function(e){
    //alert('Changed!');
    $("#no1_1_2").val(calculateAreaKmSquareToRai(this.value));
    $.ajax({
        url : "/clinic/form/no1",
        type: "POST",
        data : {
          no1_1_2: calculateAreaKmSquareToRai(this.value),
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

    $('#note_session_1').editable({
        showbuttons : 'bottom'       
        //showbuttons : (App.isRTL() ? 'left' : 'right')
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/review/no1",
            type: "POST",
            data : {
              session_1:params.newValue,
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

    $('#pencil_session_1').click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        $('#note_session_1').editable('toggle');
    });


    $('#note_session_2').editable({
        showbuttons : 'bottom'       
        //showbuttons : (App.isRTL() ? 'left' : 'right')
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/review/no1",
            type: "POST",
            data : {
              session_2:params.newValue,
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

    $("#approval").click(function () {
      $.ajax({
            url : "/clinic/review/no1",
            type: "POST",
            data : {
              group_session_1:$('input:radio[name=approve]:checked').val(),
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
    $('#pencil_session_2').click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        $('#note_session_2').editable('toggle');
    });
    $('#no1_2_6_1').editable({
           type: 'text',
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_6_1:params.newValue,
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
    $('#no1_2_6_2').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });
    $('#no1_2_7_1').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });

    $('#no1_2_7_2').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });
    $('#no1_2_8_1').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });

    $('#no1_2_8_2').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });
    $('#no1_2_9_1').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });

    $('#no1_2_9_2').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });
    $('#no1_2_10').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });
    $('#no1_2_11').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });
    $('#no1_2_12').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });
    $('#no1_2_13').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });

    $('#no1_2_2_1').editable({
           type: 'text',
           title: 'จำนวนเด็กชาย'
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_2_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_2_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });
    
    $('#no1_2_2_2').editable({
           type: 'text',
           title: 'จำนวนผู้หญิง'
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_2_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                callPopulationFemale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
    }); 
    $('#no1_2_3_1').editable({
           type: 'text',
           title: 'จำนวนผู้ชาย'
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_3_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
    });
    $('#no1_2_3_2').editable({
           type: 'text',
           title: 'จำนวนผู้หญิง'
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_3_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                callPopulationFemale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
    }); 
    $('#no1_2_4_1').editable({
           type: 'text',
           title: 'จำนวนผู้ชาย'
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_4_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
    });
    $('#no1_2_4_2').editable({
           type: 'text',
           title: 'จำนวนผู้หญิง',
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_4_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                callPopulationFemale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
    }); 
    $('#no1_2_5_1').editable({
           type: 'text',
           title: 'จำนวนผู้ชาย'
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_5_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
    });


    $('#no1_2_5_2').editable({
           type: 'text',
           title: 'จำนวนผู้หญิง'
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_5_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                callPopulationFemale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
    });


  function callPopulationMale(){
    var ic1 = $('#no1_2_2_1').text();
    if(ic1==''||ic1=='Empty')
      ic1=0;
    var ic2 = $('#no1_2_3_1').text();
    if(ic2==''||ic2=='Empty')
      ic2=0;
    var ic3 = $('#no1_2_4_1').text();
    if(ic3==''||ic3=='Empty')
      ic3=0;
    var ic4 = $('#no1_2_5_1').text();
    if(ic4==''||ic4=='Empty')
      ic4=0;
    var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
    $('#no1_2_1_1').html(sum);
    $.ajax({
        url : "/clinic/form/no1",
        type: "POST",
        data : {
          no1_2_1_1:sum,
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
  function callPopulationFemale(){
    var id1 = $('#no1_2_2_2').text();
    if(id1==''||id1=='Empty')
      id1=0;
    var id2 = $('#no1_2_3_2').text();
    if(id2==''||id2=='Empty')
      id2=0;
    var id3 = $('#no1_2_4_2').text();
    if(id3==''||id3=='Empty')
      id3=0;
    var id4 = $('#no1_2_5_2').text();
    if(id4==''||id4=='Empty')
      id4=0;
    var sumd = parseFloat(id1) + parseFloat(id2) + parseFloat(id3) + parseFloat(id4);
    $('#no1_2_1_2').html(sumd);

    $.ajax({
        url : "/clinic/form/no1",
        type: "POST",
        data : {
          no1_2_1_2:sumd,
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


});

