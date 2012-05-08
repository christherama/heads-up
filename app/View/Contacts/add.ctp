<div class="contacts form">
<?php echo $this->Form->create('Contact');?>
	<fieldset>
		<legend><?php echo __('Add Contact'); ?></legend>
	<?php
		echo $this->Form->input('contact_firstname');
		echo $this->Form->input('contact_lastname');
		echo $this->Form->input('contact_homephone');
		echo $this->Form->input('contact_mobilephone');
		echo $this->Form->input('contact_email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index'));?></li>
	</ul>
</div>
