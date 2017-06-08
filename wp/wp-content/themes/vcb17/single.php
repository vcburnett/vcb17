<?php
/** * The template for displaying all single posts * **/

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php
			$page_id = get_queried_object_id();
			if ( has_post_thumbnail( $page_id ) ) :
			    $image_array = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'full' );
			    $image = $image_array[0];
			else :
			    $image = get_template_directory_uri() . '/assets/images/temp/portfolio-image.jpg';
			endif; ?>

			<header id="header-case-study"" style="background-image: url('<?php echo $image; ?>')"></header>

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
