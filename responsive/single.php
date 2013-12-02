	<?php get_header(); ?>

	<?php get_sidebar(); ?>

		<div id="main">

		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<div class="post">

			<h2 class="title"><?php the_title(); ?></h2>

			<?php if ( has_post_thumbnail() ) : ?>
			
			<?php endif; ?>

		<?php the_content(); ?>
		</div>

		<?php comments_template(); ?>

		<?php endwhile; ?>

		<?php endif; ?>

	<?php get_footer(); ?>
