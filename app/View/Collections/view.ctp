<div class="collections view">
<h2><?php echo __('Collection'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Collection'); ?></dt>
		<dd>
			<?php echo $this->Html->link($collection['ParentCollection']['name'], array('controller' => 'collections', 'action' => 'view', $collection['ParentCollection']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($collection['Collection']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Collection'), array('action' => 'edit', $collection['Collection']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Collection'), array('action' => 'delete', $collection['Collection']['id']), array(), __('Are you sure you want to delete # %s?', $collection['Collection']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Collections'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Collection'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Collections'), array('controller' => 'collections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Collection'), array('controller' => 'collections', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Collections'); ?></h3>
	<?php if (!empty($collection['ChildCollection'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($collection['ChildCollection'] as $childCollection): ?>
		<tr>
			<td><?php echo $childCollection['id']; ?></td>
			<td><?php echo $childCollection['parent_id']; ?></td>
			<td><?php echo $childCollection['name']; ?></td>
			<td><?php echo $childCollection['created']; ?></td>
			<td><?php echo $childCollection['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'collections', 'action' => 'view', $childCollection['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'collections', 'action' => 'edit', $childCollection['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'collections', 'action' => 'delete', $childCollection['id']), array(), __('Are you sure you want to delete # %s?', $childCollection['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Collection'), array('controller' => 'collections', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
