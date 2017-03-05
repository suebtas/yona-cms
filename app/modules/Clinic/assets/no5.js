function jump(str){
  array = str.split("_");
  $('#wizard').smartWizard('goToStep',array[1]);
}
$(document).ready(function() {

    $.fn.editable.defaults.mode = 'inline';

 //no5_1
    $('#no5_1_1_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
    $('#no5_1_4_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_1_4_1:params.newValue,
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
              no5_1_4_1:'delete',
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
    $('#no5_1_4_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_1_4_2:params.newValue,
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
              no5_1_4_2:'delete',
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
                //updateSumno4_5_4_4_5();nn
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
    $('#no5_3_1_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_1_1:params.newValue,
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
              no5_3_1_1:'delete',
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
    $('#no5_3_1_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_1_2:params.newValue,
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
              no5_3_1_2:'delete',
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
    $('#no5_3_1_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_1_3:params.newValue,
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
              no5_3_1_3:'delete',
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
    $('#no5_3_1_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_1_4:params.newValue,
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
              no5_3_1_4:'delete',
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
    $('#no5_3_1_5').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_1_5:params.newValue,
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
              no5_3_1_5:'delete',
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
    $('#no5_3_1_6').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_1_6:params.newValue,
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
              no5_3_1_6:'delete',
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
    $('#no5_3_1_7').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_1_7:params.newValue,
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
              no5_3_1_7:'delete',
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
    $('#no5_3_1_8').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_1_8:params.newValue,
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
              no5_3_1_8:'delete',
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
    $('#no5_3_1_9').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_1_9:params.newValue,
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
              no5_3_1_9:'delete',
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
    $('#no5_3_1_10').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_1_10:params.newValue,
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
              no5_3_1_10:'delete',
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
    $('#no5_3_2_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_2_1:params.newValue,
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
              no5_3_2_1:'delete',
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
    $('#no5_3_2_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_2_2:params.newValue,
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
              no5_3_2_2:'delete',
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
    $('#no5_3_2_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_2_3:params.newValue,
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
              no5_3_2_3:'delete',
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
    $('#no5_3_2_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_2_4:params.newValue,
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
              no5_3_2_4:'delete',
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
    $('#no5_3_2_5').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_2_5:params.newValue,
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
              no5_3_2_5:'delete',
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
    $('#no5_3_2_6').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_2_6:params.newValue,
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
              no5_3_2_6:'delete',
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
    $('#no5_3_2_7').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_2_7:params.newValue,
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
              no5_3_2_7:'delete',
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
    $('#no5_3_2_8').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_2_8:params.newValue,
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
              no5_3_2_8:'delete',
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
    $('#no5_3_2_9').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_2_9:params.newValue,
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
              no5_3_2_9:'delete',
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
    $('#no5_3_2_10').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_2_10:params.newValue,
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
              no5_3_2_10:'delete',
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
    $('#no5_3_3_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_3_1:params.newValue,
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
              no5_3_3_1:'delete',
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
    $('#no5_3_3_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_3_2:params.newValue,
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
              no5_3_3_2:'delete',
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
    $('#no5_3_3_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_3_3:params.newValue,
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
              no5_3_3_3:'delete',
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
    $('#no5_3_3_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_3_4:params.newValue,
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
              no5_3_3_4:'delete',
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
    $('#no5_3_3_5').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_3_5:params.newValue,
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
              no5_3_3_5:'delete',
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
    $('#no5_3_3_6').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_3_6:params.newValue,
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
              no5_3_3_6:'delete',
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
    $('#no5_3_3_7').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_3_7:params.newValue,
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
              no5_3_3_7:'delete',
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
    $('#no5_3_3_8').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_3_8:params.newValue,
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
              no5_3_3_8:'delete',
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
    $('#no5_3_3_9').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_3_9:params.newValue,
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
              no5_3_3_9:'delete',
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
    $('#no5_3_3_10').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_3_10:params.newValue,
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
              no5_3_3_10:'delete',
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
    $('#no5_3_4_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_4_1:params.newValue,
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
              no5_3_4_1:'delete',
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
    $('#no5_3_4_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_4_2:params.newValue,
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
              no5_3_4_2:'delete',
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
    $('#no5_3_4_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_4_3:params.newValue,
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
              no5_3_4_3:'delete',
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
    $('#no5_3_4_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_4_4:params.newValue,
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
              no5_3_4_4:'delete',
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
    $('#no5_3_4_5').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_4_5:params.newValue,
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
              no5_3_4_5:'delete',
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
    $('#no5_3_4_6').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_4_6:params.newValue,
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
              no5_3_4_6:'delete',
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
    $('#no5_3_4_7').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_4_7:params.newValue,
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
              no5_3_4_7:'delete',
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
    $('#no5_3_4_8').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_4_8:params.newValue,
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
              no5_3_4_8:'delete',
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
    $('#no5_3_4_9').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_4_9:params.newValue,
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
              no5_3_4_9:'delete',
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
    $('#no5_3_4_10').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no5",
            type: "POST",
            data : {
              no5_3_4_10:params.newValue,
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
              no5_3_4_10:'delete',
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
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

$("#btnFinish").on('click', function(){
  $("#btnFinishStatus").addClass("glyphicon glyphicon-refresh glyphicon-refresh-animate");
  $.ajax({
      url : "/clinic/form/no5",
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
