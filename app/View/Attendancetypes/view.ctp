<div class="attendancetypes view">
<h2><?php  echo __('Attendancetype');?></h2>
	<dl>
		<dt><?php echo __('Attendancetype Id'); ?></dt>
		<dd>
			<?php echo h($attendancetype['Attendancetype']['attendancetype_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attendancetype Type'); ?></dt>
		<dd>
			<?php echo h($attendancetype['Attendancetype']['attendancetype_type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Attendancetype'), array('action' => 'edit', $attendancetype['Attendancetype']['attendancetype_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attendancetype'), array('action' => 'delete', $attendancetype['Attendancetype']['attendancetype_id']), null, __('Are you sure you want to delete # %s?', $attendancetype['Attendancetype']['attendancetype_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendancetypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendancetype'), array('action' => 'add')); ?> </li>
	</ul>
</div>
