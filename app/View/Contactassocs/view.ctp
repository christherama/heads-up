<div class="contactassocs view">
<h2><?php  echo __('Contactassoc');?></h2>
	<dl>
		<dt><?php echo __('Contactassoc Id'); ?></dt>
		<dd>
			<?php echo h($contactassoc['Contactassoc']['contactassoc_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contactassoc['Contact']['contact_id'], array('controller' => 'contacts', 'action' => 'view', $contactassoc['Contact']['contact_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contactassoc['Student']['student_id'], array('controller' => 'students', 'action' => 'view', $contactassoc['Student']['student_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contacttype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contactassoc['Contacttype']['contacttype_id'], array('controller' => 'contacttypes', 'action' => 'view', $contactassoc['Contacttype']['contacttype_id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contactassoc'), array('action' => 'edit', $contactassoc['Contactassoc']['contactassoc_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contactassoc'), array('action' => 'delete', $contactassoc['Contactassoc']['contactassoc_id']), null, __('Are you sure you want to delete # %s?', $contactassoc['Contactassoc']['contactassoc_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contactassocs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contactassoc'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacttypes'), array('controller' => 'contacttypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contacttype'), array('controller' => 'contacttypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
