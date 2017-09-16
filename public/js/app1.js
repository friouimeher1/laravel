var lat={{$c->lat}};
var lng ={{$c->lng}};
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: lat,
            lng: lng
        },
        zoom: 15,
    });

    var marker = new google.maps.Marker({
        position: {
            lat: lat,
            lng: lng
        },
        map: map
    });
