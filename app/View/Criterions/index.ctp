<div class="criterions index">
	<h2><?php echo __('Criterions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('criterion_id');?></th>
			<th><?php echo $this->Paginator->sort('rubric_id');?></th>
			<th><?php echo $this->Paginator->sort('criterion_name');?></th>
			<th><?php echo $this->Paginator->sort('criterion_description');?></th>
			<th><?php echo $this->Paginator->sort('criterion_weight');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($criterions as $criterion): ?>
	<tr>
		<td><?php echo h($criterion['Criterion']['criterion_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($criterion['Rubric']['rubric_id'], array('controller' => 'rubrics', 'action' => 'view', $criterion['Rubric']['rubric_id'])); ?>
		</td>
		<td><?php echo h($criterion['Criterion']['criterion_name']); ?>&nbsp;</td>
		<td><?php echo h($criterion['Criterion']['criterion_description']); ?>&nbsp;</td>
		<td><?php echo h($criterion['Criterion']['criterion_weight']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $criterion['Criterion']['criterion_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $criterion['Criterion']['criterion_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $criterion['Criterion']['criterion_id']), null, __('Are you sure you want to delete # %s?', $criterion['Criterion']['criterion_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Criterion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Rubrics'), array('controller' => 'rubrics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rubric'), array('controller' => 'rubrics', 'action' => 'add')); ?> </li>
	</ul>
</div>
