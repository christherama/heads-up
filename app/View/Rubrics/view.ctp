<div class="rubrics view">
	<h2><?php  echo __('Rubric');?>: <span><?php echo h($rubric['Rubric']['rubric_name']); ?></span> <?php echo $this->Html->link(__('edit title'), array('action' => 'edit', $rubric['Rubric']['rubric_id'])); ?></h2>
	<?php if(count($rubric['Criterion']) > 0) :?>
	<ul class="sortable stack">
<!-- 	<ul data-role="listview" class="sortable" data-inset="true" data-theme="c"> -->
		<li class="listheader" data-theme="b"><?php echo __('Name')?><span class="ui-li-count badge badge-info pull-right"><?php echo __('Points Possible')?></span></li>
		<?php
		$total = 0;
		foreach($rubric['Criterion'] as $c) : 
			$total += $c['criterion_extracredit'] ? 0 : $c['criterion_weight'];
		?>
			<li data-id="<?php echo $c['criterion_id'];?>"><?php echo h($c['criterion_name'])?><span class="ui-li-count badge badge-info pull-right"><?php echo $c['criterion_weight']?></span></li>
		<?php endforeach;?>
	
		<li class="listheader" style="font-size:20px" data-theme="b"><?php echo __('Total Points');?><span class="ui-li-count badge badge-info pull-right" style="font-size:20px"><?php echo $total;?></span></li>
	</ul>
	<?php else :?>
	<p>No critera were found for this rubric.</p>
	<?php endif;?>
</div>
<div class="actions">
	<?php echo $this->Html->link(__('Add Criterion'), array('action' => 'addCriterion?rubric_id='.$rubric['Rubric']['rubric_id']), array('data-role' => 'button', 'data-icon' => 'plus')); ?>
	<?php echo $this->Form->postLink(__('Delete Rubric'), array('action' => 'delete', $rubric['Rubric']['rubric_id']),array('data-role' => 'button', 'data-icon' => 'delete'), __('Are you sure you want to delete the rubric \'%s\'?', $rubric['Rubric']['rubric_name'])); ?>
</div>
<script>
$('.sortable').sortable({items: "li:not(.listheader)"});
</script>