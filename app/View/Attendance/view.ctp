<div class="attendances view">
<h2><?php  echo __('Attendance');?></h2>
	<dl>
		<dt><?php echo __('Attendance Id'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['attendance_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($attendance['Student']['student_id'], array('controller' => 'students', 'action' => 'view', $attendance['Student']['student_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attendance Date'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['attendance_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attendancetype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($attendance['Attendancetype']['attendancetype_id'], array('controller' => 'attendancetypes', 'action' => 'view', $attendance['Attendancetype']['attendancetype_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section'); ?></dt>
		<dd>
			<?php echo $this->Html->link($attendance['Section']['section_id'], array('controller' => 'sections', 'action' => 'view', $attendance['Section']['section_id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Attendance'), array('action' => 'edit', $attendance['Attendance']['attendance_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attendance'), array('action' => 'delete', $attendance['Attendance']['attendance_id']), null, __('Are you sure you want to delete # %s?', $attendance['Attendance']['attendance_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendancetypes'), array('controller' => 'attendancetypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendancetype'), array('controller' => 'attendancetypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
