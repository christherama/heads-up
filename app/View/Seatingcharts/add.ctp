<div class="seatingcharts form">
<?php echo $this->Form->create('Seatingchart');?>
	<fieldset>
		<legend><?php echo __('Add Seatingchart'); ?></legend>
	<?php
		echo $this->Form->input('seatingchart_students');
		echo $this->Form->input('seatingchart_datecreated');
		echo $this->Form->input('section_id');
		echo $this->Form->input('seatingconfig_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Seatingcharts'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seatingconfigs'), array('controller' => 'seatingconfigs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seatingconfig'), array('controller' => 'seatingconfigs', 'action' => 'add')); ?> </li>
	</ul>
</div>
