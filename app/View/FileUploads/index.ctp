<div class="fileUploads index">
	<h2><?php echo __('File Uploads'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('path'); ?></th>
			<th><?php echo $this->Paginator->sort('note_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($fileUploads as $fileUpload): ?>
	<tr>
		<td><?php echo h($fileUpload['FileUpload']['id']); ?>&nbsp;</td>
		<td><?php echo h($fileUpload['FileUpload']['path']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fileUpload['Note']['name'], array('controller' => 'notes', 'action' => 'view', $fileUpload['Note']['id'])); ?>
		</td>
		<td><?php echo h($fileUpload['FileUpload']['created']); ?>&nbsp;</td>
		<td><?php echo h($fileUpload['FileUpload']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fileUpload['FileUpload']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fileUpload['FileUpload']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fileUpload['FileUpload']['id']), array(), __('Are you sure you want to delete # %s?', $fileUpload['FileUpload']['id'])); ?>
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
	<ul>
		<li><?php echo $this->Html->link(__('New File Upload'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Notes'), array('controller' => 'notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note'), array('controller' => 'notes', 'action' => 'add')); ?> </li>
	</ul>
</div>
