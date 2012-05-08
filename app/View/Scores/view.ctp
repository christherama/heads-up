<div class="scores view">
<h2><?php  echo __('Score');?></h2>
	<dl>
		<dt><?php echo __('Score Id'); ?></dt>
		<dd>
			<?php echo h($score['Score']['score_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assignment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($score['Assignment']['assignment_id'], array('controller' => 'assignments', 'action' => 'view', $score['Assignment']['assignment_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($score['Student']['student_id'], array('controller' => 'students', 'action' => 'view', $score['Student']['student_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rubric'); ?></dt>
		<dd>
			<?php echo $this->Html->link($score['Rubric']['rubric_id'], array('controller' => 'rubrics', 'action' => 'view', $score['Rubric']['rubric_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Criterion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($score['Criterion']['criterion_id'], array('controller' => 'criterions', 'action' => 'view', $score['Criterion']['criterion_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Score Points'); ?></dt>
		<dd>
			<?php echo h($score['Score']['score_points']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Score Comments'); ?></dt>
		<dd>
			<?php echo h($score['Score']['score_comments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Score Version'); ?></dt>
		<dd>
			<?php echo h($score['Score']['score_version']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Score'), array('action' => 'edit', $score['Score']['score_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Score'), array('action' => 'delete', $score['Score']['score_id']), null, __('Are you sure you want to delete # %s?', $score['Score']['score_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Scores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Score'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assignments'), array('controller' => 'assignments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assignment'), array('controller' => 'assignments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rubrics'), array('controller' => 'rubrics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rubric'), array('controller' => 'rubrics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Criterions'), array('controller' => 'criterions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criterion'), array('controller' => 'criterions', 'action' => 'add')); ?> </li>
	</ul>
</div>
