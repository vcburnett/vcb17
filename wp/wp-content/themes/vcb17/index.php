<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.

portfolio_header

 *
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header id="header-internal-page" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/temp/internal-hero-image.jpg');"></header>

			<div class="content-wrapper">

				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/post/content', 'post-thumb' );

					endwhile;
			?>

			<div class="portfolio-nav">
				<?php next_posts_link( 'Older works' ); ?>
				<?php previous_posts_link( 'Newer works' ); ?>
			</div>

			<?php
				else :

					get_template_part( 'template-parts/post/content', 'none' );

				endif;
				?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
