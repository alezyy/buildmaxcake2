<div class="countries view">
<h2><?php echo __('Country'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($country['Country']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($country['Country']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($country['Country']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paypal'); ?></dt>
		<dd>
			<?php echo h($country['Country']['paypal']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Country'), array('action' => 'edit', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Country'), array('action' => 'delete', $country['Country']['id']), array(), __('Are you sure you want to delete # %s?', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tenants'), array('controller' => 'tenants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tenant'), array('controller' => 'tenants', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cities'); ?></h3>
	<?php if (!empty($country['City'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($country['City'] as $city): ?>
		<tr>
			<td><?php echo $city['id']; ?></td>
			<td><?php echo $city['country_id']; ?></td>
			<td><?php echo $city['state_id']; ?></td>
			<td><?php echo $city['city']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cities', 'action' => 'view', $city['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cities', 'action' => 'edit', $city['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cities', 'action' => 'delete', $city['id']), array(), __('Are you sure you want to delete # %s?', $city['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related States'); ?></h3>
	<?php if (!empty($country['State'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($country['State'] as $state): ?>
		<tr>
			<td><?php echo $state['id']; ?></td>
			<td><?php echo $state['country_id']; ?></td>
			<td><?php echo $state['state']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'states', 'action' => 'view', $state['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'states', 'action' => 'edit', $state['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'states', 'action' => 'delete', $state['id']), array(), __('Are you sure you want to delete # %s?', $state['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tenants'); ?></h3>
	<?php if (!empty($country['Tenant'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Alternateemails Id'); ?></th>
		<th><?php echo __('Cell Phone'); ?></th>
		<th><?php echo __('Home Phone'); ?></th>
		<th><?php echo __('Work Phone'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Street'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('Birth Date'); ?></th>
		<th><?php echo __('Driver License Number'); ?></th>
		<th><?php echo __('Driver License State'); ?></th>
		<th><?php echo __('Total Number Of Occupants'); ?></th>
		<th><?php echo __('Unit Or Address Applying For'); ?></th>
		<th><?php echo __('Requested Lease Term'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Emergency Contact'); ?></th>
		<th><?php echo __('Emergency Contact Email'); ?></th>
		<th><?php echo __('Emergency Contact Phone'); ?></th>
		<th><?php echo __('Relationship To Tenant'); ?></th>
		<th><?php echo __('Co Signer Details'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($country['Tenant'] as $tenant): ?>
		<tr>
			<td><?php echo $tenant['id']; ?></td>
			<td><?php echo $tenant['first_name']; ?></td>
			<td><?php echo $tenant['last_name']; ?></td>
			<td><?php echo $tenant['email']; ?></td>
			<td><?php echo $tenant['alternateemails_id']; ?></td>
			<td><?php echo $tenant['cell_phone']; ?></td>
			<td><?php echo $tenant['home_phone']; ?></td>
			<td><?php echo $tenant['work_phone']; ?></td>
			<td><?php echo $tenant['fax']; ?></td>
			<td><?php echo $tenant['country_id']; ?></td>
			<td><?php echo $tenant['state_id']; ?></td>
			<td><?php echo $tenant['street']; ?></td>
			<td><?php echo $tenant['city_id']; ?></td>
			<td><?php echo $tenant['zip']; ?></td>
			<td><?php echo $tenant['birth_date']; ?></td>
			<td><?php echo $tenant['driver_license_number']; ?></td>
			<td><?php echo $tenant['driver_license_state']; ?></td>
			<td><?php echo $tenant['total_number_of_occupants']; ?></td>
			<td><?php echo $tenant['unit_or_address_applying_for']; ?></td>
			<td><?php echo $tenant['requested_lease_term']; ?></td>
			<td><?php echo $tenant['status']; ?></td>
			<td><?php echo $tenant['emergency_contact']; ?></td>
			<td><?php echo $tenant['emergency_contact_email']; ?></td>
			<td><?php echo $tenant['emergency_contact_phone']; ?></td>
			<td><?php echo $tenant['relationship_to_tenant']; ?></td>
			<td><?php echo $tenant['co_signer_details']; ?></td>
			<td><?php echo $tenant['notes']; ?></td>
			<td><?php echo $tenant['photo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tenants', 'action' => 'view', $tenant['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tenants', 'action' => 'edit', $tenant['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tenants', 'action' => 'delete', $tenant['id']), array(), __('Are you sure you want to delete # %s?', $tenant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tenant'), array('controller' => 'tenants', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
