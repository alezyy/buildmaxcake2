<div class="properties form">
<?php echo $this->Form->create('Property'); ?>
	<fieldset>
		<legend><?php echo __('Edit Property'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('property_name');
		echo $this->Form->input('id_unit');
		echo $this->Form->input('propertiestypes_specification_id');
		echo $this->Form->input('number_of_units');
		echo $this->Form->input('id_rental_owner');
		echo $this->Form->input('operating_account');
		echo $this->Form->input('property_reserve');
		echo $this->Form->input('rental_amount');
		echo $this->Form->input('deposit_amount');
		echo $this->Form->input('lease_term');
		echo $this->Form->input('country');
		echo $this->Form->input('street');
		echo $this->Form->input('City');
		echo $this->Form->input('State');
		echo $this->Form->input('ZIP');
		echo $this->Form->input('photo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Property.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Property.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Propertiestypes Specifications'), array('controller' => 'propertiestypes_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propertiestypes Specification'), array('controller' => 'propertiestypes_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications Leases'), array('controller' => 'applications_leases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applications Lease'), array('controller' => 'applications_leases', 'action' => 'add')); ?> </li>
	</ul>
</div>
