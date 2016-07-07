$(document).ready(function() {
  $(".select2_single").select2({
    placeholder: "Select a state",
    allowClear: true
  });
  $(".select2_group").select2({});
  $(".select2_multiple").select2({
    maximumSelectionLength: 4,
    placeholder: "With Max Selection limit 4",
    allowClear: true
  });
});

$(document).ready(function() {

    $.fn.editable.defaults.mode = 'inline';
    $('#female').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'female',
           title: 'จำนวนผู้หญิง'
    });
    $('#male').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'male',
           title: 'จำนวนผู้ชาย'
    });
    $('#child_female').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'male',
           title: 'จำนวนผู้ชาย'
    });
    $('#child_male').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'male',
           title: 'จำนวนผู้ชาย'
    });
    $('#mature_female').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'male',
           title: 'จำนวนผู้ชาย'
    });
    $('#mature_male').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'male',
           title: 'จำนวนผู้ชาย'
    });
    $('#elder_female').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'male',
           title: 'จำนวนผู้ชาย'
    });
    $('#elder_male').editable({
           url: 'Form_No1.html',
           type: 'text',
           pk: 1,
           name: 'male',
           title: 'จำนวนผู้ชาย'
    });
});
