<div class="references index">
	<h2><?php echo __('References'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('id_tenant'); ?></th>
			<th><?php echo $this->Paginator->sort('reference_first_name_1'); ?></th>
			<th><?php echo $this->Paginator->sort('reference_last_name_1'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_1'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name_2'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name_2'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_2'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($references as $reference): ?>
	<tr>
		<td><?php echo h($reference['Reference']['id']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['id_tenant']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['reference_first_name_1']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['reference_last_name_1']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['phone_1']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['first_name_2']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['last_name_2']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['phone_2']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reference['Reference']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reference['Reference']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reference['Reference']['id']), array(), __('Are you sure you want to delete # %s?', $reference['Reference']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Reference'), array('action' => 'add')); ?></li>
	</ul>
</div>
