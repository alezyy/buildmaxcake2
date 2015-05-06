<div class="membershipUserrecords view">
<h2><?php echo __('Membership Userrecord'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($membershipUserrecord['MembershipUserrecord']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TableName'); ?></dt>
		<dd>
			<?php echo h($membershipUserrecord['MembershipUserrecord']['tableName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PkValue'); ?></dt>
		<dd>
			<?php echo h($membershipUserrecord['MembershipUserrecord']['pkValue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Membership User'); ?></dt>
		<dd>
			<?php echo h($membershipUserrecord['MembershipUserrecord']['id_membership_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DateAdded'); ?></dt>
		<dd>
			<?php echo h($membershipUserrecord['MembershipUserrecord']['dateAdded']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DateUpdated'); ?></dt>
		<dd>
			<?php echo h($membershipUserrecord['MembershipUserrecord']['dateUpdated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Membership Group'); ?></dt>
		<dd>
			<?php echo h($membershipUserrecord['MembershipUserrecord']['id_membership_group']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Membership Userrecord'), array('action' => 'edit', $membershipUserrecord['MembershipUserrecord']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Membership Userrecord'), array('action' => 'delete', $membershipUserrecord['MembershipUserrecord']['id']), array(), __('Are you sure you want to delete # %s?', $membershipUserrecord['MembershipUserrecord']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Membership Userrecords'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membership Userrecord'), array('action' => 'add')); ?> </li>
	</ul>
</div>
