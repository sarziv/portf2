$(document).ready(function() {
    $('.navFont').click(function(){
        if($('.navbar-toggler').css('display') !='none'){
            $('.navbar-toggler').trigger( "click" );
        }
    });

});