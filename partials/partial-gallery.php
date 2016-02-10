<?php $images = get_field('gallery'); ?>
<?php if ($images): ?>
<div class="wrapper">
<div class="fs-row">
<?php foreach($images as $image): ?>

<div class="fs-cell fs-all-half carousel__slide"><img src="<?php echo $image['sizes']['large']; ?>" class="img-responsive" />
<hr class="invisible compact">
</div>

<?php endforeach; ?>
</div>
</div>
<?php endif; ?>