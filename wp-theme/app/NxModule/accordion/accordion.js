(function() {

    var $accordion = $('.js-accordion');
    var $toggle = $('.js-accordion-title');
    var $item = $('.js-accordion-item');
    var $body = $('.js-accordion-body');
    var $filterInput = $('.js-accordion-filter');

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

    var filter = function(ev) {

        var $el = $(ev.currentTarget);
        var filter = $el.val().toLowerCase();
        var $items = $el.closest($accordion).find($item);

        for (var i = 0; i < $items.length; i++) {
            var items= $items[i];

            if (items.innerHTML.toLowerCase().indexOf(filter) > -1) {
                items.style.display = "";
            } else {
                items.style.display = "none";
            }
        }
    };

    $toggle.on('click', onClickNav);
    $filterInput.on('keyup', filter)

})();