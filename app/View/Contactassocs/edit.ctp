<div class="contactassocs form">
<?php echo $this->Form->create('Contactassoc');?>
	<fieldset>
		<legend><?php echo __('Edit Contactassoc'); ?></legend>
	<?php
		echo $this->Form->input('contactassoc_id');
		echo $this->Form->input('contact_id');
		echo $this->Form->input('student_id');
		echo $this->Form->input('contacttype_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Contactassoc.contactassoc_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Contactassoc.contactassoc_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contactassocs'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacttypes'), array('controller' => 'contacttypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contacttype'), array('controller' => 'contacttypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
