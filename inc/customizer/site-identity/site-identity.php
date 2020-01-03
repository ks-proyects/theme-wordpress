<?php
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-logo'] = '';
$bizlight_customizer_defaults['bizlight-title-tagline-message'] = sprintf( __( '%1$s If you do not have a logo %2$s', 'bizlight' ), '<span class="customize-control-title">','</span>' );
$bizlight_customizer_defaults['bizlight-enable-title'] = 1;
$bizlight_customizer_defaults['bizlight-enable-tagline'] = 1;
$bizlight_customizer_defaults['bizlight-phone'] = 'UIO +593 2 111 4586';
$bizlight_customizer_defaults['bizlight-info-email'] = 'info@miempresa.com';
$bizlight_customizer_defaults['bizlight-info-text-contact'] = 'Contactanos';

/*creating setting control*/
$bizlight_settings_controls['bizlight-logo'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-logo'],
        ),
        'control' => array(
            'label'                 =>  __( 'Logo', 'bizlight' ),
            'section'               => 'title_tagline',
            'type'                  => 'image',
            'priority'              => 70,
            'description'           =>  __( 'Tamaño de logotipo recomendado 165*50', 'bizlight' ),
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-phone'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-phone']
        ),
        'control' => array(
            'label'                 =>  __( 'Teléfono de Contacto', 'keysist' ),
            'section'               => 'title_tagline',
            'type'                  => 'text',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-info-email'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-info-email']
        ),
        'control' => array(
            'label'                 =>  __( 'Teléfono de Contacto', 'keysist' ),
            'section'               => 'title_tagline',
            'type'                  => 'text',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-info-text-contact'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-info-text-contact']
        ),
        'control' => array(
            'label'                 =>  __( 'Teléfono de Contacto', 'keysist' ),
            'section'               => 'title_tagline',
            'type'                  => 'text',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );
/*enable option for enable tagline in header*/
$bizlight_settings_controls['bizlight-title-tagline-message'] =
    array(
        'control' => array(
            'description'           =>  $bizlight_customizer_defaults['bizlight-title-tagline-message'],
            'section'               => 'title_tagline',
            'type'                  => 'message',
            'priority'              => 75,
            'active_callback'       => ''
        )
    );
/*enable option for enable tagline in header*/
$bizlight_settings_controls['bizlight-enable-title'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-enable-title'],
        ),
        'control' => array(
            'label'                 =>  __( 'Habilitar Titulo', 'bizlight' ),
            'section'               => 'title_tagline',
            'type'                  => 'checkbox',
            'priority'              => 80,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-enable-tagline'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-enable-tagline'],
        ),
        'control' => array(
            'label'                 =>  __( 'Habilitar Tagline', 'bizlight' ),
            'section'               => 'title_tagline',
            'type'                  => 'checkbox',
            'priority'              => 90,
            'active_callback'       => ''
        )
    );
