<div class="rosters form">
<?php echo $this->Form->create('Roster');?>
	<fieldset>
		<legend><?php echo __('Edit Roster'); ?></legend>
	<?php
		echo $this->Form->input('roster_id');
		echo $this->Form->input('section_id');
		echo $this->Form->input('student_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Roster.roster_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Roster.roster_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Rosters'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
