$(document).ready(function(){

    $('div[data-type="paralax"]').each(function(){
        var $bgobj = $(this);
        $(window).scroll(function() {
        	if(jQuery(window).width() > 500){
            	var yPos = -($(window).scrollTop() / $bgobj.data('speed'));
            	$bgobj.css({ backgroundPosition: 'center '+ yPos + 'px' });
        	}
	        else{
				$bgobj.css({ backgroundPosition: 'fixed' });
	        }
        });
    });
    
});