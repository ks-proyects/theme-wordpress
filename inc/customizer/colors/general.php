<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['keysist-color-fondo'] = '#ffffff';
$bizlight_customizer_defaults['keysist-color-principal'] = '#bb342f';
$bizlight_customizer_defaults['keysist-color-secundario'] = '#DDA448';
$bizlight_customizer_defaults['keysist-color-boton-texto'] = '#ffffff';
$bizlight_customizer_defaults['keysist-color-titulos'] = '#f7d851';
$bizlight_customizer_defaults['keysist-color-link'] = '#7a1818';
$bizlight_customizer_defaults['bizlight-banner-text-color'] = '#ffffff';
$bizlight_customizer_defaults['bizlight-color-reset'] = '';


/**
 * Reset color settings to default
 * @param  $input
 *
 * @since bizlight 1.0
 */
if (!function_exists('bizlight_color_reset')) :
    function bizlight_color_reset()
    {

        global $bizlight_customizer_saved_values;
        $bizlight_customizer_saved_values = bizlight_get_all_options();
        if ($bizlight_customizer_saved_values['bizlight-color-reset'] == 1) {
            global $bizlight_customizer_defaults;
            global $bizlight_customizer_saved_values;

            /*setting fields */
            
            $bizlight_customizer_saved_values['keysist-color-fondo'] = $bizlight_customizer_defaults['keysist-color-fondo'];
            $bizlight_customizer_saved_values['keysist-color-principal'] = $bizlight_customizer_defaults['keysist-color-principal'];
            $bizlight_customizer_saved_values['keysist-color-secundario'] = $bizlight_customizer_defaults['keysist-color-secundario'];
            $bizlight_customizer_saved_values['keysist-color-boton-texto'] = $bizlight_customizer_defaults['keysist-color-boton-texto'];
            $bizlight_customizer_saved_values['keysist-color-titulos'] = $bizlight_customizer_defaults['keysist-color-titulos'];
            $bizlight_customizer_saved_values['keysist-color-link'] = $bizlight_customizer_defaults['keysist-color-link'];
            $bizlight_customizer_saved_values['bizlight-banner-text-color'] = $bizlight_customizer_defaults['bizlight_customizer_defaults'];

            remove_theme_mod('background_color');
            $bizlight_customizer_saved_values['bizlight-color-reset'] = '';
            /*resetting fields*/
            bizlight_reset_options($bizlight_customizer_saved_values);
        } else {
            return '';
        }
    }
endif;
add_action('customize_save_after', 'bizlight_color_reset');



$bizlight_settings_controls['keysist-color-fondo'] = array(
    'setting' =>     array(
        'default'              => $bizlight_customizer_defaults['keysist-color-fondo'],
    ),
    'control' => array(
        'label'                 =>  esc_html__('Color Fondo', 'bizlight'),
        'description'           =>  __('Fondo de Página,Fondo Social', 'bizlight'),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 11,
    )
);
$bizlight_settings_controls['keysist-color-principal'] = array(
    'setting' =>     array(
        'default'              => $bizlight_customizer_defaults['keysist-color-principal'],
    ),
    'control' => array(
        'label'                 =>  esc_html__('Color Principal', 'bizlight'),
        'description'           =>  __('Header, Botones, Bordes, Iconos', 'bizlight'),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 12,
    )
);
$bizlight_settings_controls['keysist-color-boton-texto'] = array(
    'setting' =>     array(
        'default'              => $bizlight_customizer_defaults['keysist-color-boton-texto'],
    ),
    'control' => array(
        'label'                 =>  esc_html__('Color Boton Texto', 'bizlight'),
        'description'           =>  __('Botones Texto Hover,Color Iconos', 'bizlight'),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 13,
    )
);
$bizlight_settings_controls['keysist-color-secundario'] = array(
    'setting' =>     array(
        'default'              => $bizlight_customizer_defaults['keysist-color-secundario'],
    ),
    'control' => array(
        'label'                 =>  esc_html__('Color Secundario', 'bizlight'),
        'description'           =>  __('Color Degradado,Boton Banner Hover, Color del Menú', 'bizlight'),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 14,
    )
);



$bizlight_settings_controls['keysist-color-titulos'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-color-titulos'],
        ),
        'control' => array(
            'label'                 =>  __('Color de Titulos', 'bizlight'),
            'description'           =>  __('Titulo de página, Footer, Blogs', 'bizlight'),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 15,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['keysist-color-link'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-color-link'],
        ),
        'control' => array(
            'label'                 =>  __('Color de Links', 'bizlight'),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 16,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-banner-text-color'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-banner-text-color'],
        ),
        'control' => array(
            'label'                 =>  __('Color de Texto del Banner', 'bizlight'),
            'description'           =>  __('Color del Texto de la sección del banner/carroucel, Color de Letra de Titulo,Color de Letra de Subtitulo, Color de Letra del Menu', 'bizlight'),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 17,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-color-reset'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-color-reset'],
            'transport'            => 'postmessage',
        ),
        'control' => array(
            'label'                 =>  __('Reset', 'bizlight'),
            'description'           =>  __('Precausión: Restablecera todas las configuraciones de color a sus valores por defecto. Actualiza la página después de guardar para ver los efectos.. ', 'bizlight'),
            'section'               => 'colors',
            'type'                  => 'checkbox',
            'priority'              => 18,
            'active_callback'       => ''
        )
    );
