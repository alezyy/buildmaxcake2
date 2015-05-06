<div class="membershipUserrecords form">
<?php echo $this->Form->create('MembershipUserrecord'); ?>
	<fieldset>
		<legend><?php echo __('Edit Membership Userrecord'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tableName');
		echo $this->Form->input('pkValue');
		echo $this->Form->input('id_membership_user');
		echo $this->Form->input('dateAdded');
		echo $this->Form->input('dateUpdated');
		echo $this->Form->input('id_membership_group');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MembershipUserrecord.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('MembershipUserrecord.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Membership Userrecords'), array('action' => 'index')); ?></li>
	</ul>
</div>
