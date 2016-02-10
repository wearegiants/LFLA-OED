<div class="fs-row">
<div class="fs-cell fs-all-full">

<?php $events = get_field('calendar'); ?>
<?php if ($events): ?>
<?php foreach($events as $event): ?>

<?php 
	$width = $event['width'];
	if ($width == 'full'){
		$cellWidth = 'fs-all-full';
	}
	if ($width == 'half'){
		$cellWidth = 'fs-all-half';
	}
	if ($width == 'third'){
		$cellWidth = 'fs-all-third';
	}
	if ($width == 'quarter'){
		$cellWidth = 'fs-all-fourth';
	}
	if ($width == 'fifth'){
		$cellWidth = 'fs-all-fifth';
	}
?>

<div class="fs-cell <?php echo $cellWidth; ?> fs-sm-full fs-contained">
<div class="event wallpaper" data-background-options='{"source":"<?php echo $event['image']['url']; ?>"}'>
<div class="centered centered-full">
<div class="wrapper wrapper-extra text-center">

  <a href="<?php echo $event['url']; ?>" target="blank">
  <h4 class="event-date"><?php echo $event['date']; ?></h4>
  <h2 class="event-title"><?php echo $event['title']; ?></h2>
  <h5 class="event-subtitle"><?php echo $event['subtitle']; ?></h5>
  </a>

</div>
</div>
</div>
</div>

<?php endforeach; ?>
<?php endif; ?>

</div>
</div>
