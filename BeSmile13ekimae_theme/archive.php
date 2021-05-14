<?php get_header(); ?>
<h1><?php single_term_title(); ?></h1>
<main id="archive_main">
<?php
if ( have_posts() ) {
  while ( have_posts() ){
    the_post(); ?>    
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
	    <?php if ( has_post_thumbnail() ): ?>
		    <?php the_post_thumbnail( 'thumbnail' ); ?>
	    <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/noimage-min.png"
                 alt="no-image">
	    <?php endif; ?>
        <?php the_excerpt(); ?>
    </article>
    <hr>
<?php
    }
} ?>
    <?php wp_reset_postdata(); ?>
	<?php wp_pagenavi(); ?>
</main>
<?php get_footer(); ?>