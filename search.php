<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Bizlight
 */

get_header(); ?>
<div class="wrapper page-inner-title">
	<header class="page-header">
		<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'bizlight' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</header><!-- .page-header -->
</div>
<div id="content" class="site-content">
	<section id="primary" class="content-area">
		<p style="display:none;">primary</p>
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
				?>

			<?php endwhile; ?>

			<?php
			/**
			 * bizlight_action_posts_navigation hook
			 *
			 * @hooked: bizlight_posts_navigation - 10
			 *
			 * @since  Bizlight 1.0.0
			 */
			do_action( 'bizlight_action_posts_navigation' );?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

	<?php get_sidebar(); ?>
</div><!-- #content -->
<?php get_footer(); ?>
