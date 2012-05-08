<div class="rosters index">
	<h2><?php echo __('Rosters');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('roster_id');?></th>
			<th><?php echo $this->Paginator->sort('section_id');?></th>
			<th><?php echo $this->Paginator->sort('student_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($rosters as $roster): ?>
	<tr>
		<td><?php echo h($roster['Roster']['roster_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($roster['Section']['section_id'], array('controller' => 'sections', 'action' => 'view', $roster['Section']['section_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($roster['Student']['student_id'], array('controller' => 'students', 'action' => 'view', $roster['Student']['student_id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $roster['Roster']['roster_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $roster['Roster']['roster_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $roster['Roster']['roster_id']), null, __('Are you sure you want to delete # %s?', $roster['Roster']['roster_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Roster'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
