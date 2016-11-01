$(document).ready(function() {

    /*
    $('#address').editable({
        url: '/post',
        value: {
            city: "Moscow", 
            street: "Lenina", 
            building: "12"
        },
        validate: function(value) {
            if(value.city == '') return 'city is required!'; 
        },
        display: function(value) {
            if(!value) {
                $(this).empty();
                return; 
            }
            var html = '<b>' + $('<div>').text(value.city).html() + '</b>, ' + $('<div>').text(value.street).html() + ' st., bld. ' + $('<div>').text(value.building).html();
            $(this).html(html); 
        }         
    }); 
    */
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


    $('#status_session_1').editable({  
        source: [
              {value: 1, text: 'แจ้งให้แก้ไข'},
              {value: 2, text: 'ผ่าน'}
           ]
    }).on('save', function(e, params) {
      $.ajax({
          url : "/clinic/review/no1",
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
      
    $('#pencil_session_2').click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        $('#note_session_2').editable('toggle');
    });
    
    $('#status_session_2').editable({  
        source: [
              {value: 1, text: 'แจ้งให้แก้ไข'},
              {value: 2, text: 'ผ่าน'}
           ]
    }).on('save', function(e, params) {
      $.ajax({
          url : "/clinic/review/no1",
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
});
