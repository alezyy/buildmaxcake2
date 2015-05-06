<div class="references view">
<h2><?php echo __('Reference'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Tenant'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['id_tenant']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reference First Name 1'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['reference_first_name_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reference Last Name 1'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['reference_last_name_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone 1'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['phone_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name 2'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['first_name_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name 2'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['last_name_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone 2'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['phone_2']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reference'), array('action' => 'edit', $reference['Reference']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reference'), array('action' => 'delete', $reference['Reference']['id']), array(), __('Are you sure you want to delete # %s?', $reference['Reference']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List References'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reference'), array('action' => 'add')); ?> </li>
	</ul>
</div>
