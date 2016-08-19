(function($) {
    $(function() {
        /*Global ajax config*/
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post'
        });



    });
})(jQuery);