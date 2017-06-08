<div class="content-top">
	<div class="cs-info-1">
		<a onclick="window.history.back()" class="btn-back-mob">Back</a>
		<p class="year"><?php the_field('project_year') ?></p>
		<p><span class="txt-client-name"><?php the_field('client_name') ?></span> <?php the_field('project_description') ?></p>
		<a onclick="window.history.back()" class="btn-back-desk">Back</a>
	</div>
	<div class="cs-info-2">
		<div class="cs-info-left">
			<div class="cs-info-int-left">
				<p>Services</p>
			</div>
			<div class="cs-info-int-right">
				<?php
					// vars	
					$services = get_field('project_services');

					// check
					if( $services ): ?>
						<?php foreach( $services as $service ): ?>
							<p><?php echo $service; ?></p>
						<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="cs-info-right">
			<div class="cs-info-int-left">
				<p>Tools</p>
			</div>
			<div class="cs-info-int-right">
				<?php
					// vars	
					$tools = get_field('project_tools');

					// check
					if( $tools ): ?>
						<?php foreach( $tools as $tool ): ?>
							<p><?php echo $tool; ?></p>
						<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="post-content">
	<?php the_content(); ?>
</div>

<div class="end-icon">
	<div class="end-icon-wrap">
		<?php 
		$image = get_field('end_of_post_image');

		if( !empty($image) ): ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php endif; ?>
	</div>
</div>