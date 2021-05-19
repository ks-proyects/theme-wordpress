<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-blogs-title'] = __('Últimas Noticias','bizlight');
$bizlight_customizer_defaults['bizlight-blogs-sinle-word'] = 35;
$bizlight_customizer_defaults['bizlight-home-blogs-enable'] = 1;
$bizlight_customizer_defaults['bizlight-home-blogs-category'] = 0;

/*aboutoptions*/
$bizlight_sections['bizlight-home-blog-options'] =
    array(
        'priority'       => 175,
        'title'          => __( 'Ajuste Sección de Blog', 'bizlight' ),
        'panel'          => 'keysist-home-config-options',
    );


$bizlight_settings_controls['bizlight-home-blogs-title'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-blogs-title']
        ),
        'control' => array(
            'label'                 =>  __( 'Titulo Principal', 'bizlight' ),
            'section'               => 'bizlight-home-blog-options',
            'type'                  => 'text',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-home-blogs-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-blogs-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Mostrar', 'bizlight' ),
            'section'               => 'bizlight-home-blog-options',
            'type'                  => 'checkbox',
            'priority'              => 40,
            'active_callback'       => ''
        )
    );


$bizlight_settings_controls['bizlight-blogs-sinle-word'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-blogs-sinle-word']
        ),
        'control' => array(
            'label'                 =>  __( 'Cantidad de Letras a Mostrar', 'bizlight' ),
            'section'               => 'bizlight-home-blog-options',
            'type'                  => 'number',
            'priority'              => 70,
            'active_callback'       => ''
        )
    );

/*creating setting control for bizlight-fs-Category start*/
$bizlight_settings_controls['bizlight-home-blogs-category'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-blogs-category']
        ),
        'control' => array(
            'label'                 =>  __( 'Seleccionar categoría para blog', 'bizlight' ),
            'description'           =>  __( 'El blog solo se mostrará en esta categoría.', 'bizlight' ),
            'section'               => 'bizlight-home-blog-options',
            'type'                  => 'category_dropdown',
            'priority'              => 80,
            'active_callback'       => ''
        )
    );
