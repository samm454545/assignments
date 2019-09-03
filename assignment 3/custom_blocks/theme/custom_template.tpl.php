<?php
$items = $variables['items'];
?>
<div class="custom_blocks">
	<?php
	foreach($items as $item)
	{
		?>
		<div class="inner_wrap">
			<h2><?php echo $item['title']?></h2>
			<img src="<?php echo $item['image']?>" width="100%" />
			<p><?php echo $item['details']?></p>
		</div>
		<?php
	}
	?>
</div>