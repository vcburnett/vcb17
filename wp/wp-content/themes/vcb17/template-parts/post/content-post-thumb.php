<?php 

$image = get_field('portfolio_page_thumb');

if( !empty($image) ): ?>

<a href="<?php echo get_permalink(); ?>" class="a-project" style="background-image:url('<?php echo $image['url']; ?>');">

<?php endif; ?>
	<div class="project-content">
		<h1><?php echo get_the_title(); ?></h1>
		<div class="project-content-text">
			<p><?php echo get_the_excerpt(); ?></p>
			<p class="p-cta">View project</p>
		</div>
	</div>
</a>