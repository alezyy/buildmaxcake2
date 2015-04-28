<div class="properties view">
<h2><?php echo __('Property'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($property['Property']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property Name'); ?></dt>
		<dd>
			<?php echo h($property['Property']['property_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Unit'); ?></dt>
		<dd>
			<?php echo h($property['Property']['id_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Propertiestypes Specification'); ?></dt>
		<dd>
			<?php echo $this->Html->link($property['PropertiestypesSpecification']['id'], array('controller' => 'propertiestypes_specifications', 'action' => 'view', $property['PropertiestypesSpecification']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Of Units'); ?></dt>
		<dd>
			<?php echo h($property['Property']['number_of_units']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Rental Owner'); ?></dt>
		<dd>
			<?php echo h($property['Property']['id_rental_owner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Operating Account'); ?></dt>
		<dd>
			<?php echo h($property['Property']['operating_account']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property Reserve'); ?></dt>
		<dd>
			<?php echo h($property['Property']['property_reserve']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rental Amount'); ?></dt>
		<dd>
			<?php echo h($property['Property']['rental_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deposit Amount'); ?></dt>
		<dd>
			<?php echo h($property['Property']['deposit_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lease Term'); ?></dt>
		<dd>
			<?php echo h($property['Property']['lease_term']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($property['Property']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($property['Property']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($property['Property']['City']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($property['Property']['State']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ZIP'); ?></dt>
		<dd>
			<?php echo h($property['Property']['ZIP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($property['Property']['photo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Property'), array('action' => 'edit', $property['Property']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Property'), array('action' => 'delete', $property['Property']['id']), array(), __('Are you sure you want to delete # %s?', $property['Property']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propertiestypes Specifications'), array('controller' => 'propertiestypes_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propertiestypes Specification'), array('controller' => 'propertiestypes_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications Leases'), array('controller' => 'applications_leases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applications Lease'), array('controller' => 'applications_leases', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Applications Leases'); ?></h3>
	<?php if (!empty($property['ApplicationsLease'])): ?>
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
	<?php foreach ($property['ApplicationsLease'] as $applicationsLease): ?>
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
