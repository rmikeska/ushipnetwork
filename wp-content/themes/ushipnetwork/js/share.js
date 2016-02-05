jQuery(document).ready(function ($) {

  var socialLink = $('.share-icon');

    socialLink.live('click', function (){
        newwindow = window.open($(this).attr('href'),'','height=450,width=700');
        if (window.focus) {newwindow.focus()}
        return false;
    });
});