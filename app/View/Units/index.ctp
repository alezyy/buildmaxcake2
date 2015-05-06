<div class="units index">
	<h2><?php echo __('Units'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('id_property'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_number'); ?></th>
			<th><?php echo $this->Paginator->sort('size'); ?></th>
			<th><?php echo $this->Paginator->sort('market_rent'); ?></th>
			<th><?php echo $this->Paginator->sort('country'); ?></th>
			<th><?php echo $this->Paginator->sort('street'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('postal_code'); ?></th>
			<th><?php echo $this->Paginator->sort('bedrooms'); ?></th>
			<th><?php echo $this->Paginator->sort('bath'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('features'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('photo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($units as $unit): ?>
	<tr>
		<td><?php echo h($unit['Unit']['id']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['id_property']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['unit_number']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['size']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['market_rent']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['country']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['street']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['city']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['state']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['postal_code']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['bedrooms']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['bath']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['description']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['features']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['status']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['photo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $unit['Unit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $unit['Unit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $unit['Unit']['id']), array(), __('Are you sure you want to delete # %s?', $unit['Unit']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php /*
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	)); */
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
		<li><?php echo $this->Html->link(__('New Unit'), array('action' => 'add')); ?></li>
	</ul>
</div>
