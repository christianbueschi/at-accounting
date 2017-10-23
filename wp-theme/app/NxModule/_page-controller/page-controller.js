(function () {


    $(document).ready(function () {


        // Create Link Wrapper for FancyBox

        var $images = $('.o-content img');

        $images.each(function (index, image) {
            var $image = $(image);
            var href = $image.attr('src');
            var caption = $image.attr('alt');
            $image.wrap('<a data-fancybox="group" data-caption="' + caption +'" href="' + href + '">');
        });


        $('[data-fancybox]').fancybox({
            buttons: [
                'close'
            ]
        });
    })


})();
