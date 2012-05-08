<div class="seatingconfigs index">
	<h2><?php echo __('Seatingconfigs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('seatingconfig_id');?></th>
			<th><?php echo $this->Paginator->sort('seatingconfig_name');?></th>
			<th><?php echo $this->Paginator->sort('seatingconfig_rows');?></th>
			<th><?php echo $this->Paginator->sort('seatingconfig_cols');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($seatingconfigs as $seatingconfig): ?>
	<tr>
		<td><?php echo h($seatingconfig['Seatingconfig']['seatingconfig_id']); ?>&nbsp;</td>
		<td><?php echo h($seatingconfig['Seatingconfig']['seatingconfig_name']); ?>&nbsp;</td>
		<td><?php echo h($seatingconfig['Seatingconfig']['seatingconfig_rows']); ?>&nbsp;</td>
		<td><?php echo h($seatingconfig['Seatingconfig']['seatingconfig_cols']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $seatingconfig['Seatingconfig']['seatingconfig_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $seatingconfig['Seatingconfig']['seatingconfig_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $seatingconfig['Seatingconfig']['seatingconfig_id']), null, __('Are you sure you want to delete # %s?', $seatingconfig['Seatingconfig']['seatingconfig_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Seatingconfig'), array('action' => 'add')); ?></li>
	</ul>
</div>
