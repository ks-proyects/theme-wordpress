<?php
if ( ! function_exists( 'bizlight_home_aboutus' ) ) :
    /**
     * Featured Slider
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_home_aboutus() {
        global $bizlight_customizer_all_values;

        $bizlight_home_featured_title = $bizlight_customizer_all_values['bizlight-home-destacado-title'];
        $bizlight_home_featured_button_url = $bizlight_customizer_all_values['bizlight-home-destacado-button-url'];
        $bizlight_home_featured_background_image = $bizlight_customizer_all_values['bizlight-home-featured-fix-bg-image'];

        if( 1 != $bizlight_customizer_all_values['bizlight-home-featured-enable'] ){
            return null;
        }
        ?>
        <?php 
        if ($bizlight_home_featured_background_image == 1) {
            $bizlight_background_class = 'bg-fix';
        } else {
            $bizlight_background_class = 'bg-no-fix';
        }
        ?>
        <section id="acercanosotros" class="evision-wrapper block-section wrap-highlight <?php echo esc_attr($bizlight_background_class); ?>">
            <p style="display:none;">acercanosotros</p>
            <div class="container evision-animate fadeInUp">
                <h2><?php echo esc_html( $bizlight_home_featured_title ); ?></h2>
                <?php
                if( !empty( $bizlight_home_featured_button_url )){
                    ?>
                    <div class="btn-container btn-outline">
                        <a class="button" href="<?php echo esc_url( $bizlight_home_featured_button_url ); ?>">
                            <?php _e('Leer Más', 'bizlight');?>
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </section><!-- highlight section -->
        <?php
    }
endif;
add_action( 'homepage', 'bizlight_home_aboutus', 50 );