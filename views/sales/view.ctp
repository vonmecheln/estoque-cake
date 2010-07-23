<div id="sidebar">

	<div class="sidebox">
	
		<h1 id="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Sale', true)), array('action' => 'edit', $sale['Sale']['id'])); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Sale', true)), array('action' => 'delete', $sale['Sale']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sale['Sale']['id'])); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Sale', true)), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Sales', true)), array('action' => 'index')); ?> </li>
		</ul>
		
	</div>

</div>

<div id="main">
	<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
	?>

	<div class="post">
	<h1><?php  __('Venda');?></h1>
	<br />
		<dl><?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $this->Html->link($sale['User']['username'], array('controller' => 'users', 'action' => 'view', $sale['User']['id'])); ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $time->nice($sale['Sale']['created']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<br />
	<div class="post">
		<h3><?php printf(__('%s Relacionados', true), __('Produtos', true));?></h3>
		<?php if (!empty($sale['Product'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php __('Description'); ?></th>
			<th><?php __('Price'); ?></th>
			<th><?php __('Amount'); ?></th>
		</tr>
		<?php
			$i = 0;
			$total = 0;
			foreach ($sale['Product'] as $product):
				$total += $product['price'];
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr<?php echo $class;?>>
				<td><?php echo $product['description'];?></td>
				<td><?php echo $product['price'];?></td>
				<td>
				<div id="qtd">
					<?php foreach($quantidades as $qtd):
					$i = 0;
					?>
					<div class="qtd<?php echo $i;?>">
					<?php if($qtd['ProductsSale']['product_id'] == $product['id']):
					$total *= $qtd['ProductsSale']['amount'];
					?>
					<p><?php
					echo $ajax->form(array('type' => 'post',
										'options' => array('update'=>'qtd'.$i,
														'url' => array(
																'controller' => 'ProductsSales',
																'action' => 'add'))));
					echo $this->Form->input('ProductsSale.amount', array('label' => sprintf(__('Amount', true)), 'value' => $qtd['ProductsSale']['amount']));
					echo $this->Form->input('ProductsSale.id', array('type' => 'hidden', 'value' => $qtd['ProductsSale']['id']));
					echo $this->Form->input('ProductsSale.product_id', array('type' => 'hidden', 'value' => $product['id']));
					echo $this->Form->input('ProductsSale.sale_id',array('type'=>'hidden', 'value' => $sale['Sale']['id']));
					echo $this->Form->end(__('Add amount', true));
					?></p>
					<?php endif;?>
					</div>
					<?php endforeach;?>
				</div>
				</td>
			</tr>
		<?php endforeach; ?>
		<th><?php __('Total'); ?></th>
		<th><?php echo $total;?></th>
		<td><?php echo $this->Form->submit('Update', array ('onClick' => 'window.location.href=window.location.href'));?></td>
		</table>
		<?php endif; ?>
	</div>
</div>
