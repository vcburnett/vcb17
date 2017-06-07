<?php
/** * The template for displaying all single posts * **/

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header id="header-case-study">
		</header>

		<div class="content-wrapper">

			<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();
				
					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile; // End of the loop.
			?>

		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
