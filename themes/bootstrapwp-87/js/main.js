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

jQuery( document ).ready(function() {

    // Resive video
    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');

    jQuery(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });

});

/** Reusable Functions **/
/********************************************************************/

function scaleVideoContainer() {

    var height = jQuery(window).height();
    var unitHeight = parseInt(height) + 'px';
    jQuery('.video-container').css('height',unitHeight);

}

function initBannerVideoSize(element){

    jQuery(element).each(function(){
        jQuery(this).data('height', jQuery(this).height());
        jQuery(this).data('width', jQuery(this).width());
    });

    scaleBannerVideoSize(element);

}

function scaleBannerVideoSize(element){

    var windowWidth = jQuery(window).width(),
        windowHeight = jQuery(window).height(),
        videoWidth,
        videoHeight;

    console.log(windowHeight);

    jQuery(element).each(function(){
        var videoAspectRatio = jQuery(this).data('height')/jQuery(this).data('width'),
            windowAspectRatio = windowHeight/windowWidth;

        if (videoAspectRatio > windowAspectRatio) {
            videoWidth = windowWidth;
            videoHeight = videoWidth * videoAspectRatio;
            jQuery(this).css({'top' : -(videoHeight - windowHeight) / 2 + 'px', 'margin-left' : 0});
        } else {
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            jQuery(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});
        }

        jQuery(this).width(videoWidth).height(videoHeight);

        jQuery('.homepage-hero-module .video-container video').addClass('fadeIn animated');


    });
}