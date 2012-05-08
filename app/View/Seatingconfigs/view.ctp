<div class="seatingconfigs view">
<h2><?php  echo __('Seatingconfig');?></h2>
	<dl>
		<dt><?php echo __('Seatingconfig Id'); ?></dt>
		<dd>
			<?php echo h($seatingconfig['Seatingconfig']['seatingconfig_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seatingconfig Name'); ?></dt>
		<dd>
			<?php echo h($seatingconfig['Seatingconfig']['seatingconfig_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seatingconfig Rows'); ?></dt>
		<dd>
			<?php echo h($seatingconfig['Seatingconfig']['seatingconfig_rows']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seatingconfig Cols'); ?></dt>
		<dd>
			<?php echo h($seatingconfig['Seatingconfig']['seatingconfig_cols']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Seatingconfig'), array('action' => 'edit', $seatingconfig['Seatingconfig']['seatingconfig_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Seatingconfig'), array('action' => 'delete', $seatingconfig['Seatingconfig']['seatingconfig_id']), null, __('Are you sure you want to delete # %s?', $seatingconfig['Seatingconfig']['seatingconfig_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Seatingconfigs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seatingconfig'), array('action' => 'add')); ?> </li>
	</ul>
</div>
