<div class="vouchers form">
<?php echo $this->Form->create('Voucher'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Voucher'); ?></legend>
	<?php
		$t =md5(microtime().rand());
		echo $this->Form->input('email');
		echo $this->Form->input('expires');
		echo $this->Form->input('token', array(
										 'type' => 'text',
										 'default' => $t,
										 ));
	echo $this->Form->input('send_email_invite', array(
										 'type' => 'checkbox',
												 'default' => true));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<?php echo $this->MenuBuilder->build('main-menu'); ?>
</div>
