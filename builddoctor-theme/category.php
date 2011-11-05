<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<div id="content">
		<?php if (function_exists("easing_slider")){ easing_slider(); }; ?>
		<div class="post">
		<h2><?php single_cat_title(); ?></h2>
				<div class="single-post">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<div class="date"><?php the_date(); ?></div>
					<?php the_content(); ?>
				
				<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
				</div>
		</div>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>