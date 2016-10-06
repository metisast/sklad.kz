/*---------- Company publish ----------*/

(function($) {
    $(function () {

        var btnPublish = $('#btn-ad-publish');
        var formInputs = $('#ad-publish');
        var adCompanyRadios = $('#ad-company-radios').find('input');
        var adCompanySelectBlock = $('#ad-company-select');
        var adCompanySelect = $('#ad-company-select select');

        btnPublish.click(function(){
            /* Show loading action */
            //$(this).button('loading');

            var data = formInputs.serialize();
            var path = formInputs.data('path');
            var redirectPath = $(this).data('redirect');

            $.ajax({
                url: path,
                data: data,
                success: function(data){
                    $('.has-error').removeClass('has-error');
                    $('.control-label').remove();
                    $('#error-fields').remove();

                    //window.location.href = redirectPath + '?n=' + new Date().getTime();
                },
                error: function(err){
                    errorTopMessage();
                    var fields = JSON.parse(err.responseText);
                    $('.has-error').removeClass('has-error');
                    $('.control-label').remove();
                    for(var key in fields){
                        var field = $("[name="+key+"]");
                        console.log(field);
                        field.parents('.input-required').addClass('has-error').append(errorMessage(fields[key]));
                    }
                },
                complete: function(){
                    btnPublish.button('reset');
                }
            });

             return false;
        });

        /* Show inputs error */
        var errorMessage = function(field){
            var errorLabel = $('<label>').addClass('control-label').text(field);
            return errorLabel;
        };

        /* Show top message */
        var errorTopMessage = function(){
            var block = $('#product');
            var errorFields = $('#error-fields');
            /*$.ajax({
                url: '/xhr/messages/error',
                success: function(data){
                    errorFields.remove();
                    block.prepend(data);
                }
            });*/

            $('body, html').animate({
                scrollTop: 100
            }, 1000);
        };

        /* Create companies select */
        adCompanyRadios.change(function(){
            $(this).val() == 2 ? getCompaniesSelect() : clearCompanies();
            adCompanySelect.trigger('refresh');
        });

        /* Query and render companies */
        var getCompaniesSelect = function(){
            adCompanySelectBlock.show();
            ajaxSelect('/xhr/ad-list/companies', '', adCompanySelect);
        }

        /* Clear companies block */
        var clearCompanies = function(){
            adCompanySelectBlock.hide();
        }

    });
})(jQuery);