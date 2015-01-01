<div class="collections form">
<?php echo $this->Form->create('Collection'); ?>
	<fieldset>
		<legend><?php echo __('Edit Collection'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Collection.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Collection.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Collections'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Collections'), array('controller' => 'collections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Collection'), array('controller' => 'collections', 'action' => 'add')); ?> </li>
	</ul>
</div>
