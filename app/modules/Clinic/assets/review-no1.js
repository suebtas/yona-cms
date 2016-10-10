$(document).ready(function() {
    $.fn.editable.defaults.mode = 'inline';

    $('#note_session_1').editable({
        showbuttons : 'bottom',
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
        $('#note_session_1').editable(
            'toggle');
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
    $('.dropzone').dropzone({
    init: function() {
            $('.dropzone').removeClass('dz-clickable');
            $('.dropzone')[0].removeEventListener('click', this.listeners[1].events.click);
          }
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
});
