(function() {

    var $toggle = $('.js-accordion-title');
    var $item = $('.js-accordion-item');
    var $body = $('.js-accordion-body');

    var toggleClass = 'is-accordion-open';

    var $currentItem = $({});

    var onClickNav = function(ev) {
        ev.preventDefault();
        var $clickedItem = $(ev.currentTarget).closest($item);
        handleItem($clickedItem);
    };

    var handleItem = function($clickedItem) {

        if($clickedItem.is($currentItem)) {
            closeItem($clickedItem);
            $currentItem = $({});

        } else {
            closeItem($currentItem);
            openItem($clickedItem);
            $currentItem = $clickedItem;
        }
    };

    var openItem = function($item) {
        $item.addClass(toggleClass);
        $item.find($body).slideDown();
    };

    var closeItem = function($item) {
        $item.removeClass(toggleClass);
        $item.find($body).slideUp();
    };

    $toggle.on('click', onClickNav);

})();