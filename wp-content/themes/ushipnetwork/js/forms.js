jQuery(document).ready(function ($) {

    // Business Shippers Pardot Form - Validation
    $('#form-business-shippers').validate({
        onkeyup: false,
        rules: {
            firstname: 'required',
            lastname: 'required',
            company: 'required',
            email: 'required',
            phone: 'required',
            iminterestedin: 'required'
        },
        messages: {
            firstname: 'Please enter your first name',
            lastname: 'Please enter your last name',
            company: 'Please enter your company name',
            email: 'Please enter your email address',
            phone: 'Please enter your phone number',
            iminterestedin: 'Please select what you\'re interested in',
        },
        errorContainer: '.errorAlert',
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        },
        invalidHandler: function (event, validator) {
            var errors = validator.numberOfInvalids();
            if (errors == 1) {
                $('.errorAlert').text('Please correct the error below.');
            } else {
                $('.errorAlert').text('Please correct the errors below.');
            }
        },
        submitHandler: function (form) {
            $('.modal').hide();
            $('body').append ($('\
                <div class="formSuccess-overlay">\
                    <div class="formSuccess">\
                      <div class="formSuccess-inner">\
                        <h3 class="formSuccess-intro">Thank you</h3>\
                        <div class="formSuccess-body">\
                            <p class="formSuccess-body-text">Thanks for getting in touch. One of our representatives will contact you soon.</p>\
                        </div>\
                        <a class="formSuccess-cta button buttonPrimary buttonLarge" type="button" href="">Got It</a>\
                      </div>\
                      <a href="" class="formSuccess-close"></a>\
                    </div>\
                </div>\
            '));

            $('.formSuccess-overlay').on('click', function (e) {
                var subject = $('.formSuccess');
                if(e.target.class != subject.attr('class')) {
                    subject.fadeOut();
                    $('.formSuccess-overlay').fadeOut();
                }
            });

            $('.formSuccess-cta, .formSuccess-close').on('click', function (e) {
                e.preventDefault();
                $('.formSuccess, .formSuccess-overlay').fadeOut();
            });

            $('.formSuccess').show().delay(2000);
            form.submit();
            return false;
        }
    });



    // Business Shippers Pardot Form - Success Modal
    // if (document.URL.indexOf('success=true') !== -1) {
    //     $('body').append ($('\
    //         <div class="formSuccess-overlay">\
    //             <div class="formSuccess">\
    //               <div class="formSuccess-inner">\
    //                 <h3 class="formSuccess-intro">Thank you</h3>\
    //                 <div class="formSuccess-body">\
    //                     <p class="formSuccess-body-text">Thanks for getting in touch. One of our representatives will contact you soon.</p>\
    //                 </div>\
    //                 <a class="formSuccess-cta button buttonPrimary buttonLarge" type="button" href="">Got It</a>\
    //               </div>\
    //               <a href="" class="formSuccess-close"></a>\
    //             </div>\
    //         </div>\
    //     '));

    //     $('.formSuccess-overlay').on('click', function (e) {
    //         var subject = $('.formSuccess');
    //         if(e.target.class != subject.attr('class')) {
    //             subject.fadeOut();
    //             $('.formSuccess-overlay').fadeOut();
    //         }
    //     });

    //     $('.formSuccess-cta, .formSuccess-close').on('click', function (e) {
    //         e.preventDefault();
    //         $('.formSuccess, .formSuccess-overlay').fadeOut();
    //     });
    // }



    // Contact Form - Validation

    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    $(function () {
        var value = getParameterByName('i');
        if (value !== '')
            $('#inquiry-type').val(value);
    });

    $('#form-contact').validate({
        onkeyup: false,
        rules: {
            subject: 'required',
            email: 'required',
            question: 'required'
        },
        messages: {
            subject: 'Please enter a subject',
            email: 'Please enter your email address',
            question: 'Please tell us your question, problem, or concern'
        },
        errorContainer: '.errorAlert',
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        },
        invalidHandler: function (event, validator) {
            var errors = validator.numberOfInvalids();
            if (errors == 1) {
                $('.errorAlert').text('Please correct the error below.');
            } else {
                $('.errorAlert').text('Please correct the errors below.');
            }
        },
        submitHandler: function (form) {
            $.ajax({
                type: 'POST',
                data: $(form).serialize(),
                url: '/wp-content/themes/ushipnetwork/template-parts/forms/form-contact-process.php',
                success: function () {

                    $(form)[0].reset();

                    $('body').append ($('\
                        <div class="formSuccess-overlay">\
                            <div class="formSuccess">\
                              <div class="formSuccess-inner">\
                                <h3 class="formSuccess-intro">Thank you</h3>\
                                <div class="formSuccess-body">\
                                    <p class="formSuccess-body-text">Thanks for getting in touch. One of our representatives will contact you soon.</p>\
                                </div>\
                                <a class="formSuccess-cta button buttonPrimary buttonLarge" type="button" href="">Got It</a>\
                              </div>\
                              <a href="" class="formSuccess-close"></a>\
                            </div>\
                        </div>\
                    '));

                    $('.formSuccess-overlay').on('click', function (e) {
                        var subject = $('.formSuccess');
                        if(e.target.class != subject.attr('class')) {
                            subject.fadeOut();
                            $('.formSuccess-overlay').fadeOut();
                        }
                    });

                    $('.formSuccess-cta, .formSuccess-close').on('click', function (e) {
                        e.preventDefault();
                        $('.formSuccess, .formSuccess-overlay').fadeOut();
                    });
                }
            });
            return false;
        }
    });
})