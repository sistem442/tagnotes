<div class="baners index">
	<h2><?php echo __('Baners'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('picture_path'); ?></th>
			<th><?php echo $this->Paginator->sort('text'); ?></th>
			<th><?php echo $this->Paginator->sort('link'); ?></th>
			<th><?php echo $this->Paginator->sort('link_title'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th><?php echo $this->Paginator->sort('keyword'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($baners as $baner): ?>
	<tr>
		<td><?php echo h($baner['Baner']['id']); ?>&nbsp;</td>
		<td><?php echo h($baner['Baner']['picture_path']); ?>&nbsp;</td>
		<td><?php echo h($baner['Baner']['text']); ?>&nbsp;</td>
		<td><?php echo h($baner['Baner']['link']); ?>&nbsp;</td>
		<td><?php echo h($baner['Baner']['link_title']); ?>&nbsp;</td>
		<td><?php echo h($baner['Baner']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($baner['Baner']['keyword']); ?>&nbsp;</td>
		<td><?php echo h($baner['Baner']['created']); ?>&nbsp;</td>
		<td><?php echo h($baner['Baner']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $baner['Baner']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $baner['Baner']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $baner['Baner']['id']), array(), __('Are you sure you want to delete # %s?', $baner['Baner']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Baner'), array('action' => 'add')); ?></li>
	</ul>
</div>
