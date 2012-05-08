<div class="rosters view">
<h2><?php  echo __('Roster');?></h2>
	<dl>
		<dt><?php echo __('Roster Id'); ?></dt>
		<dd>
			<?php echo h($roster['Roster']['roster_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section'); ?></dt>
		<dd>
			<?php echo $this->Html->link($roster['Section']['section_id'], array('controller' => 'sections', 'action' => 'view', $roster['Section']['section_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($roster['Student']['student_id'], array('controller' => 'students', 'action' => 'view', $roster['Student']['student_id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Roster'), array('action' => 'edit', $roster['Roster']['roster_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Roster'), array('action' => 'delete', $roster['Roster']['roster_id']), null, __('Are you sure you want to delete # %s?', $roster['Roster']['roster_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rosters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Roster'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
