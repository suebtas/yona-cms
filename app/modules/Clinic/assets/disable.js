
$(document).ready(function() { 
    $(".editable").editable('option', 'disabled', true);
    
    $("input[name='approve']").each(function(i) {
        $(this).attr('disabled', 'disabled');
    });
    
    $("#btnFinish").each(function(i) {
        $(this).attr('disabled', 'disabled');
    });
    $("#btnFinish").off('click');    
});

