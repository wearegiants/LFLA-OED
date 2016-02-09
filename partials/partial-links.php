<div class="fs-row">
<div class="fs-cell fs-all-full">
<ul>

<?php $links = get_field('links'); ?>
<?php if ($links): ?>
<?php $counter = 1; foreach($links as $link): ?>

  <li class="link fs-cell fs-xl-3 fs-lg-4 fs-md-half fs-sm-full fs-contained relative">
  <a href="<?php echo $link['url']; ?>" class="" target="blank"><?php echo $link['title']; ?></a>
  </li>

<?php $counter++; endforeach; ?>
<?php endif; ?>

</ul>
</div>
</div>