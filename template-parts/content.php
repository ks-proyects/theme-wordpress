<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bizlight
 */
global $bizlight_customizer_all_values;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="padding: 0;border: 0;">
	<?php if(get_post_type()==='post'):?>
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<div class="entry-meta">
				<?php bizlight_posted_on(); ?>
				<?php bizlight_entry_footer(); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php
			if (!is_single()) {
				if( has_post_thumbnail()){
					echo "<div class='image-full'>";
					the_post_thumbnail('full');
					echo "</div>";/*div end*/
				}
			}
			?>
			<?php
			the_excerpt();
			?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bizlight' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	<?php else:?>
	<div class="row align-items-start justify-content-between background-animated panel-radius">
		<div class="col-md-9">
			<div class="col">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				<?php
					the_excerpt();
				?>
				<p><strong>Titulo: </strong><?php echo get_field('titulo')?><p>
				<p><strong>Duración: </strong><?php echo get_field('duracion')?>  <?php echo get_field('tipo_duracion')?><p>
				<p><strong>Modalidad: </strong><?php echo get_field('modalidad')?><p>
				
			</div>
		</div>
		<div class="col-md-3">
			<?php
			if (!is_single()) {
				if( has_post_thumbnail()){
					echo "<div class='image-full image-right'>";
					the_post_thumbnail('medium');
					echo "</div>";/*div end*/
				}
			}
			?>
		</div>
	</div>
	<?php endif;?>
</article><!-- #post-## -->
