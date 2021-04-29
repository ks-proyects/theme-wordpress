<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['keysist-home-course-title'] = __('Cursos','keysist');
//Cursos
$bizlight_customizer_defaults['keysist-home-cursos-content'] = __('Conoce nuestros Cursos','keysist');
$bizlight_customizer_defaults['keysist-home-cursos-enable'] = 1;
//taller
$bizlight_customizer_defaults['keysist-home-taller-content'] = __('Conoce nuestros talleres','keysist');
$bizlight_customizer_defaults['keysist-home-taller-enable'] = 1;

//pregrado
$bizlight_customizer_defaults['keysist-home-pregrado-content'] = __('Conoce nuestros pregrado','keysist');
$bizlight_customizer_defaults['keysist-home-pregrado-enable'] = 1;

//postgrado
$bizlight_customizer_defaults['keysist-home-postgrado-content'] = __('Conoce nuestros postgrado','keysist');
$bizlight_customizer_defaults['keysist-home-postgrado-enable'] = 1;

//maestria
$bizlight_customizer_defaults['keysist-home-maestria-content'] = __('Conoce nuestras maestrias','keysist');
$bizlight_customizer_defaults['keysist-home-maestria-enable'] = 1;

//doctorado
$bizlight_customizer_defaults['keysist-home-doctorado-content'] = __('Conoce nuestros doctorados','keysist');
$bizlight_customizer_defaults['keysist-home-doctorado-enable'] = 1;

//diplomado
$bizlight_customizer_defaults['keysist-home-diplomado-content'] = __('Conoce nuestros diplomados','keysist');
$bizlight_customizer_defaults['keysist-home-diplomado-enable'] = 1;



/*aboutoptions*/
$bizlight_sections['keysist-home-course-options'] =
    array(
        'priority'       => 160,
        'title'          => __( 'Ajustes de Cursos', 'keysist' ),
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
$bizlight_settings_controls['keysist-home-cursos-content'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-cursos-content']
        ),
        'control' => array(
            'label'                 =>  __( 'Descripción Cursos', 'keysist' ),
            'section'               => 'keysist-home-course-options',
            'type'                  => 'textarea_html',
            'priority'              => 70,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['keysist-home-cursos-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-cursos-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Mostrar Cursos', 'keysist' ),
            'section'               => 'keysist-home-course-options',
            'type'                  => 'checkbox',
            'priority'              => 40,
            'active_callback'       => ''
        )
    );
//taller
$bizlight_settings_controls['keysist-home-taller-content'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-taller-content']
        ),
        'control' => array(
            'label'                 =>  __( 'Descripción Talleres', 'keysist' ),
            'section'               => 'keysist-home-course-options',
            'type'                  => 'textarea_html',
            'priority'              => 70,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['keysist-home-taller-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-taller-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Mostrar Talleres', 'keysist' ),
            'section'               => 'keysist-home-course-options',
            'type'                  => 'checkbox',
            'priority'              => 40,
            'active_callback'       => ''
        )
    );
//pregrado
$bizlight_settings_controls['keysist-home-pregrado-content'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-pregrado-content']
        ),
        'control' => array(
            'label'                 =>  __( 'Descripción Pregrados', 'keysist' ),
            'section'               => 'keysist-home-course-options',
            'type'                  => 'textarea_html',
            'priority'              => 70,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['keysist-home-pregrado-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-pregrado-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Motrar pregrado', 'keysist' ),
            'section'               => 'keysist-home-course-options',
            'type'                  => 'checkbox',
            'priority'              => 40,
            'active_callback'       => ''
        )
    );
//postgrado
$bizlight_settings_controls['keysist-home-postgrado-content'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-postgrado-content']
        ),
        'control' => array(
            'label'                 =>  __( 'Descripción Postgrado', 'keysist' ),
            'section'               => 'keysist-home-course-options',
            'type'                  => 'textarea_html',
            'priority'              => 70,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['keysist-home-postgrado-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-postgrado-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Mostrar Postgrados', 'keysist' ),
            'section'               => 'keysist-home-course-options',
            'type'                  => 'checkbox',
            'priority'              => 40,
            'active_callback'       => ''
        )
    );
//maestria
$bizlight_settings_controls['keysist-home-maestria-content'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-maestria-content']
        ),
        'control' => array(
            'label'                 =>  __( 'Descripción Maestrias', 'keysist' ),
            'section'               => 'keysist-home-course-options',
            'type'                  => 'textarea_html',
            'priority'              => 70,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['keysist-home-maestria-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-maestria-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Mostrar Mestrias', 'keysist' ),
            'section'               => 'keysist-home-course-options',
            'type'                  => 'checkbox',
            'priority'              => 40,
            'active_callback'       => ''
        )
    );
//doctorado
$bizlight_settings_controls['keysist-home-doctorado-content'] =
array(
    'setting' =>     array(
        'default'              => $bizlight_customizer_defaults['keysist-home-doctorado-content']
    ),
    'control' => array(
        'label'                 =>  __( 'Descripción Doctorados', 'keysist' ),
        'section'               => 'keysist-home-course-options',
        'type'                  => 'textarea_html',
        'priority'              => 70,
        'active_callback'       => ''
    )
);
$bizlight_settings_controls['keysist-home-doctorado-enable'] =
array(
    'setting' =>     array(
        'default'              => $bizlight_customizer_defaults['keysist-home-doctorado-enable']
    ),
    'control' => array(
        'label'                 =>  __( 'Mostrar doctorados', 'keysist' ),
        'section'               => 'keysist-home-course-options',
        'type'                  => 'checkbox',
        'priority'              => 40,
        'active_callback'       => ''
    )
);
//diplomado
$bizlight_settings_controls['keysist-home-diplomado-content'] =
array(
    'setting' =>     array(
        'default'              => $bizlight_customizer_defaults['keysist-home-diplomado-content']
    ),
    'control' => array(
        'label'                 =>  __( 'Descripción Diplomados', 'keysist' ),
        'section'               => 'keysist-home-course-options',
        'type'                  => 'textarea_html',
        'priority'              => 70,
        'active_callback'       => ''
    )
);
$bizlight_settings_controls['keysist-home-diplomado-enable'] =
array(
    'setting' =>     array(
        'default'              => $bizlight_customizer_defaults['keysist-home-diplomado-enable']
    ),
    'control' => array(
        'label'                 =>  __( 'Mostrar Diplomados', 'keysist' ),
        'section'               => 'keysist-home-course-options',
        'type'                  => 'checkbox',
        'priority'              => 40,
        'active_callback'       => ''
    )
);



