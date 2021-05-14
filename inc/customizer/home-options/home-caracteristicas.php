<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['keysist-home-about-enable'] = 1;
$bizlight_customizer_defaults['keysist-home-about-title'] = __('Acerca de Nosotros','bizlight');
$bizlight_customizer_defaults['keysist-home-about-content'] = __('Ofrecemos los siguientes servicios','bizlight');
$bizlight_customizer_defaults['keysist-home-about-right-image'] = get_template_directory_uri().'/assets/img/product.png';

/*servicesetting*/
$bizlight_sections['keysist-home-about-options'] =
    array(
        'priority'       => 160,
        'title'          => __( 'Ajustes de Nosotros', 'keysist' ),
         'panel'          => 'keysist-home-config-options',
    );

$bizlight_settings_controls['keysist-home-about-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-about-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Mostrar', 'keysist' ),
            'section'               => 'keysist-home-about-options',
            'type'                  => 'checkbox',
            'priority'              => 15,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['keysist-home-about-title'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-about-title']
        ),
        'control' => array(
            'label'                 =>  __( 'Título', 'keysist' ),
            'section'               => 'keysist-home-about-options',
            'type'                  => 'text',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['keysist-home-about-content'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-about-content']
        ),
        'control' => array(
            'label'                 =>  __( 'Contenido', 'keysist' ),
            'section'               => 'keysist-home-about-options',
            'type'                  => 'textarea_html',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['keysist-home-about-right-image'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-about-right-image']
        ),
        'control' => array(
            'label'                 =>  __( 'Right Site Image', 'bizlight' ),
            'description'           =>  __( 'Recommended image size 480 * 540, If you remove image the default image will show', 'bizlight' ),
            'section'               => 'keysist-home-about-options',
            'type'                  => 'image',
            'priority'              => 20,
            'active_callback'       => ''
        )
    ); 
