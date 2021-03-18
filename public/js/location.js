
	// var searchInput = 'location';
			
	// 		$(document).ready(function () {
	// 		var autocomplete;
	// 		autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
	// 		types: ['geocode'],
		
	// 		});
			
	// 		google.maps.event.addListener(autocomplete, 'place_changed', function () {
	// 		var near_place = autocomplete.getPlace();
	// 		});
	// 		});



            // Bias the autocomplete object to the user's geographical location,
        // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
              var geolocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
              };
              var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
              });
              Address.setBounds(circle.getBounds());
            });
          }

        }
          function initAutocomplete() {
              Address = new
                      google.maps.places.Autocomplete(
                              /** @type {!HTMLInputElement}

                               */(document.getElementById('location')),
                              {types: ['geocode'], componentRestrictions: {country: 'Ph'}});

              Address.addListener('place_changed', fillInAddress);
          }
          function fillInAddress() {
            var place = Address.getPlace();
            console.log(place);
          document.getElementById('latitude').value = place.geometry.location.lat();
          document.getElementById('longitude').value = place.geometry.location.lng();
        }
    
