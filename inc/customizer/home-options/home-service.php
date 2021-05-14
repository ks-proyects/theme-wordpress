<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['keysist-home-service-enable'] = 1;
$bizlight_customizer_defaults['keysist-home-service-title'] = __('Nuestros Servicios','bizlight');
$bizlight_customizer_defaults['keysist-home-service-content'] = __('Ofrecemos los siguientes servicios','bizlight');

/*servicesetting*/
$bizlight_sections['keysist-home-service-options'] =
    array(
        'priority'       => 160,
        'title'          => __( 'Ajustes de Servicios', 'keysist' ),
        'panel'          => 'keysist-home-config-options',
    );

$bizlight_settings_controls['keysist-home-service-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-service-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Mostrar', 'keysist' ),
            'section'               => 'keysist-home-service-options',
            'type'                  => 'checkbox',
            'priority'              => 15,
            'active_callback'       => ''
        )
    );


$bizlight_settings_controls['keysist-home-service-title'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-service-title']
        ),
        'control' => array(
            'label'                 =>  __( 'Título', 'keysist' ),
            'section'               => 'keysist-home-service-options',
            'type'                  => 'text',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['keysist-home-service-content'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-service-content']
        ),
        'control' => array(
            'label'                 =>  __( 'Contenido', 'keysist' ),
            'section'               => 'keysist-home-service-options',
            'type'                  => 'textarea_html',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );