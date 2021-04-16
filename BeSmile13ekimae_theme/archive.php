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
        <?php the_excerpt(); ?>
    </article>
    <hr>
<?php
    }
} ?>
    <?php wp_reset_postdata(); ?>
    <?php
    $big = 9999999999;
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    if ($the_query->max_num_pages > 1) {
        echo '<nav class="pagination">';
        echo paginate_links( array(
            'base' => get_pagenum_link(1).'%_%',
            'format' => 'page/%#%/',
            'current' => max(1, $paged),
            'total' => $wp_query->max_num_pages,
            'type' => 'list',
            'mid_size' => '1',
            'prev_text' => '«',
            'next_text' => '»'
            ) );
        echo '</nav>';
        } 
    ?>
    
</main>
<?php get_footer(); ?>