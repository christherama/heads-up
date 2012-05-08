<div class="attendances form">
<?php echo $this->Form->create('Attendance');?>
	<fieldset>
		<legend><?php echo __('Edit Attendance'); ?></legend>
	<?php
		echo $this->Form->input('attendance_id');
		echo $this->Form->input('student_id');
		echo $this->Form->input('attendance_date');
		echo $this->Form->input('attendancetype_id');
		echo $this->Form->input('section_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Attendance.attendance_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Attendance.attendance_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Attendances'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendancetypes'), array('controller' => 'attendancetypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendancetype'), array('controller' => 'attendancetypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
