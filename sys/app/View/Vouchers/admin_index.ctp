<div class="vouchers index">
	<h2><?php echo __('Vouchers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('token'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('expires'); ?></th>
			<th><?php echo $this->Paginator->sort('redeemed', 'Utilizado'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($vouchers as $voucher): ?>
	<tr>
		<td><?php echo h($voucher['Voucher']['id']); ?>&nbsp;</td>
		<td><?php echo h($voucher['Voucher']['email']); ?>&nbsp;</td>
		<td><?php echo h($voucher['Voucher']['token']); ?>&nbsp;</td>
		<td><?php echo h($voucher['Voucher']['created']); ?>&nbsp;</td>
		<td><?php echo h($voucher['Voucher']['expires']); ?>&nbsp;</td>
		<td><?php echo($voucher['Voucher']['redeemed'] == 0 ? "N" : "Y"); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $voucher['Voucher']['id'])); ?>
<!--			--><?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $voucher['Voucher']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $voucher['Voucher']['id']), array(), __('Are you sure you want to delete # %s?', $voucher['Voucher']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<?php echo $this->MenuBuilder->build('main-menu'); ?>
</div>
