<div class="tenants index">
	<h2><?php echo __('Tenants'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('alternateemails_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cell_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('home_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('work_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('street'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('birth_date'); ?></th>
			<th><?php echo $this->Paginator->sort('driver_license_number'); ?></th>
			<th><?php echo $this->Paginator->sort('driver_license_state'); ?></th>
			<th><?php echo $this->Paginator->sort('total_number_of_occupants'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_or_address_applying_for'); ?></th>
			<th><?php echo $this->Paginator->sort('requested_lease_term'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('emergency_contact'); ?></th>
			<th><?php echo $this->Paginator->sort('emergency_contact_email'); ?></th>
			<th><?php echo $this->Paginator->sort('emergency_contact_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('relationship_to_tenant'); ?></th>
			<th><?php echo $this->Paginator->sort('co_signer_details'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th><?php echo $this->Paginator->sort('photo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tenants as $tenant): ?>
	<tr>
		<td><?php echo h($tenant['Tenant']['id']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['email']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tenant['Alternateemails']['id'], array('controller' => 'alternateemails', 'action' => 'view', $tenant['Alternateemails']['id'])); ?>
		</td>
		<td><?php echo h($tenant['Tenant']['cell_phone']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['home_phone']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['work_phone']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['fax']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tenant['Country']['name'], array('controller' => 'countries', 'action' => 'view', $tenant['Country']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tenant['State']['id'], array('controller' => 'states', 'action' => 'view', $tenant['State']['id'])); ?>
		</td>
		<td><?php echo h($tenant['Tenant']['street']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tenant['City']['id'], array('controller' => 'cities', 'action' => 'view', $tenant['City']['id'])); ?>
		</td>
		<td><?php echo h($tenant['Tenant']['zip']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['birth_date']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['driver_license_number']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['driver_license_state']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['total_number_of_occupants']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['unit_or_address_applying_for']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['requested_lease_term']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['status']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['emergency_contact']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['emergency_contact_email']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['emergency_contact_phone']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['relationship_to_tenant']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['co_signer_details']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['notes']); ?>&nbsp;</td>
		<td><?php echo h($tenant['Tenant']['photo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tenant['Tenant']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tenant['Tenant']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tenant['Tenant']['id']), array(), __('Are you sure you want to delete # %s?', $tenant['Tenant']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tenant'), array('action' => 'add')); ?></li>
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
