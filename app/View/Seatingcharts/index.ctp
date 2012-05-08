<div class="seatingcharts index">
	<h2><?php echo __('Seatingcharts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('seatingchart_id');?></th>
			<th><?php echo $this->Paginator->sort('seatingchart_students');?></th>
			<th><?php echo $this->Paginator->sort('seatingchart_datecreated');?></th>
			<th><?php echo $this->Paginator->sort('section_id');?></th>
			<th><?php echo $this->Paginator->sort('seatingconfig_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($seatingcharts as $seatingchart): ?>
	<tr>
		<td><?php echo h($seatingchart['Seatingchart']['seatingchart_id']); ?>&nbsp;</td>
		<td><?php echo h($seatingchart['Seatingchart']['seatingchart_students']); ?>&nbsp;</td>
		<td><?php echo h($seatingchart['Seatingchart']['seatingchart_datecreated']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($seatingchart['Section']['section_id'], array('controller' => 'sections', 'action' => 'view', $seatingchart['Section']['section_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($seatingchart['Seatingconfig']['seatingconfig_id'], array('controller' => 'seatingconfigs', 'action' => 'view', $seatingchart['Seatingconfig']['seatingconfig_id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $seatingchart['Seatingchart']['seatingchart_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $seatingchart['Seatingchart']['seatingchart_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $seatingchart['Seatingchart']['seatingchart_id']), null, __('Are you sure you want to delete # %s?', $seatingchart['Seatingchart']['seatingchart_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Seatingchart'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seatingconfigs'), array('controller' => 'seatingconfigs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seatingconfig'), array('controller' => 'seatingconfigs', 'action' => 'add')); ?> </li>
	</ul>
</div>
