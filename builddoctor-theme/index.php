<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<div id="content">
	<?php if (function_exists('simple_nivo_slider')) simple_nivo_slider(); ?>
	<div class="about-box">
	<?php $recent = new WP_Query("page_id=24"); while($recent->have_posts()) : $recent->the_post();?>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<?php endwhile; ?>
	</div>
	<div class="blog-title-separator-1"></div>
	<div class="blog-title-separator-2"></div>
	<div class="blog-box">
	<?php
			global $post;
			$args = array( 'numberposts' => 4);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); ?>
				<div class="entry">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>				
				<?php the_excerpt('Read the rest of this entry &raquo;'); ?>
				</div>				
			<?php endforeach; ?>
	</div>
		<div class="navigation">
			<div><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
