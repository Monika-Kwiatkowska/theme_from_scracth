<h3><?php the_title(); ?></h3>
<div class="thumbnail-img"><?php the_post_thumbnail ('thumbnail'); ?></div>
<small>Opublikowany <?php the_time( 'F y, M' ) ?> w <?php the_time( 'g:i a' ) ?> w <?php the_category(); ?> </small>
<p><?php the_content(); ?></p>

<hr>