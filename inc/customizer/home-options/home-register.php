<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;
/*defaults values*/
$bizlight_customizer_defaults['keysist-home-testimonial-image-enable']     = 1;
$bizlight_customizer_defaults['keysist-home-testimonial-enable']           = 1;

/*testimonialsetting*/
$bizlight_sections['keysist-home-testimonial-enable-setting'] =
    array(
        'priority'       => 160,
        'title'          => __( 'Ajustes de Testimonios', 'keysist' ),
    );

$bizlight_settings_controls['keysist-home-testimonial-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-testimonial-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Activo', 'keysist' ),
            'section'               => 'keysist-home-testimonial-enable-setting',
            'type'                  => 'checkbox',
            'priority'              => 15,
            'active_callback'       => ''
        )
    );

    
$bizlight_settings_controls['keysist-home-testimonial-image-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-testimonial-image-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Mostrar Imagenes', 'keysist' ),
            'section'               => 'keysist-home-testimonial-enable-setting',
            'type'                  => 'checkbox',
            'priority'              => 15,
            'active_callback'       => ''
        )
    );