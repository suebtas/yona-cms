$(document).ready(function() {

    $('#note_session_1').editable({
        showbuttons : 'bottom'       
        //showbuttons : (App.isRTL() ? 'left' : 'right')
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/review/no5",
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
          url : "/clinic/review/no5",
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

    $('#note_session_3').editable({
        showbuttons : 'bottom'       
        //showbuttons : (App.isRTL() ? 'left' : 'right')
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/review/no5",
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
          url : "/clinic/review/no5",
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
            url : "/clinic/review/no5",
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
          url : "/clinic/review/no5",
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
            url : "/clinic/review/no5",
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
          url : "/clinic/review/no5",
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

    $('#note_session_6').editable({
        showbuttons : 'bottom'       
        //showbuttons : (App.isRTL() ? 'left' : 'right')
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/review/no5",
            type: "POST",
            data : {
              session_6:params.newValue,
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

    $('#pencil_session_6').click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        $('#note_session_6').editable('toggle');
    });
    

    $('#status_session_6').editable({  
        source: [
              {value: 1, text: 'แจ้งให้แก้ไข'},
              {value: 2, text: 'ข้อมูลได้แก้ไขตามข้อคิดเห็นแล้ว'}
           ]
    }).on('save', function(e, params) {
      $.ajax({
          url : "/clinic/review/no5",
          type: "POST",
          data : {
            status_session_6:params.newValue,
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
      if($('input:radio[name=approve]:checked').val()==null)
        return ;
      $.ajax({
            url : "/clinic/review/no5",
            type: "POST",
            data : {
              group_session_1:$('input:radio[name=approve]:checked').val(),
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {

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

                $(popupTemplate).modal()              
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
         
            }
        });
    });
});
