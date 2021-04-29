<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['keysist-home-convenio-title'] = __('Nuestros Productos','keysist');
$bizlight_customizer_defaults['keysist-home-convenio-content'] = __('Conoce acerca de nuestros Productos','keysist');
$bizlight_customizer_defaults['keysist-home-convenio-enable'] = 1;


/*aboutoptions*/
$bizlight_sections['keysist-home-product-options'] =
    array(
        'priority'       => 160,
        'title'          => __( 'Sección Convenios', 'keysist' ),
    );


$bizlight_settings_controls['keysist-home-convenio-title'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-convenio-title']
        ),
        'control' => array(
            'label'                 =>  __( 'Título', 'keysist' ),
            'section'               => 'keysist-home-product-options',
            'type'                  => 'text',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['keysist-home-convenio-content'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-convenio-content']
        ),
        'control' => array(
            'label'                 =>  __( 'Descripción', 'keysist' ),
            'section'               => 'keysist-home-product-options',
            'type'                  => 'textarea_html',
            'priority'              => 70,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['keysist-home-convenio-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-convenio-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Mostrar', 'keysist' ),
            'section'               => 'keysist-home-product-options',
            'type'                  => 'checkbox',
            'priority'              => 40,
            'active_callback'       => ''
        )
    );
