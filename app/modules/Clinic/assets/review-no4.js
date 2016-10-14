$(document).ready(function() {

    $('#note_session_1').editable({
        showbuttons : 'bottom'       
        //showbuttons : (App.isRTL() ? 'left' : 'right')
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/review/no4",
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

    $('#status_session_1').editable({  
        source: [
              {value: 1, text: 'แจ้งให้แก้ไข'},
              {value: 2, text: 'ข้อมูลได้แก้ไขตามข้อคิดเห็นแล้ว'}
           ]
    }).on('save', function(e, params) {
      $.ajax({
          url : "/clinic/review/no4",
          type: "POST",
          data : {
            status_session_1:params.newValue,
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
    $('#note_session_2').editable({
        showbuttons : 'bottom'       
        //showbuttons : (App.isRTL() ? 'left' : 'right')
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/review/no4",
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

    $('#pencil_session_2').click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        $('#note_session_2').editable('toggle');
    });

    $('#status_session_2').editable({  
        source: [
              {value: 1, text: 'แจ้งให้แก้ไข'},
              {value: 2, text: 'ข้อมูลได้แก้ไขตามข้อคิดเห็นแล้ว'}
           ]
    }).on('save', function(e, params) {
      $.ajax({
          url : "/clinic/review/no4",
          type: "POST",
          data : {
            status_session_2:params.newValue,
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
    $('#note_session_3').editable({
        showbuttons : 'bottom'       
        //showbuttons : (App.isRTL() ? 'left' : 'right')
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/review/no4",
            type: "POST",
            data : {
              session_3:params.newValue,
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

    $('#pencil_session_3').click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        $('#note_session_3').editable('toggle');
    });

    $('#status_session_3').editable({  
        source: [
              {value: 1, text: 'แจ้งให้แก้ไข'},
              {value: 2, text: 'ข้อมูลได้แก้ไขตามข้อคิดเห็นแล้ว'}
           ]
    }).on('save', function(e, params) {
      $.ajax({
          url : "/clinic/review/no4",
          type: "POST",
          data : {
            status_session_3:params.newValue,
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
    $('#note_session_4').editable({
        showbuttons : 'bottom'       
        //showbuttons : (App.isRTL() ? 'left' : 'right')
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/review/no4",
            type: "POST",
            data : {
              session_4:params.newValue,
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

    $('#pencil_session_4').click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        $('#note_session_4').editable('toggle');
    });

    $('#status_session_4').editable({  
        source: [
              {value: 1, text: 'แจ้งให้แก้ไข'},
              {value: 2, text: 'ข้อมูลได้แก้ไขตามข้อคิดเห็นแล้ว'}
           ]
    }).on('save', function(e, params) {
      $.ajax({
          url : "/clinic/review/no4",
          type: "POST",
          data : {
            status_session_4:params.newValue,
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

    $('#note_session_5').editable({
        showbuttons : 'bottom'       
        //showbuttons : (App.isRTL() ? 'left' : 'right')
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/review/no4",
            type: "POST",
            data : {
              session_5:params.newValue,
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

    $('#pencil_session_5').click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        $('#note_session_5').editable('toggle');
    });


    $('#status_session_5').editable({  
        source: [
              {value: 1, text: 'แจ้งให้แก้ไข'},
              {value: 2, text: 'ข้อมูลได้แก้ไขตามข้อคิดเห็นแล้ว'}
           ]
    }).on('save', function(e, params) {
      $.ajax({
          url : "/clinic/review/no4",
          type: "POST",
          data : {
            status_session_5:params.newValue,
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
            url : "/clinic/review/no4",
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
});
