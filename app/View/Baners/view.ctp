<div class="baners view">
<h2><?php echo __('Baner'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($baner['Baner']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Picture Path'); ?></dt>
		<dd>
			<?php echo h($baner['Baner']['picture_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($baner['Baner']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($baner['Baner']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link Title'); ?></dt>
		<dd>
			<?php echo h($baner['Baner']['link_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($baner['Baner']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Keyword'); ?></dt>
		<dd>
			<?php echo h($baner['Baner']['keyword']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($baner['Baner']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($baner['Baner']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Baner'), array('action' => 'edit', $baner['Baner']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Baner'), array('action' => 'delete', $baner['Baner']['id']), array(), __('Are you sure you want to delete # %s?', $baner['Baner']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Baners'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Baner'), array('action' => 'add')); ?> </li>
	</ul>
</div>
