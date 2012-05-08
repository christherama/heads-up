<div class="seatingconfigs form">
<?php echo $this->Form->create('Seatingconfig');?>
	<fieldset>
		<legend><?php echo __('Add Seatingconfig'); ?></legend>
	<?php
		echo $this->Form->input('seatingconfig_name');
		echo $this->Form->input('seatingconfig_rows');
		echo $this->Form->input('seatingconfig_cols');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Seatingconfigs'), array('action' => 'index'));?></li>
	</ul>
</div>
