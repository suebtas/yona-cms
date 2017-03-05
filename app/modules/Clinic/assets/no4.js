function jump(str){
  array = str.split("_");
  $('#wizard').smartWizard('goToStep',array[1]);
}
$(document).ready(function() {

  $.fn.editable.defaults.mode = 'inline';

  $('#no4_1').editable({
    type: 'text',
    title: ' ',
    display: function(value) {
      $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
    },
  }).on('save', function(e, params) {
    $.ajax({
        url : "/clinic/form/no4",
        type: "POST",
        data : {
          no4_1:params.newValue,
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

  $('#no4_2').editable({
    type: 'text',
    title: ' ',
    display: function(value) {
      $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
    },
  }).on('save', function(e, params) {
    $.ajax({
        url : "/clinic/form/no4",
        type: "POST",
        data : {
          no4_2:params.newValue,
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

  $('#no4_3_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_3_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_3_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

  $('#no4_3_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_3_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_3_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

  $('#no4_3_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_3_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_3_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

  $('#no4_3_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_3_4:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_3_4:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

  $('#no4_3_5').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_3_5:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_3_5:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

  $('#no4_3_6').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_3_6:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_3_6:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

  $('#no4_3_7').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_3_7:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_3_7:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

  $('#no4_3_8').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_3_8:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_3_8:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

  $("#no4_4_1_1").on('blur',function(e){
    //alert('Changed!');

    $.ajax({
        url : "/clinic/form/no4",
        type: "POST",
        data : {
          no4_4_1_1: this.value,
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

  $("#no4_4_1_2").on('blur',function(e){
    //alert('Changed!');

    $.ajax({
        url : "/clinic/form/no4",
        type: "POST",
        data : {
          no4_4_1_2: this.value,
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

  $("#no4_4_1_3").on('blur',function(e){
    //alert('Changed!');

    $.ajax({
        url : "/clinic/form/no4",
        type: "POST",
        data : {
          no4_4_1_3: this.value,
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

  $("#no4_4_2_1").on('blur',function(e){
    //alert('Changed!');

    $.ajax({
        url : "/clinic/form/no4",
        type: "POST",
        data : {
          no4_4_2_1: this.value,
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

  $("#no4_4_2_2").on('blur',function(e){
    //alert('Changed!');

    $.ajax({
        url : "/clinic/form/no4",
        type: "POST",
        data : {
          no4_4_2_2: this.value,
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

  $("#no4_4_2_3").on('blur',function(e){
    //alert('Changed!');

    $.ajax({
        url : "/clinic/form/no4",
        type: "POST",
        data : {
          no4_4_2_3: this.value,
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

  $("#no4_4_3_1").on('blur',function(e){
    //alert('Changed!');

    $.ajax({
        url : "/clinic/form/no4",
        type: "POST",
        data : {
          no4_4_3_1: this.value,
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

  $("#no4_4_3_2").on('blur',function(e){
    //alert('Changed!');

    $.ajax({
        url : "/clinic/form/no4",
        type: "POST",
        data : {
          no4_4_3_2: this.value,
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

  $("#no4_4_3_3").on('blur',function(e){
    //alert('Changed!');

    $.ajax({
        url : "/clinic/form/no4",
        type: "POST",
        data : {
          no4_4_3_3: this.value,
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

  $("#no4_4_4_1").on('blur',function(e){
    //alert('Changed!');

    $.ajax({
        url : "/clinic/form/no4",
        type: "POST",
        data : {
          no4_4_4_1: this.value,
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

  $("#no4_4_4_2").on('blur',function(e){
    //alert('Changed!');

    $.ajax({
        url : "/clinic/form/no4",
        type: "POST",
        data : {
          no4_4_4_2: this.value,
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

  $("#no4_4_4_3").on('blur',function(e){
    //alert('Changed!');

    $.ajax({
        url : "/clinic/form/no4",
        type: "POST",
        data : {
          no4_4_4_3: this.value,
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

  $("#no4_4_5_1").on('blur',function(e){
    //alert('Changed!');

    $.ajax({
        url : "/clinic/form/no4",
        type: "POST",
        data : {
          no4_4_5_1: this.value,
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

  $("#no4_4_5_2").on('blur',function(e){
    //alert('Changed!');

    $.ajax({
        url : "/clinic/form/no4",
        type: "POST",
        data : {
          no4_4_5_2: this.value,
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

  $("#no4_4_5_3").on('blur',function(e){
    //alert('Changed!');

    $.ajax({
        url : "/clinic/form/no4",
        type: "POST",
        data : {
          no4_4_5_3: this.value,
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

//no4_5_1_1_1
  updateSumno4_5_1_1_5();
  $('#no4_5_1_1_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_1_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_1_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_1_1_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_1_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_1_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_1_1_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_1_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_1_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_1_1_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_1_4:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_1_4:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    updateSumno4_5_1_2_5();
    $('#no4_5_1_2_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_2_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_2_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_1_2_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_2_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_2_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_1_2_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_2_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_2_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_1_2_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_2_4:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_2_4:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    updateSumno4_5_1_3_5();
    $('#no4_5_1_3_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_3_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_3_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_1_3_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_3_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_3_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_1_3_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_3_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_3_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_1_3_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_3_4:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_3_4:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    updateSumno4_5_1_4_5();
    $('#no4_5_1_4_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_4_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_4_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_1_4_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_4_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_4_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_1_4_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_4_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_4_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_1_4_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_4_4:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_1_4_4:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_1_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    function updateSumno4_5_1_1_5()
    {
      var ic1 = $('#no4_5_1_1_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_1_1_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_1_1_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_1_1_4').text();
      if(ic4==''||ic4=='Empty')
        ic4=0;
        if(!ic1) ic1="0";
        if(!ic2) ic2="0";
        if(!ic3) ic3="0";
        if(!ic4) ic4="0";
        var ic1 = ic1.replace(/,/g,"");
        var ic2 = ic2.replace(/,/g,"");
        var ic3 = ic3.replace(/,/g,"");
        var ic4 = ic4.replace(/,/g,"");
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_1_1_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_1_1_5:sum,
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

    function updateSumno4_5_1_2_5()
    {
      var ic1 = $('#no4_5_1_2_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_1_2_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_1_2_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_1_2_4').text();
      if(ic4==''||ic4=='Empty')
        ic4=0;
        if(!ic1) ic1="0";
        if(!ic2) ic2="0";
        if(!ic3) ic3="0";
        if(!ic4) ic4="0";
        var ic1 = ic1.replace(/,/g,"");
        var ic2 = ic2.replace(/,/g,"");
        var ic3 = ic3.replace(/,/g,"");
        var ic4 = ic4.replace(/,/g,"");
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_1_2_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_1_2_5:sum,
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

    function updateSumno4_5_1_3_5()
    {
      var ic1 = $('#no4_5_1_3_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_1_3_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_1_3_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_1_3_4').text();
      if(ic4==''||ic4=='Empty')
        ic4=0;
        if(!ic1) ic1="0";
        if(!ic2) ic2="0";
        if(!ic3) ic3="0";
        if(!ic4) ic4="0";
        var ic1 = ic1.replace(/,/g,"");
        var ic2 = ic2.replace(/,/g,"");
        var ic3 = ic3.replace(/,/g,"");
        var ic4 = ic4.replace(/,/g,"");
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_1_3_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_1_3_5:sum,
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

    function updateSumno4_5_1_4_5()
    {
      var ic1 = $('#no4_5_1_4_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_1_4_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_1_4_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_1_4_4').text();
      if(ic4==''||ic4=='Empty')
        ic4=0;
        if(!ic1) ic1="0";
        if(!ic2) ic2="0";
        if(!ic3) ic3="0";
        if(!ic4) ic4="0";
        var ic1 = ic1.replace(/,/g,"");
        var ic2 = ic2.replace(/,/g,"");
        var ic3 = ic3.replace(/,/g,"");
        var ic4 = ic4.replace(/,/g,"");
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_1_4_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_1_4_5:sum,
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

//4_5_2_1_1
  updateSumno4_5_2_1_5();
  $('#no4_5_2_1_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_1_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_1_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_2_1_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_1_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_1_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_2_1_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_1_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_1_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_2_1_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_1_4:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_1_4:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    updateSumno4_5_2_2_5();
    $('#no4_5_2_2_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_2_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_2_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_2_2_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_2_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_2_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_2_2_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_2_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_2_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_2_2_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_2_4:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_2_4:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    updateSumno4_5_2_3_5();
    $('#no4_5_2_3_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_3_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_3_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_2_3_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_3_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_3_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_2_3_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_3_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_3_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_2_3_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_3_4:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_3_4:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    updateSumno4_5_2_4_5();
    $('#no4_5_2_4_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_4_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_4_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_2_4_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_4_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_4_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_2_4_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_4_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_4_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_2_4_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_4_4:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_2_4_4:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_2_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    function updateSumno4_5_2_1_5()
    {
      var ic1 = $('#no4_5_2_1_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_2_1_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_2_1_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_2_1_4').text();
      if(ic4==''||ic4=='Empty')
        ic4=0;
        if(!ic1) ic1="0";
        if(!ic2) ic2="0";
        if(!ic3) ic3="0";
        if(!ic4) ic4="0";
        var ic1 = ic1.replace(/,/g,"");
        var ic2 = ic2.replace(/,/g,"");
        var ic3 = ic3.replace(/,/g,"");
        var ic4 = ic4.replace(/,/g,"");
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_2_1_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_2_1_5:sum,
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

    function updateSumno4_5_2_2_5()
    {
      var ic1 = $('#no4_5_2_2_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_2_2_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_2_2_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_2_2_4').text();
      if(ic4==''||ic4=='Empty')
        ic4=0;
        if(!ic1) ic1="0";
        if(!ic2) ic2="0";
        if(!ic3) ic3="0";
        if(!ic4) ic4="0";
        var ic1 = ic1.replace(/,/g,"");
        var ic2 = ic2.replace(/,/g,"");
        var ic3 = ic3.replace(/,/g,"");
        var ic4 = ic4.replace(/,/g,"");
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_2_2_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_2_2_5:sum,
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

    function updateSumno4_5_2_3_5()
    {
      var ic1 = $('#no4_5_2_3_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_2_3_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_2_3_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_2_3_4').text();
      if(ic4==''||ic4=='Empty')
        ic4=0;
        if(!ic1) ic1="0";
        if(!ic2) ic2="0";
        if(!ic3) ic3="0";
        if(!ic4) ic4="0";
        var ic1 = ic1.replace(/,/g,"");
        var ic2 = ic2.replace(/,/g,"");
        var ic3 = ic3.replace(/,/g,"");
        var ic4 = ic4.replace(/,/g,"");
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_2_3_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_2_3_5:sum,
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

    function updateSumno4_5_2_4_5()
    {
      var ic1 = $('#no4_5_2_4_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_2_4_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_2_4_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_2_4_4').text();
      if(ic4==''||ic4=='Empty')
        ic4=0;
        if(!ic1) ic1="0";
        if(!ic2) ic2="0";
        if(!ic3) ic3="0";
        if(!ic4) ic4="0";
        var ic1 = ic1.replace(/,/g,"");
        var ic2 = ic2.replace(/,/g,"");
        var ic3 = ic3.replace(/,/g,"");
        var ic4 = ic4.replace(/,/g,"");
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_2_4_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_2_4_5:sum,
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
//no4_5_3_1_1

      updateSumno4_5_3_1_5();
  $('#no4_5_3_1_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_1_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_1_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_3_1_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_1_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_1_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_3_1_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_1_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_1_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_3_1_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_1_4:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_1_4:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    updateSumno4_5_3_2_5();
    $('#no4_5_3_2_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_2_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_2_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_3_2_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_2_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_2_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_3_2_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_2_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_2_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_3_2_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_2_4:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_2_4:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    updateSumno4_5_3_3_5();
    $('#no4_5_3_3_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_3_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_3_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_3_3_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_3_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_3_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_3_3_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_3_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_3_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_3_3_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_3_4:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_3_4:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    updateSumno4_5_3_4_5();
    $('#no4_5_3_4_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_4_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_4_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_3_4_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_4_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_4_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_3_4_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_4_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_4_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_3_4_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_4_4:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_3_4_4:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_3_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    function updateSumno4_5_3_1_5()
    {
      var ic1 = $('#no4_5_3_1_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_3_1_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_3_1_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_3_1_4').text();
      if(ic4==''||ic4=='Empty')
        ic4=0;
        if(!ic1) ic1="0";
        if(!ic2) ic2="0";
        if(!ic3) ic3="0";
        if(!ic4) ic4="0";
        var ic1 = ic1.replace(/,/g,"");
        var ic2 = ic2.replace(/,/g,"");
        var ic3 = ic3.replace(/,/g,"");
        var ic4 = ic4.replace(/,/g,"");
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_3_1_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_3_1_5:sum,
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

    function updateSumno4_5_3_2_5()
    {
      var ic1 = $('#no4_5_3_2_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_3_2_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_3_2_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_3_2_4').text();
      if(ic4==''||ic4=='Empty')
        ic4=0;
        if(!ic1) ic1="0";
        if(!ic2) ic2="0";
        if(!ic3) ic3="0";
        if(!ic4) ic4="0";
        var ic1 = ic1.replace(/,/g,"");
        var ic2 = ic2.replace(/,/g,"");
        var ic3 = ic3.replace(/,/g,"");
        var ic4 = ic4.replace(/,/g,"");
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_3_2_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_3_2_5:sum,
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

    function updateSumno4_5_3_3_5()
    {
      var ic1 = $('#no4_5_3_3_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_3_3_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_3_3_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_3_3_4').text();
      if(ic4==''||ic4=='Empty')
        ic4=0;
        if(!ic1) ic1="0";
        if(!ic2) ic2="0";
        if(!ic3) ic3="0";
        if(!ic4) ic4="0";
        var ic1 = ic1.replace(/,/g,"");
        var ic2 = ic2.replace(/,/g,"");
        var ic3 = ic3.replace(/,/g,"");
        var ic4 = ic4.replace(/,/g,"");
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_3_3_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_3_3_5:sum,
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

    function updateSumno4_5_3_4_5()
    {
      var ic1 = $('#no4_5_3_4_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_3_4_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_3_4_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_3_4_4').text();
      if(ic4==''||ic4=='Empty')
        ic4=0;
        if(!ic1) ic1="0";
        if(!ic2) ic2="0";
        if(!ic3) ic3="0";
        if(!ic4) ic4="0";
        var ic1 = ic1.replace(/,/g,"");
        var ic2 = ic2.replace(/,/g,"");
        var ic3 = ic3.replace(/,/g,"");
        var ic4 = ic4.replace(/,/g,"");
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_3_4_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_3_4_5:sum,
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

//no4_5_4_1_1
      updateSumno4_5_4_1_5();
  $('#no4_5_4_1_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_1_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_1_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_4_1_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_1_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_1_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_4_1_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_1_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_1_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_4_1_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_1_4:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_1_4:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_1_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    updateSumno4_5_4_2_5();
    $('#no4_5_4_2_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_2_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_2_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_4_2_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_2_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_2_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_4_2_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_2_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_2_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_4_2_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_2_4:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_2_4:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_2_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    updateSumno4_5_4_3_5();
    $('#no4_5_4_3_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_3_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_3_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_4_3_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_3_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_3_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_4_3_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_3_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_3_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_4_3_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_3_4:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_3_4:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_3_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    updateSumno4_5_4_4_5();
    $('#no4_5_4_4_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_4_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_4_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_4_4_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_4_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_4_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_4_4_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_4_3:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_4_3:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no4_5_4_4_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_4_4:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_5_4_4_4:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                updateSumno4_5_4_4_5();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    function updateSumno4_5_4_1_5()
    {
      var ic1 = $('#no4_5_4_1_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_4_1_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_4_1_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_4_1_4').text();
      if(ic4==''||ic4=='Empty')
        ic4=0;
        if(!ic1) ic1="0";
        if(!ic2) ic2="0";
        if(!ic3) ic3="0";
        if(!ic4) ic4="0";
        var ic1 = ic1.replace(/,/g,"");
        var ic2 = ic2.replace(/,/g,"");
        var ic3 = ic3.replace(/,/g,"");
        var ic4 = ic4.replace(/,/g,"");
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_4_1_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_4_1_5:sum,
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

    function updateSumno4_5_4_2_5()
    {
      var ic1 = $('#no4_5_4_2_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_4_2_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_4_2_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_4_2_4').text();
      if(ic4==''||ic4=='Empty')
        ic4=0;
        if(!ic1) ic1="0";
        if(!ic2) ic2="0";
        if(!ic3) ic3="0";
        if(!ic4) ic4="0";
        var ic1 = ic1.replace(/,/g,"");
        var ic2 = ic2.replace(/,/g,"");
        var ic3 = ic3.replace(/,/g,"");
        var ic4 = ic4.replace(/,/g,"");
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_4_2_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_4_2_5:sum,
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

    function updateSumno4_5_4_3_5()
    {
      var ic1 = $('#no4_5_4_3_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_4_3_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_4_3_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_4_3_4').text();
      if(ic4==''||ic4=='Empty')
        ic4=0;
        if(!ic1) ic1="0";
        if(!ic2) ic2="0";
        if(!ic3) ic3="0";
        if(!ic4) ic4="0";
        var ic1 = ic1.replace(/,/g,"");
        var ic2 = ic2.replace(/,/g,"");
        var ic3 = ic3.replace(/,/g,"");
        var ic4 = ic4.replace(/,/g,"");
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_4_3_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_4_3_5:sum,
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

    function updateSumno4_5_4_4_5()
    {
      var ic1 = $('#no4_5_4_4_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_4_4_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_4_4_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_4_4_4').text();
      if(ic4==''||ic4=='Empty')
        ic4=0;
        if(!ic1) ic1="0";
        if(!ic2) ic2="0";
        if(!ic3) ic3="0";
        if(!ic4) ic4="0";
        var ic1 = ic1.replace(/,/g,"");
        var ic2 = ic2.replace(/,/g,"");
        var ic3 = ic3.replace(/,/g,"");
        var ic4 = ic4.replace(/,/g,"");
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_4_4_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_4_4_5:sum,
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
//4_6
    $('#no4_6_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_6_1:params.newValue,
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
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_6_1:'delete',
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

    $('#no4_6_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_6_2:params.newValue,
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
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_6_2:'delete',
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

    $('#no4_6_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_6_3:params.newValue,
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
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_6_3:'delete',
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

    $('#no4_6_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_6_4:params.newValue,
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
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_6_4:'delete',
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

    $('#no4_6_5').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_6_5:params.newValue,
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
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_6_5:'delete',
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

    $('#no4_6_6').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_6_6:params.newValue,
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
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_6_6:'delete',
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

    $('#no4_6_7').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_6_7:params.newValue,
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
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_6_7:'delete',
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

    $("#no4_6_8_1").on('blur',function(e){
    //alert('Changed!');

      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_6_8_1: this.value,
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

    $('#no4_6_8_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_6_8_2:params.newValue,
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
            url : "/clinic/form/no4",
            type: "POST",
            data : {
              no4_6_8_2:'delete',
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


$("#btnFinish").on('click', function(){
  $("#btnFinishStatus").addClass("glyphicon glyphicon-refresh glyphicon-refresh-animate");
  $.ajax({
      url : "/clinic/form/no4",
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

});
