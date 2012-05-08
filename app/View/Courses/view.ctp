<div class="courses view">
<h2><?php  echo __('Course');?></h2>
	<dl>
		<dt><?php echo __('Course Id'); ?></dt>
		<dd>
			<?php echo h($course['Course']['course_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course Name'); ?></dt>
		<dd>
			<?php echo h($course['Course']['course_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course'), array('action' => 'edit', $course['Course']['course_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course'), array('action' => 'delete', $course['Course']['course_id']), null, __('Are you sure you want to delete # %s?', $course['Course']['course_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('action' => 'add')); ?> </li>
	</ul>
</div>
