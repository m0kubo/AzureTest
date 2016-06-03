<div class="administrators form">
<?php //echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('Administrator'); ?>
	<fieldset>
		<legend><?php echo __('Login Administrator'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Administrator'), array('action' => 'add')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('List Administrators'), array('action' => 'index')); ?></li>-->
	</ul>
</div>
