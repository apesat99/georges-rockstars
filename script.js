
// Mobile menu dropdown function

$("#menu").click(function() {
  $("#dropdown").toggle().css("display", "grid");
}
);

// Mobile menu dropdown close on click outside

$(document).mouseup(function(e){
  var container = $("#dropdown");

  if(!container.is(e.target) && container.has(e.target).length === 0){
    container.hide();
  }
});


$("#donate").click(function() {
  window.open("https://www.gofundme.com/f/george039s-rockstars");

});

$("#donate-dropdown").click(function() {
  window.open("https://www.gofundme.com/f/george039s-rockstars");
});

$("#donate-hero").click(function(){
  window.open("https://www.gofundme.com/f/george039s-rockstars");
});

$(document).ready(function () {
    $( ".contact-button" ).click(function() {
        $( ".contact-form" ).submit();
    });
});
