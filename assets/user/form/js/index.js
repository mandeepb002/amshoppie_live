$(document).ready(function() {
  $('.operator').material_select();
  $('select').change(function() {
    console.log($('select').val());
  })
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });

  $('.close').click(function() {
    $(this).closest('.subpanel.register').toggleClass('open');
    $(this).closest('.panel').toggleClass('open');
  });

  

});


