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
        var filterBtn = function(text, id, parentId){
            var btn = $("<div>");
            var i = $("<i>");
            var span = $("<span>");

            btn.addClass('filter-btn');
            btn.data('id', id);
            btn.data('parent', parentId);

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
        var getCatalogById = function(id){
            $.ajax({
                url: '/xhr/filter/catalog',
                data: {id : id},
                success: function(data){
                    if(data){
                        filterCatalog.empty();
                        filterTree.append(divider());
                        filterCatalog.append(data);
                    }
                },
                error: function(err){
                    console.log();
                }
            });
        };

        /* Get reload catalogs on click button */
        var getReloadCatalogById = function(parentId){
            $.ajax({
                url: '/xhr/filter/catalog',
                data: {id : parentId},
                success: function(data){
                    if(data){
                        filterCatalog.empty();
                        filterCatalog.append(data);
                    }
                },
                error: function(err){
                    console.log();
                }
            });
        };

        /* Load catalogs */
        $(document).on('click', '.filter-sub-link', function(){
            //Parent block
            var parentBlock = $(this).closest('.filter-sub');
            var catalogId = $(this).data('id');
            var catalogParentId = $(this).data('parent');
            var activeBtn = $('.filter-btn');

            //Hide parent filter
            parentBlock.hide(200);
            filterCatalog.html('');

            activeBtn.each(function(index, value){
                var activeBtnId = $(value).data('parent');
                if(catalogParentId == activeBtnId){

                    filterTree.append(filterBtn($(this).text(), catalogId, catalogParentId));
                    getReloadCatalogById(catalogId);

                    $(value).nextAll().remove();
                    $(value).remove();

                    return false;
                }
            });

            //Call filter button with params
            filterTree.append(filterBtn($(this).text(), catalogId, catalogParentId));
            getCatalogById(catalogId);

            return false;
        });

        /* Reload catalog by to click button */
        $(document).on('click.catalog', '.filter-btn', function(){
            var catalogParentId =  $(this).data('parent');

            getReloadCatalogById(catalogParentId);

        });

    });
})(jQuery);