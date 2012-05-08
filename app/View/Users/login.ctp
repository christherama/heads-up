<div class="modal fade" id="login-modal">
	<?php echo $this->Form->create('User',array('id' => 'loginform')); ?>
	<div class="modal-header">
		<h3>Login</h3>
	</div>
	<div class="modal-body">
		
		<?php echo $this->Form->input('username', array('size' => 20)); ?>
		<?php echo $this->Form->input('password', array('label'=> 'Password','size' => 20)); ?>
		
	</div>
	<div class="modal-footer">
		<input type="submit" class="btn btn-primary" value="Login" />
	</div>
	<?php $this->Form->end(); ?>
</div>
<script>
$(function(){
	$('#login-modal').modal({backdrop:'static',keyboard:false});
});
</script>