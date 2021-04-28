<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*creating panel for general*/
$bizlight_panels['bizlight-colors'] =
    array(
        'title'          => __( 'Colors', 'bizlight' ),
        'description'    => __( 'Customize colors of you awesome site', 'bizlight' ),
        'priority'       => 42,
    );

/*Default color*/
$bizlight_sections['colors'] =
    array(
        'priority'       => 40,
        'title'          => __( 'Basic Colors Options', 'bizlight' ),
        'panel'          => 'bizlight-colors',
    );

/*Bizlight colors*/
$bizlight_sections['bizlight-colors'] =
    array(
        'priority'       => 50,
        'title'          => __( 'Bizlight Colors Options', 'bizlight' ),
        'panel'          => 'bizlight-colors',
    );
/*Bizlight colors*/
$bizlight_sections['bizlight-colors-reset'] =
    array(
        'priority'       => 60,
        'title'          => __( 'Bizlight Colors Reset', 'bizlight' ),
        'panel'          => 'bizlight-colors',
    );

/*defaults values*/
$bizlight_customizer_defaults['keysist-color-titulos'] = '#212121';
$bizlight_customizer_defaults['keysist-color-link'] = '#212121';
$bizlight_customizer_defaults['bizlight-site-identity-color'] = '#ffffff';
$bizlight_customizer_defaults['keysist-color-link-hover'] = '#028484';
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
            $bizlight_customizer_saved_values['bizlight-site-identity-color'] = $bizlight_customizer_defaults['bizlight-site-identity-color'];
            $bizlight_customizer_saved_values['keysist-color-link-hover'] = $bizlight_customizer_defaults['keysist-color-link-hover'];
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


$bizlight_settings_controls['bizlight-site-identity-color'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-site-identity-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Colores de la Página', 'bizlight' ),
            'description'           =>  __( 'Colores de los diferentes elementos', 'bizlight' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 11,
            'active_callback'       => ''
        )
    );

    $bizlight_settings_controls['keysist-color-principal'] = array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-color-principal'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Color Principal', 'bizlight' ),
            'description'           =>  __( 'Header, Botones, Bordes', 'bizlight' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 1,
        )
    );
    $bizlight_settings_controls['keysist-color-secundario'] = array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-color-secundario'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Color Secundario', 'bizlight' ),
            'description'           =>  __( 'Botones Hover,Fondo Titulos', 'bizlight' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 2,
        )
    );


$bizlight_settings_controls['keysist-color-titulos'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-color-titulos'],
        ),
        'control' => array(
            'label'                 =>  __( 'Color de Titulos', 'bizlight' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 31,
            'active_callback'       => ''
        )
    );



$bizlight_settings_controls['keysist-color-link'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-color-link'],
        ),
        'control' => array(
            'label'                 =>  __( 'Color de Links', 'bizlight' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 32,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['keysist-color-link-hover'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-color-link-hover'],
        ),
        'control' => array(
            'label'                 =>  __( 'Color de Links Hover', 'bizlight' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 100,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-banner-text-color'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-banner-text-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Banner Text Color', 'bizlight' ),
            'description'           =>  __( 'Text color above the image will be changed', 'bizlight' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 100,
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
            'description'           =>  __( 'Caution: Reset all above color settings to default. Refresh the page after save to view the effects. ', 'bizlight' ),
            'section'               => 'bizlight-colors-reset',
            'type'                  => 'checkbox',
            'priority'              => 220,
            'active_callback'       => ''
        )
    );