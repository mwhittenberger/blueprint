jQuery( document ).ready(function() {
    if (jQuery(window).width() < 768) {
        jQuery("#hidden-div").css('height', '0');
    }
    else {

        jQuery("#hidden-div").css('height', jQuery('#the-header').height());
    }
});

jQuery( window ).resize(function() {
    if (jQuery(window).width() < 768) {
        jQuery("#hidden-div").css('height', '0');
    }
    else {

        jQuery("#hidden-div").css('height', jQuery('#the-header').height());
    }
});