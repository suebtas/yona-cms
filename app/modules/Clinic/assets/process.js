
    function Process(name,path,type,display,fn){
        //editable
        if(type == 'editable'){
        $.fn.editable.defaults.mode = 'inline';
        $('#'+name).editable({
                type: 'text',
                title: '',
                validate: function(value) {
                  if($.trim(value) == '-') {
                      return 'ให้กำหนดค่าเป็น Empty';
                  }
              },
              display: function(value) { 
                 if(display == true)
                 $(this).text(value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                  else
                 $(this).text(value);
               },
             }).on('save', function(e, params) {
               dataString={};

            if(params.newValue!=''){
               //property key for insert or update
              dataString[name]=params.newValue;
              dataString['option']='add';
            $.ajax({
                url : "/clinic/form/" + path,
                type: "POST",
                data : dataString,
                success: function(data, textStatus, jqXHR)
                {
                    if(fn != '')
                      window[fn]();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {

                }
            });
          }else if(params.newValue==''){
            //property key for delete
            dataString[name]='delete';
            dataString['option']='delete';
            $.ajax({
                url : "/clinic/form/" + path,
                type: "POST",
                data : dataString,
                success: function(data, textStatus, jqXHR)
                {
                  if(fn != '')
                    window[fn]();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {

                }
            });
          }
        });
      }

      //select
      else if (type == 'select') {
        $("#" + name).select2({
          maximumSelectionLength: 4,
          placeholder: "เลือกหน่วยงาน",
          allowClear: true,
        }).on("select2:select", function(e) {
          //property key for add select
          dataStringSelect={};
          dataStringSelect[name]=e.params.data.id;
          dataStringSelect['option']='add';

          //property key for delete select

            if(e){

              $.ajax({
                  url : "/clinic/form/"+path,
                  type: "POST",
                  data : dataStringSelect,
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
          dataStringSelect={};
          dataStringSelect[name]=e.params.data.id;
          dataStringSelect['option']='delete';
            if(e){

              $.ajax({
                  url : "/clinic/form/"+path,
                  type: "POST",
                  data : dataStringSelect,
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
      }

      //input blur
      else if (type == 'blur') {
        $("#"+name).on('blur',function(e){
          //alert('Changed!');
          dataStringDel={};
          dataStringDel[name]='delete';
          dataStringDel['option']='delete';
          dataString={};
          dataString[name]=this.value;
          dataString['option']='add';
          if(this.value != ''){

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
          }else{
            $.ajax({
                url : "/clinic/form/"+path,
                type: "POST",
                data : dataStringDel,
                success: function(data, textStatus, jqXHR)
                {
                    //data - response from server
                },
                error: function (jqXHR, textStatus, errorThrown)
                {

                }
            });
          }
        });
      }

    }


    //function for no1
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
          var sum_all = parseInt(rea1) + parseInt(rea2)
          var sumee = sum_all.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
          $('#no1_2_1').html(sumee);
          $.ajax({
              url : "/clinic/form/no1",
              type: "POST",
              data : {
                no1_2_1:sum_all,
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
      var sum_integer = parseInt(ic1) + parseInt(ic2) + parseInt(ic3) + parseInt(ic4);
      //sumd = parseFloat(Math.round(sum_integer * 100) / 100).toFixed(2);
      var sum_numberformat = sum_integer.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no1_2_1_1').html(sum_numberformat);
      $.ajax({
          url : "/clinic/form/no1",
          type: "POST",
          data : {
            no1_2_1_1:sum_integer,
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
        var sum_interger = parseInt(id1) + parseInt(id2) + parseInt(id3) + parseInt(id4);
        //sumd = parseFloat(Math.round(sumd * 100) / 100).toFixed(2);
        var sum_numberformat = sum_interger.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
        $('#no1_2_1_2').html(sum_numberformat);

        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_1_2:sum_interger,
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
        var id5 = $('#area-kgm').val();
        if(id5==''||id5=='Empty')
          id5=0;

        if(!id1) id1="0";
        if(!id2) id2="0";
        if(!id3) id3="0";
        if(!id5) id5="0";
        var id1 = id1.replace(/,/g,"");
        var id2 = id2.replace(/,/g,"");
        var id3 = id3.replace(/,/g,"");
        var id5 = id5.replace(/,/g,"");

        var sum_float = (parseInt(id1) + parseInt(id2) + parseInt(id3)) / (parseFloat(id5));
        //2000 10 ตร.กม.
        //2000 / 1 =
        sum_float = parseFloat(Math.round(sum_float * 100) / 100).toFixed(2);
        var sum_numberformat = sum_float.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
        $('#no1_2_9').html(sum_numberformat);

        $.ajax({
            url : "/clinic/form/no1",
            type: "POST",
            data : {
              no1_2_9:sum_float,
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

      //========================================================================================

    //function for no2
    function CalAllArea(){
      var i1 = $('#no2_5_1').text();
      if(i1==''||i1=='Empty')
        i1=0;
      var i2 = $('#no2_5_2').text();
      if(i2==''||i2=='Empty')
        i2=0;
      var i3 = $('#no2_5_3').text();
      if(i3==''||i3=='Empty')
        i3=0;
      var i4 = $('#no2_5_4').text();
      if(i4==''||i4=='Empty')
        i4=0;
      var i5 = $('#no2_5_5').text();
      if(i5==''||i5=='Empty')
        i5=0;
      var i6 = $('#no2_5_6').text();
      if(i6==''||i6=='Empty')
        i6=0;
      var i7 = $('#no2_5_7').text();

      if(i7==''||i7=='Empty')
        i7=0;

      if(!i1) i1="0";
      if(!i2) i2="0";
      if(!i3) i3="0";
      if(!i4) i4="0";
      if(!i5) i5="0";
      if(!i6) i6="0";
      if(!i7) i7="0";
      var rei1 = i1.replace(/,/g,"");
      var rei2 = i2.replace(/,/g,"");
      var rei3 = i3.replace(/,/g,"");
      var rei4 = i4.replace(/,/g,"");
      var rei5 = i5.replace(/,/g,"");
      var rei6 = i6.replace(/,/g,"");
      var rei7 = i7.replace(/,/g,"");
      var sumd = parseFloat(rei1) + parseFloat(rei2) + parseFloat(rei3) + parseFloat(rei4) +parseFloat(rei5) + parseFloat(rei6) + parseFloat(rei7);
        sumd = parseFloat(Math.round(sumd * 100) / 100).toFixed(2);
      var sums = sumd.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no2_5_8').html(sums);

      $.ajax({
          url : "/clinic/form/no2",
          type: "POST",
          data : {
            no2_5_8:sums,
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

    //========================================================================================

    //function for no4
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
    //========================================================================================

    //function for no9
    function Cal(){
      var id1 = $('#no9_4_1').text();
      if(id1==''||id1=='Empty')
        id1=0;
      var id2 = $('#no9_4_2').text();
      if(id2==''||id2=='Empty')
        id2=0;
      var id3 = $('#no9_4_3').text();
      if(id3==''||id3=='Empty')
        id3=0;
      var id4 = $('#no9_4_4').text();
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
      var sumall = parseFloat(id1) + parseFloat(id2) + parseFloat(id3) + parseFloat(id4);
        sumall = parseFloat(Math.round(sumall * 100) / 100).toFixed(2);
      var sumall = sumall.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      $('#no9_4_5').html(sumall);

      $.ajax({
          url : "/clinic/form/no9",
          type: "POST",
          data : {
            no9_4_5:sumall,
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
