<div class="municipalities view">
<h2><?php echo __('Municipality'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zone'); ?></dt>
		<dd>
			<?php echo $this->Html->link($municipality['Zone']['id'], array('controller' => 'zones', 'action' => 'view', $municipality['Zone']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo $this->Html->link($municipality['District']['id'], array('controller' => 'districts', 'action' => 'view', $municipality['District']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Municipality'), array('action' => 'edit', $municipality['Municipality']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Municipality'), array('action' => 'delete', $municipality['Municipality']['id']), array(), __('Are you sure you want to delete # %s?', $municipality['Municipality']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipalities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipality'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($municipality['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Mobile No'); ?></th>
		<th><?php echo __('Country Code'); ?></th>
		<th><?php echo __('Zip Code'); ?></th>
		<th><?php echo __('Local Address'); ?></th>
		<th><?php echo __('Permanent Address'); ?></th>
		<th><?php echo __('Zone Id'); ?></th>
		<th><?php echo __('District Id'); ?></th>
		<th><?php echo __('Municipality Id'); ?></th>
		<th><?php echo __('Ward No'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($municipality['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['name']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['mobile_no']; ?></td>
			<td><?php echo $user['country_code']; ?></td>
			<td><?php echo $user['zip_code']; ?></td>
			<td><?php echo $user['local_address']; ?></td>
			<td><?php echo $user['permanent_address']; ?></td>
			<td><?php echo $user['zone_id']; ?></td>
			<td><?php echo $user['district_id']; ?></td>
			<td><?php echo $user['municipality_id']; ?></td>
			<td><?php echo $user['ward_no']; ?></td>
			<td><?php echo $user['group_id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['role']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
