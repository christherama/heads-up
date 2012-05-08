<div class="attendancetypes form">
<?php echo $this->Form->create('Attendancetype');?>
	<fieldset>
		<legend><?php echo __('Add Attendancetype'); ?></legend>
	<?php
		echo $this->Form->input('attendancetype_type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Attendancetypes'), array('action' => 'index'));?></li>
	</ul>
</div>
