(function($){

    $(function(){

        var formPublish = $('#ad-publish');
        var btnHeading = $('#btn-heading');
        var modal = $('#modal');
        var adHeadingBreacrumb = $('    #ad-heading-breadcrumb');

        /* Show modal dialog */
        btnHeading.click(function(){
            modal.modal();

            $.ajax({
                url: '/xhr/ad-list/modal',
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

        /* Clicked main catalogs */
        $(document).on('click', '.ad-list-group a', function(){

            var id = $(this).data('id');
            var listTitle = $(this).text();
            var adHeadingResult = $('.ad-heading-wrapper .ad-heading-result');

            $.ajax({
                url: '/xhr/ad-list/heading',
                data: {id: id, listTitle: listTitle},
                beforeSend: function(){
                    adHeadingResult.empty();
                },
                success: function(data){
                    adHeadingResult.append(data);
                },
                error: function(err){
                    console.log(err);
                }
            });

            return false;
        });

        /* Click sub catalogs */
        $(document).on('click', '.ad-heading-result .list-group-item', function(){

            var id = $(this).data('id');
            var listTitle = $(this).text();
            var adHeadingResult = $('.ad-heading-wrapper .ad-heading-result');
            var self = $(this);

            $.ajax({
                url: '/xhr/ad-list/heading/catalog',
                data: {parent_id: id, listTitle: listTitle},
                success: function(data){
                    if(data.status == 'end') {
                        self.closest('.col-xs-3').next().remove();//remove next group-list
                        adHeadingComplete();
                        return false;
                    }

                    self.closest('.col-xs-3').next().remove();//remove next group-list
                    adHeadingResult.append(data);
                },
                error: function(err){
                    console.log(err);
                }
            });

            return false;
        });

        /* Class active */
        $(document).on('click', '.ad-heading-wrapper .list-group-item', function(){
            $(this).parent().find('.active').removeClass('active');
            $(this).addClass('active');
        });

        /* Completed */
        var adHeadingComplete = function(){
            modal.modal('hide');
            var adHeadingWrapper = $('.ad-heading-wrapper');
            var activities = adHeadingWrapper.find('.list-group-item.active');
            var lastIndex = $(activities[activities.size()-1]).data('id');
            breadCrumb(activities);// create breadcrumb
            insertValue(lastIndex);// insert hidden values
        };

        /* Render breadcrumb for ad headings */
        var breadCrumb = function(lists){
            adHeadingBreacrumb.empty();

            $(lists).each(function(index, item){
                var angle = $('<i>').addClass('fa fa-angle-right');

                adHeadingBreacrumb.append($(item).text());
                (index < $(lists).size()-1) ? adHeadingBreacrumb.append(angle) : '';
            });
        };

        /* Insert values in hidden input */
        var insertValue = function(value){
            var hiddenHeadingInput = formPublish.find("[name='industry_id']");
            hiddenHeadingInput.val(value);
            console.log(hiddenHeadingInput.val());
        };

    });

})(jQuery);