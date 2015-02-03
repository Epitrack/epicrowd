<div class="vouchers view">
<h2><?php echo __('Voucher'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($voucher['Voucher']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($voucher['Voucher']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Token'); ?></dt>
		<dd>
			<?php echo h($voucher['Voucher']['token']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($voucher['Voucher']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expires'); ?></dt>
		<dd>
			<?php echo h($voucher['Voucher']['expires']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Voucher'), array('action' => 'edit', $voucher['Voucher']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Voucher'), array('action' => 'delete', $voucher['Voucher']['id']), array(), __('Are you sure you want to delete # %s?', $voucher['Voucher']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vouchers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Voucher'), array('action' => 'add')); ?> </li>
	</ul>
</div>
