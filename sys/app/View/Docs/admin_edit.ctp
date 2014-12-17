<div class="docs form">
<?php echo $this->Form->create('Doc'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Doc'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('country_id');
		echo $this->Form->input('enabled');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('organization');
		echo $this->Form->input('path');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Doc.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Doc.id'))); ?></li>
	</ul>
	<?php echo $this->MenuBuilder->build('main-menu'); ?>
</div>
