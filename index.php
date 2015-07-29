<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * This theme follow a convention that is different from Wordpress itself: 
 * 	"What you open in a file, you close in the same file"
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<?php h5_get_partial('header'); ?>
</head>
<body>
	<?php h5_get_content('header'); ?>

	<?php 
	/**
	 * This file shows the most recent posts
	 */
	 
	 if(have_posts()) {
	 	while(have_posts()) {
	 		the_post();
	 		
	 		h5_get_content('article', get_post_format());
	 	}
	 } 

	 ?>
	
	<?php h5_get_partial('footer'); ?>
</body>
</html>