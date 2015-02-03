<div class="updates form">
<?php echo $this->Form->create('Update'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Update'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('country_id');
		echo $this->Form->input('enabled');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('organization');
		echo $this->Form->input('confirmed', array('label' => 'Confirmar participação no evento'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Update.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Update.id'))); ?></li>
	</ul>
	<?php echo $this->MenuBuilder->build('main-menu'); ?>
</div>
