<div class="countries view">
<h2><?php echo __('Country'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($country['Country']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name Pt'); ?></dt>
		<dd>
			<?php echo h($country['Country']['name_pt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name En'); ?></dt>
		<dd>
			<?php echo h($country['Country']['name_en']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Country'), array('action' => 'edit', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Country'), array('action' => 'delete', $country['Country']['id']), array(), __('Are you sure you want to delete # %s?', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Updates'), array('controller' => 'updates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Update'), array('controller' => 'updates', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Updates'); ?></h3>
	<?php if (!empty($country['Update'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Enabled'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Organization'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($country['Update'] as $update): ?>
		<tr>
			<td><?php echo $update['id']; ?></td>
			<td><?php echo $update['country_id']; ?></td>
			<td><?php echo $update['enabled']; ?></td>
			<td><?php echo $update['created']; ?></td>
			<td><?php echo $update['modified']; ?></td>
			<td><?php echo $update['name']; ?></td>
			<td><?php echo $update['email']; ?></td>
			<td><?php echo $update['organization']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'updates', 'action' => 'view', $update['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'updates', 'action' => 'edit', $update['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'updates', 'action' => 'delete', $update['id']), array(), __('Are you sure you want to delete # %s?', $update['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Update'), array('controller' => 'updates', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
