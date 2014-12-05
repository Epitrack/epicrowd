<div class="updates view">
<h2><?php echo __('Update'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($update['Update']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($update['Country']['name_pt'], array('controller' => 'countries', 'action' => 'view', $update['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enabled'); ?></dt>
		<dd>
			<?php echo h($update['Update']['enabled']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($update['Update']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($update['Update']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($update['Update']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($update['Update']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organization'); ?></dt>
		<dd>
			<?php echo h($update['Update']['organization']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Update'), array('action' => 'edit', $update['Update']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Update'), array('action' => 'delete', $update['Update']['id']), array(), __('Are you sure you want to delete # %s?', $update['Update']['id'])); ?> </li>
	</ul>
	<?php echo $this->MenuBuilder->build('main-menu'); ?>
</div>
