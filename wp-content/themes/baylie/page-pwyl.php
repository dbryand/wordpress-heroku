<?php /*
Template Name: Protect What You Love
*/ ?>
<?php get_header(); ?>

<div id="middle" class="clearfix">
  <div id="inner">
    <div id="content" class="twoThirds clearfix">
      <?php while (have_posts()) : the_post(); ?>
          <div <?php post_class('clearfix'); ?>>
          <?php the_content(); ?>
        </div>
        <?php comments_template('', true); ?>
      <?php endwhile; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
