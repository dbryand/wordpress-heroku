<?php /*
Template Name: Home
*/ ?>
<?php get_header(); ?>

<div id="middle" class="clearfix">
	<?php if(is_front_page()):?>
	<?php $homeMessage = of_get_option('ttrust_home_message'); ?>
	<?php $hmc = (of_get_option('ttrust_home_message_light_bkg')) ? "light" : ""; ?>
	<?php if($homeMessage) : ?>
	<div id="homeMessage" class="clearfix <?php if(!$homeMessage) echo "empty "; ?> <?php echo $hmc; ?>">			
		<div class="inside">
		<p><?php echo $homeMessage; ?></p>	
		</div>		
	</div>
	<?php endif; ?>	
	<?php endif; ?>
<div id="content" class="full">	
<?php get_template_part( 'part-projects-home'); ?>
<?php get_template_part( 'part-featured-pages'); ?>
<?php get_template_part( 'part-testimonials-home'); ?>
<?php while (have_posts()) : the_post(); ?>	
<?php if($post->post_content):?>
<div id="homeContent" class="full homeSection clearfix">	
	<div class="inside">
	<?php the_content(); ?>	
	</div>		
</div>
<?php endif; ?>
<?php endwhile; ?>
</div>
</div>

<?php get_footer(); ?>	