<div class="assignments form">
<?php echo $this->Form->create('Assignment');?>
	<fieldset>
		<legend><?php echo __('Edit Assignment'); ?></legend>
	<?php
		echo $this->Form->input('assignment_id');
		echo $this->Form->input('assignment_name');
		echo $this->Form->input('assignment_description');
		echo $this->Form->input('assignment_datecreated');
		echo $this->Form->input('assignment_totalpoints');
		echo $this->Form->input('rubric_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Assignment.assignment_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Assignment.assignment_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Assignments'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Rubrics'), array('controller' => 'rubrics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rubric'), array('controller' => 'rubrics', 'action' => 'add')); ?> </li>
	</ul>
</div>
