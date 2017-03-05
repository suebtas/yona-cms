function jump(str){
  array = str.split("_");
  $('#wizard').smartWizard('goToStep',array[1]);
}
$(document).ready(function() {

    $.fn.editable.defaults.mode = 'inline';

    $('#no6_1').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no6",
            type: "POST",
            data : {
              no6_1:params.newValue,
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
            url : "/clinic/form/no6",
            type: "POST",
            data : {
              no6_1:'delete',
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

    $('#no6_2').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no6",
            type: "POST",
            data : {
              no6_2:params.newValue,
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
            url : "/clinic/form/no6",
            type: "POST",
            data : {
              no6_2:'delete',
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

    $('#no6_3').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no6",
            type: "POST",
            data : {
              no6_3:params.newValue,
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
            url : "/clinic/form/no6",
            type: "POST",
            data : {
              no6_3:'delete',
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

    $('#no6_4').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no6",
            type: "POST",
            data : {
              no6_4:params.newValue,
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
            url : "/clinic/form/no6",
            type: "POST",
            data : {
              no6_4:'delete',
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

    $('#no6_5').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no6",
            type: "POST",
            data : {
              no6_5:params.newValue,
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
            url : "/clinic/form/no6",
            type: "POST",
            data : {
              no6_5:'delete',
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

    $('#no6_6').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no6",
            type: "POST",
            data : {
              no6_6:params.newValue,
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
            url : "/clinic/form/no6",
            type: "POST",
            data : {
              no6_6:'delete',
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

    $('#no6_7').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no6",
            type: "POST",
            data : {
              no6_7:params.newValue,
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
            url : "/clinic/form/no6",
            type: "POST",
            data : {
              no6_7:'delete',
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

    $('#no6_8').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no6",
            type: "POST",
            data : {
              no6_8:params.newValue,
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
            url : "/clinic/form/no6",
            type: "POST",
            data : {
              no6_8:'delete',
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

    $('#no6_9').editable({
           type: 'text',
           title: '',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no6",
            type: "POST",
            data : {
              no6_9:params.newValue,
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
            url : "/clinic/form/no6",
            type: "POST",
            data : {
              no6_9:'delete',
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
      url : "/clinic/form/no6",
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
          '        <button type="button" onclick="location.reload();" class="btn btn-primary" data-dismiss="modal">Ok</button>' +
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
