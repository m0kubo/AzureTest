<div class="administrators form">
<?php echo $this->Form->create('Administrator'); ?>
	<fieldset>
		<legend><?php echo __('Add Administrator'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('role');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Administrators'), array('action' => 'index')); ?></li>
	</ul>
</div>
