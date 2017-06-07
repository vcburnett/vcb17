<a href="<?php echo get_permalink(); ?>" class="a-project" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/temp/portfolio-image.jpg');">
	<div class="project-content">
		<h1><?php echo get_the_title(); ?></h1>
		<div class="project-content-text">
			<p><?php echo get_the_excerpt(); ?></p>
			<p class="p-cta">View project</p>
		</div>
	</div>
</a>