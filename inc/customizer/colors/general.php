<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*creating panel for general*/
$bizlight_panels['keysist-colores'] =
    array(
        'title'          => __( 'Colores Generales', 'bizlight' ),
        'description'    => __( 'Configure los colores de su página', 'bizlight' ),
        'priority'       => 42,
    );

/*Default color*/
$bizlight_sections['paleta-colores'] =
    array(
        'priority'       => 40,
        'title'          => __( 'Paleta de Colores', 'bizlight' ),
        'panel'          => 'keysist-colores',
    );


/*defaults values*/
$bizlight_customizer_defaults['keysist-color-titulos'] = '#212121';
$bizlight_customizer_defaults['keysist-color-link'] = '#212121';
$bizlight_customizer_defaults['bizlight-banner-text-color'] = '#ffffff';
$bizlight_customizer_defaults['bizlight-color-reset'] = '';
$bizlight_customizer_defaults['keysist-color-principal'] = '#8a2b2b';
$bizlight_customizer_defaults['keysist-color-secundario'] = '#5e0c0c';


/**
 * Reset color settings to default
 * @param  $input
 *
 * @since bizlight 1.0
 */
if ( ! function_exists( 'bizlight_color_reset' ) ) :
    function bizlight_color_reset( ) {
        
            global $bizlight_customizer_saved_values;
           $bizlight_customizer_saved_values = bizlight_get_all_options();
        if ( $bizlight_customizer_saved_values['bizlight-color-reset'] == 1 ) {
            global $bizlight_customizer_defaults;
            global $bizlight_customizer_saved_values;

            /*setting fields */
            
            $bizlight_customizer_saved_values['keysist-color-principal'] = $bizlight_customizer_defaults['keysist-color-principal'];
            $bizlight_customizer_saved_values['keysist-color-secundario'] = $bizlight_customizer_defaults['keysist-color-secundario'];
            $bizlight_customizer_saved_values['keysist-color-titulos'] = $bizlight_customizer_defaults['keysist-color-titulos'];
            $bizlight_customizer_saved_values['keysist-color-link'] = $bizlight_customizer_defaults['keysist-color-link'];
            $bizlight_customizer_saved_values['bizlight-banner-text-color'] = $bizlight_customizer_defaults['bizlight_customizer_defaults'];

            remove_theme_mod( 'background_color' );
            $bizlight_customizer_saved_values['bizlight-color-reset'] = '';
            /*resetting fields*/
            bizlight_reset_options( $bizlight_customizer_saved_values );

        }
        else {
            return '';
        }
    }
endif;
add_action( 'customize_save_after','bizlight_color_reset' );



$bizlight_settings_controls['keysist-color-principal'] = array(
    'setting' =>     array(
        'default'              => $bizlight_customizer_defaults['keysist-color-principal'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Color Principal', 'bizlight' ),
        'description'           =>  __( 'Header, Botones, Bordes', 'bizlight' ),
        'section'               => 'paleta-colores',
        'type'                  => 'color',
        'priority'              => 12,
    )
);
$bizlight_settings_controls['keysist-color-secundario'] = array(
    'setting' =>     array(
        'default'              => $bizlight_customizer_defaults['keysist-color-secundario'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Color Secundario', 'bizlight' ),
        'description'           =>  __( 'Botones Hover,Fondo Titulos', 'bizlight' ),
        'section'               => 'paleta-colores',
        'type'                  => 'color',
        'priority'              => 13,
    )
);

$bizlight_settings_controls['keysist-color-titulos'] =
array(
    'setting' =>     array(
        'default'              => $bizlight_customizer_defaults['keysist-color-titulos'],
    ),
    'control' => array(
        'label'                 =>  __( 'Color de Titulos', 'bizlight' ),
        'description'           =>  __( 'Titulo de página, Footer, Blogs', 'bizlight' ),
        'section'               => 'paleta-colores',
        'type'                  => 'color',
        'priority'              => 14,
        'active_callback'       => ''
    )
);

$bizlight_settings_controls['keysist-color-link'] =
array(
    'setting' =>     array(
        'default'              => $bizlight_customizer_defaults['keysist-color-link'],
    ),
    'control' => array(
        'label'                 =>  __( 'Color de Links de las secciones con fondo', 'bizlight' ),
        'section'               => 'paleta-colores',
        'type'                  => 'color',
        'priority'              => 15,
        'active_callback'       => ''
    )
);

$bizlight_settings_controls['bizlight-banner-text-color'] =
array(
    'setting' =>     array(
        'default'              => $bizlight_customizer_defaults['bizlight-banner-text-color'],
    ),
    'control' => array(
        'label'                 =>  __( 'Color de Texto del Banner', 'bizlight' ),
        'description'           =>  __( 'Color del Texto de la sección del banner/carroucel', 'bizlight' ),
        'section'               => 'paleta-colores',
        'type'                  => 'color',
        'priority'              => 16,
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
        'label'                 =>  __( 'Reset', 'bizlight' ),
        'description'           =>  __( 'Precausión: Restablecera todas las configuraciones de color a sus valores por defecto. Actualiza la página después de guardar para ver los efectos.. ', 'bizlight' ),
        'section'               => 'paleta-colores',
        'type'                  => 'checkbox',
        'priority'              => 17,
        'active_callback'       => ''
    )
);