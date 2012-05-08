<div class="notes form">
<?php echo $this->Form->create('Note');?>
	<fieldset>
		<legend><?php echo __('Add Note'); ?></legend>
	<?php
		echo $this->Form->input('student_id');
		echo $this->Form->input('notetype_id');
		echo $this->Form->input('note_text');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Notes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notetypes'), array('controller' => 'notetypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notetype'), array('controller' => 'notetypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
