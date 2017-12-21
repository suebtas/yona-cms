
$(document).ready(function() { 

    var elems = document.body.getElementsByClassName("editable editable-click");
    for (var i=0; i < elems.length; i++) {
        //$("#"+elems[i].id).editable('option', 'disabled', true);
        $("#"+elems[i].id).editable('option', 'disabled', true);

        if($("#"+elems[i].id).editable('getValue', true)=="")
            $("#"+elems[i].id).editable("option", "value","-");
    }
    //$(".editable").editable('option', 'disabled', true);
    
    $("input[name='approve']").each(function(i) {
        $(this).attr('disabled', 'disabled');
    });
    
    $("select").each(function(i) {
        $(this).attr('disabled', 'disabled');
    });
    $("textarea").each(function(i) {
        $(this).attr('disabled', 'disabled');
    });

    $("#btnFinish").each(function(i) {
        $(this).attr('disabled', 'disabled');
    });
    $("#btnFinish").off('click');   

});

