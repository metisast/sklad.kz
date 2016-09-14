/*---------- UPLOAD Company PHOTO ----------*/

(function($){
    $(function(){

        var btnCompanyPhotoUpload = $('.company-photo-upload');
        var files;

        btnCompanyPhotoUpload.change(function(event){
            files = this.files;

            var self = $(event.delegateTarget);

            if(files){
                var data = new FormData();
                $.each(files, function(key, value){
                    data.append(key, value);
                });
                setProductImage(self, data);
            }
        });

        var setProductImage = function(self, data){
            $.ajax({
                url: '/xhr/company-photo-upload',
                contentType: false,
                processData: false,
                data: data,
                beforeSend: function(){
                    /*console.log(self.attr('class'));
                    self.empty().append(loader());*/
                },
                success: function(data){
                    /*console.log(data.productImage);
                    showImage(self, data);
                    deleteImage();*/
                    console.log(data);
                },
                error: function(err){
                    console.log(err);
                },
                complete: function(){
                    /*self.find('.loader').remove();*/
                }
            });
        };

    });
})(jQuery);


