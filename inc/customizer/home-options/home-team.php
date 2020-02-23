<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;
/*defaults values*/
$bizlight_customizer_defaults['keysist-home-team-enable']           = 1;
$bizlight_customizer_defaults['keysist-home-team-title'] = __('Conoce nuestro Equipo','keysist');
/*teamsetting*/
$bizlight_sections['keysist-home-team-options'] =
    array(
        'priority'       => 160,
        'title'          => __( 'Equipo de Trabajo', 'keysist' ),
    );

$bizlight_settings_controls['keysist-home-team-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-team-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Activo', 'keysist' ),
            'section'               => 'keysist-home-team-options',
            'type'                  => 'checkbox',
            'priority'              => 15,
            'active_callback'       => ''
        )
    );

    $bizlight_settings_controls['keysist-home-team-title'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-team-title']
        ),
        'control' => array(
            'label'                 =>  __( 'Título', 'keysist' ),
            'section'               => 'keysist-home-team-options',
            'type'                  => 'text',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );