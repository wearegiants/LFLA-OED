<?php Themewrangler::setup_page();get_header(/***Template Name: Homepage */); ?>

<?php 
  // Page Configs
$bgColor    = get_field('background_color');
$titlecolor = get_field('title_color');
$descColor  = get_field('text_color');

?>

<div <?php post_class('section template-splash ' . $pageClass . ''); ?> <?php if ($bgColor): ?>style="background-color: <?php echo $bgColor; ?><?php endif; ?>">
  <hr class="invisible">
  <div class="section-header">
    <div class="text-center">
      <div class="fs-row">
        <div class="fs-cell fs-lg-half fs-md-4 fs-sm-3 fs-centered">
          <div class="section-desc" style="color: <?php echo $descColor; ?>"><?php the_post(); the_content(); ?></div>
        </div>
      </div>
    </div>
  </div>
  <hr class="invisible compact">
  <div class="fs-row">
    <div class="fs-cell fs-all-full">
      <?php the_post_thumbnail('gallery-xl', array('class' => 'img-responsive')); ?>
    </div>
  </div>
  <hr class="invisible compact">
<?php if (get_field('after_the_content')):?>
  <div class="fs-row">
    <div class="fs-cell fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
      <div class="section-desc" style="color: <?php echo $descColor; ?>">
<?php the_field('after_the_content'); ?>
      </div>
    </div>
  </div>
<?php endif; ?>
</div>

<?php

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$current_args = array(
  'posts_per_page' => -1,
  'post_parent'    => $post->ID,
  'post_type'      => 'page',
  'order'          => 'ASC',
  'orderby'        => 'menu_order'
);

$current_posts = get_posts( $current_args );
$sectionImg = get_field('background_image');
foreach ( $current_posts as $post ) : setup_postdata( $post ); 

$pageHandle = basename( get_page_template());
$pageClass  = str_replace(".php", "", $pageHandle);
$partials   = str_replace("template", "partial", $pageHandle);

$bgColor    = get_field('background_color');
$titlecolor = get_field('title_color');
$descColor  = get_field('text_color');
$popup      = get_field('is_popup');
$bgImage    = get_field('background_image');

if ($popup) {
  $popup = ' mfp-hide';
}

?>

<?php if (!$bgImage): ?>
<div id="<?php echo $post->post_name;?>" <?php post_class('section ' . "$pageClass" . "$popup"); ?> <?php if ($bgColor): ?> style="background-color: <?php echo $bgColor; ?><?php endif; ?>">
<?php else: ?>
<div id="<?php echo $post->post_name;?>" <?php post_class('section section-bg ' . "$pageClass" . "$popup"); ?> style="background-image:url(<?php echo $bgImage["sizes"]["gallery-lg"]; ?>);">
<?php endif;?>
  <div class="section-header">
    <div class="text-center">
      <div class="fs-row">
        <div class="fs-cell fs-all-full">
          <h1 class="section-title" style="color: <?php echo $titlecolor; ?>"><?php the_title(); ?></h1>
          <div class="section-desc" style="color: <?php echo $descColor; ?>"><?php the_content(); ?></div>
        </div>
      </div>
    </div>
  </div>
  <hr class="invisible compact">
<?php include locate_template('partials/'. $partials .''); ?>
<?php if (get_field('after_the_content')):?>
  <hr class="invisible compact">
  <div class="fs-row">
    <div class="fs-cell fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
      <div class="section-desc" style="color: <?php echo $descColor; ?>">
<?php the_field('after_the_content'); ?>
      </div>
    </div>
  </div>
<?php endif; ?>
</div>

<?php 
  endforeach; 
  wp_reset_postdata();
?>

<script>
 $(window).load(function () {
   $.magnificPopup.open({
     items: {
       src: '#ruscha-piece' 
     },
     type: 'inline',
     preloader: false,
     mainClass: 'my-mfp-zoom-in fs-grid',
   }, 0);
 });
</script>


<?php get_footer(); ?>