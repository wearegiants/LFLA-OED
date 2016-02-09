<div class="fs-row">
<div class="fs-cell fs-all-full">

<?php $tiers = get_field('tiers'); ?>
<?php if ($tiers): ?>
<?php foreach($tiers as $tier): ?>

<h2 class="tier-title text-center"><?php echo $tier['title']; ?></h2>

<?php $sponsors = $tier['gallery']; ?>
<?php $rowcount = count($sponsors); ?>

<?php 
	if ($rowcount == 2) {
		$class = 'fs-all-half';
	}
	if ($rowcount == 3 || $rowcount >= 5) {
		$class = 'fs-all-third';
	}
	if ($rowcount == 4) {
		$class = 'fs-all-quarter';
	}
?>

<?php if ($sponsors): ?>
<div class="fs-row">
<?php $counter = 1; foreach($sponsors as $sponsor): ?>

<div class="fs-cell <?php echo $class; ?> item-<?php echo $counter; ?>">
  <a href="<?php echo $sponsor['caption']; ?>"><img src="<?php echo $sponsor['url']; ?>" class="img-responsive" alt="<?php echo $sponsor['alt']; ?>" /></a>
</div>

<?php $counter++;  endforeach; ?>
</div>
<hr class="invisible compact">
<?php endif; ?>


<?php $counter++; endforeach; ?>
<?php endif; ?>

</div>
</div>
