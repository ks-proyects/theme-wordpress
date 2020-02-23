<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-fs-number']                 = 4;
$bizlight_customizer_defaults['bizlight-fs-slider-mode']            = 'horizontal';
$bizlight_customizer_defaults['bizlight-fs-enable-control']         = 1;
$bizlight_customizer_defaults['bizlight-fs-enable-autoplay']        = 1;
$bizlight_customizer_defaults['bizlight-fs-primary-enable-button']  = 1;
$bizlight_customizer_defaults['bizlight-fs-extra-enable-button']    = 1;
$bizlight_customizer_defaults['bizlight-fs-primary-button-text']    = __( 'Ver Más', 'bizlight' );
$bizlight_customizer_defaults['bizlight-fs-button-text']            = __( 'Registrarme', 'bizlight' );
$bizlight_customizer_defaults['bizlight-fs-button-url']             = '#';
$bizlight_customizer_defaults['bizlight-fs-right-image']            = get_template_directory_uri().'/assets/img/slider.jpg';

$bizlight_customizer_defaults['bizlight-fs-enable-on'] = 'front-index-page';
$bizlight_customizer_defaults['bizlight-fs-enable'] = 1;

/*fs options*/
$bizlight_sections['bizlight-fs-slider-options'] =
    array(
        'priority'       => 150,
        'title'          => __( 'Configuración de Slider', 'bizlight' ),
    );

$bizlight_settings_controls['bizlight-fs-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Habilitar Slider', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'checkbox',
            'priority'              => 30,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-fs-number'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-number']
        ),
        'control' => array(
            'label'                 =>  __( 'Número de Slider a Mostrar', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'select',
            'choices'               => array(
                1 => __( '1', 'bizlight' ),
                2 => __( '2', 'bizlight' ),
                3 => __( '3', 'bizlight' ),
                4 => __( '4', 'bizlight' ),
                5 => __( '5', 'bizlight' ),
                6 => __( '6', 'bizlight' ),
                7 => __( '7', 'bizlight' )
            ),
            'priority'              => 30,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-fs-slider-mode'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-slider-mode']
        ),
        'control' => array(
            'label'                 =>  __( 'Movimiento del Slider', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'select',
            'choices'               => array(
                'scrollHorz' => __( 'horizontal', 'bizlight' ),
                'scrollVert' => __( 'Vertical', 'bizlight' )
            ),
            'priority'              => 40,
            'active_callback'       => ''
        )
    );


$bizlight_settings_controls['bizlight-fs-enable-control'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-enable-control']
        ),
        'control' => array(
            'label'                 =>  __( 'Habilitar Navegación', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'checkbox',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-fs-enable-autoplay'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-enable-autoplay']
        ),
        'control' => array(
            'label'                 =>  __( 'Habilitar AutoPlay', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'checkbox',
            'priority'              => 60,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-fs-primary-enable-button'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-primary-enable-button'],
        ),
        'control' => array(
            'label'                 =>  __( 'Habilitar Botón Primario', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'checkbox',
            'priority'              => 63,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-fs-primary-button-text'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-primary-button-text'],
        ),
        'control' => array(
            'label'                 =>  __( 'Texto Botón Primario', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'text',
            'priority'              => 65,
        )
    );



$bizlight_settings_controls['bizlight-fs-extra-enable-button'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-extra-enable-button'],
        ),
        'control' => array(
            'label'                 =>  __( 'Habilitar Botón Secundario', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'checkbox',
            'priority'              => 70,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-fs-button-text'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-button-text'],
        ),
        'control' => array(
            'label'                 =>  __( 'Texto Botón Secundario', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'text',
            'priority'              => 80,
        )
    );


$bizlight_settings_controls['bizlight-fs-button-url'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-button-url'],
        ),
        'control' => array(
            'label'                 =>  __( 'Link Texto Botón Secundario', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'text',
            'priority'              => 90,
        )
    );
$bizlight_settings_controls['bizlight-fs-right-image'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-right-image']
        ),
        'control' => array(
            'label'                 =>  __( 'Imagen por Defecto', 'bizlight' ),
            'description'           =>  __( 'Tamaño de imagen recomendado 1361 * 533, si elimina la imagen, la imagen predeterminada mostrará', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'image',
            'priority'              => 90,
            'active_callback'       => ''
        )
    );