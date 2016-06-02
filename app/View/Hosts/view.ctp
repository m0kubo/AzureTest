<div class="hosts view">
<h2><?php echo __('Host'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($host['Host']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($host['Host']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($host['Host']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($host['Host']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($host['Host']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Host'), array('action' => 'edit', $host['Host']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Host'), array('action' => 'delete', $host['Host']['id']), array(), __('Are you sure you want to delete # %s?', $host['Host']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hosts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Host'), array('action' => 'add')); ?> </li>
	</ul>
</div>
