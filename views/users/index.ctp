<div id="sidebar">

	<div class="sidebox">
		<h1 class="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?></li>
		</ul>

	</div>

</div>

<div id="main">
	<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
	?>

	<div class="post">
		<h1><?php __('Users');?></h1>
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort(sprintf(__('ID', true)), 'id');?></th>
				<th><?php echo $this->Paginator->sort(sprintf(__('Username', true)), 'username');?></th>
				<th><?php echo $this->Paginator->sort(sprintf(__('Group', true)), 'group_id');?></th>
				<th><?php echo $this->Paginator->sort(sprintf(__('Created', true)), 'created');?></th>
				<th><?php echo $this->Paginator->sort(sprintf(__('Modified', true)), 'modified');?></th>
				<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($users as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $user['User']['id']; ?>&nbsp;</td>
			<td><?php echo $user['User']['username']; ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			</td>
			<td><?php echo $user['User']['created']; ?>&nbsp;</td>
			<td><?php echo $user['User']['modified']; ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('action' => 'view', $user['User']['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $user['User']['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</table>
		<div class="paging">
			<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
		 | 	<?php echo $this->Paginator->numbers();?>
	 |
			<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
		</div>
	</div>
</div>