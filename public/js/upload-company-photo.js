/*---------- UPLOAD Company PHOTO ----------*/

(function($){
    $(function(){

        var btnCompanyPhotoUpload = $('.company-photo-upload');
        var companyPhotoPrepare = $('.company-photo-prepare');
        var companyPhotoReady = $('.company-photo-ready');
        var btnReadyImageDelete = companyPhotoReady.find('.fa-close');
        var inputCompanyLogo = companyPhotoReady.find('input[name="company-logo"]');
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
                    companyPhotoPrepare.hide();
                    renderImageTag(data.name, data.companyImagePath);
                    insertValue(data.name);
                },
                error: function(err){
                    console.log(err);
                },
                complete: function(){
                    /*self.find('.loader').remove();*/
                }
            });
        };

        /* Render Image Tag */
        var renderImageTag = function(name, path){
            var img = companyPhotoReady.find('img');
            var input = companyPhotoReady.find('input');

            img.attr('src', path + '/' + name);
            input.val(name);

            companyPhotoReady.fadeIn('fast');
        }

        /* Delete image */
        btnReadyImageDelete.click(function(){
            companyPhotoReady.hide();
            companyPhotoPrepare.fadeIn('fast');
            $.ajax({
                url: '/xhr/company-photo-delete',
                data: {name: inputCompanyLogo.val()},
                success: function(){

                },
                error: function(err){
                    console.log(err);
                }
            });
            deleteValue();
        });

        /* Insert value in the hidden input */
        var insertValue = function(value){
            inputCompanyLogo.val(value);
        }

        /* Delete value in the hidden input */
        var deleteValue = function(){
            inputCompanyLogo.val('');
        }

    });
})(jQuery);


