<div class="references form">
<?php echo $this->Form->create('Reference'); ?>
	<fieldset>
		<legend><?php echo __('Edit Reference'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('id_tenant');
		echo $this->Form->input('reference_first_name_1');
		echo $this->Form->input('reference_last_name_1');
		echo $this->Form->input('phone_1');
		echo $this->Form->input('first_name_2');
		echo $this->Form->input('last_name_2');
		echo $this->Form->input('phone_2');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Reference.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Reference.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List References'), array('action' => 'index')); ?></li>
	</ul>
</div>
