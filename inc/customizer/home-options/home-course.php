<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['keysist-home-course-title'] = __('Cursos','keysist');
$bizlight_customizer_defaults['keysist-home-course-content'] = __('Conoce nuestros cursos','keysist');
$bizlight_customizer_defaults['keysist-home-course-enable'] = 1;


/*aboutoptions*/
$bizlight_sections['keysist-home-course-options'] =
    array(
        'priority'       => 70,
        'title'          => __( 'Cursos', 'keysist' ),
    );


$bizlight_settings_controls['keysist-home-course-title'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-course-title']
        ),
        'control' => array(
            'label'                 =>  __( 'Título', 'keysist' ),
            'section'               => 'keysist-home-course-options',
            'type'                  => 'text',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['keysist-home-course-content'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-course-content']
        ),
        'control' => array(
            'label'                 =>  __( 'Descripción', 'keysist' ),
            'section'               => 'keysist-home-course-options',
            'type'                  => 'textarea_html',
            'priority'              => 70,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['keysist-home-course-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-course-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable course', 'keysist' ),
            'section'               => 'keysist-home-course-options',
            'type'                  => 'checkbox',
            'priority'              => 40,
            'active_callback'       => ''
        )
    );



