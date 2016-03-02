<div class="fs-row">
<div class="fs-cell fs-lg-11 fs-md-5 fs-sm-3 fs-centered">
<div class="gallery carousel" data-carousel-options='{"show":{"320px":1, "740px":2,"980px":3,"1220px":3}}'>

<?php $images = get_field('gallery'); ?>
<?php if ($images): ?>
<?php foreach($images as $image): ?>

  <div class="gallery__item relative text-center relative">
  	<div class="gallery__item-wrapper relative">
  		<!--<a href="<?php echo $image['url']; ?>" class="covered" target="blank"></a>-->
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

