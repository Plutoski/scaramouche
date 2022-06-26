jQuery(document).ready(function() {

/**
 * Mobile Menu
 */
jQuery('.hamburger').on('click', function() {
    jQuery('.menu').toggleClass('open');
});

jQuery('.chevron').on('click', function() {
    jQuery(this).parent().parent().find('.sub-menu').toggleClass('open');
    jQuery(this).parent().find('.chevron').toggleClass('rotate-180');
});

});