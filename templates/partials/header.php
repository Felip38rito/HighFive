<?php
/**
 * The template for displaying the header
 *
 */
?>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php bloginfo('description') ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<title><?php bloginfo('name') ?></title>

<link rel="apple-touch-icon" href="apple-touch-icon.png">
<!-- Place favicon.ico in the root directory -->

<?php h5_get_stylesheet('normalize') ?>
<?php h5_get_stylesheet('h5bp') ?>
<?php h5_get_stylesheet('main') ?>

<?php h5_get_script('vendor/modernizr-2.8.3.min.js') ?>