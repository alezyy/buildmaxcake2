<div class="tenants view">
<h2><?php echo __('Tenant'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alternateemails'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tenant['Alternateemails']['id'], array('controller' => 'alternateemails', 'action' => 'view', $tenant['Alternateemails']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cell Phone'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['cell_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Home Phone'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['home_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Phone'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['work_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tenant['Country']['name'], array('controller' => 'countries', 'action' => 'view', $tenant['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tenant['State']['id'], array('controller' => 'states', 'action' => 'view', $tenant['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tenant['City']['id'], array('controller' => 'cities', 'action' => 'view', $tenant['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birth Date'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['birth_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Driver License Number'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['driver_license_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Driver License State'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['driver_license_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Number Of Occupants'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['total_number_of_occupants']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Or Address Applying For'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['unit_or_address_applying_for']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requested Lease Term'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['requested_lease_term']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emergency Contact'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['emergency_contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emergency Contact Email'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['emergency_contact_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emergency Contact Phone'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['emergency_contact_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Relationship To Tenant'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['relationship_to_tenant']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Signer Details'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['co_signer_details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['photo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tenant'), array('action' => 'edit', $tenant['Tenant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tenant'), array('action' => 'delete', $tenant['Tenant']['id']), array(), __('Are you sure you want to delete # %s?', $tenant['Tenant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tenants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tenant'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alternateemails'), array('controller' => 'alternateemails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alternateemails'), array('controller' => 'alternateemails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accountings'), array('controller' => 'accountings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounting'), array('controller' => 'accountings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications Leases'), array('controller' => 'applications_leases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applications Lease'), array('controller' => 'applications_leases', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comptable1s'), array('controller' => 'comptable1s', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comptable1'), array('controller' => 'comptable1s', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Accountings'); ?></h3>
	<?php if (!empty($tenant['Accounting'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tenant Id'); ?></th>
		<th><?php echo __('Payment Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tenant['Accounting'] as $accounting): ?>
		<tr>
			<td><?php echo $accounting['id']; ?></td>
			<td><?php echo $accounting['tenant_id']; ?></td>
			<td><?php echo $accounting['payment_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'accountings', 'action' => 'view', $accounting['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'accountings', 'action' => 'edit', $accounting['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'accountings', 'action' => 'delete', $accounting['id']), array(), __('Are you sure you want to delete # %s?', $accounting['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Accounting'), array('controller' => 'accountings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Alternateemails'); ?></h3>
	<?php if (!empty($tenant['Alternateemail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tenant Id'); ?></th>
		<th><?php echo __('Alternate Email'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tenant['Alternateemail'] as $alternateemail): ?>
		<tr>
			<td><?php echo $alternateemail['id']; ?></td>
			<td><?php echo $alternateemail['tenant_id']; ?></td>
			<td><?php echo $alternateemail['alternate_email']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'alternateemails', 'action' => 'view', $alternateemail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'alternateemails', 'action' => 'edit', $alternateemail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'alternateemails', 'action' => 'delete', $alternateemail['id']), array(), __('Are you sure you want to delete # %s?', $alternateemail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Alternateemail'), array('controller' => 'alternateemails', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Applications Leases'); ?></h3>
	<?php if (!empty($tenant['ApplicationsLease'])): ?>
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
	<?php foreach ($tenant['ApplicationsLease'] as $applicationsLease): ?>
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
<div class="related">
	<h3><?php echo __('Related Comptable1s'); ?></h3>
	<?php if (!empty($tenant['Comptable1'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('ID'); ?></th>
		<th><?php echo __('Tenant Id'); ?></th>
		<th><?php echo __('Payment Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tenant['Comptable1'] as $comptable1): ?>
		<tr>
			<td><?php echo $comptable1['ID']; ?></td>
			<td><?php echo $comptable1['tenant_id']; ?></td>
			<td><?php echo $comptable1['payment_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comptable1s', 'action' => 'view', $comptable1['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comptable1s', 'action' => 'edit', $comptable1['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comptable1s', 'action' => 'delete', $comptable1['id']), array(), __('Are you sure you want to delete # %s?', $comptable1['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comptable1'), array('controller' => 'comptable1s', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
