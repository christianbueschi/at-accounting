(function () {

    var $nav = $('.js-nav');
    var $search = $('.js-search');
    var $searchInput = $('.js-search-input');
    var $body = $('body');

    var onClickNav = function (ev) {
        ev.preventDefault();
        $body.toggleClass('is-nav-open');
    };

    var onClickSearch = function (ev) {
        ev.preventDefault();
        $body.toggleClass('is-search-open');
        $body.removeClass('is-nav-open');

        if($body.hasClass('is-search-open')) {
            $searchInput.focus();
        } else {
            $searchInput.blur();
        }
    };

    var onScrollBody = function() {
        if(window.pageYOffset > 50) {
            $body.addClass('is-sticky-header');
        }  else {
            $body.removeClass('is-sticky-header');
        }
    };

    $nav.on('click', onClickNav);
    $search.on('click', onClickSearch);

    $(window).on('scroll', onScrollBody)

})();
