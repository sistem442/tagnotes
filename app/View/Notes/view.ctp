<div class="notes view">
<h2><?php echo __('Note'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($note['Note']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($note['Note']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($note['Note']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($note['Note']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Keywords'); ?></dt>
		<dd>
			<?php echo h($note['Note']['keywords']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($note['Note']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($note['Note']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Note'), array('action' => 'edit', $note['Note']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Note'), array('action' => 'delete', $note['Note']['id']), array(), __('Are you sure you want to delete # %s?', $note['Note']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Notes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List File Uploads'), array('controller' => 'file_uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Upload'), array('controller' => 'file_uploads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Shares'), array('controller' => 'users_shares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Share'), array('controller' => 'users_shares', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related File Uploads'); ?></h3>
	<?php if (!empty($note['FileUpload'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Path'); ?></th>
		<th><?php echo __('Note Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($note['FileUpload'] as $fileUpload): ?>
		<tr>
			<td><?php echo $fileUpload['id']; ?></td>
			<td><?php echo $fileUpload['path']; ?></td>
			<td><?php echo $fileUpload['note_id']; ?></td>
			<td><?php echo $fileUpload['created']; ?></td>
			<td><?php echo $fileUpload['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'file_uploads', 'action' => 'view', $fileUpload['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'file_uploads', 'action' => 'edit', $fileUpload['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'file_uploads', 'action' => 'delete', $fileUpload['id']), array(), __('Are you sure you want to delete # %s?', $fileUpload['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New File Upload'), array('controller' => 'file_uploads', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users Shares'); ?></h3>
	<?php if (!empty($note['UsersShare'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Note Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($note['UsersShare'] as $usersShare): ?>
		<tr>
			<td><?php echo $usersShare['user_id']; ?></td>
			<td><?php echo $usersShare['note_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users_shares', 'action' => 'view', $usersShare['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users_shares', 'action' => 'edit', $usersShare['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users_shares', 'action' => 'delete', $usersShare['id']), array(), __('Are you sure you want to delete # %s?', $usersShare['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Users Share'), array('controller' => 'users_shares', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tags'); ?></h3>
	<?php if (!empty($note['Tag'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($note['Tag'] as $tag): ?>
		<tr>
			<td><?php echo $tag['id']; ?></td>
			<td><?php echo $tag['name']; ?></td>
			<td><?php echo $tag['created']; ?></td>
			<td><?php echo $tag['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tags', 'action' => 'view', $tag['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tags', 'action' => 'edit', $tag['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tags', 'action' => 'delete', $tag['id']), array(), __('Are you sure you want to delete # %s?', $tag['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
