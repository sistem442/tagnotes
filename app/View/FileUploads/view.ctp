<div class="fileUploads view">
<h2><?php echo __('File Upload'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fileUpload['FileUpload']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Path'); ?></dt>
		<dd>
			<?php echo h($fileUpload['FileUpload']['path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fileUpload['Note']['name'], array('controller' => 'notes', 'action' => 'view', $fileUpload['Note']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($fileUpload['FileUpload']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($fileUpload['FileUpload']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit File Upload'), array('action' => 'edit', $fileUpload['FileUpload']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete File Upload'), array('action' => 'delete', $fileUpload['FileUpload']['id']), array(), __('Are you sure you want to delete # %s?', $fileUpload['FileUpload']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List File Uploads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Upload'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notes'), array('controller' => 'notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note'), array('controller' => 'notes', 'action' => 'add')); ?> </li>
	</ul>
</div>
