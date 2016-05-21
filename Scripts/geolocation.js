x = navigator.geolocation;
x.getCurrentPosition(success, failure);

function success(posiiton) {

    // coordinate

    var mylat = posiiton.coords.latitude;
    var mylong = posiiton.coords.longitude;

    // Google Map API - latitude ang longitude

    var coords = new google.maps.LatLng(mylat, mylong);

    // Google Map Setup

    var mapOptions = {
        zoom: 16,
        center: coords,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    var marker = new google.maps.Marker({ map: map, position: coords });

    $('#lat').html("Latitude: " + mylat);
    $('#long').html("Longitude: "+ mylong);
}


function failure() {
    $('#lat').html("<p>Failed to find coordinate, try again later.</p>");
}