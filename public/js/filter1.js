(function($) {
    $(function() {
        /*Global ajax config*/
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post'
        });

        /* Main variables */
        var filterCatalog = $('.filter-catalog');
        var filterTree = $('.filter-tree');

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

        /* Render the divider */
        var divider = function(){
            var filter = $('<div>');
            var i = $('<i>');

            filter.addClass('filter-divider');
            i.addClass('fa fa-angle-right fa-2x');
            filter.append(i);

            return filter;
        };

        /* Get catalogs */
        var gerCatalogById = function(id){
            $.ajax({
                url: '/xhr/filter/catalog',
                data: {id : id},
                success: function(data){
                    if(data){
                        filterTree.append(divider());
                        filterCatalog.append(data);
                    }
                },
                error: function(err){
                    console.log();
                }
            });
        };

        $(document).on('click', '.filter-sub-link', function(){
            //Parent block
            var parentBlock = $(this).closest('.filter-sub');
            var catalogId = $(this).data('id');

            //Hide parent filter
            parentBlock.hide(200);

            //Call filter button with params
            filterTree.append(filterBtn($(this).text()));
            gerCatalogById(catalogId);

            return false;
        });

    });
})(jQuery);