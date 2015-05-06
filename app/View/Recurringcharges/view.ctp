<div class="recurringcharges view">
<h2><?php echo __('Recurringcharge'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($recurringcharge['Recurringcharge']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Frequency'); ?></dt>
		<dd>
			<?php echo h($recurringcharge['Recurringcharge']['frequency']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recurringcharge'), array('action' => 'edit', $recurringcharge['Recurringcharge']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recurringcharge'), array('action' => 'delete', $recurringcharge['Recurringcharge']['id']), array(), __('Are you sure you want to delete # %s?', $recurringcharge['Recurringcharge']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurringcharges'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurringcharge'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications Leases'), array('controller' => 'applications_leases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applications Lease'), array('controller' => 'applications_leases', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Applications Leases'); ?></h3>
	<?php if (!empty($recurringcharge['ApplicationsLease'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tenant Id'); ?></th>
		<th><?php echo __('Property Id'); ?></th>
		<th><?php echo __('Unit Id'); ?></th>
		<th><?php echo __('Leasestype Id'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Automatically End The Lease'); ?></th>
		<th><?php echo __('Recurringcharge Id'); ?></th>
		<th><?php echo __('Next Due Date'); ?></th>
		<th><?php echo __('Rent Mount'); ?></th>
		<th><?php echo __('Security Deposit'); ?></th>
		<th><?php echo __('Security Deposit Date'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Agreement'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($recurringcharge['ApplicationsLease'] as $applicationsLease): ?>
		<tr>
			<td><?php echo $applicationsLease['id']; ?></td>
			<td><?php echo $applicationsLease['tenant_id']; ?></td>
			<td><?php echo $applicationsLease['property_id']; ?></td>
			<td><?php echo $applicationsLease['unit_id']; ?></td>
			<td><?php echo $applicationsLease['leasestype_id']; ?></td>
			<td><?php echo $applicationsLease['start_date']; ?></td>
			<td><?php echo $applicationsLease['end_date']; ?></td>
			<td><?php echo $applicationsLease['automatically_end_the_lease']; ?></td>
			<td><?php echo $applicationsLease['recurringcharge_id']; ?></td>
			<td><?php echo $applicationsLease['next_due_date']; ?></td>
			<td><?php echo $applicationsLease['rent_mount']; ?></td>
			<td><?php echo $applicationsLease['security_deposit']; ?></td>
			<td><?php echo $applicationsLease['security_deposit_date']; ?></td>
			<td><?php echo $applicationsLease['status']; ?></td>
			<td><?php echo $applicationsLease['notes']; ?></td>
			<td><?php echo $applicationsLease['agreement']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'applications_leases', 'action' => 'view', $applicationsLease['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'applications_leases', 'action' => 'edit', $applicationsLease['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'applications_leases', 'action' => 'delete', $applicationsLease['id']), array(), __('Are you sure you want to delete # %s?', $applicationsLease['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Applications Lease'), array('controller' => 'applications_leases', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
