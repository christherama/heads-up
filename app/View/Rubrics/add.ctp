<div class="rubrics form">
<?php echo $this->Form->create('Rubric');?>
	<fieldset>
		<legend><?php echo __('Add Rubric'); ?></legend>
	<?php
		echo $this->Form->input('rubric_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Back to All Rubrics'), array('action' => 'index'));?></li>
	</ul>
</div>
