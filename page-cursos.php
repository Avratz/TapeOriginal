<?php /* Template Name: cursos */ get_header(); ?>

<div class="container min-h pt-3">
	<div class="row">
		<div class="col-md-12">
			<h3>PRÓXIMOS CURSOS</h3>
			<div class="row pt-3">
				<?php
						$args = array( 'post_type' => 'product', 'posts_per_page' => 6, 'product_cat' => 'cursos', 'orderby' => 'ASC' );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); global $product;
				?>
				<div class="col-md-1 square">
					<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
				</div>
				<div class="col-md-11">
					<h3><?php the_title(); ?></h3>
					<p><?php echo the_content(); ?></p>
					<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
			</div>

			<div class="row">
				<div class="block-header">
					<div class="linea"></div>
					<h2>CAPACITACIONES TAPE ORIGINAL</h2>
				</div>
				<?php
						$args = array( 'post_type' => 'product', 'posts_per_page' => 6, 'product_cat' => 'certificacion', 'orderby' => 'ASC' );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); global $product;
				?>
				<div class="col-md-6 cer-rec">
					<a rel="nofollow" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
						<div class="row">
							<div class="col-md-2">
								<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
							</div>
							<div class="col-md-10">
								<h3><?php the_title(); ?></h3>
							</div>
						</div>
					</a>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
			</div>

			<div class="row">
				<div class="block-header">
					<div class="linea"></div>
					<h2>CAPACITACIONES EXTERNAS</h2>
				</div>
				<?php
						$args = array( 'post_type' => 'product', 'posts_per_page' => 6, 'product_cat' => 'externas', 'orderby' => 'ASC' );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); global $product;
				?>
				<div class="col-md-6 cer-rec">
					<a rel="nofollow" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
						<div class="row">
							<div class="col-md-2">
								<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
							</div>
							<div class="col-md-10">
								<h3><?php the_title(); ?></h3>
							</div>
						</div>
					</a>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
