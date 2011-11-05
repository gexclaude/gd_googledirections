<?php /* the script below requires MooTools */ ?>
<script type="text/javascript">
    var initialized = false;
    var gdMap;
    var gdir;
    var geocoder = null;
    var addressMarker;
	var singlePointMarker;

    function initialize() {
		if (!initialized && GBrowserIsCompatible()) {
			geocoder = new GClientGeocoder();
			
			gdMap = new GMap2($('gd_map_canvas'));
			gdMap.addControl(new GLargeMapControl());
			gdMap.addControl(new GMapTypeControl());

			gdir = new GDirections(gdMap, $('gd_directionList'));
			GEvent.addListener(gdir, "load", onGDirectionsLoad);
			GEvent.addListener(gdir, "error", handleErrors);

			<?php if ($this->marker) : ?>
			var map_point = new GLatLng(<?php echo $this->marker_coords; ?>);
			var map_icon = new GIcon(G_DEFAULT_ICON);
			<?php if ($this->icon) : ?>
				map_icon.image = "<?php echo $this->icon; ?>";
				<?php if ($this->shadow || (is_array($this->shadow) && sizeof($this->shadow) < 1)) : ?>
				map_icon.shadow = "<?php echo $this->shadow; ?>";
				map_icon.shadowSize = new GSize(<?php echo $this->shadowsize; ?>);
				<?php endif; ?>
				map_icon.iconSize = new GSize(<?php echo $this->iconsize; ?>);
				map_icon.iconAnchor = new GPoint(<?php echo $this->iconanchor; ?>);
			<?php endif; ?>
			map_marker = new GMarker(map_point, map_icon);
			gdMap.addOverlay(map_marker);
			<?php if ($this->infowindow) : ?>
				map_icon.infoWindowAnchor = new GPoint(<?php echo $this->infowindow_anchor; ?>);
				GEvent.addListener(map_marker, "click", function() { map_marker.openInfoWindowHtml("<?php echo $this->infowindow_text; ?>"); });
				<?php if ($this->infowindow_auto) : ?>
				map_marker.openInfoWindowHtml("<?php echo $this->infowindow_text; ?>");
				<?php endif; ?>
			<?php endif; ?>
			<?php endif; ?>

			initialized = true;
		}
    }

    function setDirections(waypoints) {
		initialize();

		// remove single point marker if present
		if(singlePointMarker)
			gdMap.removeOverlay(singlePointMarker);

		var filteredWaypoints = new Array();
		for(var i = 0; i < waypoints.length; i++) {
			var currentElement = waypoints[i];
			if(currentElement.length > 0) {
				filteredWaypoints.push(currentElement);
			}
		}
		if(filteredWaypoints.length == 1)
			showMapForSinglePointAddress(filteredWaypoints[0]);
		else
			gdir.loadFromWaypoints(filteredWaypoints, { "locale": "<?php echo $this->lang; ?>" });
	}

    function handleErrors(){
	if (gdir.getStatus().code == G_GEO_BAD_REQUEST)
	    showError("<?php echo $this->badRequest; ?>\n Error code: " + gdir.getStatus().code);
	else if (gdir.getStatus().code == G_GEO_SERVER_ERROR)
	    showError("<?php echo $this->serverError; ?>\n Error code: " + gdir.getStatus().code);
	else if (gdir.getStatus().code == G_GEO_MISSING_QUERY)
	    showError("<?php echo $this->missingQuery; ?>\n Error code: " + gdir.getStatus().code);
	else if (gdir.getStatus().code == G_GEO_UNKNOWN_ADDRESS)
	    showError("<?php echo $this->unknownAddress; ?>");
	else if (gdir.getStatus().code == G_GEO_UNAVAILABLE_ADDRESS)
	    showError("<?php echo $this->unavailableAddress; ?>");
	else if (gdir.getStatus().code == G_GEO_UNKNOWN_DIRECTIONS)
	    showError("<?php echo $this->unknownDirections; ?>");
	else if (gdir.getStatus().code == G_GEO_BAD_KEY)
	    showError("<?php echo $this->badKey; ?>\n Error code: " + gdir.getStatus().code);
	else showError("<?php echo $this->defaultError; ?>\n Error code: " + gdir.getStatus().code);
    }

    function showError(error){
		setErrorText(error);
		$('gd_errorBox').setStyle('display', 'block');
		$('gd_map_canvas').setStyle('display', 'none');
    }
    function removeError(){
		$('gd_map_canvas').setStyle('display', 'block');
		$('gd_errorBox').setStyle('display', 'none');
		setErrorText('');
    }
    function setErrorText(text){
		$('gd_errorBox').set('text',text);
    }
    function onGDirectionsLoad(){
		removeError();
    }
	function showMapForSinglePoint(point) {
		initialize();
		
		singlePointMarker = new GMarker(point);
		gdMap.addOverlay(singlePointMarker);

		gdMap.setCenter(point, 14);
		gdir.clear();
	}

	function showMapForSinglePointAddress(address){
		initialize();
		
		if (geocoder) {
			geocoder.getLatLng(address,
			function(point) {
				if (!point) {
					showError("<?php echo $this->unknownAddress; ?>");
				} else {
					showMapForSinglePoint(point);
				}
			});
		}
	}
    <?php

	$initialFrom = ($this->from_coords) ? $this->from_coords : $this->from;
	$initialVia = ($this->via_coords) ? $this->via_coords : $this->via;
	$initialTo = ($this->to_coords) ? $this->to_coords : $this->to;

	$isFromPreset = strlen($initialFrom) > 0;
	$isToPreset = strlen($initialTo) > 0;

	// at least one value needs to be preset
	if($isFromPreset || $isToPreset): ?>
		window.addEvent('domready', function() {
		<?php if($isFromPreset && $isToPreset): ?>
			<?php
			if($this->add_via): ?>
				setDirections(new Array('<?php echo $initialFrom; ?>', '<?php echo $initialVia; ?>', '<?php echo $initialTo; ?>'));
			<?php else: ?>
				setDirections(new Array('<?php echo $initialFrom; ?>', '<?php echo $initialTo; ?>'));
			<?php endif; ?>
	    <?php elseif($this->show_single_point): ?>
			<?php if($this->from_coords): ?>
				showMapForSinglePoint(new GLatLng(<?php echo $this->from_coords; ?>));
			<?php elseif($this->from): ?>
				setDirections(new Array('<?php echo $this->from; ?>'));
			<?php elseif($this->to_coords): ?>
				showMapForSinglePoint(new GLatLng(<?php echo $this->to_coords; ?>));
			<?php else: ?>
				setDirections(new Array('<?php echo $this->to; ?>'));
			<?php endif;?>
		<?php endif; ?>
		});
    <?php endif; ?>
</script>