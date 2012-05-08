<div class="contacts view">
<h2><?php  echo __('Contact');?></h2>
	<dl>
		<dt><?php echo __('Contact Id'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['contact_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Firstname'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['contact_firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Lastname'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['contact_lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Homephone'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['contact_homephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Mobilephone'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['contact_mobilephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Email'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['contact_email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact'), array('action' => 'edit', $contact['Contact']['contact_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact'), array('action' => 'delete', $contact['Contact']['contact_id']), null, __('Are you sure you want to delete # %s?', $contact['Contact']['contact_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('action' => 'add')); ?> </li>
	</ul>
</div>
