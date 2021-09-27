function initMap() {
    // Styles a map in night mode.
    var map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 51.1987975, lng: 24.6764611 },
        zoom: 17,
        disableDefaultUI: true,
        styles: [{
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#58838c"
                }]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#b6cace"
                }]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "visibility": "off"
                }]
            }
        ]
    });
    var image = 'wp-content/themes/yriea/styles/marker.png';
    var beachMarker = new google.maps.Marker({
        position: { lat: 51.203, lng: 24.6701 },
        map: map,
        icon: image,
        title: "ТЦ Ювант"
    });
}