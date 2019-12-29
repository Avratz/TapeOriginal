<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>
