<div class="<?php echo $this->class; ?> block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>

<?php if ($this->headline): ?>
	<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
<?php endif; ?>

<?php /* Dynamic control inclusion, first check if there is a custom template */
	$template = TL_ROOT . '/templates/gd.control.tpl';
	if(!file_exists($template)) {
		$template = TL_ROOT . '/system/modules/gd_googledirections/templates/gd.control.tpl';
	}
	include($template);
?>

<div id="gd_errorBox" style="display: none; "></div>
<br/>
<table class="gd_directionsContainer">
    <tr>
	<td valign="top"><div id="gd_map_canvas" style="width:<?php echo $this->width; ?>; height: <?php echo $this->height; ?>"></div></td>
    </tr>
    <tr>
	<td valign="top"><div id="gd_directionList" style="width: <?php echo $this->listWidth; ?>"></div></td>
    </tr>
</table>

<?php /* Dynamic control inclusion, first check if there is a custom template */
	$template = TL_ROOT . '/templates/gd.script.tpl';
	if(!file_exists($template)) {
		$template = TL_ROOT . '/system/modules/gd_googledirections/templates/gd.script.tpl';
	}
	include($template);
?>
</div>