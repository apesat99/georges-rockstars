
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
