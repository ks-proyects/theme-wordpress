<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;


/*aboutoptions*/
$bizlight_panels['keysist-home-config-options'] =
    array(
        'priority'       => 160,
        'title'          => __( 'Ajustes de Configuracion', 'keysist' ),
    );
$bizlight_customizer_home_abouts_setting_file_path = keysist_file_directory('inc/customizer/home-options/home-aboutus.php');
require $bizlight_customizer_home_abouts_setting_file_path;

$bizlight_customizer_home_caracteristicas_setting_file_path = keysist_file_directory('inc/customizer/home-options/home-caracteristicas.php');
require $bizlight_customizer_home_caracteristicas_setting_file_path;

$bizlight_customizer_home_contact_setting_file_path = keysist_file_directory('inc/customizer/home-options/home-contact.php');
require $bizlight_customizer_home_contact_setting_file_path;

$bizlight_customizer_home_service_setting_file_path = keysist_file_directory('inc/customizer/home-options/home-service.php');
require $bizlight_customizer_home_service_setting_file_path;

$bizlight_customizer_home_team_setting_file_path = keysist_file_directory('inc/customizer/home-options/home-team.php');
require $bizlight_customizer_home_team_setting_file_path;

$bizlight_customizer_home_testimonial_setting_file_path = keysist_file_directory('inc/customizer/home-options/home-testimonial.php');
require $bizlight_customizer_home_testimonial_setting_file_path;

$bizlight_customizer_home_blog_setting_file_path = keysist_file_directory('inc/customizer/home-options/home-blog.php');
require $bizlight_customizer_home_blog_setting_file_path;

