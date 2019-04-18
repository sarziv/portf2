$(document).ready(function() {

    $('.navFont').click(function(){
        if($('.navbar-toggler').css('display') !=='none'){
            $('.navbar-toggler').trigger( "click" );
        }

});

});

function offsetDesktop() {
    var offset = 60;
if(screen.width > 900){
    $('.navFont').click(function(event) {
        event.preventDefault();
        $($(this).attr('href'))[0].scrollIntoView();
        scrollBy(0, -offset);
    });
}
}
