$(document).ready(function() {

    $('#note_session_1').editable({
        showbuttons : 'bottom'       
        //showbuttons : (App.isRTL() ? 'left' : 'right')
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/review/no6",
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


    $("#approval").click(function () {
      $.ajax({
            url : "/clinic/review/no6",
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
