<div class="membershipUserrecords index">
	<h2><?php echo __('Membership Userrecords'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tableName'); ?></th>
			<th><?php echo $this->Paginator->sort('pkValue'); ?></th>
			<th><?php echo $this->Paginator->sort('id_membership_user'); ?></th>
			<th><?php echo $this->Paginator->sort('dateAdded'); ?></th>
			<th><?php echo $this->Paginator->sort('dateUpdated'); ?></th>
			<th><?php echo $this->Paginator->sort('id_membership_group'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($membershipUserrecords as $membershipUserrecord): ?>
	<tr>
		<td><?php echo h($membershipUserrecord['MembershipUserrecord']['id']); ?>&nbsp;</td>
		<td><?php echo h($membershipUserrecord['MembershipUserrecord']['tableName']); ?>&nbsp;</td>
		<td><?php echo h($membershipUserrecord['MembershipUserrecord']['pkValue']); ?>&nbsp;</td>
		<td><?php echo h($membershipUserrecord['MembershipUserrecord']['id_membership_user']); ?>&nbsp;</td>
		<td><?php echo h($membershipUserrecord['MembershipUserrecord']['dateAdded']); ?>&nbsp;</td>
		<td><?php echo h($membershipUserrecord['MembershipUserrecord']['dateUpdated']); ?>&nbsp;</td>
		<td><?php echo h($membershipUserrecord['MembershipUserrecord']['id_membership_group']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $membershipUserrecord['MembershipUserrecord']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $membershipUserrecord['MembershipUserrecord']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $membershipUserrecord['MembershipUserrecord']['id']), array(), __('Are you sure you want to delete # %s?', $membershipUserrecord['MembershipUserrecord']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Membership Userrecord'), array('action' => 'add')); ?></li>
	</ul>
</div>
