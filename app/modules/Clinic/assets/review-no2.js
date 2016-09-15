$('#no1_2_1_1').editable('option', 'disabled', true);
$('#no1_2_1_2').editable('option', 'disabled', true);
$('#no1_2_2_1').editable('option', 'disabled', true);
$('#no1_2_2_2').editable('option', 'disabled', true);
$('#no1_2_3_1').editable('option', 'disabled', true);
$('#no1_2_3_2').editable('option', 'disabled', true);
$('#no1_2_4_1').editable('option', 'disabled', true);
$('#no1_2_4_2').editable('option', 'disabled', true);
$('#no1_2_5_1').editable('option', 'disabled', true);
$('#no1_2_5_2').editable('option', 'disabled', true);
$('#no1_2_6_1').editable('option', 'disabled', true);
$('#no1_2_6_2').editable('option', 'disabled', true);
$('#no1_2_6_3').editable('option', 'disabled', true);
$('#no1_2_6_4').editable('option', 'disabled', true);
$('#no1_2_7_1').editable('option', 'disabled', true);
$('#no1_2_7_2').editable('option', 'disabled', true);
$('#no1_2_7_3').editable('option', 'disabled', true);
$('#no1_2_8').editable('option', 'disabled', true);
$('#no1_2_8_1').editable('option', 'disabled', true);
$('#no1_2_8_2').editable('option', 'disabled', true);
$('#no1_2_9_1').editable('option', 'disabled', true);
$('#no1_2_10').editable('option', 'disabled', true);
$('#no1_2_11').editable('option', 'disabled', true);
$('#no1_2_12').editable('option', 'disabled', true);
$('#no1_2_13').editable('option', 'disabled', true);


$(document).ready(function() {

    $('#note_session_1').editable({
        showbuttons : 'bottom'       
        //showbuttons : (App.isRTL() ? 'left' : 'right')
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/review/no2",
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
            url : "/clinic/review/no2",
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


    $('#note_session_3').editable({
        showbuttons : 'bottom'       
        //showbuttons : (App.isRTL() ? 'left' : 'right')
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/review/no2",
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

    $('#note_session_4').editable({
        showbuttons : 'bottom'       
        //showbuttons : (App.isRTL() ? 'left' : 'right')
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/review/no2",
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
    $("#approval").click(function () {
      $.ajax({
            url : "/clinic/review/no2",
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
