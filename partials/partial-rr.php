<div class="fs-row">
<div class="fs-cell fs-all-full">
<div class="carousel" data-carousel-options='{"show":{"320px":1, "740px":2,"980px":4,"1220px":4}}'>

<?php $books = get_field('recommended'); ?>
<?php if ($books): ?>
<?php $counter = 1; foreach($books as $book): ?>

  <div class="book relative relative">
  	<div class="book-wrapper">
  		<a href="<?php echo $book['url']; ?>" class="coverlink" target="blank"></a>
  		<div class="centered centered-full">
  			<div class="wrapper wrapper-extra">
          <img src="<?php echo $book['image']['sizes']['gallery-xs-nocrop']; ?>" class="book-image" />
  				<span class="book-title"><?php echo $book['title']; ?></span>
  				<small class="book-subtitle"><?php echo $book['subtitle']; ?></small>
  			</div>
  		</div>
  	</div>
  </div>

<?php $counter++; endforeach; ?>
<?php endif; ?>

</div>
</div>
</div>