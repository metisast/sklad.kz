/*---------- UPLOAD Ad images ----------*/

(function($){
    $(function(){

        /*---------- Upload images ----------*/
        var btnFile = $('.btn-file');
        var image = $('.btn-file img');
        var imagesPath = $('#publish-images').data('path');
        var imageDelete = $('#publish-images').data('delete');
        var files;

        btnFile.on('change.upload','input', function(event){
            event.preventDefault();
            event.stopPropagation();

            files = this.files;
            var self = $(event.delegateTarget);

            console.log(event.delegateTarget);
            if(files){
                var data = new FormData();
                $.each(files, function(key, value){
                    data.append(key, value);
                });
                setImage(self, data);
            }
        });

        var setImage = function(self, data){
            $.ajax({
                url: imagesPath,
                contentType: false,
                processData: false,
                data: data,
                beforeSend: function(){
                    self.empty().append(loader());
                },
                success: function(data){
                    console.log(data.name);
                    showImage(self, data);
                },
                error: function(err){
                    console.log(err.responseText);
                },
                complete: function(){
                    self.find('.loader').remove();
                }
            });
        };

        var showImage = function(self, data){
            var img = $('<img>');
            img.attr('src', data.tmpImagePath + data.name);
            self.empty().append(img);

            var btnClose = $('<button>');
            var btnCloseIco = $('<i>');
            btnClose.addClass('btn btn-danger btn-delete-image').css({
                right: '0',
                position: 'absolute',
                top: '0'
            });
            btnCloseIco.addClass('fa fa-close');
            btnClose.append(btnCloseIco);

            var images = $('<input>').attr({
                type: 'hidden',
                name: 'images[]',
                form: 'publish',
                value: data.name
            });

            self.append(btnClose);
            self.append(images);
        };

        /*Delete image*/
        $(document).delegate('.btn-delete-image', 'click', function(e){
            e.preventDefault();
            e.stopPropagation();

            var src = $(this).prev().attr('src');
            var a = src.split('/');
            var imageName = a[a.length-1];
            var self = $(this).parent();
            $.ajax({
                url: imageDelete,
                data: {imageName: imageName},
                success: function(data){
                    var plus = $('<i>').addClass('fa fa-picture-o fa-3x');
                    var input = $('<input>').attr('type', 'file');
                    self.empty().append(plus,[input]);
                },
                error: function(err){
                    console.log(err);
                },
                complete: function(){

                }
            });

        });
    });
})(jQuery);