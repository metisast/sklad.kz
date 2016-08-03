(function($) {
    $(function() {
        var filterLeftBlock = $('.filter-left');
        var filterRightBlock = $('.filter-right');
        var tabCaptionItems = $('.tabs__caption li');
        var moreDown = $('.more-down');
        var filterItem = $('.filter-layer-item a');
        var filterList = $('.filter-layer-list');
        var filterSubItem = $('.filter-sub ul li');

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

        })

        /* Filter down */
        moreDown.click(function(e){
            e.preventDefault();
            var status = $(this).find('a').data('status');
            var filterSub = $(this).closest('div.filter-layer').find('.filter-sub');
            if(!status){
                $(this).addClass('active-down');
                filterSub.css({
                    display: 'inline-block'
                });
                $(this).find('a').data('status', true);
            }
            else{
                $(this).removeClass('active-down');
                filterSub.hide();
                $(this).find('a').data('status', false);
            }
        });

        /* Activate item */
        filterItem.click(function(e){
            e.preventDefault();
            if(!$(this).parent().is('.more-down'))
            {
                filterList.find('.active-filter-item').removeClass('active-filter-item');
                $(this).addClass('active-filter-item');
            }

            //console.log($(this).parents(filterList).children('.filter-layer-item').length);
        })

        /* Activate sub item */
        filterSubItem.click(function(e){
            e.preventDefault();
            console.log($(this).text());
        });

    });
})(jQuery);