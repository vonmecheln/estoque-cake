<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta name="Description" content="Information architecture, Web Design, Web Standards." />
<meta name="Keywords" content="sce, estoque, SCE" />
<?php echo $html->charset(); ?> 
<meta name="Distribution" content="Global" />
<meta name="Author" content="Erwin Aligam - ealigam@gmail.com" />
<meta name="Robots" content="index,follow" />

<?php
echo $html->css('PixelGreen', array(), array('media' => 'screen'));
echo $this->Html->script(array('jquery', 'jquery.form'));
?>
<script type="text/javascript">
jQuery(function($) {
  $('<input type="button"value="Quick Save"/>') 
    .click(function(){ 
      $(this).parents("form:first").ajaxSubmit({ 
        success: function(responseText, responseCode) { 
          $('#ajax-save-message').hide().html(responseText).fadeIn(); 
          setTimeout(function(){ 
            $('#ajax-save-message').fadeOut(); 
          }, 5000); 
        } 
      }); 
      return false; 
    }) 
    .appendTo('form div.submit'); 
});
</script>
<title>SCE - Sistema de Controle de Estoque</title>

</head>

<body>
<!-- wrap starts here -->
<div id="wrap">

	<div id="header"><div id="header-content">	
		
		<h1 id="logo">
			<a title="">Estoque<span class="gray"><?php echo Configure::read('Company.name');?></span></a></h1>
		<h2 id="slogan">
		<?php
		if (($this->Session->read('Auth.User'))) {
			echo 'Bem vindo <i>'.$this->Session->read('Auth.User.username').'</i><br /> ';
		}
		?>
		</h2>
		
		<!-- Menu Tabs -->
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('Users', true)), array('controller' => 'users', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(sprintf(__('Groups', true)), array('controller' => 'groups', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(sprintf(__('Products', true)), array('controller' => 'products', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(sprintf(__('Sales', true)), array('controller' => 'sales', 'action' => 'index')); ?></li>
			<li>
				<?php
				if (!$this->Session->read('Auth.User')) {
					echo $this->Html->link(sprintf(__('Login', true)), array('controller' => 'users', 'action' => 'login'), array('id' => 'current'));
				} else {
					echo $this->Html->link(sprintf(__('Logout', true)), array('controller' => 'users', 'action' => 'logout'), array('id' => 'current'));
				}
				?>
			</li>
		</ul>		
			
	
	</div></div>
	<div id="content-wrap"><div id="content">
		<?php
		echo $content_for_layout;
		?>
	</div></div>		
<!-- footer starts here -->
<div id="footer"><div id="footer-content">

		<div class="col float-left">
			<h1><?php echo __('Language'); ?></h1>
			<?php
			echo $this->Html->link(
			$html->image("flags/us.png", array('alt' => 'pt-br')),
				array('controller' => 'lang', 'action' => 'eng'),
				array('escape' => false)
			);
			?>
			<?php
			echo $this->Html->link(
			$html->image("flags/br.png", array('alt' => 'pt-br')),
				array('controller' => 'lang', 'action' => 'pt-br'),
				array('escape' => false)
			);
			?>
		</div>

		<div class="col2 float-right">
		<p>
		&copy; copyright 2010 <strong>Vitor Pacheco Costa</strong><br />
		</p>

		<ul>
			<li><?php echo $this->Html->link(sprintf(__('Home', true)), array('controller' => 'pages', 'action' => 'display', 'home')); ?></li>
		</ul>
		</div>

</div></div>
<!-- footer ends here -->
	
<!-- wrap ends here -->
</div>
</body>
</html>
