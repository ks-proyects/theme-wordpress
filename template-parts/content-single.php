<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bizlight
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( 'post' === get_post_type() ) : ?>
		<header class="entry-header">
			<div class="entry-meta">
				<?php bizlight_posted_on(); ?>
				<?php bizlight_entry_footer(); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php
			if( has_post_thumbnail()){
				echo "<div class='image-full'>";
				the_post_thumbnail('full');
				echo "</div>";/*div end*/
			}
			?>
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bizlight' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	<?php elseif ( 'curso' === get_post_type() 
		|| 'diplomado' === get_post_type() 
		|| 'doctorado' === get_post_type() 
		|| 'maestria' === get_post_type() 
		|| 'postgrado' === get_post_type()
		|| 'pregrado' === get_post_type() 
		|| 'taller' === get_post_type()
		|| 'curso' === get_post_type()) : ?>
		<div class="row align-items-start justify-content-between background-animated panel-radius">
			<div class="col-md-12">
			<?php
				if( has_post_thumbnail()){
					echo "<div class='image-full gallery-item'>";
					the_post_thumbnail('full');
					echo "</div>";
				}
				?>
			</div>
			<div class="col-md-12">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
			<div class="col-md-4 text-center section-info">
				<i class="fa fa-calendar fa-4x" aria-hidden="true"></i>
				<p>Duración</p>
				<p><?php echo get_field('duracion')?>  <?php echo get_field('tipo_duracion')?></p>
			</div>
			<div class="col-md-4 text-center section-info">
				<i class="fa fa-users fa-4x" aria-hidden="true"></i>
				<p>Modalidad</p>
				<p><?php echo get_field('modalidad')?></p>
			</div>
			<div class="col-md-4 text-center section-info">
				<i class="fa fa-clock-o fa-4x" aria-hidden="true"></i>
				<p>Inicio</p>
				<p><?php echo get_field('inicio')?></p>
			</div>
			<?php if(get_field('titulo')>''):?>
				<div class="col-md-12">
				<strong>TÍtulo:</strong> <?php echo get_field('titulo')?><p>
				</div>
			<?php endif;?>
			<?php if(get_field('perfil_egresado')>''):?>
				<div class="col-md-12">
					<strong>Perfil Profesional: </strong><?php echo get_field('perfil_egresado')?><p>
				</div>
			<?php endif;?>
			
			
			<?php if(get_field('ambito_ocupacional')>''):?>
				<div class="col-md-12">
					<strong>Campo Ocupacional: </strong><?php echo get_field('ambito_ocupacional')?><p>
				</div>
			<?php endif;?>
			
			<?php if(get_field('requisitos')>''):?>
				<div class="col-md-12">
					<strong>Requisitos de Ingreso: </strong><?php echo get_field('requisitos')?><p>
				</div>
			<?php endif;?>
			
		</div>
	<?php elseif ('convenio' === get_post_type()) : ?>
		<div class="entry-content">

		</div>
	<?php endif; ?>
</article><!-- #post-## -->

