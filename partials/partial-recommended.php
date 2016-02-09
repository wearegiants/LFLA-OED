<div class="fs-row">
<div class="fs-cell fs-all-full">
<div class="carousel" data-carousel-options='{"show":{"320px":1, "740px":3,"980px":4,"1220px":4}}'>

<?php $books = get_field('recommended'); ?>
<?php if ($books): ?>
<?php foreach($books as $book): ?>

  <div class="book relative text-center relative">
  	<div class="book-wrapper">
  		<a href="<?php echo $book['url']; ?>" class="coverbook" target="blank"></a>
  		<div class="centered centered-full">
  			<div class="wrapper wrapper-extra">
  				<?php echo $book['title']; ?>
  			</div>
  		</div>
  	</div>
  </div>

<?php $counter++; endforeach; ?>
<?php endif; ?>

</div>
</div>
</div>

