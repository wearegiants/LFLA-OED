<div class="fs-row">
<div class="fs-cell fs-all-full">

<?php $features = get_field('features'); ?>
<?php if ($features): ?>
<?php $counter = 1; foreach($features as $feature): ?>

<?php if ($counter == 1): ?>
<div class="feature fs-cell fs-all-full fs-contained relative wallpaper" data-background-options='{"source":"<?php echo $feature['image']['url']; ?>"}'>
<?php else: ?>
<div class="feature feature__small fs-cell fs-lg-half fs-md-full fs-sm-full fs-contained relative wallpaper" data-background-options='{"source":"<?php echo $feature['image']['url']; ?>"}'>
<?php endif; ?>

<div class="centered centered-full">
<div class="wrapper wrapper-extra text-center">

  <h4 class="feature-date"><?php echo $feature['date']; ?></h4>
  <h2 class="feature-title"><?php echo $feature['title']; ?></h2>
  <h5 class="feature-subtitle"><?php echo $feature['subtitle']; ?></h5>
  <br>
  <?php if (0 === strpos($feature['url'], '#')): ?> 
  <a data-swap-target="<?php echo $feature['url']; ?>" data-swap-linked="toggle_linked" class="btn btn--primary swap"><?php echo $feature['button_text']; ?></a>
  <?php else: ?>
  <a href="<?php echo $feature['url']; ?>" class="btn btn--primary" target="blank"><?php echo $feature['button_text']; ?></a>
  <?php endif;?>

</div>
</div>
</div>

<?php $counter++; endforeach; ?>
<?php endif; ?>

</div>
</div>