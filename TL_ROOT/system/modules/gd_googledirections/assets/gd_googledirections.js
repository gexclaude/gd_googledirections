/* google directions plugin script for the Contao CMS
 * the script below requires MooTools */
function GDGoogleDirections(moduleId, labels, markerMap) {
	var self = this;

	// flag to track initialization state
	var initialized = false;
	
	// div's to link content to
	var gdMapCanvas;
	var gdDirectionList;
	var gdErrorBox;
	
    var gdMap ;
	var directionsService;
	var directionsDisplay;
	var geocoder;

	var singlePointMarker;

	// initializer function
    function initialize() {
		if (!initialized) {
			// fetch div references
			gdMapCanvas = $('gd_map_canvas' + moduleId);
			gdDirectionList = $('gd_directionList' + moduleId);
			gdErrorBox = $('gd_errorBox' + moduleId);
			
			// map instance to work with
			gdMap = new google.maps.Map(gdMapCanvas, {
				mapTypeControl: true,
				mapTypeControlOptions : {},
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				navigationControl: true,
				navigationControlOptions: {
				  style: google.maps.NavigationControlStyle.ZOOM_PAN
				}
			});
			
			// geocoder instance to geocode locations (address and coordinates)
			geocoder = new google.maps.Geocoder();

			// init directions
			directionsService = new google.maps.DirectionsService();
			directionsDisplay = new google.maps.DirectionsRenderer({panel: gdDirectionList});
			directionsDisplay.setMap(gdMap);

			// add marker if there is any given
			if ('undefined' != typeof markerMap && 'undefined' != typeof markerMap.markerCoords) {
				var mapPoint = new google.maps.LatLng(markerMap.markerCoords.lat,markerMap.markerCoords.lng);
				
				var markerOptions = {
					map: gdMap,
					position: mapPoint
				};
				
				// add custom icon if set
				if ('undefined' != typeof markerMap.icon) {
					markerOptions.icon = new google.maps.MarkerImage(markerMap.icon.url,
						new google.maps.Size(markerMap.icon.size.x, markerMap.icon.size.y),
						new google.maps.Point(markerMap.icon.anchor.x, markerMap.icon.anchor.y));
					if ('undefined' != typeof markerMap.shadow) {
						markerOptions.shadow = new google.maps.MarkerImage(markerMap.shadow.url,
							new google.maps.Size(markerMap.shadow.size.x, markerMap.shadow.size.y),
							new google.maps.Point(markerMap.shadow.anchor.x, markerMap.shadow.anchor.y));
					}
				}
				
				// create marker
				var map_marker = new google.maps.Marker(markerOptions);

				// add info window if set
				if ('undefined' != typeof markerMap.infoWindow) {
					var infowindow = new google.maps.InfoWindow({
						content: markerMap.infoWindow.content,
						pixelOffset: new google.maps.Size(markerMap.infoWindow.anchor.x, markerMap.infoWindow.anchor.y)
					});
					google.maps.event.addListener(map_marker, "click", function() { infowindow.open(gdMap, map_marker); });
					if(markerMap.infoWindow.autoOpen) {
						infowindow.open(gdMap, map_marker);
					}
				}
				
			}
			initialized = true;
		}
	}

	// public method, shows a single point on the map
	this.showMapForSinglePoint = function (point) {
		initialize();
		
		singlePointMarker = new google.maps.Marker({
			map: gdMap,
			position: point
		});

		gdMap.setCenter(point);
		gdMap.setZoom(14);
		gdDirectionList.empty();
	}
	
	// public method, basically triggers directions load
    this.setDirections = function (locations) {
		initialize();
		
		removeError();

		// remove single point marker if present
		if(singlePointMarker)
			singlePointMarker.setVisible(false);

		// filters out empty entries
		var filteredLocations = new Array();
		for(var i = 0; i < locations.length; i++) {
			var currentElement = locations[i];
			if(currentElement.length > 0) {
				filteredLocations.push(currentElement);
			}
		}
		
		// either show map for single location, or trigger directions call
		if(filteredLocations.length == 1) {
			showMapForSinglePointAddress(filteredLocations[0]);
		} else {
			// check for intermediate waypoints
			var waypoints = new Array();
			if(filteredLocations.length > 2) {
				waypoints = filteredLocations.slice(1,filteredLocations.length-1);
				for(var i = 0; i < waypoints.length; i++) {
					// key-values as defined as 'DirectionsWaypoint''
					waypoints[i] = {location:waypoints[i], stopover: false};
				}
			}
			
			// build up directions request
			var request = {
			  origin: filteredLocations[0], 
			  destination: filteredLocations[filteredLocations.length-1],
			  waypoints: waypoints,
			  travelMode: google.maps.DirectionsTravelMode.DRIVING
			};

			// get directions result
			directionsService.route(request, function(response, status) {
			  if (status == google.maps.DirectionsStatus.OK) {
				directionsDisplay.setDirections(response);
			  } else {
				  handleErrors(status);
			  }
			});
		}
	}

	// handle errors, shows messages
    function handleErrors(status){
		gdDirectionList.empty();
		if (status == google.maps.DirectionsStatus.INVALID_REQUEST)
			showError(labels.invalidRequest + "\n Error code: " + status);
		else if (status == google.maps.DirectionsStatus.MAX_WAYPOINTS_EXCEEDED)
			showError(labels.maxWaypointExceeded + "\n Error code: " + status);
		else if (status == google.maps.DirectionsStatus.NOT_FOUND)
			showError(labels.notFound);
		else if (status == google.maps.DirectionsStatus.OVER_QUERY_LIMIT)
			showError(labels.overQueryLimit);
		else if (status == google.maps.DirectionsStatus.REQUEST_DENIED)
			showError(labels.requestDenied + "\n Error code: " + status);
		else if (status == google.maps.DirectionsStatus.UNKNOWN_ERROR)
			showError(labels.defaultError + "\n Error code: " + status);
		else if (status == google.maps.DirectionsStatus.ZERO_RESULTS)
			showError(labels.zeroResults);
		else 
			showError(labels.defaultError + "\n Error code: " + status);
	}

	// show error, hide map
    function showError(error){
		setErrorText(error);
		gdErrorBox.setStyle('display', 'block');
		gdMapCanvas.setStyle('display', 'none');
    }
	
	// remove error, show map
    function removeError(){
		gdMapCanvas.setStyle('display', 'block');
		gdErrorBox.setStyle('display', 'none');
		setErrorText('');
    }

	// set error
	function setErrorText(text){
		gdErrorBox.set('text',text);
    }

	// show map for a single address
	function showMapForSinglePointAddress(address){
		initialize();
		
		// geocode address and dispatch to showMapForSinglePoint
		geocoder.geocode( { 'address': address}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				self.showMapForSinglePoint(results[0].geometry.location);
			} else {
				showError(labels.defaultError);	  
			}
		});
	}
}
