jQuery(document).ready(function ($) {

    $('style, .resumator-job-view-details, .resumator-job-link').remove();

    $('.resumator-job').each (function () {
        $(this).prepend('<a class="resumator-view-details">View Details</a>');
    });

    $('.resumator-view-details').click(function () {
        $(this).siblings('.resumator-job-description').slideToggle('fast');
        $(this).toggleClass('arrow-closed');
        $(this).text(function (i, v) {
            return v === 'View Details' ? 'Hide Details' : 'View Details'
        })
    });
})