<div class="criterions form">
<?php echo $this->Form->create('Criterion');?>
	<fieldset>
		<legend><?php echo __('Edit Criterion'); ?></legend>
	<?php
		echo $this->Form->input('criterion_id');
		echo $this->Form->input('rubric_id');
		echo $this->Form->input('criterion_name');
		echo $this->Form->input('criterion_description');
		echo $this->Form->input('criterion_weight');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Criterion.criterion_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Criterion.criterion_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Criterions'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Rubrics'), array('controller' => 'rubrics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rubric'), array('controller' => 'rubrics', 'action' => 'add')); ?> </li>
	</ul>
</div>
