<div class="rubrics form">
<?php echo $this->Form->create('Rubric');?>
	<fieldset>
		<legend><?php echo __('Edit Rubric'); ?></legend>
	<?php
		echo $this->Form->input('rubric_id');
		echo $this->Form->input('rubric_name',array('label'=>'Name'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Back to All Rubrics'), array('action' => 'index'));?></li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Rubric.rubric_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Rubric.rubric_id'))); ?></li>
	</ul>
</div>
