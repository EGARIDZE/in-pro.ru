setTimeout(function(){
    ymaps.ready(function () {
        var moscow = [55.787194, 37.670824];
        var st = [59.963460, 30.384008]
        var markerStyle = {
            iconLayout: 'default#image',
            iconImageHref: '/local/templates/in_pro/img/map-marker.png',
            iconImageSize: [52, 76],
            iconImageOffset: [-26, -76]
        };
        var myMap = new ymaps.Map('map', {
                center: st,
                zoom: 16,
                behaviors: ['default'],
                controls: ['zoomControl']
            }),

            myPlacemark = window.myPlacemark = new ymaps.Placemark(myMap.getCenter(), {}, markerStyle),
            myPlacemark2 = window.myPlacemark = new ymaps.Placemark(moscow, {}, markerStyle);

        $('.mp1').click(function () {
            //myMap.setCenter(moscow, 3, { checkZoomRange: true});
            myMap.panTo(moscow, {flying: true});
        });

        $('.mp2').click(function () {
            //myMap.setCenter(moscow, 3, { checkZoomRange: true});
            myMap.panTo(st, {flying: true});
        });

        myMap.geoObjects.add(myPlacemark);
        myMap.geoObjects.add(myPlacemark2);
        myMap.behaviors.disable('scrollZoom');

        if (('ontouchstart' in window) || ('ontouchstart' in document.documentElement) || (navigator.MaxTouchPoints > 0) || (navigator.msMaxTouchPoints > 0)) {
            myMap.behaviors.disable('drag');
        }

    });
}, 1000);


// Change address
var addressState = false;
setInterval(function() {
    if (!addressState) {
        $('#st-peterburg-address').fadeOut('medium', function () {
            $('#moscow-address').fadeIn();
        });
        addressState = !addressState;
    } else {
        $('#moscow-address').fadeOut('medium', function() {
            $('#st-peterburg-address').fadeIn();
        });
        addressState = !addressState;
    }
}, 5000);
