<div class="updates form">
<?php echo $this->Form->create('Update'); ?>
	<fieldset>
		<legend><?php echo __('Add Update'); ?></legend>
	<?php
		echo $this->Form->input('country_id');
		echo $this->Form->input('enabled');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('organization');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Updates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
