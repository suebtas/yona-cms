
function jump(str){
  array = str.split("_");
  $('#wizard').smartWizard('goToStep',array[1]);
}
$(document).ready(function() {


  Dropzone.options.dropzone = {
    no1_1: "file",
    url: "/clinic/form/no1",
    paramName: "no1_1", // The name that will be used to transfer the file
    maxFilesize: 3, // MB
    maxFiles: 1,

    thumbnailWidth: null,
    thumbnailHeight: null,
    accept: function(file, done) {
      if (file.name == "justinbieber.jpg") {
        done("Naha, you don't.");
      }
      else { done(); }
    },

    init: function () {
/*
          var mockFile = { name: "myimage.jpg", size: 32000, type: 'image/jpeg' };
          this.options.addedfile.call(this, mockFile);
          this.options.thumbnail.call(this, mockFile, "/clinic/form/displayofficemap");
          mockFile.previewElement.classList.add('dz-success');
          mockFile.previewElement.classList.add('dz-complete');
          $('.dz-image').last().find('img').attr({width: '100%', height: '100%'});
*/

        // Add server images
        var myDropzone = this;

        $.get('/clinic/form/displayofficemap', function(data) {

            //$.each(data.images, function (key, value) {
              if(data!=''){
                  var file = {name: 'value.original', size: 12};
                  myDropzone.options.addedfile.call(myDropzone, file);
                  myDropzone.options.thumbnail.call(this, file, "/clinic/form/displayofficemap");
                  $('.dz-image').last().find('img').attr({width: '100%', height: '100%'});
                  //myDropzone.options.thumbnail.call(myDropzone, data, 'images/icon_size/' + value.server);
                  myDropzone.emit("complete", file);
              }
                //photo_counter++;
                //$("#photoCounter").text( "(" + photo_counter + ")");
            //});
        });
    }
  };

  function calculateAreaRaiToKmSquare(value){
    var remove_comma = value.replace(/,/g,"");
    return remove_comma/625;
  }

  function calculateAreaKmSquareToRai(value){
    var remove_comma = value.replace(/,/g,"");
    return remove_comma*625;
  }
  //โหลดค่าพื้นที่
  var kgm = parseFloat(calculateAreaRaiToKmSquare($("#no1_1_2").val())).toFixed(2);

  $("#area-kgm").val(kgm.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  var rai = parseFloat($("#no1_1_2").val()).toFixed(2);
  $("#no1_1_2").val(rai.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  //ใส่ format
  $("#no1_2_1_1").html($("#no1_2_1_1").html().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  //ใส่ format
  $("#no1_2_1_2").html($("#no1_2_1_2").html().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));

  $(".select2_single").select2({
    placeholder: "Select a state",
    allowClear: true
  });
  $(".select2_group").select2({});

  $("#btnFinish").on('click', function(){
    $("#btnFinishStatus").addClass("glyphicon glyphicon-refresh glyphicon-refresh-animate");
    $.ajax({
        url : "/clinic/form/no1",
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
  $("#no1_1_2").on('blur',function(e){
    //alert('Changed!');
    var kgm = parseFloat(calculateAreaRaiToKmSquare(this.value)).toFixed(2);
    $("#area-kgm").val(kgm.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
    $.ajax({
        url : "/clinic/form/no1",
        type: "POST",
        data : {
          no1_1_2: this.value,
          option:'add'
        },
        success: function(data, textStatus, jqXHR)
        {
          callDensity();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {

        }
    });
    $("#no1_1_2").val(this.value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  });

  $("#area-kgm").on('blur',function(e){
    //alert('Changed!');
    var rai = parseFloat(calculateAreaKmSquareToRai(this.value)).toFixed(2);
    $("#no1_1_2").val(rai.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
    $.ajax({
        url : "/clinic/form/no1",
        type: "POST",
        data : {
          no1_1_2: calculateAreaKmSquareToRai(this.value),
          option:'add'
        },
        success: function(data, textStatus, jqXHR)
        {
          callDensity();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {

        }
    });
    $("#area-kgm").val(this.value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  });
    //paramitor (name,path,type,display)

    //select
    Process('no1_1_3_1','no1','select',false,'');
    Process('no1_1_3_2','no1','select',false,'');
    Process('no1_1_3_3','no1','select',false,'');
    Process('no1_1_3_4','no1','select',false,'');

    //editable
    Process('no1_2_6_1','no1','editable',true,'callDensity');
    Process('no1_2_6_2','no1','editable',false,'');
    Process('no1_2_7_1','no1','editable',true,'callDensity');
    Process('no1_2_7_2','no1','editable',false,'');
    Process('no1_2_8_1','no1','editable',true,'callDensity');
    Process('no1_2_8_2','no1','editable',false,'');
    Process('no1_2_10','no1','editable',true,'');
    Process('no1_2_11','no1','editable',true,'');
    Process('no1_2_12','no1','editable',true,'');
    Process('no1_2_13','no1','editable',true,'');
    Process('no1_2_2_1','no1','editable',true,'callPopulationMale');
    Process('no1_2_2_2','no1','editable',true,'callPopulationFemale');
    Process('no1_2_3_1','no1','editable',true,'callPopulationMale');
    Process('no1_2_3_2','no1','editable',true,'callPopulationFemale');
    Process('no1_2_4_1','no1','editable',true,'callPopulationMale');
    Process('no1_2_4_2','no1','editable',true,'callPopulationFemale');
    Process('no1_2_5_1','no1','editable',true,'callPopulationMale');
    Process('no1_2_5_2','no1','editable',true,'callPopulationFemale');
    Process('signing_surveyor','no1','editable',false,'');
    Process('surveyor_phone','no1','editable',false,'');

});
