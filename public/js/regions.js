(function($) {
    $(function() {

        var regions = $('#regions');
        var cities = $('#cities');

        regions.change(function () {
            var region_id = $(this).val();

            $.ajax({
                url: '/xhr/city',
                data: {region_id: region_id},
                beforeSend: function () {
                    cities.empty();
                },
                success: function (data) {
                    cities.attr('disabled', false);
                    cities.append(data);
                    cities.trigger('refresh');
                },
                error: function (err) {
                    cities.attr('disabled', true);
                }
            });
        });


    });
})(jQuery);