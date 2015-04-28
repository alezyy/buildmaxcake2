<div class="themes index">
	<h2><?php echo __('Themes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('folder_name'); ?></th>
			<th><?php echo $this->Paginator->sort('default_settings'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($themes as $theme): ?>
	<tr>
		<td><?php echo h($theme['Theme']['id']); ?>&nbsp;</td>
		<td><?php echo h($theme['Theme']['name']); ?>&nbsp;</td>
		<td><?php echo h($theme['Theme']['folder_name']); ?>&nbsp;</td>
		<td><?php echo h($theme['Theme']['default_settings']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $theme['Theme']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $theme['Theme']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $theme['Theme']['id']), null, __('Are you sure you want to delete # %s?', $theme['Theme']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="pagination">
		<ul>
			<?php
				echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
			?>
		</ul>
	</div>
</div>
<div class="actions span2 pull-right">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Theme'), array('action' => 'add')); ?></li>
	</ul>
</div>
