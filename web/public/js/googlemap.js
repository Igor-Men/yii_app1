$(document).ready(function() {
    initializeGoogleMap();
});

// Call this function when the page has been loaded
function initializeGoogleMap() {
	var mapElement = document.getElementById("google-map-location");
	if(mapElement == null) {
		return false;
	}
    var myLatlng = new google.maps.LatLng(40.712655,-74.00425);
    var myOptions = {
        zoom: 12,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(mapElement, myOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map
    });
}