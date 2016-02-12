<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php bloginfo( 'sitename' ) ?></title>
<meta name="description" content="<?php bloginfo( 'description' ) ?>">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>

<!--[if lt IE 9]>
<script src="/assets/js/app.ie.min.js"></script>
<![endif]-->

<?php include_once locate_template('lib/config.fonts.php' ); ?>
<?php include_once locate_template('lib/config.menus.php' ); ?>

</head>

<body class="fs-grid">
<div id="wrapper">

<header id="header">
  <div class="fs-row">
    <menu id="header-main" class="fs-cell fs-lg-hide fs-md-hide fs-sm-2">
      <a id="header__logo" class="site-logo" href="http://lfla.org" target="blank">The Library Foundation of Los Angeles</a>
    </menu>
    <menu id="header-mobile" class="fs-cell fs-lg-hide fs-md-hide fs-sm-1 text-right">
      <a data-swap-target="#mobile-menus" id="menuBtn" class="mobile-toggle btn btn--hamburg right btn--nav btn_first btn_last">&nbsp;</a>
    </menu>
  </div>
  <?php include locate_template('parts/mobile-menu.php' ); ?>
</header>

<header id="home--header">
  <div class="fs-row">
    <div id="home--header-wrap" class="fs-cell fs-lg-12 fs-md-6 fs-sm-hide fs-centered text-center">
      <?php include locate_template('parts/header.php' );?>
    </div>
  </div>
</header>

<div id="content-wrapper" class='fs-grid'>
