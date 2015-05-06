<div class="units form">
<?php echo $this->Form->create('Unit'); ?>
	<fieldset>
		<legend><?php echo __('Add Unit'); ?></legend>
	<?php
		echo $this->Form->input('id_property');
		echo $this->Form->input('unit_number');
		echo $this->Form->input('size');
		echo $this->Form->input('market_rent');
		echo $this->Form->input('country');
		echo $this->Form->input('street');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('postal_code');
		echo $this->Form->input('bedrooms');
		echo $this->Form->input('bath');
		echo $this->Form->input('description');
		echo $this->Form->input('features');
		echo $this->Form->input('status');
		echo $this->Form->input('photo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Units'), array('action' => 'index')); ?></li>
	</ul>
</div>
