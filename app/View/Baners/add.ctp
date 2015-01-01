<div class="baners form">
<?php echo $this->Form->create('Baner'); ?>
	<fieldset>
		<legend><?php echo __('Add Baner'); ?></legend>
	<?php
		echo $this->Form->input('picture_path');
		echo $this->Form->input('text');
		echo $this->Form->input('link');
		echo $this->Form->input('link_title');
		echo $this->Form->input('is_active');
		echo $this->Form->input('keyword');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Baners'), array('action' => 'index')); ?></li>
	</ul>
</div>
