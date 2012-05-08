<div class="notes view">
<h2><?php  echo __('Note');?></h2>
	<dl>
		<dt><?php echo __('Note Id'); ?></dt>
		<dd>
			<?php echo h($note['Note']['note_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($note['Student']['student_id'], array('controller' => 'students', 'action' => 'view', $note['Student']['student_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notetype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($note['Notetype']['notetype_id'], array('controller' => 'notetypes', 'action' => 'view', $note['Notetype']['notetype_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note Text'); ?></dt>
		<dd>
			<?php echo h($note['Note']['note_text']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Note'), array('action' => 'edit', $note['Note']['note_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Note'), array('action' => 'delete', $note['Note']['note_id']), null, __('Are you sure you want to delete # %s?', $note['Note']['note_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Notes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notetypes'), array('controller' => 'notetypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notetype'), array('controller' => 'notetypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
