<div class="rubrics index">
	<h2><?php echo __('Rubrics');?></h2>
	<table>
	<tr>
			<th><?php echo $this->Paginator->sort('rubric_name','Rubric');?></th>	
			<th><?php echo $this->Paginator->sort('rubric_datecreated','Date Created');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($rubrics as $rubric): ?>
	<tr>
		<td><?php echo h($rubric['Rubric']['rubric_name']); ?></td>
		<td><?php echo $this->Time->format('n/j/Y @ g:i A',$rubric['Rubric']['rubric_datecreated'],null,-5); ?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rubric['Rubric']['rubric_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rubric['Rubric']['rubric_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rubric['Rubric']['rubric_id']), null, __('Are you sure you want to delete the rubric \'%s\'?', $rubric['Rubric']['rubric_name'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}')));
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
		<li><?php echo $this->Html->link(__('New Rubric'), array('action' => 'add')); ?></li>
	</ul>
</div>
