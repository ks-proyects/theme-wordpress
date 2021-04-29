<?php
/**
 * evision themes init file
 *
 * @package eVision themes
 * @subpackage Bizlight
 * @since Bizlight 1.0.0
 */

/**
 * Customizer additions.
 */
$keysist_customizer_file_path = keysist_file_directory('inc/customizer/customizer.php');
require $keysist_customizer_file_path;

/**
 * Include Functions
 */

$keysist_words_count_file_path = keysist_file_directory('inc/function/words-count.php');
require $keysist_words_count_file_path;
/**
 * Include Hooks
 */
$keysist_hooks_excerpt_path = keysist_file_directory('inc/hooks/excerpt.php');
require $keysist_hooks_excerpt_path;

$keysist_hooks_init_path = keysist_file_directory('inc/hooks/init.php');
require $keysist_hooks_init_path;

$keysist_hooks_wp_head_file_path = keysist_file_directory('inc/hooks/wp-head.php');
require $keysist_hooks_wp_head_file_path;

$keysist_hooks_header_file_path = keysist_file_directory('inc/hooks/header.php');
require $keysist_hooks_header_file_path;

$keysist_hooks_footer_file_path = keysist_file_directory('inc/hooks/footer.php');
require $keysist_hooks_footer_file_path;

$keysist_hooks_posts_navigation_file_path = keysist_file_directory('inc/hooks/posts-navigation.php');
require $keysist_hooks_posts_navigation_file_path;

$keysist_hooks_front_page_file_path = keysist_file_directory('inc/hooks/featured-slider/featured-main-hook.php');
require $keysist_hooks_front_page_file_path;

$keysist_hooks_homepage_service_file_path = keysist_file_directory('inc/hooks/homepage-service.php');
require $keysist_hooks_homepage_service_file_path;

$keysist_hooks_homepage_about_file_path = keysist_file_directory('inc/hooks/homepage-about.php');
require $keysist_hooks_homepage_about_file_path;

$keysist_hooks_homepage_team_file_path = keysist_file_directory('inc/hooks/homepage-team.php');
require $keysist_hooks_homepage_team_file_path;

$keysist_hooks_homepage_service_file_path = keysist_file_directory('inc/hooks/homepage-data.php');
require $keysist_hooks_homepage_service_file_path;

$keysist_hooks_homepage_testimonial_file_path = keysist_file_directory('inc/hooks/homepage-testimonial.php');
require $keysist_hooks_homepage_testimonial_file_path;

$keysist_hooks_homepage_contact_file_path = keysist_file_directory('inc/hooks/homepage-contact.php');
require $keysist_hooks_homepage_contact_file_path;

$keysist_hooks_homepage_featured_file_path = keysist_file_directory('inc/hooks/homepage-featured.php');
require $keysist_hooks_homepage_featured_file_path;

$keysist_hooks_homepage_blog_file_path = keysist_file_directory('inc/hooks/homepage-blog.php');
require $keysist_hooks_homepage_blog_file_path;


$keysist_hooks_front_page_file_path = keysist_file_directory('inc/hooks/front-page.php');
require $keysist_hooks_front_page_file_path;

/**
 * Include sidebar widgets
 */
$keysist_sidebar_widget_init_path = keysist_file_directory('inc/sidebar-widget-init.php');
require $keysist_sidebar_widget_init_path;