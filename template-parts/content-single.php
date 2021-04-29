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
		</div><!-- .entry-content -->
	<?php elseif ( 'curso' === get_post_type() 
		|| 'diplomado' === get_post_type() 
		|| 'doctorado' === get_post_type() 
		|| 'maestria' === get_post_type() 
		|| 'postgrado' === get_post_type()
		|| 'pregrado' === get_post_type() 
		|| 'taller' === get_post_type()
		|| 'curso' === get_post_type()) : ?>
		<div class="entry-content">

		</div>
	<?php elseif ('convenio' === get_post_type()) : ?>
		<div class="entry-content">

		</div>
	<?php endif; ?>
</article><!-- #post-## -->

