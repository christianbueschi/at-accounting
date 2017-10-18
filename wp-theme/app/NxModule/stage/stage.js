(function() {

    var onComplete = function() {
        $('.typed-cursor').hide();
    };

    var options = {
        stringsElement: '#js-subheadings',
        typeSpeed: 60,
        loop: true,
        loopCount: 1,
        backDelay: 1000,
        onComplete: onComplete
    };

    if($('#js-subheadings').length > 0) {
        new Typed('#js-subheading', options);
    }

})();