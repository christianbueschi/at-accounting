(function() {

    var $nav = $('.js-nav');
    var $search = $('.js-search');
    var $body = $('body');

    var onClickNav = function(ev) {
        ev.preventDefault();
        $body.toggleClass('is-nav-open');
    };

    var onClickSearch = function(ev) {
        ev.preventDefault();
        $body.toggleClass('is-search-open');
    };

    $nav.on('click', onClickNav);
    $search.on('click', onClickSearch);

})();