<div class="students form">
<?php echo $this->Form->create('Student');?>
	<fieldset>
		<legend><?php echo __('Add Student'); ?></legend>
	<?php
		echo $this->Form->input('student_schoolid');
		echo $this->Form->input('student_firstname');
		echo $this->Form->input('student_lastname');
		echo $this->Form->input('student_grade');
		echo $this->Form->input('student_datecreated');
		echo $this->Form->input('student_email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index'));?></li>
	</ul>
</div>
