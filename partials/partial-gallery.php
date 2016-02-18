<div class="fs-row">
<div class="fs-cell fs-all-full">
<div class="gallery carousel zoom-gallery" data-carousel-options='{"show":{"320px":2, "740px":5,"980px":5,"1220px":5}}'>

<?php $images = get_field('gallery'); ?>
<?php if ($images): ?>
<?php foreach($images as $image): ?>

  <div class="gallery__item relative text-center relative">
  	<div class="gallery__item-wrapper relative">
  		<a href="<?php echo $image['url']; ?>" class="covered" target="blank"></a>
  		<div class="wrapper">
  			<img src="<?php echo $image['sizes']['large']; ?>" class="img-responsive" />
  		</div>
  	</div>
  </div>

<?php $counter++; endforeach; ?>
<?php endif; ?>

</div>
</div>
</div>

