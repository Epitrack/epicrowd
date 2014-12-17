<div class="docs form">
<?php echo $this->Form->create('Doc', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Doc'); ?></legend>
	<?php
		echo $this->Form->input('country_id');
		echo $this->Form->input('enabled');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('organization');
		echo $this->Form->input('path', array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<?php echo $this->MenuBuilder->build('main-menu'); ?>
</div>
