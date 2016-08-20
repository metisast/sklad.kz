(function($) {
    $(function() {
        /*Global ajax config*/
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post'
        });

        /* Main varibles */
        var filterSubLink = $('.filter-sub-link');

        /* Render the filter btn */
        var filterBtn = function(text){
            var btn = $("<div>");
            var i = $("<i>");
            var span = $("<span>");

            btn.addClass('filter-btn');
            i.addClass('fa fa-bell');
            span.text(text);

            btn.append([i, span]);

            return btn;
        };

        filterSubLink.click(function(){
            //Parent block
            var parentBlock = $(this).closest('.filter-sub');

            //Hide parent filter
            parentBlock.hide(200);

            //Call filter button with params
            parentBlock.parent().append(filterBtn($(this).text()));

            return false;
        });

    });
})(jQuery);