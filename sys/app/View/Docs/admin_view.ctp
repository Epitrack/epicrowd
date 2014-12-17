<div class="docs view">
<h2><?php echo __('Doc'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($doc['Doc']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($doc['Country']['name_pt'], array('controller' => 'countries', 'action' => 'view', $doc['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enabled'); ?></dt>
		<dd>
			<?php echo h($doc['Doc']['enabled']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($doc['Doc']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($doc['Doc']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($doc['Doc']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($doc['Doc']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organization'); ?></dt>
		<dd>
			<?php echo h($doc['Doc']['organization']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Path'); ?></dt>
		<dd>
			<?php echo h($doc['Doc']['path']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doc'), array('action' => 'edit', $doc['Doc']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Doc'), array('action' => 'delete', $doc['Doc']['id']), array(), __('Are you sure you want to delete # %s?', $doc['Doc']['id'])); ?> </li>
	</ul>
	<?php echo $this->MenuBuilder->build('main-menu'); ?>
</div>
