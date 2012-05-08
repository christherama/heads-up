<div class="assignments index">
	<h2><?php echo __('Assignments');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('assignment_id');?></th>
			<th><?php echo $this->Paginator->sort('assignment_name');?></th>
			<th><?php echo $this->Paginator->sort('assignment_description');?></th>
			<th><?php echo $this->Paginator->sort('assignment_datecreated');?></th>
			<th><?php echo $this->Paginator->sort('assignment_totalpoints');?></th>
			<th><?php echo $this->Paginator->sort('rubric_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($assignments as $assignment): ?>
	<tr>
		<td><?php echo h($assignment['Assignment']['assignment_id']); ?>&nbsp;</td>
		<td><?php echo h($assignment['Assignment']['assignment_name']); ?>&nbsp;</td>
		<td><?php echo h($assignment['Assignment']['assignment_description']); ?>&nbsp;</td>
		<td><?php echo h($assignment['Assignment']['assignment_datecreated']); ?>&nbsp;</td>
		<td><?php echo h($assignment['Assignment']['assignment_totalpoints']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($assignment['Rubric']['rubric_id'], array('controller' => 'rubrics', 'action' => 'view', $assignment['Rubric']['rubric_id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $assignment['Assignment']['assignment_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $assignment['Assignment']['assignment_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $assignment['Assignment']['assignment_id']), null, __('Are you sure you want to delete # %s?', $assignment['Assignment']['assignment_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Assignment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Rubrics'), array('controller' => 'rubrics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rubric'), array('controller' => 'rubrics', 'action' => 'add')); ?> </li>
	</ul>
</div>
