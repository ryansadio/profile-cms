(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space

// Keep one tab expanded while editing profile
$('li div.collapsible-header').on('click',function(e){
  if($(this).parents('li').hasClass('active')){
    e.stopPropagation();
  }
});

// Expand "Home" upon loading Edit page
$("document").ready(function() {
  setTimeout(function() {
    $("ul li:first-child div").trigger('click');
  },10);
});