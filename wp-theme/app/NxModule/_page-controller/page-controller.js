(function () {

    $(document).ready(function () {

        $('.js-link').on('click', function(ev) {
            ev.preventDefault();
            var $el = $(ev.currentTarget);
            var target = $el.attr('href');
            var $target = $(target);

            $('html,body').animate(
                {
                    scrollTop: $target.offset().top
                },'slow'
            );

            if($el.hasClass('js-link-contact')) {
                var select = $el.closest('.js-content').attr('id');
                var formText = $el.data('form');
                $('.js-select').find('select').val(select);
                $('.js-text').find('textarea').val(formText);
            }
        });

    })


})();
