<div class="countries form">
<?php echo $this->Form->create('Country'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Country'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name_pt');
		echo $this->Form->input('name_en');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Country.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Country.id'))); ?></li>
	</ul>
	<?php echo $this->MenuBuilder->build('main-menu'); ?>
</div>
