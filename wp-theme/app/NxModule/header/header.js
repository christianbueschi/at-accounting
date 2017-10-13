(function() {

    var $nav = $('.js-nav');
    var $body = $('body');

    var onClickNav = function(ev) {
        ev.preventDefault();
        $body.toggleClass('is-nav-open');
    };

    $nav.on('click', onClickNav);

})();