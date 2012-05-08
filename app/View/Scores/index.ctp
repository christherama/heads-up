<div class="scores index">
	<h2><?php echo __('Scores');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('score_id');?></th>
			<th><?php echo $this->Paginator->sort('assignment_id');?></th>
			<th><?php echo $this->Paginator->sort('student_id');?></th>
			<th><?php echo $this->Paginator->sort('rubric_id');?></th>
			<th><?php echo $this->Paginator->sort('criterion_id');?></th>
			<th><?php echo $this->Paginator->sort('score_points');?></th>
			<th><?php echo $this->Paginator->sort('score_comments');?></th>
			<th><?php echo $this->Paginator->sort('score_version');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($scores as $score): ?>
	<tr>
		<td><?php echo h($score['Score']['score_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($score['Assignment']['assignment_id'], array('controller' => 'assignments', 'action' => 'view', $score['Assignment']['assignment_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($score['Student']['student_id'], array('controller' => 'students', 'action' => 'view', $score['Student']['student_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($score['Rubric']['rubric_id'], array('controller' => 'rubrics', 'action' => 'view', $score['Rubric']['rubric_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($score['Criterion']['criterion_id'], array('controller' => 'criterions', 'action' => 'view', $score['Criterion']['criterion_id'])); ?>
		</td>
		<td><?php echo h($score['Score']['score_points']); ?>&nbsp;</td>
		<td><?php echo h($score['Score']['score_comments']); ?>&nbsp;</td>
		<td><?php echo h($score['Score']['score_version']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $score['Score']['score_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $score['Score']['score_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $score['Score']['score_id']), null, __('Are you sure you want to delete # %s?', $score['Score']['score_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Score'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Assignments'), array('controller' => 'assignments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assignment'), array('controller' => 'assignments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rubrics'), array('controller' => 'rubrics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rubric'), array('controller' => 'rubrics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Criterions'), array('controller' => 'criterions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criterion'), array('controller' => 'criterions', 'action' => 'add')); ?> </li>
	</ul>
</div>
