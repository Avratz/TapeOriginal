<?php /* Template Name: Page puntos de venta */ get_header(); ?>

<div class="container min-h">
	<div class="row">
		<h3 class="py-2"><i class="fas fa-dollar-sign"></i>    Puntos de venta</h3>
		<?php
				$row = 0;
				$args = array( 'post_type' => 'puntos_de_venta', 'posts_per_page' => 12 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
		?>
		<div class="col-md-4 btn-info pventas borde-white">
			<i class="fas fa-flag"></i>
			<b class="dist-b"><?php the_field('nombre'); ?></b>
			<div class="pt-1 lbluei">
				<?php if( get_field('ubicacion') ): ?><span><i class="fas fa-map-marker-alt"></i> <p><?php the_field('ubicacion'); ?></p></span><?php endif; ?>
				<?php if( get_field('calle') ): ?><span><i class="fas fa-road"></i> <p><?php the_field('calle'); ?></p></span><?php endif; ?>
				<?php if( get_field('telefono') ): ?><span><i class="fas fa-phone-square"></i> <p><?php the_field('telefono'); ?></p></span><?php endif; ?>
				<?php if( get_field('horario_de_atencion') ): ?><span><i class="far fa-clock"></i></i> <p><?php the_field('horario_de_atencion'); ?></p></span><?php endif; ?>
				<?php if( get_field('email') ): ?><span><i class="fas fa-envelope"></i> <p><?php the_field('email'); ?></p></span><?php endif; ?>
				<?php if( get_field('sitio_web') ): ?><span><i class="fas fa-laptop"></i> <p><a target="_blank" href="<?php the_field('sitio_web'); ?>">Ir al Sitio Web</a> </p></span><?php endif; ?>
			</div>
		</div>
		<?php
		$row++;
		if ($row == 3) {
			echo '</div>';
			echo '<div class="row">';
			$row = 0;
		}
			endwhile;
			wp_reset_postdata();
		?>
	</div>
</div>

<?php get_footer(); ?>
