<div class="criterions view">
<h2><?php  echo __('Criterion');?></h2>
	<dl>
		<dt><?php echo __('Criterion Id'); ?></dt>
		<dd>
			<?php echo h($criterion['Criterion']['criterion_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rubric'); ?></dt>
		<dd>
			<?php echo $this->Html->link($criterion['Rubric']['rubric_id'], array('controller' => 'rubrics', 'action' => 'view', $criterion['Rubric']['rubric_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Criterion Name'); ?></dt>
		<dd>
			<?php echo h($criterion['Criterion']['criterion_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Criterion Description'); ?></dt>
		<dd>
			<?php echo h($criterion['Criterion']['criterion_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Criterion Weight'); ?></dt>
		<dd>
			<?php echo h($criterion['Criterion']['criterion_weight']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Criterion'), array('action' => 'edit', $criterion['Criterion']['criterion_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Criterion'), array('action' => 'delete', $criterion['Criterion']['criterion_id']), null, __('Are you sure you want to delete # %s?', $criterion['Criterion']['criterion_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Criterions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criterion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rubrics'), array('controller' => 'rubrics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rubric'), array('controller' => 'rubrics', 'action' => 'add')); ?> </li>
	</ul>
</div>
