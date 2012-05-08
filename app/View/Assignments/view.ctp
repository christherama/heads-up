<div class="assignments view">
<h2><?php  echo __('Assignment');?></h2>
	<dl>
		<dt><?php echo __('Assignment Id'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['assignment_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assignment Name'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['assignment_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assignment Description'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['assignment_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assignment Datecreated'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['assignment_datecreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assignment Totalpoints'); ?></dt>
		<dd>
			<?php echo h($assignment['Assignment']['assignment_totalpoints']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rubric'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assignment['Rubric']['rubric_id'], array('controller' => 'rubrics', 'action' => 'view', $assignment['Rubric']['rubric_id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Assignment'), array('action' => 'edit', $assignment['Assignment']['assignment_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Assignment'), array('action' => 'delete', $assignment['Assignment']['assignment_id']), null, __('Are you sure you want to delete # %s?', $assignment['Assignment']['assignment_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Assignments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assignment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rubrics'), array('controller' => 'rubrics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rubric'), array('controller' => 'rubrics', 'action' => 'add')); ?> </li>
	</ul>
</div>
