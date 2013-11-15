<?php get_header(); ?>
	<div id = "main">

		<div id = "content">
			<h1> Main area</h1>
			<?php if (have_posts() : while (have_posts()) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<h4>Posted on <?php_the_time('F jS, Y') ?></h4>

			<p><?php the_content(_('(more...)')); ?></p>

			<hr> <?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>

		</div> <!--close content-->

		<?php get_sidebar(); ?>

		</div>

	<div id = "delimiter">
	</div>

	<?php get_footer(); ?>
