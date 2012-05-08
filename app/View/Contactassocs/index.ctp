<div class="contactassocs index">
	<h2><?php echo __('Contactassocs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('contactassoc_id');?></th>
			<th><?php echo $this->Paginator->sort('contact_id');?></th>
			<th><?php echo $this->Paginator->sort('student_id');?></th>
			<th><?php echo $this->Paginator->sort('contacttype_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($contactassocs as $contactassoc): ?>
	<tr>
		<td><?php echo h($contactassoc['Contactassoc']['contactassoc_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contactassoc['Contact']['contact_id'], array('controller' => 'contacts', 'action' => 'view', $contactassoc['Contact']['contact_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($contactassoc['Student']['student_id'], array('controller' => 'students', 'action' => 'view', $contactassoc['Student']['student_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($contactassoc['Contacttype']['contacttype_id'], array('controller' => 'contacttypes', 'action' => 'view', $contactassoc['Contacttype']['contacttype_id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contactassoc['Contactassoc']['contactassoc_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contactassoc['Contactassoc']['contactassoc_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contactassoc['Contactassoc']['contactassoc_id']), null, __('Are you sure you want to delete # %s?', $contactassoc['Contactassoc']['contactassoc_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Contactassoc'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacttypes'), array('controller' => 'contacttypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contacttype'), array('controller' => 'contacttypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
