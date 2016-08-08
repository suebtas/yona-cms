$(document).ready(function() {

    $.fn.editable.defaults.mode = 'inline';
    $('#no8_1_1_1').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_1_1_1:params.newValue,
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
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_1_1_1:'delete',
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

    $('#no8_1_1_2').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_1_1_2:params.newValue,
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
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_1_1_2:'delete',
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

    $('#no8_1_2').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_1_2:params.newValue,
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
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_1_2:'delete',
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

    $('#no8_1_3').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_1_3:params.newValue,
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
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_1_3:'delete',
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

    $('#no8_1_4').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_1_4:params.newValue,
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
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_1_4:'delete',
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
//no8_2

    $("#no8_2_1_1").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_2_1_1: this.value,
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

    $("#no8_2_1_2").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_2_1_2: this.value,
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

    $("#no8_2_1_3").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_2_1_3: this.value,
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

    $("#no8_2_2_1").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_2_2_1: this.value,
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

    $("#no8_2_2_2").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_2_2_2: this.value,
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

    $("#no8_2_2_3").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_2_2_3: this.value,
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

    $("#no8_2_3_1").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_2_3_1: this.value,
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

    $("#no8_2_3_2").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_2_3_2: this.value,
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

    $("#no8_2_3_3").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_2_3_3: this.value,
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

    $("#no8_4").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_4: this.value,
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

    $("#no8_4_1").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_4_1: this.value,
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

    $("#no8_4_2").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_4_2: this.value,
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

    $("#no8_4_3").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_4_3: this.value,
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

    $("#no8_4_4").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_4_4: this.value,
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

    $("#no8_4_5").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_4_5: this.value,
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

    $("#no8_4_6").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_4_6: this.value,
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

    $("#no8_4_7").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_4_7: this.value,
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

    $("#no8_4_8").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_4_8: this.value,
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

    $("#no8_4_9").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_4_9: this.value,
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

    $("#no8_4_10").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_4_10: this.value,
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

//no8_5
    $('#no8_5_1').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_5_1:params.newValue,
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
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_5_1:'delete',
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

    $('#no8_5_2_1').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_5_2_1:params.newValue,
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
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_5_2_1:'delete',
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

    $('#no8_5_3').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_5_3:params.newValue,
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
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_5_3:'delete',
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

    $('#no8_5_4').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_5_4:params.newValue,
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
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_5_4:'delete',
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

//no8_6
    $('#no8_6_1').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_6_1:params.newValue,
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
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_6_1:'delete',
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

    $("#no8_6_2_1").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no8",
          type: "POST",
          data : {
            no8_6_2_1: this.value,
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

    $('#no8_6_2_2').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_6_2_2:params.newValue,
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
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_6_2_2:'delete',
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

    $('#no8_6_3').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_6_3:params.newValue,
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
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_6_3:'delete',
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

    $('#no8_6_4').editable({
           type: 'text',
           title: ''
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_6_4:params.newValue,
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
            url : "/clinic/form/no8",
            type: "POST",
            data : {
              no8_6_4:'delete',
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



});