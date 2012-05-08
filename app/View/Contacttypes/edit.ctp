<div class="contacttypes form">
<?php echo $this->Form->create('Contacttype');?>
	<fieldset>
		<legend><?php echo __('Edit Contacttype'); ?></legend>
	<?php
		echo $this->Form->input('contacttype_id');
		echo $this->Form->input('contacttype_type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Contacttype.contacttype_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Contacttype.contacttype_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contacttypes'), array('action' => 'index'));?></li>
	</ul>
</div>
