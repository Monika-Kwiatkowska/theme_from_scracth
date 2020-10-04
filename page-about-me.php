
<?php
/*
Template Name: Page About me
*/

 get_header(); ?>
<?php
if ( have_posts() ):
while( have_posts() ): the_post(); ?> 

<div> About me page </div>
<p><?php the_content(); ?></p>

<hr>
<?php
    endwhile;
endif; 

?>

<?php get_footer(); ?>

