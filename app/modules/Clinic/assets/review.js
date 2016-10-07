
$(document).ready(function() {
    var elems = document.body.getElementsByClassName("select2_multiple form-control");
    for (var i=0; i < elems.length; i++) {
        //$("#"+elems[i].id).editable('option', 'disabled', true);
        $("#"+elems[i].id).prop("disabled", true);
    }
    var elems = document.body.getElementsByTagName("input");
    for (var i=0; i < elems.length; i++) {
        //$("#"+elems[i].id).editable('option', 'disabled', true);
        $("#"+elems[i].id).attr("disabled", "disabled");
    }
    var elems = document.body.getElementsByClassName("editable editable-click");
    for (var i=0; i < elems.length; i++) {
        //$("#"+elems[i].id).editable('option', 'disabled', true);
        $("#"+elems[i].id).editable('option', 'disabled', true);
    }
    var elems = document.body.getElementsByClassName("dropzone");
    $('.dropzone').dropzone({
    maxFiles: 10,
    init: function() {
        this.on('maxfilesreached', function() {
            $('.dropzone').removeClass('dz-clickable'); // remove cursor
            $('.dropzone')[0].removeEventListener('click', this.listeners[1].events.click);
        });
    }
});
});
