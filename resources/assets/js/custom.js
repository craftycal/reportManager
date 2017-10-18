$( document ).ready(function() {
  // $( "#click" ).click(function() {
  //   $( "#pop" ).toggle();
  // });
  $( ".sideNavButton" ).click(function() {
    $('.sideMenu').toggleClass('widthOff');
    $('.sideNavButton').toggleClass('positionOff');
  });
});
