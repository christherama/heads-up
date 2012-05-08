<div class="scores form">
<?php echo $this->Form->create('Score');?>
	<fieldset>
		<legend><?php echo __('Edit Score'); ?></legend>
	<?php
		echo $this->Form->input('score_id');
		echo $this->Form->input('assignment_id');
		echo $this->Form->input('student_id');
		echo $this->Form->input('rubric_id');
		echo $this->Form->input('criterion_id');
		echo $this->Form->input('score_points');
		echo $this->Form->input('score_comments');
		echo $this->Form->input('score_version');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Score.score_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Score.score_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Scores'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Assignments'), array('controller' => 'assignments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assignment'), array('controller' => 'assignments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rubrics'), array('controller' => 'rubrics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rubric'), array('controller' => 'rubrics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Criterions'), array('controller' => 'criterions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criterion'), array('controller' => 'criterions', 'action' => 'add')); ?> </li>
	</ul>
</div>
