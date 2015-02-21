(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space

// Keep one tab expanded while editing profile
/*$('li div.collapsible-header').on('click',function(e){
  if($(this).parents('li').hasClass('active')){
    e.stopPropagation();
  }
});*/

// Expand "Home" upon loading Edit page
$("document").ready(function() {
  setTimeout(function() {
    $("ul li:first-child div").trigger('click');
  },10);
});

// Sign-up form: Auto generate username based on first name and llast name inputs
$('#last_name').on('blur',function(e) {
    if( document.getElementById('username').value==''
        && document.getElementById('first_name').value!=''
        && document.getElementById('last_name').value!='')
    {
        // combine firstname and lastname to create username
        var username = document.getElementById('first_name').value.substr(0,490)
            + document.getElementById('last_name').value.substr(0,49);
        username = username.replace(/\s+/g, '');
        username = username.replace(/\'+/g, '');
        username = username.replace(/-+/g, '');
        username = username.toLowerCase();
        document.getElementById('username').value = username;

        // username label should translate up
        var label = $('label[for="username"]');
        label['addClass']('active');

        // username underline should turn green
        document.getElementById('username').className = "validate valid";
    }
});