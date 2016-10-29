<h1>Member Login</h1>
<?php echo $this->Form->create(null, array('action' => 'login', 'id' => 'web-form')); ?>
<fieldset>
	<legend>Login</legend>
	<?php echo $this->Form->input('User.username', array('label' => 'Username', 'between'=>'<br />', 'type'=>'text')); ?>
	<?php echo $this->Form->input('User.password', array('label' => 'Password', 'between'=>'<br />', 'type'=>'password')); ?>
	<?php echo $this->Form->submit('Submit', array('class' => 'submit', 'id' => 'submit')); ?>
</fieldset>
<?php echo $this->Form->end(); ?>
<p><?php echo $this->Html->link('Forgot your password?', '/users/forgot_password'); ?></p>