<?php include('gd.header.tplx'); ?>

<br/>
<table class="gd_directionsContainer">
    <tr>
	<td valign="top"><div id="gd_map_canvas" style="width:<?php echo $this->width; ?>; height: <?php echo $this->height; ?>"></div></td>
    </tr>
    <tr>
	<td valign="top"><div id="gd_directionList" style="width: <?php echo $this->listWidth; ?>"></div></td>
    </tr>
</table>

<?php include('gd.footer.tplx'); ?>