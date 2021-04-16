<?php get_header(); ?>
<h1>ブログ記事一覧</h1>
<main id="archive_main">
    <?php
    global $max_num_page;
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged,
    );
    $the_query = new WP_Query( $args );
    while ( $the_query->have_posts() ) : $the_query->the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
        <?php the_excerpt(); ?>
    </article>
    <hr>
    <?php endwhile; wp_reset_postdata(); ?>
    <?php
    if ($the_query->max_num_pages > 1) {
    echo '<nav class="pagination">';
    echo paginate_links( array(
        'base' => get_pagenum_link(1).'%_%',
        'format' => 'page/%#%/',
        'current' => max(1, $paged),
        'total' => $the_query->max_num_pages,
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