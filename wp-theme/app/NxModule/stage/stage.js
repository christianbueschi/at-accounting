(function() {

    var options = {
        stringsElement: '#js-subheadings',
        typeSpeed: 60,
        loop: true,
        loopCount: 1,
        backDelay: 2000
    };

    if($('#js-subheadings').length > 0) {
        new Typed('#js-subheading', options);
    }

})();