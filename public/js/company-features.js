/*
*   The company to select features script
* */
(function($) {
    $(function() {

        var companyFeatures = $('#features');
        var modal = $('#modal');
        var i = 0; //count industries

        /* Load the modal dialog with catalog of industries */
        companyFeatures.click(function () {
            modal.modal();

            if($('.modal-dialog').is('#company-features')){
                return false;
            };

            $.ajax({
                url: '/xhr/company_features',
                beforeSend: function () {
                    modal.empty();
                },
                success: function (data) {
                    modal.append(data);
                },
                error: function (err) {
                    console.log(err);
                }
            });
            return false;
        });

        /* Change the counter industries */
        function countUp(operation) {
            var counter = $('#company-features .label-primary i');
            var counterI = +counter.html();

            if(operation == 'plus'){
                counterI = counterI - 1;
                i++;
                counter.html(counterI);
            }else{
                counterI = counterI + 1;
                i--;
                counter.html(counterI);
            }
        }

        /* Select industries */
        $(document).on('click', '.catalog-industry', function () {
            var maxI = $('#company-features').data('count');

            if($(this).is('.active')){
                $(this).removeClass('active');
                countUp('minus');
            }else{
                if(i >= maxI) return false;
                $(this).addClass('active');
                countUp('plus');
            }

            return false;
        });

        $(document).on('click', '#company-features .btn-primary', function () {
            var industriesCat = $('#industries-catalog');
            var inputFeatures = $('#company-publish input[name="features"]');
            var str = [];

            if(i == 0){
                modal.modal('hide');
                industriesCat.empty();
                console.log(i);
                inputFeatures.val('');
                return false;
            }
            industriesCat.empty();

            var industryActive = $('.catalog-industry.active').clone();
            industriesCat.append(industryActive);

            /* Put industries index in hidden input */
            industryActive.each(function(index, elem){
                var id = $(elem).data('industry-id');
                str.push(id);
            });
            inputFeatures.val(str);

            modal.modal('hide');

        });
    });

})(jQuery);