<div class="hosts form">
<?php echo $this->Form->create('Host'); ?>
	<fieldset>
		<legend><?php echo __('Add Host'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('body');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Hosts'), array('action' => 'index')); ?></li>
	</ul>
</div>
