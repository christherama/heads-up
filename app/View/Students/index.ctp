<div class="students index">
	<h2><?php echo __('Students');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('student_id');?></th>
			<th><?php echo $this->Paginator->sort('student_schoolid');?></th>
			<th><?php echo $this->Paginator->sort('student_firstname');?></th>
			<th><?php echo $this->Paginator->sort('student_lastname');?></th>
			<th><?php echo $this->Paginator->sort('student_grade');?></th>
			<th><?php echo $this->Paginator->sort('student_datecreated');?></th>
			<th><?php echo $this->Paginator->sort('student_email');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($students as $student): ?>
	<tr>
		<td><?php echo h($student['Student']['student_id']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['student_schoolid']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['student_firstname']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['student_lastname']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['student_grade']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['student_datecreated']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['student_email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $student['Student']['student_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $student['Student']['student_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $student['Student']['student_id']), null, __('Are you sure you want to delete # %s?', $student['Student']['student_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?></li>
	</ul>
</div>
