$(document).on('click', '#create', function() {
  $('#cont').fadeOut(function(){
    $('#cont').html('<button id="again" class="btn btn-danger">Stop Timer</button>');
  });
  
  $('#cont').fadeIn(1000); // 5 second fade
});

$(document).on('click', '#again', function() {
  $('#cont').html('<div><button class="btn btn-primary" id="create">Start Timer</button></div>');
});

$(document).on('click', '#cancel', function() {
  $('#cont').html('<div id="cancel">cancel</div>');
});




  
/** --OR-- you could get the images alt attribute and print that out 

$('#aardvark').click(function() {
  var alt = $(this).attr('alt');
  $('div').html(alt);
});
**/