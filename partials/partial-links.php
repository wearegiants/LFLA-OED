<div class="fs-row">

<?php $links = get_field('links'); ?>
<?php if ($links): ?>
<?php foreach($links as $link): ?>

<div class="link relative fs-cell fs-lg-fifth fs-md-2 fs-sm-half">
<div class="centered centered-full">
<div class="wrapper text-center">

  <a href="<?php echo $link['url']; ?>" target="blank">
    <h4 class="link-date"><?php echo $link['date']; ?></h4>
    <h2 class="link-title"><?php echo $link['title']; ?></h2>
    <h5 class="link-subtitle"><?php echo $link['subtitle']; ?></h5>
  </a>

</div>
</div>
<div class="link-bg covered" style="background-image:url(<?php echo $link['image']['url'];?>)"></div>
</div>

<?php endforeach; ?>
<?php endif; ?>

</div>
