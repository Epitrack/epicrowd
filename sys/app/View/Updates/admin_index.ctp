<div class="updates index">
	<h2><?php echo __('Updates'); ?></h2>
	<div>
	<?php echo $this->Form->create('Updates', array('type' => 'get', 'action' => 'admin_index')) ?>
	<?echo $this->Form->input('busca', array("default" => $busca));?>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
	<?php

	if (isset($_SESSION['security_code'])) {
		echo "<p>Código: " . $_SESSION['security_code'] . "</p>";
	}
	?>
	<table cellpadding="0" cellspacing="0">
		<thead>
		<tr>
			<!-- <th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th> -->
			<!--			<th>--><?php //echo $this->Paginator->sort('enabled'); ?><!--</th>-->
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<!--			<th>--><?php //echo $this->Paginator->sort('modified'); ?><!--</th>-->
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('organization'); ?></th>
			<th><?php echo $this->Paginator->sort('project_title', 'Trabalho'); ?></th>
			<th><?php echo $this->Paginator->sort('confirmed', 'Confirmado'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($updates as $update): ?>
			<tr>
				<!-- <td><?php echo h($update['Update']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($update['Country']['name_pt'],
												 array('controller' => 'countries', 'action' => 'view', $update['Country']['id'])); ?>
				</td> -->
				<!--		<td>--><?php //echo h($update['Update']['enabled']); ?><!--&nbsp;</td>-->
				<td><?php echo date("d/m/Y", strtotime($update['Update']['created'])); ?>&nbsp;</td>
				<!--		<td>-->
				<?php //echo date("d/m/Y H:i:s", strtotime($update['Update']['modified']));?><!--&nbsp;</td>-->
				<td><?php echo h($update['Update']['name']); ?>&nbsp;</td>
				<td><?php echo h($update['Update']['email']); ?>&nbsp;</td>
				<td><?php echo h($update['Update']['organization']); ?>&nbsp;</td>
				<td><?php echo(empty($update['Update']['project_title']) ? "Nao" : "Sim"); ?>&nbsp;</td>
				<td><?php echo($update['Update']['confirmed'] == 0 ? "Nao" : "Sim"); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $update['Update']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $update['Update']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $update['Update']['id']),
													 array(), __('Are you sure you want to delete # %s?',
																 $update['Update']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	<p>
		<?php
		echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));
		?>    </p>

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
