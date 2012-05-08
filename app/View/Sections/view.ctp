<div class="sections view">
<h2><?php  echo __('Section');?></h2>
	<dl>
		<dt><?php echo __('Section Id'); ?></dt>
		<dd>
			<?php echo h($section['Section']['section_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo $this->Html->link($section['Course']['course_id'], array('controller' => 'courses', 'action' => 'view', $section['Course']['course_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section Startdate'); ?></dt>
		<dd>
			<?php echo h($section['Section']['section_startdate']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Section'), array('action' => 'edit', $section['Section']['section_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Section'), array('action' => 'delete', $section['Section']['section_id']), null, __('Are you sure you want to delete # %s?', $section['Section']['section_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
