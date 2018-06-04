<?php get_header(); ?>
<h1>お知らせ</h1>
<?php if(have_posts()): while(have_posts()):the_post(); ?>
  <h2><?php the_title(); ?></h2>
  <h3><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></h3>
  <p><?php the_content(); ?></p>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
