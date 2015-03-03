<?php $this->inc("elements/header.php"); ?>   

<div id="wrap">
	<?php 
		$a = new Area('defaut');
		$a -> display($c);
	?>
</div>

<?php $this->inc("elements/footer.php"); ?> 