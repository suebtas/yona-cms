
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
    return value/625;
  }

  function calculateAreaKmSquareToRai(value){
    return value*625;
  }
  //โหลดค่าพื้นที่
  $("#area-kgm").val(calculateAreaRaiToKmSquare($("#no1_1_2").val()));

  $(".select2_single").select2({
    placeholder: "Select a state",
    allowClear: true
  });
  $(".select2_group").select2({});
  // no1_1_3_1
  $("#no1_1_3_1").select2({
    maximumSelectionLength: 4,
    placeholder: "เลือกหน่วยงาน",
    allowClear: true,
  }).on("select2:select", function(e) {
      if(e){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_1_3_1:e.params.data.id,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //data - response from server
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
      console.log(e);
  }).on("select2:unselect", function(e) {
      if(e){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_1_3_1:e.params.data.id,
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //data - response from server
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
      console.log(e);
  });
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
        },
        error: function (jqXHR, textStatus, errorThrown)
        {

        },

    });
  });
  $("#no1_1_2").on('blur',function(e){
    //alert('Changed!');

    $("#area-kgm").val(calculateAreaRaiToKmSquare(this.value));
    $.ajax({
        url : "/clinic/form/no1",
        type: "POST",
        data : {
          no1_1_2: this.value,
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

  $("#area-kgm").on('blur',function(e){
    //alert('Changed!');
    $("#no1_1_2").val(calculateAreaKmSquareToRai(this.value));
    $.ajax({
        url : "/clinic/form/no1",
        type: "POST",
        data : {
          no1_1_2: calculateAreaKmSquareToRai(this.value),
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
  // no1_1_3_2
  $("#no1_1_3_2").select2({
    maximumSelectionLength: 4,
    placeholder: "เลือกหน่วยงาน",
    allowClear: true,
  }).on("select2:select", function(e) {
      if(e){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_1_3_2:e.params.data.id,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //data - response from server
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
      console.log(e);
  }).on("select2:unselect", function(e) {
      if(e){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_1_3_2:e.params.data.id,
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //data - response from server
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
      console.log(e);
  });
  // no1_1_3_3
  $("#no1_1_3_3").select2({
    maximumSelectionLength: 4,
    placeholder: "เลือกหน่วยงาน",
    allowClear: true,
  }).on("select2:select", function(e) {
      if(e){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_1_3_3:e.params.data.id,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //data - response from server
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
      console.log(e);
  }).on("select2:unselect", function(e) {
      if(e){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_1_3_3:e.params.data.id,
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //data - response from server
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
      console.log(e);
  });


  // no1_1_3_4
  $("#no1_1_3_4").select2({
    maximumSelectionLength: 4,
    placeholder: "เลือกหน่วยงาน",
    allowClear: true,
  }).on("select2:select", function(e) {
      if(e){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_1_3_4:e.params.data.id,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                //data - response from server
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
      console.log(e);
  }).on("select2:unselect", function(e) {
      if(e){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_1_3_4:e.params.data.id,
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
                //data - response from server
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
      console.log(e);
  });
});
$(document).ready(function() {

    $.fn.editable.defaults.mode = 'inline';
    $('#no1_2_6_1').editable({
           type: 'text',
           title: 'ประชากรแฝงจำนวน',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_6_1:params.newValue,
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
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_6_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });
    $('#no1_2_6_2').editable({
           type: 'text',
           title: 'ที่มาของข้อมูลประชากรแฝง(ต่างด้าว)'
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_6_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_6_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });
    $('#no1_2_7_1').editable({
           type: 'text',
           title: 'ประชากรที่พิการหรือทุพพลภาพหรือป่วยเรื้อรังในเขตพี้นที่ จำนวน',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_7_1:params.newValue,
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
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_7_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no1_2_7_2').editable({
           type: 'text',
           title: 'ที่มาของข้อมูลความหนาแน่นของประชากร'
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_7_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_7_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no1_2_8_1').editable({
           type: 'text',
           title: 'ความหนาแน่นของประชากร',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_8_1:params.newValue,
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
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_8_1:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no1_2_8_2').editable({
           type: 'text',
           title: 'ที่มาของข้อมูลความหนาแน่นของประชากร'
    }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_8_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_8_2:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no1_2_10').editable({
           type: 'text',
           title: 'ประชากรที่ประกอบอาชีพเกษตรกรรมจำนวน',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_10:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_10:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no1_2_11').editable({
           type: 'text',
           title: 'ประชากรที่ประกอบอาชีพรับจ้างในโรงงานอุตสาหกรรมจำนวน',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_11:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_11:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no1_2_12').editable({
           type: 'text',
           title: 'ประชากรที่ประกอบอาชีพอื่นจำนวน',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_12:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_12:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no1_2_13').editable({
           type: 'text',
           title: 'สถานที่ท่องเที่ยวที่สำคัญในเขตพื้นที่รับผิดชอบจำนวน',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
      if(params.newValue!=''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_13:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }else if(params.newValue==''){
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_13:'delete',
              option:'delete'
            },
            success: function(data, textStatus, jqXHR)
            {
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
      }
    });

    $('#no1_2_2_1').editable({
           type: 'text',
           title: 'จำนวนผู้ชาย',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_2_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
    });

    $('#no1_2_2_2').editable({
           type: 'text',
           title: 'จำนวนผู้หญิง',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_2_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                callPopulationFemale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
    });
    $('#no1_2_3_1').editable({
           type: 'text',
           title: 'จำนวนผู้ชาย',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_3_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
    });
    $('#no1_2_3_2').editable({
           type: 'text',
           title: 'จำนวนผู้หญิง',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_3_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                callPopulationFemale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
    });
    $('#no1_2_4_1').editable({
           type: 'text',
           title: 'จำนวนผู้ชาย',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_4_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
    });
    $('#no1_2_4_2').editable({
           type: 'text',
           title: 'จำนวนผู้หญิง',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_4_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                callPopulationFemale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
    });
    $('#no1_2_5_1').editable({
           type: 'text',
           title: 'จำนวนผู้ชาย',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_5_1:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                callPopulationMale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
    });


    $('#no1_2_5_2').editable({
           type: 'text',
           title: 'จำนวนผู้หญิง',
           display: function(value) {
             $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
           },
           }).on('save', function(e, params) {
    }).on('save', function(e, params) {
        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_5_2:params.newValue,
              option:'add'
            },
            success: function(data, textStatus, jqXHR)
            {
                callPopulationFemale();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
    });

    function callPopulationAll(){
      var a1 = $('#no1_2_1_1').text();
      if(a1==''||a1=='Empty')
        a1=0;
        var a2 = $('#no1_2_1_2').text();
        if(a2==''||a2=='Empty')
          a2=0;
        if(!a1) a1="0";
        if(!a2) a2="0";
          var rea1 = a1.replace(/,/g,"");
          var rea2 = a2.replace(/,/g,"");
          var sume = parseFloat(rea1) + parseFloat(rea2)
          var sumee = sume.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
          $('#no1_2_1').html(sumee);
          $.ajax({
              url : "/clinic/form/no1",
              type: "POST",
              data : {
                no1_2_1:sumee,
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
    }
  function callPopulationMale(){
    var ic1 = $('#no1_2_2_1').text();
    if(ic1==''||ic1=='Empty')
      ic1=0;
    var ic2 = $('#no1_2_3_1').text();
    if(ic2==''||ic2=='Empty')
      ic2=0;
    var ic3 = $('#no1_2_4_1').text();
    if(ic3==''||ic3=='Empty')
      ic3=0;
    var ic4 = $('#no1_2_5_1').text();
    if(ic4==''||ic4=='Empty')
      ic4=0;
      if(!ic1) ic1="0";
      if(!ic2) ic2="0";
      if(!ic3) ic3="0";
      if(!ic4) ic4="0";
      var ic1 = ic1.replace(/,/g,"");
      var ic2 = ic2.replace(/,/g,"");
      var ic3 = ic3.replace(/,/g,"");
      var ic4 = ic4.replace(/,/g,"");
    var sumd = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
      sumd = parseFloat(Math.round(sumd * 100) / 100).toFixed(2);
    var sums = sumd.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    $('#no1_2_1_1').html(sums);
    $.ajax({
        url : "/clinic/form/no1",
        type: "POST",
        data : {
          no1_2_1_1:sums,
          option:'add'
        },
        success: function(data, textStatus, jqXHR)
        {
            callPopulationAll();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {

        }
    });
  }
  function callPopulationFemale(){
    var id1 = $('#no1_2_2_2').text();
    if(id1==''||id1=='Empty')
      id1=0;
    var id2 = $('#no1_2_3_2').text();
    if(id2==''||id2=='Empty')
      id2=0;
    var id3 = $('#no1_2_4_2').text();
    if(id3==''||id3=='Empty')
      id3=0;
    var id4 = $('#no1_2_5_2').text();
    if(id4==''||id4=='Empty')
      id4=0;
      if(!id1) id1="0";
      if(!id2) id2="0";
      if(!id3) id3="0";
      if(!id4) id4="0";
      var id1 = id1.replace(/,/g,"");
      var id2 = id2.replace(/,/g,"");
      var id3 = id3.replace(/,/g,"");
      var id4 = id4.replace(/,/g,"");
    var sumd = parseFloat(id1) + parseFloat(id2) + parseFloat(id3) + parseFloat(id4);
      sumd = parseFloat(Math.round(sumd * 100) / 100).toFixed(2);
    var sumg = sumd.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    $('#no1_2_1_2').html(sumg);

    $.ajax({
        url : "/clinic/form/no1",
        type: "POST",
        data : {
          no1_2_1_2:sumd,
          option:'add'
        },
        success: function(data, textStatus, jqXHR)
        {
            callPopulationAll();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {

        }
    });

  }
  callPopulationAll();
  function callDensity(){
    var id1 = $('#no1_2_1').text();
    if(id1==''||id1=='Empty')
      id1=0;
    var id2 = $('#no1_2_6_1').text();
    if(id2==''||id2=='Empty')
      id2=0;
    var id3 = $('#no1_2_7_1').text();
    if(id3==''||id3=='Empty')
      id3=0;
    var id4 = $('#no1_2_8_1').text();
    if(id4==''||id4=='Empty')
      id4=0;
      var id5 = $('#no1_1_2').val();
      if(id5==''||id5=='Empty')
        id5=0;
      if(!id1) id1="0";
      if(!id2) id2="0";
      if(!id3) id3="0";
      if(!id4) id4="0";
      if(!id5) id5="0";
      var id1 = id1.replace(/,/g,"");
      var id2 = id2.replace(/,/g,"");
      var id3 = id3.replace(/,/g,"");
      var id4 = id4.replace(/,/g,"");

    var sumd = (parseFloat(id1) + parseFloat(id2) + parseFloat(id3) + parseFloat(id4)) / (parseFloat(id5)/625);
    sumd = parseFloat(Math.round(sumd * 100) / 100).toFixed(2);
    var sumg = sumd.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    $('#no1_2_9').html(sumg);

    $.ajax({
        url : "/clinic/form/no1",
        type: "POST",
        data : {
          no1_2_9:sumg,
          option:'add'
        },
        success: function(data, textStatus, jqXHR)
        {

        },
        error: function (jqXHR, textStatus, errorThrown)
        {

        }
    });

  }

$("#btnFinish").on('click', function(){
  $("#btnFinishStatus").addClass("glyphicon glyphicon-refresh glyphicon-refresh-animate");
  $.ajax({
      url : "/clinic/form/no10",
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
          '        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>' +
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

});
