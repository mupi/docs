<div class="container-fluid"> 
	<div class="row-fluid">
		<div class="span8 offset2">
			<h1>Oops, página não encontrada</h1>
			<div>
				<?php 
					echo $this->Html->link($this->Html->image('404.png', 
					array('alt' => 'Tente outra página!')), array('controller'=>'conteudos'), array('escape'=>false));
				?>
			</div>
			<?php
				echo $this->Html->link('Me tire daqui, por favor!', array('controller'=>'conteudos'));
			?>
			</div>
		</div>
	</div>
</div>
<?php
if (Configure::read('debug') > 0):
?>
	<strong><?php echo __d('cake', 'Error'); ?>: </strong>
	<?php printf(
		__d('cake', 'The requested address %s was not found on this server.'),
		"<strong>'{$url}'</strong>"
	); ?>
</p>
<?php
	echo $this->element('exception_stack_trace');
endif;
?>
