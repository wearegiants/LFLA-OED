<div class="fs-row">
<div class="fs-cell fs-all-full">

<?php $books = get_field('recommended'); ?>
<?php if ($books): ?>
<?php foreach($books as $book): ?>

<div class="book relative fs-cell fs-xl-fifth fs-lg-fourth fs-md-2 fs-sm-third">
<div class='centered centered-full'>
<div class="wrapper text-center">

  <a href="<?php echo $book['url']; ?>" target="blank">
  <h4 class="book-date"><?php echo $book['date']; ?></h4>
  <h2 class="book-title"><?php echo $book['title']; ?></h2>
  <h5 class="book-subtitle"><?php echo $book['subtitle']; ?></h5>
  </a>

</div>
</div>
</div>

<?php endforeach; ?>
<?php endif; ?>

</div>
</div>
