<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;
/*defaults values*/
$bizlight_customizer_defaults['keysist-home-contact-enable']           = 1;
$bizlight_customizer_defaults['keysist-home-contact-title'] = __( 'Contactanos', 'keysist' );
$bizlight_customizer_defaults['keysist-home-contact-descripcion'] = __( 'Si tienes dudas escribenos', 'keysist' );
$bizlight_customizer_defaults['keysist-home-contact-shor-code'] = __( '', 'keysist' );
$bizlight_customizer_defaults['bizlight-googlemaps-link'] = __( '', 'keysist' );
//
$bizlight_customizer_defaults['bizlight-celular'] = __( '+593988695631', 'keysist' );
$bizlight_customizer_defaults['bizlight-telefono'] = __( '+59322359358', 'keysist' );
$bizlight_customizer_defaults['bizlight-correo'] =  __( 'info@miempresa.com', 'keysist' );
$bizlight_customizer_defaults['bizlight-whatsapp-mensaje'] = __( 'Quiero obtener más información de ustedes', 'keysist' );
$bizlight_customizer_defaults['bizlight-googlemaps-link'] = __( '', 'keysist' );
$bizlight_customizer_defaults['bizlight-googlemap-label'] = __( 'Estamos Aquí', 'keysist' );

/*testimonialsetting*/
$bizlight_sections['keysist-home-contact-enable-setting'] =
    array(
        'priority'       => 160,
        'title'          => __( 'Datos de Contacto', 'keysist' ),
    );

$bizlight_settings_controls['keysist-home-contact-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-contact-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Activo', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'checkbox',
            'priority'              => 15,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['keysist-home-contact-title'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-contact-title'],
        ),
        'control' => array(
            'label'                 =>  __( 'Titulo', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'text',
            'priority'              => 20,
        )
    );
$bizlight_settings_controls['keysist-home-contact-descripcion'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-contact-descripcion'],
        ),
        'control' => array(
            'label'                 =>  __( 'Descripción', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'text',
            'priority'              => 20,
        )
    );
$bizlight_settings_controls['keysist-home-contact-shor-code'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-contact-shor-code'],
        ),
        'control' => array(
            'label'                 =>  __( 'Short Code Form', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'text',
            'priority'              => 20,
        )
    );
$bizlight_settings_controls['bizlight-googlemaps-link'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-googlemaps-link'],
        ),
        'control' => array(
            'label'                 =>  __( 'Google Maps Url', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'textarea_html',
            'priority'              => 20,
        )
    );
$bizlight_settings_controls['bizlight-googlemap-label'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-googlemap-label']
        ),
        'control' => array(
            'label'                 =>  __( 'Leyenda del Mapa', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'text',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-celular'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-celular']
        ),
        'control' => array(
            'label'                 =>  __( 'Celular', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'text',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-whatsapp-mensaje'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-whatsapp-mensaje']
        ),
        'control' => array(
            'label'                 =>  __( 'Mensaje para Whatsapp', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'text',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-telefono'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-telefono']
        ),
        'control' => array(
            'label'                 =>  __( 'Teléfono', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'text',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-correo'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-correo']
        ),
        'control' => array(
            'label'                 =>  __( 'Teléfono de Contacto', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'text',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );
    


