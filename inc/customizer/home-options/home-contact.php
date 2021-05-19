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
$bizlight_customizer_defaults['keysist-googlemaps-link'] = __( 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.9029315787745!2d-78.45112119942911!3d-0.14317630514420235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d58f9be2cffacd%3A0xfe298049f14ca5af!2sKeySist!5e0!3m2!1ses!2sec!4v1619722361501!5m2!1ses!2sec', 'keysist' );
$bizlight_customizer_defaults['keysist-googlemap-label'] = __( 'Estamos Aquí', 'keysist' );
$bizlight_customizer_defaults['keysist-celular'] = __( '+593988695631', 'keysist' );
$bizlight_customizer_defaults['keysist-telefono'] = __( '+59322359358', 'keysist' );
$bizlight_customizer_defaults['keysist-correo'] =  __( 'info@miempresa.com', 'keysist' );
$bizlight_customizer_defaults['keysist-whatsapp-mensaje'] = __( 'Quiero obtener más información de ustedes', 'keysist' );


/*testimonialsetting*/
$bizlight_sections['keysist-home-contact-enable-setting'] =
    array(
        'priority'       => 160,
        'title'          => __( 'Ajuste Sección de Contacto', 'keysist' ),
        'panel'          => 'keysist-home-config-options',
    );

$bizlight_settings_controls['keysist-home-contact-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-contact-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Mostrar', 'keysist' ),
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
$bizlight_settings_controls['keysist-googlemaps-link'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-googlemaps-link'],
        ),
        'control' => array(
            'label'                 =>  __( 'Google Maps Url', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'textarea_html',
            'priority'              => 20,
        )
    );
$bizlight_settings_controls['keysist-googlemap-label'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-googlemap-label']
        ),
        'control' => array(
            'label'                 =>  __( 'Leyenda del Mapa', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'text',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['keysist-celular'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-celular']
        ),
        'control' => array(
            'label'                 =>  __( 'Celular', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'text',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['keysist-whatsapp-mensaje'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-whatsapp-mensaje']
        ),
        'control' => array(
            'label'                 =>  __( 'Mensaje para Whatsapp', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'text',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['keysist-telefono'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-telefono']
        ),
        'control' => array(
            'label'                 =>  __( 'Teléfono', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'text',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['keysist-correo'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-correo']
        ),
        'control' => array(
            'label'                 =>  __( 'Correo', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'text',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );
    


