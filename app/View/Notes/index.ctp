<div class="notes index">
	<h2><?php echo __('Notes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('note_id');?></th>
			<th><?php echo $this->Paginator->sort('student_id');?></th>
			<th><?php echo $this->Paginator->sort('notetype_id');?></th>
			<th><?php echo $this->Paginator->sort('note_text');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($notes as $note): ?>
	<tr>
		<td><?php echo h($note['Note']['note_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($note['Student']['student_id'], array('controller' => 'students', 'action' => 'view', $note['Student']['student_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($note['Notetype']['notetype_id'], array('controller' => 'notetypes', 'action' => 'view', $note['Notetype']['notetype_id'])); ?>
		</td>
		<td><?php echo h($note['Note']['note_text']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $note['Note']['note_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $note['Note']['note_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $note['Note']['note_id']), null, __('Are you sure you want to delete # %s?', $note['Note']['note_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Note'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notetypes'), array('controller' => 'notetypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notetype'), array('controller' => 'notetypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
