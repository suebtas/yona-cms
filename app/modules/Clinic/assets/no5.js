function jump(str){
  array = str.split("_");
  $('#wizard').smartWizard('goToStep',array[1]);
}
$(document).ready(function() {

    $.fn.editable.defaults.mode = 'inline';

 //no5_1   
    $('#no5_1_1_1').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_1_1_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_1_1_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_1_1_2').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_1_1_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_1_1_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_1_2_1').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_1_2_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_1_2_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_1_2_2').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_1_2_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_1_2_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_1_3_1').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_1_3_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_1_3_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_1_3_2').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_1_3_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_1_3_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_2').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

//no5_3
    $('#no5_3_1').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_3_2').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_3_3').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_3_4').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_4:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_4:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_3_5').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_5:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_5:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_3_6').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_6:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_6:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_3_7').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_7:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_7:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_3_8').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_8:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_8:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_3_9').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_9:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_9:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $("#no5_3_10_1").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no5",
          type: "POST",
          data : {
            no5_3_10_1: this.value,
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

    $('#no5_3_10_2').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_10_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_10_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

//no5_4
    $('#no5_4_1_1').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_1_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_1_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_4_1_2').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_1_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_1_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_4_1_3').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_1_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_1_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_4_2_1').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_2_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_2_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_4_2_2').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_2_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_2_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_4_2_3').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_2_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_2_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_4_3_1').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_3_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_3_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_4_3_2').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_3_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_3_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_4_3_3').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_3_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_3_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_4_4').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_4:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_4_4:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

//no5_5

    $('#no5_5_1_1').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_5_1_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_5_1_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });$('#no5_5_1_2').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_5_1_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_5_1_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_5_2_1').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_5_2_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_5_2_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

    $('#no5_5_2_2').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_5_2_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_5_2_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
      }
    });

//no5_6
    $("#no5_6_1").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no5",
          type: "POST",
          data : {
            no5_6_1: this.value,
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

    $("#no5_6_2").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no5",
          type: "POST",
          data : {
            no5_6_2: this.value,
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

    $("#no5_6_3").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no5",
          type: "POST",
          data : {
            no5_6_3: this.value,
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

    $("#no5_6_4").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no5",
          type: "POST",
          data : {
            no5_6_4: this.value,
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

    $("#no5_6_5").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no5",
          type: "POST",
          data : {
            no5_6_5: this.value,
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

});