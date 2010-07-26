<div id="sidebar">

	<div class="sidebox">
		<h1 class="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Product', true)), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Products', true)), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(sprintf(__('Find %s', true), __('Products', true)), array('action' => 'find')); ?></li>
		</ul>
	
	</div>
	
</div>

<div id="main">
	<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
	?>
	<div class="post">
	
		<h1><?php __('Products');?></h1>
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort(sprintf(__('Description', true)), 'description');?></th>
				<th><?php echo $this->Paginator->sort(sprintf(__('Price', true)), 'price');?></th>
				<th><?php echo $this->Paginator->sort(sprintf(__('Amount', true)), 'amount');?></th>
				<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($products as $product):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
			if ($product['Product']['amount'] < 10) {
				$class = ' class="altrowAlert"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $product['Product']['description']; ?>&nbsp;</td>
			<td><?php echo $product['Product']['price']; ?>&nbsp;</td>
			<td><?php echo $product['Product']['amount']; ?>&nbsp;</td>
			<td class="actions">
				<?php
				echo $this->Html->link(
				$html->image("icons/page_user.gif", array('alt' => __('View', true))),
					array('action' => 'view', $product['Product']['id']),
					array('escape' => false)
				);
				?>
				<?php
				echo $this->Html->link(
				$html->image("icons/page_edit.gif", array('alt' => __('Edit', true))),
					array('action' => 'edit', $product['Product']['id']),
					array('escape' => false)
				);
				?>
				<?php
				echo $this->Html->link(
					$this->Html->image("icons/page_delete.gif", array('alt' => __('Delete', true))),
					array('action' => 'delete', $product['Product']['id']),
					array('escape' => false),
					sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['description']));
				?>
			</td>
		</tr>
	<?php endforeach; ?>
		</table>

		<div class="paging">
			<?php echo $this->Paginator->prev($this->Html->image("icons/action_back.gif", array('alt' => __('previous', true))), array('escape' => false), null, array('class'=>'disabled', 'escape' => false));?>
			| <?php echo $this->Paginator->numbers();?>
			|
			<?php echo $this->Paginator->next($this->Html->image("icons/action_forward.gif", array('alt' => __('next', true))), array('escape' => false), null, array('class' => 'disabled', 'escape' => false));?>
		</div>
		
	</div>
	
</div>
