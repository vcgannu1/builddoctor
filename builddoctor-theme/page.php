<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php echo get_the_post_thumbnail(); ?> 
			<?php if(!empty($post->post_excerpt)) {
    		?><div class="about-box">
			<?php the_excerpt(); ?>
			</div>
 			<?php } ?>
		<div class="post" id="post-<?php the_ID(); ?>">
				<?php if(!is_page('40')) { ?>
					<h2><?php the_title(); ?></h2> <?php } ?>
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

		</div>
		<?php endwhile; endif; ?>
	
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>