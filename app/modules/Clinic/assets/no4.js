function jump(str){
  array = str.split("_");
  $('#wizard').smartWizard('goToStep',array[1]);
}
$(document).ready(function() {

  //paramitor (name,path,type,display)
  //editable
  Process('no4_1','no4','editable',true);
  Process('no4_2','no4','editable',true);
  Process('no4_3_1','no4','editable',true);
  Process('no4_3_2','no4','editable',true);
  Process('no4_3_3','no4','editable',true);
  Process('no4_3_4','no4','editable',true);
  Process('no4_3_5','no4','editable',true);
  Process('no4_3_6','no4','editable',true);
  Process('no4_3_7','no4','editable',true);
  Process('no4_3_8','no4','editable',true);
  Process('no4_5_1_1_1','no4','editable',true);
  Process('no4_5_1_1_2','no4','editable',true);
  Process('no4_5_1_1_3','no4','editable',true);
  Process('no4_5_1_1_4','no4','editable',true);
  Process('no4_5_1_2_1','no4','editable',true);
  Process('no4_5_1_2_2','no4','editable',true);
  Process('no4_5_1_2_3','no4','editable',true);
  Process('no4_5_1_2_4','no4','editable',true);
  Process('no4_5_1_3_1','no4','editable',true);
  Process('no4_5_1_3_2','no4','editable',true);
  Process('no4_5_1_3_3','no4','editable',true);
  Process('no4_5_1_3_4','no4','editable',true);
  Process('no4_5_1_4_1','no4','editable',true);
  Process('no4_5_1_4_2','no4','editable',true);
  Process('no4_5_1_4_3','no4','editable',true);
  Process('no4_5_1_4_4','no4','editable',true);
  Process('no4_5_2_1_1','no4','editable',true);
  Process('no4_5_2_1_2','no4','editable',true);
  Process('no4_5_2_1_3','no4','editable',true);
  Process('no4_5_2_1_4','no4','editable',true);
  Process('no4_5_2_2_1','no4','editable',true);
  Process('no4_5_2_2_2','no4','editable',true);
  Process('no4_5_2_2_3','no4','editable',true);
  Process('no4_5_2_2_4','no4','editable',true);
  Process('no4_5_2_3_1','no4','editable',true);
  Process('no4_5_2_3_2','no4','editable',true);
  Process('no4_5_2_3_3','no4','editable',true);
  Process('no4_5_2_3_4','no4','editable',true);
  Process('no4_5_2_4_1','no4','editable',true);
  Process('no4_5_2_4_2','no4','editable',true);
  Process('no4_5_2_4_3','no4','editable',true);
  Process('no4_5_2_4_4','no4','editable',true);
  Process('no4_5_3_1_1','no4','editable',true);
  Process('no4_5_3_1_2','no4','editable',true);
  Process('no4_5_3_1_3','no4','editable',true);
  Process('no4_5_3_1_4','no4','editable',true);
  Process('no4_5_3_2_1','no4','editable',true);
  Process('no4_5_3_2_2','no4','editable',true);
  Process('no4_5_3_2_3','no4','editable',true);
  Process('no4_5_3_2_4','no4','editable',true);
  Process('no4_5_3_3_1','no4','editable',true);
  Process('no4_5_3_3_2','no4','editable',true);
  Process('no4_5_3_3_3','no4','editable',true);
  Process('no4_5_3_3_4','no4','editable',true);
  Process('no4_5_3_4_1','no4','editable',true);
  Process('no4_5_3_4_2','no4','editable',true);
  Process('no4_5_3_4_3','no4','editable',true);
  Process('no4_5_3_4_4','no4','editable',true);
  Process('no4_5_4_1_1','no4','editable',true);
  Process('no4_5_4_1_2','no4','editable',true);
  Process('no4_5_4_1_3','no4','editable',true);
  Process('no4_5_4_1_4','no4','editable',true);
  Process('no4_5_4_2_1','no4','editable',true);
  Process('no4_5_4_2_2','no4','editable',true);
  Process('no4_5_4_2_3','no4','editable',true);
  Process('no4_5_4_2_4','no4','editable',true);
  Process('no4_5_4_3_1','no4','editable',true);
  Process('no4_5_4_3_2','no4','editable',true);
  Process('no4_5_4_3_3','no4','editable',true);
  Process('no4_5_4_3_4','no4','editable',true);
  Process('no4_5_4_4_1','no4','editable',true);
  Process('no4_5_4_4_2','no4','editable',true);
  Process('no4_5_4_4_3','no4','editable',true);
  Process('no4_5_4_4_4','no4','editable',true);
  Process('no4_6_1','no4','editable',true);
  Process('no4_6_2','no4','editable',true);
  Process('no4_6_3','no4','editable',true);
  Process('no4_6_4','no4','editable',true);
  Process('no4_6_5','no4','editable',true);
  Process('no4_6_6','no4','editable',true);
  Process('no4_6_7','no4','editable',true);
  Process('no4_6_8_2','no4','editable',true);
  Process('signing_surveyor','no1','editable',true);
  Process('surveyor_phone','no1','editable',true);
  //input blur
  Process('no4_4_1_1','no4','blur',true);
  Process('no4_4_1_2','no4','blur',true);
  Process('no4_4_1_3','no4','blur',true);
  Process('no4_4_2_1','no4','blur',true);
  Process('no4_4_2_2','no4','blur',true);
  Process('no4_4_2_3','no4','blur',true);
  Process('no4_4_3_1','no4','blur',true);
  Process('no4_4_3_2','no4','blur',true);
  Process('no4_4_3_3','no4','blur',true);
  Process('no4_4_4_1','no4','blur',true);
  Process('no4_4_4_2','no4','blur',true);
  Process('no4_4_4_3','no4','blur',true);
  Process('no4_4_5_1','no4','blur',true);
  Process('no4_4_5_2','no4','blur',true);
  Process('no4_4_5_3','no4','blur',true);
  Process('no4_6_8_1','no4','blur',true);

  //update function
  updateSumno4_5_1_1_5();
  updateSumno4_5_1_2_5();
  updateSumno4_5_1_3_5();
  updateSumno4_5_1_4_5();
  updateSumno4_5_2_1_5();
  updateSumno4_5_2_2_5();
  updateSumno4_5_2_3_5();
  updateSumno4_5_2_4_5();
  updateSumno4_5_3_1_5();
  updateSumno4_5_3_2_5();
  updateSumno4_5_3_3_5();
  updateSumno4_5_3_4_5();
  updateSumno4_5_4_1_5();
  updateSumno4_5_4_2_5();
  updateSumno4_5_4_3_5();
  updateSumno4_5_4_4_5();
  function Process(name,path,type,display){
            //editable
            if(type == 'editable'){
            $.fn.editable.defaults.mode = 'inline';
            $('#'+name).editable({
                   type: 'text',
                   title: '',
                   display: function(value) {
                     if(display == true)
                     $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                     else
                     $(this).text(value);
                   },
                 }).on('save', function(e, params) {
                   //property key for insert or update
                   dataStringAdd={};
                   dataStringAdd[name]=params.newValue;
                   dataStringAdd['option']='add';

                    //property key for delete
                   dataStringDelete={};
                   dataStringDelete[name]='delete';
                   dataStringDelete['option']='delete';
                if(params.newValue!=''){
                $.ajax({
                    url : "/clinic/form/" + path,
                    type: "POST",
                    data : dataStringAdd,
                    success: function(data, textStatus, jqXHR)
                    {
                      //4-5-1
                      if (name == 'no4_5_1_1_1' || name == 'no4_5_1_1_2' || name == 'no4_5_1_1_3' || name == 'no4_5_1_1_4') {
                        updateSumno4_5_1_1_5();
                      }
                      else if (name == 'no4_5_1_2_1' || name == 'no4_5_1_2_2' || name == 'no4_5_1_2_3' || name == 'no4_5_1_2_4') {
                        updateSumno4_5_1_2_5();
                      }
                      else if (name == 'no4_5_1_3_1' || name == 'no4_5_1_3_2' || name == 'no4_5_1_3_3' || name == 'no4_5_1_3_4') {
                        updateSumno4_5_1_3_5();
                      }
                      else if (name == 'no4_5_1_4_1' || name == 'no4_5_1_4_2' || name == 'no4_5_1_4_3' || name == 'no4_5_1_4_4') {
                        updateSumno4_5_1_4_5();
                      }
                      //4-5-2
                      else if (name == 'no4_5_2_1_1' || name == 'no4_5_2_1_2' || name == 'no4_5_2_1_3' || name == 'no4_5_2_1_4') {
                        updateSumno4_5_2_1_5();
                      }
                      else if (name == 'no4_5_2_2_1' || name == 'no4_5_2_2_2' || name == 'no4_5_2_2_3' || name == 'no4_5_2_2_4') {
                        updateSumno4_5_2_2_5();
                      }
                      else if (name == 'no4_5_2_3_1' || name == 'no4_5_2_3_2' || name == 'no4_5_2_3_3' || name == 'no4_5_2_3_4') {
                        updateSumno4_5_2_3_5();
                      }
                      else if (name == 'no4_5_2_4_1' || name == 'no4_5_2_4_2' || name == 'no4_5_2_4_3' || name == 'no4_5_2_4_4') {
                        updateSumno4_5_2_4_5();
                      }
                      //4-5-3
                      else if (name == 'no4_5_3_1_1' || name == 'no4_5_3_1_2' || name == 'no4_5_3_1_3' || name == 'no4_5_3_1_4') {
                        updateSumno4_5_3_1_5();
                      }
                      else if (name == 'no4_5_3_2_1' || name == 'no4_5_3_2_2' || name == 'no4_5_3_2_3' || name == 'no4_5_3_2_4') {
                        updateSumno4_5_3_2_5();
                      }
                      else if (name == 'no4_5_3_3_1' || name == 'no4_5_3_3_2' || name == 'no4_5_3_3_3' || name == 'no4_5_3_3_4') {
                        updateSumno4_5_3_3_5();
                      }
                      else if (name == 'no4_5_3_4_1' || name == 'no4_5_3_4_2' || name == 'no4_5_3_4_3' || name == 'no4_5_3_4_4') {
                        updateSumno4_5_3_4_5();
                      }
                      //4-5-4
                      else if (name == 'no4_5_4_1_1' || name == 'no4_5_4_1_2' || name == 'no4_5_4_1_3' || name == 'no4_5_4_1_4') {
                        updateSumno4_5_4_1_5();
                      }
                      else if (name == 'no4_5_4_2_1' || name == 'no4_5_4_2_2' || name == 'no4_5_4_2_3' || name == 'no4_5_4_2_4') {
                        updateSumno4_5_4_2_5();
                      }
                      else if (name == 'no4_5_4_3_1' || name == 'no4_5_4_3_2' || name == 'no4_5_4_3_3' || name == 'no4_5_4_3_4') {
                        updateSumno4_5_4_3_5();
                      }
                      else if (name == 'no4_5_4_4_1' || name == 'no4_5_4_4_2' || name == 'no4_5_4_4_3' || name == 'no4_5_4_4_4') {
                        updateSumno4_5_4_4_5();
                      }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {

                    }
                });
              }else if(params.newValue==''){
                $.ajax({
                    url : "/clinic/form/" + path,
                    type: "POST",
                    data : dataStringDelete,
                    success: function(data, textStatus, jqXHR)
                    {
                      //4-5-1
                      if (name == 'no4_5_1_1_1' || name == 'no4_5_1_1_2' || name == 'no4_5_1_1_3' || name == 'no4_5_1_1_4') {
                        updateSumno4_5_1_1_5();
                      }
                      else if (name == 'no4_5_1_2_1' || name == 'no4_5_1_2_2' || name == 'no4_5_1_2_3' || name == 'no4_5_1_2_4') {
                        updateSumno4_5_1_2_5();
                      }
                      else if (name == 'no4_5_1_3_1' || name == 'no4_5_1_3_2' || name == 'no4_5_1_3_3' || name == 'no4_5_1_3_4') {
                        updateSumno4_5_1_3_5();
                      }
                      else if (name == 'no4_5_1_4_1' || name == 'no4_5_1_4_2' || name == 'no4_5_1_4_3' || name == 'no4_5_1_4_4') {
                        updateSumno4_5_1_4_5();
                      }
                      //4-5-2
                      else if (name == 'no4_5_2_1_1' || name == 'no4_5_2_1_2' || name == 'no4_5_2_1_3' || name == 'no4_5_2_1_4') {
                        updateSumno4_5_2_1_5();
                      }
                      else if (name == 'no4_5_2_2_1' || name == 'no4_5_2_2_2' || name == 'no4_5_2_2_3' || name == 'no4_5_2_2_4') {
                        updateSumno4_5_2_2_5();
                      }
                      else if (name == 'no4_5_2_3_1' || name == 'no4_5_2_3_2' || name == 'no4_5_2_3_3' || name == 'no4_5_2_3_4') {
                        updateSumno4_5_2_3_5();
                      }
                      else if (name == 'no4_5_2_4_1' || name == 'no4_5_2_4_2' || name == 'no4_5_2_4_3' || name == 'no4_5_2_4_4') {
                        updateSumno4_5_2_4_5();
                      }
                      //4-5-3
                      else if (name == 'no4_5_3_1_1' || name == 'no4_5_3_1_2' || name == 'no4_5_3_1_3' || name == 'no4_5_3_1_4') {
                        updateSumno4_5_3_1_5();
                      }
                      else if (name == 'no4_5_3_2_1' || name == 'no4_5_3_2_2' || name == 'no4_5_3_2_3' || name == 'no4_5_3_2_4') {
                        updateSumno4_5_3_2_5();
                      }
                      else if (name == 'no4_5_3_3_1' || name == 'no4_5_3_3_2' || name == 'no4_5_3_3_3' || name == 'no4_5_3_3_4') {
                        updateSumno4_5_3_3_5();
                      }
                      else if (name == 'no4_5_3_4_1' || name == 'no4_5_3_4_2' || name == 'no4_5_3_4_3' || name == 'no4_5_3_4_4') {
                        updateSumno4_5_3_4_5();
                      }
                      //4-5-4
                      else if (name == 'no4_5_4_1_1' || name == 'no4_5_4_1_2' || name == 'no4_5_4_1_3' || name == 'no4_5_4_1_4') {
                        updateSumno4_5_4_1_5();
                      }
                      else if (name == 'no4_5_4_2_1' || name == 'no4_5_4_2_2' || name == 'no4_5_4_2_3' || name == 'no4_5_4_2_4') {
                        updateSumno4_5_4_2_5();
                      }
                      else if (name == 'no4_5_4_3_1' || name == 'no4_5_4_3_2' || name == 'no4_5_4_3_3' || name == 'no4_5_4_3_4') {
                        updateSumno4_5_4_3_5();
                      }
                      else if (name == 'no4_5_4_4_1' || name == 'no4_5_4_4_2' || name == 'no4_5_4_4_3' || name == 'no4_5_4_4_4') {
                        updateSumno4_5_4_4_5();
                      }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {

                    }
                });
              }
            });
          }
          //input blur
          else if (type == 'blur') {
            $("#"+name).on('blur',function(e){
              //alert('Changed!');
              dataString={};
              dataString[name]=this.value;
              dataString['option']='add';

              if (name == 'no4_4_1_3' || name == 'no4_4_2_3' || name == 'no4_4_3_3' || name == 'no4_4_4_3' || name == 'no4_4_5_3') {
                if(this.value.length>500){
                        alert('จำนวนข้อมูลมากกว่า 500 ระบบไม่บันทึกข้อมูล');
                        return;
                    }
              }
              $.ajax({
                  url : "/clinic/form/"+path,
                  type: "POST",
                  data : dataString,
                  success: function(data, textStatus, jqXHR)
                  {
                      //data - response from server
                  },
                  error: function (jqXHR, textStatus, errorThrown)
                  {

                  }
              });
            });
          }

        }


    function updateSumno4_5_1_1_5()
    {
      var ic1 = $('#no4_5_1_1_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_1_1_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_1_1_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_1_1_4').text();
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
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_1_1_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_1_1_5:sum,
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

    function updateSumno4_5_1_2_5()
    {
      var ic1 = $('#no4_5_1_2_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_1_2_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_1_2_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_1_2_4').text();
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
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_1_2_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_1_2_5:sum,
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

    function updateSumno4_5_1_3_5()
    {
      var ic1 = $('#no4_5_1_3_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_1_3_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_1_3_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_1_3_4').text();
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
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_1_3_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_1_3_5:sum,
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

    function updateSumno4_5_1_4_5()
    {
      var ic1 = $('#no4_5_1_4_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_1_4_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_1_4_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_1_4_4').text();
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
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_1_4_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_1_4_5:sum,
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

    function updateSumno4_5_2_1_5()
    {
      var ic1 = $('#no4_5_2_1_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_2_1_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_2_1_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_2_1_4').text();
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
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_2_1_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_2_1_5:sum,
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

    function updateSumno4_5_2_2_5()
    {
      var ic1 = $('#no4_5_2_2_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_2_2_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_2_2_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_2_2_4').text();
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
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_2_2_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_2_2_5:sum,
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

    function updateSumno4_5_2_3_5()
    {
      var ic1 = $('#no4_5_2_3_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_2_3_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_2_3_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_2_3_4').text();
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
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_2_3_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_2_3_5:sum,
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

    function updateSumno4_5_2_4_5()
    {
      var ic1 = $('#no4_5_2_4_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_2_4_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_2_4_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_2_4_4').text();
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
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_2_4_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_2_4_5:sum,
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

    function updateSumno4_5_3_1_5()
    {
      var ic1 = $('#no4_5_3_1_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_3_1_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_3_1_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_3_1_4').text();
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
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_3_1_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_3_1_5:sum,
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

    function updateSumno4_5_3_2_5()
    {
      var ic1 = $('#no4_5_3_2_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_3_2_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_3_2_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_3_2_4').text();
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
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_3_2_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_3_2_5:sum,
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

    function updateSumno4_5_3_3_5()
    {
      var ic1 = $('#no4_5_3_3_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_3_3_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_3_3_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_3_3_4').text();
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
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_3_3_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_3_3_5:sum,
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

    function updateSumno4_5_3_4_5()
    {
      var ic1 = $('#no4_5_3_4_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_3_4_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_3_4_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_3_4_4').text();
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
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_3_4_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_3_4_5:sum,
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

    function updateSumno4_5_4_1_5()
    {
      var ic1 = $('#no4_5_4_1_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_4_1_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_4_1_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_4_1_4').text();
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
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_4_1_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_4_1_5:sum,
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

    function updateSumno4_5_4_2_5()
    {
      var ic1 = $('#no4_5_4_2_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_4_2_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_4_2_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_4_2_4').text();
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
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_4_2_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_4_2_5:sum,
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

    function updateSumno4_5_4_3_5()
    {
      var ic1 = $('#no4_5_4_3_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_4_3_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_4_3_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_4_3_4').text();
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
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_4_3_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_4_3_5:sum,
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

    function updateSumno4_5_4_4_5()
    {
      var ic1 = $('#no4_5_4_4_1').text();
      if(ic1==''||ic1=='Empty')
        ic1=0;
      var ic2 = $('#no4_5_4_4_2').text();
      if(ic2==''||ic2=='Empty')
        ic2=0;
      var ic3 = $('#no4_5_4_4_3').text();
      if(ic3==''||ic3=='Empty')
        ic3=0;
      var ic4 = $('#no4_5_4_4_4').text();
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
        var sum = parseFloat(ic1) + parseFloat(ic2) + parseFloat(ic3) + parseFloat(ic4);
        var sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no4_5_4_4_5').html(sum);
      $.ajax({
          url : "/clinic/form/no4",
          type: "POST",
          data : {
            no4_5_4_4_5:sum,
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



    $("#btnFinish").on('click', function(){
      $("#btnFinishStatus").addClass("glyphicon glyphicon-refresh glyphicon-refresh-animate");
      $.ajax({
          url : "/clinic/form/no4",
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
});
