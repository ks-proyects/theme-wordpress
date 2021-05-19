<?php
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-destacado-title'] = __( 'Quieres Conocer más acerca de nuestra empresa?', 'bizlight' );
$bizlight_customizer_defaults['bizlight-home-destacado-button-url'] = esc_url( home_url( '/about-us' ) );
$bizlight_customizer_defaults['bizlight-home-featured-enable'] = 1;
$bizlight_customizer_defaults['bizlight-home-featured-fix-bg-image'] = 1;

$bizlight_sections['bizlight-home-featured'] =
    array(
        'priority'       => 170,
        'title'          => __( 'Ajustes Sección Acerca', 'bizlight' ),
        'panel'          => 'keysist-home-config-options',
    );

$bizlight_settings_controls['bizlight-home-destacado-title'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-destacado-title'],
        ),
        'control' => array(
            'label'                 =>  __( 'Título', 'bizlight' ),
            'section'               => 'bizlight-home-featured',
            'type'                  => 'text',
            'priority'              => 10,
        )
    );

$bizlight_settings_controls['bizlight-home-destacado-button-url'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-destacado-button-url'],
        ),
        'control' => array(
            'label'                 =>  __( 'Label Boton Link', 'bizlight' ),
            'section'               => 'bizlight-home-featured',
            'type'                  => 'text',
            'priority'              => 40,
        )
    );

$bizlight_settings_controls['bizlight-home-featured-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-featured-enable'],
        ),
        'control' => array(
            'label'                 =>  __( 'Mostrar', 'bizlight' ),
            'section'               => 'bizlight-home-featured',
            'type'                  => 'checkbox',
            'priority'              => 50,
        )
    );

$bizlight_settings_controls['bizlight-home-featured-fix-bg-image'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-featured-fix-bg-image'],
        ),
        'control' => array(
            'label'                 =>  __( 'Recortar la imagen de fondo', 'bizlight' ),
            'section'               => 'bizlight-home-featured',
            'type'                  => 'checkbox',
            'priority'              => 60,
        )
    );