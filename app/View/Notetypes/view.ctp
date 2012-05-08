<div class="notetypes view">
<h2><?php  echo __('Notetype');?></h2>
	<dl>
		<dt><?php echo __('Notetype Id'); ?></dt>
		<dd>
			<?php echo h($notetype['Notetype']['notetype_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notetype Name'); ?></dt>
		<dd>
			<?php echo h($notetype['Notetype']['notetype_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Notetype'), array('action' => 'edit', $notetype['Notetype']['notetype_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Notetype'), array('action' => 'delete', $notetype['Notetype']['notetype_id']), null, __('Are you sure you want to delete # %s?', $notetype['Notetype']['notetype_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Notetypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notetype'), array('action' => 'add')); ?> </li>
	</ul>
</div>
