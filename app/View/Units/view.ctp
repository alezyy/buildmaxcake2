<div class="units view">
<h2><?php echo __('Unit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Property'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['id_property']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Number'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['unit_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Market Rent'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['market_rent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postal Code'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['postal_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bedrooms'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['bedrooms']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bath'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['bath']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Features'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['features']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['photo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Unit'), array('action' => 'edit', $unit['Unit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Unit'), array('action' => 'delete', $unit['Unit']['id']), array(), __('Are you sure you want to delete # %s?', $unit['Unit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Units'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('action' => 'add')); ?> </li>
	</ul>
</div>
