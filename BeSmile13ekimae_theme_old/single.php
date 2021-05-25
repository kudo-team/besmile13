<?php get_header(); ?>
<?php if(have_posts()): the_post(); ?>
<article <?php post_class( 'article-content' ); ?>>
  <div class="article-info">
    <!--カテゴリ取得-->
    <?php if(has_category() ): ?>
    <span class="cat-data">
      <?php echo get_the_category_list( ' ' ); ?>
    </span>
    <?php endif; ?>
    <!--投稿日を取得-->
    <span class="article-date">
      <img src="https://13-sunplace-osaka.com/wp/wp-content/uploads/2021/05/clock.svg" alt="clock" class="clock_svg">
      <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
      <?php echo get_the_date(); ?>
      </time>
    </span>
	  <?php if( get_the_author_meta( 'ID' ) == 2): ?>
      <span class="author">
          著者：<?php the_author_posts_link(); ?>
      </span>
    <?php endif; ?>
  </div>
  <!--タイトル-->
  <h1><?php the_title(); ?></h1>
  <!--本文取得-->
  <?php the_content(); ?>
  <!--タグ-->
  <div class="article-tag">
    <?php the_tags('<ul><li>タグ： </li><li>','</li><li>','</li></ul>'); ?>
  </div>
</article>
<?php endif; ?>
<?php get_footer(); ?>