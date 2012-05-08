<div class="notetypes form">
<?php echo $this->Form->create('Notetype');?>
	<fieldset>
		<legend><?php echo __('Add Notetype'); ?></legend>
	<?php
		echo $this->Form->input('notetype_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Notetypes'), array('action' => 'index'));?></li>
	</ul>
</div>
