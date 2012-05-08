<div class="seatingcharts view">
<h2><?php  echo __('Seatingchart');?></h2>
	<dl>
		<dt><?php echo __('Seatingchart Id'); ?></dt>
		<dd>
			<?php echo h($seatingchart['Seatingchart']['seatingchart_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seatingchart Students'); ?></dt>
		<dd>
			<?php echo h($seatingchart['Seatingchart']['seatingchart_students']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seatingchart Datecreated'); ?></dt>
		<dd>
			<?php echo h($seatingchart['Seatingchart']['seatingchart_datecreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section'); ?></dt>
		<dd>
			<?php echo $this->Html->link($seatingchart['Section']['section_id'], array('controller' => 'sections', 'action' => 'view', $seatingchart['Section']['section_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seatingconfig'); ?></dt>
		<dd>
			<?php echo $this->Html->link($seatingchart['Seatingconfig']['seatingconfig_id'], array('controller' => 'seatingconfigs', 'action' => 'view', $seatingchart['Seatingconfig']['seatingconfig_id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Seatingchart'), array('action' => 'edit', $seatingchart['Seatingchart']['seatingchart_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Seatingchart'), array('action' => 'delete', $seatingchart['Seatingchart']['seatingchart_id']), null, __('Are you sure you want to delete # %s?', $seatingchart['Seatingchart']['seatingchart_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Seatingcharts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seatingchart'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seatingconfigs'), array('controller' => 'seatingconfigs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seatingconfig'), array('controller' => 'seatingconfigs', 'action' => 'add')); ?> </li>
	</ul>
</div>
