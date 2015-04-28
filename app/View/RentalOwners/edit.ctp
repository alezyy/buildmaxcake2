<div class="rentalOwners form">
<?php echo $this->Form->create('RentalOwner'); ?>
	<fieldset>
		<legend><?php echo __('Edit Rental Owner'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('company_name');
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('primary_email');
		echo $this->Form->input('alternate_email');
		echo $this->Form->input('phone');
		echo $this->Form->input('country');
		echo $this->Form->input('street');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('zip');
		echo $this->Form->input('comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RentalOwner.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('RentalOwner.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Rental Owners'), array('action' => 'index')); ?></li>
	</ul>
</div>
