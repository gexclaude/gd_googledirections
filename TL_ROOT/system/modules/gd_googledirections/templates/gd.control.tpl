<?php /* CONTROL */ ?>
<form action="#" onsubmit="setDirections(new Array(this.from.value,<?php if($this->add_via): echo 'this.via.value, '; endif;?> this.to.value)); return false">
    <table>
	<tr>
	    <th align="right"><?php echo $this->fromLabel; ?>&nbsp;</th>
	    <td>
			<?php if($this->from_coords): ?>
				<?php echo $this->from; ?>
				<input type="hidden" name="from" value="<?php echo $this->from_coords; ?>" />
			<?php else: ?>
				<input type="text" size="20" id="fromAddress" name="from" value="<?php echo $this->from; ?>" <?php if($this->from_readonly): ?> readonly="readonly"<?php endif; ?> />
			<?php endif; ?>
		</td>
	    <td><input name="submit" type="submit" value="<?php echo $this->submitLabel; ?>" /></td>
	</tr>
	<?php if($this->add_via): ?>
		<tr>
			<th align="right"><?php echo $this->viaLabel; ?>&nbsp;</th>
			<td>
				<?php if($this->via_coords): ?>
					<?php echo $this->via; ?>
					<input type="hidden" name="via" value="<?php echo $this->via_coords; ?>" />
				<?php else: ?>
					<input type="text" size="20" id="viaAddress" name="via" value="<?php echo $this->via; ?>" <?php if($this->via_readonly): ?> readonly="readonly"<?php endif; ?> />
				<?php endif; ?>
			</td>
			<td></td>
		</tr>
	<?php endif; ?>
	<tr>
	    <th align="right"><?php echo $this->toLabel; ?>&nbsp;</th>
	    <td>
			<?php if($this->to_coords): ?>
				<?php echo $this->to; ?>
				<input type="hidden" name="to" value="<?php echo $this->to_coords; ?>" />
			<?php else: ?>
				<input type="text" size="20" id="toAddress" name="to" value="<?php echo $this->to; ?>" <?php if($this->to_readonly): ?> readonly="readonly"<?php endif; ?> />
			<?php endif; ?>
		</td>
	    <td></td>
	</tr>
    </table>
</form>