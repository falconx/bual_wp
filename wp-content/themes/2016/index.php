<?php get_header(); ?>

<div role="main">

	<div class="row">
		<div class="columns small-12">

			<?php if( have_posts() ): ?>
				<?php while( have_posts() ) : the_post(); ?>
					<?php the_title('<h1>', '</h1>'); ?>

					<?php if( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>

						<?php the_excerpt(); ?>

					<?php else: ?>

						<?php the_content('Read more &rarr;'); ?>

						<?php comments_template(); ?>

					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>