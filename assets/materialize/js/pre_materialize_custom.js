// Expand accordion section based on URL regex result
// This uses a regular expression to see if the URL contains
// a particular phrase (notably: #home, #project, and #resume),
// and if so, adds an 'active' class to the corresponding element.
$(function() {
    var loc = window.location.href; // returns the full URL
    if(/home/.test(loc)) {
        $('#home').addClass('active');
    } else if(/project/.test(loc)) {
        $('#project').addClass('active');
    } else if(/resume/.test(loc)) {
        $('#resume').addClass('active');
    }
});