<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['keysist-home-product-title'] = __('Nuestros Productos','keysist');
$bizlight_customizer_defaults['keysist-home-product-content'] = __('Conoce acerca de nuestros Productos','keysist');
$bizlight_customizer_defaults['keysist-home-product-enable'] = 1;


/*aboutoptions*/
$bizlight_sections['keysist-home-product-options'] =
    array(
        'priority'       => 160,
        'title'          => __( 'Ajustes de Productos', 'keysist' ),
    );


$bizlight_settings_controls['keysist-home-product-title'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-product-title']
        ),
        'control' => array(
            'label'                 =>  __( 'Título', 'keysist' ),
            'section'               => 'keysist-home-product-options',
            'type'                  => 'text',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['keysist-home-product-content'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-product-content']
        ),
        'control' => array(
            'label'                 =>  __( 'Descripción', 'keysist' ),
            'section'               => 'keysist-home-product-options',
            'type'                  => 'textarea_html',
            'priority'              => 70,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['keysist-home-product-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-product-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Mostrar', 'keysist' ),
            'section'               => 'keysist-home-product-options',
            'type'                  => 'checkbox',
            'priority'              => 40,
            'active_callback'       => ''
        )
    );
