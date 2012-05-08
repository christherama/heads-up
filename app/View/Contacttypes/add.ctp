<div class="contacttypes form">
<?php echo $this->Form->create('Contacttype');?>
	<fieldset>
		<legend><?php echo __('Add Contacttype'); ?></legend>
	<?php
		echo $this->Form->input('contacttype_type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contacttypes'), array('action' => 'index'));?></li>
	</ul>
</div>
