(function($) {
    $(function() {
        /*Global ajax config*/
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post'
        });

        /* Main variable */
        var filterLeftBlock = $('.filter-left');
        var filterRightBlock = $('.filter-right');
        var tabCaptionItems = $('.tabs__caption li');
        var moreDown = $('.more-down a');
        var filterSubLink = $('.filter-sub-link');
        var textMuted = $('.filter-layer-item .text-muted');

        /* Filter show */
        tabCaptionItems.click(function(){
            var show = tabCaptionItems.data('show');
            if(show){
                filterLeftBlock.hide();
                filterRightBlock.hide();
                tabCaptionItems.data('show', false);
                $(this).removeClass('active');
            }else{
                filterLeftBlock.show();
                filterRightBlock.show();
                tabCaptionItems.data('show', true);
            }

        });

        /* Filter sub down */
        function filterSubDown(list){
            var status = list.data('status');
            var filterSub = list.closest('div.filter-layer').find('.filter-sub');
            if(!status){
                //list.addClass('active-down');
                filterSub.css({
                    display: 'block'
                });
                list.data('status', true);
            }
            else{
                //list.removeClass('active-down');
                filterSub.hide();
                list.data('status', false);
               //console.log('t');
            }
            //console.log(status);
        }

        moreDown.click(function(e){
            e.preventDefault();
            filterSubDown($(this));
            //console.log($(this));
        });

        /* Activate item */
        $(document).on('click', '.filter-sub-link', function(e){
            e.preventDefault();
            var text = $(this).text();
            var dataId = $(this).data('id');
            $(this).parent().parent().parent().find('.filter-layer-list a').text(text).attr('data-id', dataId);
            filterSubDown($(this).parent().parent().parent().find(moreDown));
        });

        /* Stop redirect link function */
        textMuted.click(function(){
            return false;
        })

        /* Get catalog */
        var getCatByInd = $('#filter-industry .filter-sub-link');
        getCatByInd.click(function(){
            var context = $(this);
            var catFilter = context.parents('.filter-layer').next();
            var defaultText = catFilter.find('a').data('hidden');
            var a = catFilter.find('a');
            /* Ajax */
            $.ajax({
                url: '/xhr/filter/category',
                dataType: 'html',
                data:{ind_id: $(this).data('id')},
                beforeSend: function(){
                    a.text(defaultText);
                    a.data('status', true);
                    catFilter.find('.filter-sub').remove();
                    catFilter.find('.text-muted').removeClass('text-muted');

                    /* Reset product type */
                    var productType = $(document).find('#filter-product-type');
                    var productTypeTitle = productType.parent().find('.filter-layer-item a');
                    productTypeTitle.text(productTypeTitle.data('hidden'));
                    productType.remove();
                },
                success: function(data){
                    catFilter.append(data);
                },
                error: function(err){
                    console.log(err);
                }
            });
        });

        /* Get product type */
        $(document).on('click', '#filter-category .filter-sub-link', function(){
            var context = $(this);
            var catFilter = context.parents('.filter-layer').next();
            var defaultText = catFilter.find('a').data('hidden');
            var a = catFilter.find('a');
            //console.log(context);
            /* Ajax */
            $.ajax({
                url: '/xhr/filter/product-type',
                dataType: 'html',
                data:{cat_id: $(this).data('id')},
                beforeSend: function(){
                    a.text(defaultText);
                    a.data('status', true);
                },
                success: function(data){
                    catFilter.find('.filter-sub').remove();
                    catFilter.find('.text-muted').removeClass('text-muted');
                    catFilter.append(data);
                },
                error: function(err){
                    console.log(err);
                }
            });
        });

    });
})(jQuery);