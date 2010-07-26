<div id="sidebar">

	<div class="sidebox">
		<h1 class="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Sale', true)), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Sales', true)), array('action' => 'index')); ?></li>
		</ul>

	</div>
	
</div>

<div id="main">
	<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
	?>
	<div class="post">
	
		<h1><?php __('Sales');?></h1>
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort(sprintf(__('Username', true)), 'user_id');?></th>
				<th><?php echo $this->Paginator->sort(sprintf(__('Created', true)), 'created');?></th>
				<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($sales as $sale):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td>
				<?php echo $this->Html->link($sale['User']['username'], array('controller' => 'users', 'action' => 'view', $sale['User']['id'])); ?>
			</td>
			<td><?php echo $time->niceShort($sale['Sale']['created']); ?>&nbsp;</td>
			<td class="actions">
				<?php
				echo $this->Html->link(
				$html->image("icons/page_user.gif", array('alt' => __('View', true))),
					array('action' => 'view', $sale['Sale']['id']),
					array('escape' => false)
				);
				?>
				<?php
				echo $this->Html->link(
				$html->image("icons/page_edit.gif", array('alt' => __('Edit', true))),
					array('action' => 'edit', $sale['Sale']['id']),
					array('escape' => false)
				);
				?>
				<?php
				echo $this->Html->link(
					$this->Html->image("icons/page_delete.gif", array('alt' => __('Delete', true))),
					array('action' => 'delete', $sale['Sale']['id']),
					array('escape' => false),
					sprintf(__('Are you sure you want to delete # %s?', true), $sale['Sale']['id']));
				?>
			</td>
		</tr>
	<?php endforeach; ?>
		</table>

		<div class="paging">
			<?php echo $this->Paginator->prev($this->Html->image("icons/action_back.gif", array('alt' => __('previous', true))), array(), null, array('class'=>'disabled', 'escape' => false));?>
		 | 	<?php echo $this->Paginator->numbers();?>
	 |
			<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
		</div>
		
	</div>
	
</div>
