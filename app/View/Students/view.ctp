<div class="students view">
<h2><?php  echo __('Student');?></h2>
	<dl>
		<dt><?php echo __('Student Id'); ?></dt>
		<dd>
			<?php echo h($student['Student']['student_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student Schoolid'); ?></dt>
		<dd>
			<?php echo h($student['Student']['student_schoolid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student Firstname'); ?></dt>
		<dd>
			<?php echo h($student['Student']['student_firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student Lastname'); ?></dt>
		<dd>
			<?php echo h($student['Student']['student_lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student Grade'); ?></dt>
		<dd>
			<?php echo h($student['Student']['student_grade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student Datecreated'); ?></dt>
		<dd>
			<?php echo h($student['Student']['student_datecreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student Email'); ?></dt>
		<dd>
			<?php echo h($student['Student']['student_email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student'), array('action' => 'edit', $student['Student']['student_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student'), array('action' => 'delete', $student['Student']['student_id']), null, __('Are you sure you want to delete # %s?', $student['Student']['student_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?> </li>
	</ul>
</div>
