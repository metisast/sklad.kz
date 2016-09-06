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
        var mainCatalogItem = $('.tabs__caption > li');
        var filterLeft = $('.filter-left');

        /* Get the main catalogs */
        mainCatalogItem.click(function(){
            var id = $(this).data('id');

            $.ajax({
                url: '/xhr/filter/main_catalog',
                data: {id: id},
                beforeSend: function(){
                    filterLeft.empty();
                },
                success:function(data){
                    filterLeft.append(data);
                }
            });
        });

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
            var filterTree = $('.filter-tree');
            var filterCatalog = $('.filter-catalog');

            $.ajax({
                url: '/xhr/filter/catalog',
                data: {id : id},
                success: function(data){
                    if(data){
                        filterCatalog.empty();// To clear the filter of catalog block
                        filterTree.append(divider());// Create divider
                        filterCatalog.append(data);// Append backend data
                    }
                },
                error: function(err){
                    console.log();
                }
            });
        };

        /* Get reload catalogs on click button */
        var getReloadCatalogById = function(parentId, mainCatalog){
            var filterCatalog = $('.filter-catalog');

            $.ajax({
                url: '/xhr/filter/catalog',
                data: {id : parentId},
                success: function(data){
                    if(data){
                        filterCatalog.empty();// To clear the filter of catalog block
                        filterCatalog.append(data);// Append backend data
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
            var filterTree = $('.filter-tree');

            //Hide parent filter
            parentBlock.hide(200);

            //Remove All the active class in buttons
            activeBtn.removeClass('active');

            // Inspection on data parent for reloads of filter catalogs
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
            var filterCatalog = $('.filter-catalog');
            var catalogParentId =  $(this).data('parent');

            if($(this).is('.active')){
                filterCatalog.empty();
                $(this).removeClass('active');
            }else{
                $(this).addClass('active');

                getReloadCatalogById(catalogParentId);
            }
        });

        /* Get the reload first button */
        $(document).on('click.catalog', '.filter-btn:first-child', function(){
            var activeMainCatalogItem = $('.tabs__caption > li.active').data('id');

            $.ajax({
                url: '/xhr/filter/main_catalog',
                data: {id: activeMainCatalogItem},
                beforeSend: function(){
                    filterLeft.empty();
                },
                success:function(data){
                    filterLeft.append(data);
                }
            });
        });

    });
})(jQuery);