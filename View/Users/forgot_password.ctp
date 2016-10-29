<h1>Enter Your Username</h1>
<?php echo $this->Form->create(null, array('action' => 'forgot_password', 'id' => 'web-form')); ?>
	<?php echo $this->Form->input('User.username', array('label' => 'Username', 'between'=>'<br />', 'type'=>'text')); ?>
	<?php echo $this->Form->submit('Send Password Reset Instructions', array('class' => 'submit', 'id' => 'submit')); ?>
<?php echo $this->Form->end(); ?>