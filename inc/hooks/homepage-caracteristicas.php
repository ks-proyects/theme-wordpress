<?php
if (!function_exists('keysist_home_about_array')) :
    /**
     * Featured Slider array creation
     *
     * @since Bizlight 1.0.0
     *
     * @param string $from_about
     * @return array
     */
    function keysist_home_about_array() {
        $keysist_home_about_contents_array = array();
        $bizlight_home_about_args =    array(
            'post_type' => 'caracteristica',
            'posts_per_page' => 3,
            'meta_query'     => array(
                array(
                  'key'        => 'mostrar',
                  'compare'    => '=',
                  'value'      => 1
                )
            ),
            'meta_key'       => 'orden',
            'orderby'        => 'meta_value',
            'order'          => 'ASC'
        );
        $keysist_home_about_contents_array = array();
        $bizlight_home_about_post_query = new WP_Query($bizlight_home_about_args);
        $i=0;
        if ($bizlight_home_about_post_query->have_posts()) :
            while ($bizlight_home_about_post_query->have_posts()) : $bizlight_home_about_post_query->the_post();
                $keysist_home_about_contents_array[$i]['keysist-home-caracteristica-title'] = get_the_title();
                $keysist_home_about_contents_array[$i]['keysist-home-caracteristica-content'] = bizlight_words_count( 30 ,get_the_content()) ;
                $keysist_home_about_contents_array[$i]['keysist-home-caracteristica-link'] = get_permalink();
                if(get_field('icono')>''):
                    $keysist_home_about_contents_array[$i]['keysist-home-caracteristica-icon'] = get_field('icono');
                else:
                    $keysist_home_about_contents_array[$i]['keysist-home-caracteristica-icon'] = 'fa-bullhorn';
                endif;
                $i++;
            endwhile;
            wp_reset_postdata();
        else:
            $keysist_home_about_contents_array[0]['keysist-home-caracteristica-title'] = __('Confiabilidad','bizlight');
            $keysist_home_about_contents_array[0]['keysist-home-caracteristica-content'] = __(" Somos una empresa de servicios de TI especializada en la ejecución de proyectos de infraestructura y desarrollo de Software.",'bizlight');
            $keysist_home_about_contents_array[0]['keysist-home-caracteristica-link'] = '#';
            $keysist_home_about_contents_array[0]['keysist-home-caracteristica-icon'] = 'fa-bullhorn';

            $keysist_home_about_contents_array[1]['keysist-home-caracteristica-title'] = __('Experiencia','bizlight');
            $keysist_home_about_contents_array[1]['keysist-home-caracteristica-content'] = __(" Más de 400 proyectos puestos en producción durante los últimos 15 años demuestran el compromiso con nuestros clientes, certifican nuestra metodología y reflejan la capacidad de nuestro equipo de profesionales..",'bizlight');
            $keysist_home_about_contents_array[1]['keysist-home-caracteristica-link'] = '#';
            $keysist_home_about_contents_array[1]['keysist-home-caracteristica-icon'] = 'fa-camera-retro';

            $keysist_home_about_contents_array[2]['keysist-home-caracteristica-title'] = __('Ejecución','bizlight');
            $keysist_home_about_contents_array[2]['keysist-home-caracteristica-content'] = __(" Las organizaciones donde el uso de tecnología de la información es un factor determinante en la búsqueda de eficiencia operativa encontrarán en MicroGestion la mejor opción para llevar a cabo sus proyectos de manera eficaz y repetible..",'bizlight');
            $keysist_home_about_contents_array[2]['keysist-home-caracteristica-link'] = '#';
            $keysist_home_about_contents_array[2]['keysist-home-caracteristica-icon'] = 'fa-cog';
        endif;
       
        
        
        return $keysist_home_about_contents_array;
    }
endif;

if (!function_exists('keysist_home_about')) :
    /**
     * Featured Slider
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function keysist_home_about() {
        global $bizlight_customizer_all_values;
        if (1 != $bizlight_customizer_all_values['keysist-home-about-enable']) {
            return null;
        }
        $keysist_home_about_title = $bizlight_customizer_all_values['keysist-home-about-title'];
        $bizlight_home_about_content = $bizlight_customizer_all_values['keysist-home-about-content'];
        $bizlight_home_about_right_image = $bizlight_customizer_all_values['keysist-home-about-right-image'];
        ?>
            <section id="caracteristicas" class="evision-wrapper block-section wrap-about">
                <p style="display:none;">caracteristicas</p>
                    <div class="container overhidden">
                        <div class="row">
                            <div class="col-md-5 evision-animate slideInLeft">
                                <div class="about-content">
                                    <h2><?php echo esc_html( $keysist_home_about_title );?></h2>
                                    <span class="title-divider"></span>
                                    <p class="about-hero-par">
                                        <?php echo wp_kses_post( $bizlight_home_about_content );?>
                                    </p>
                                    <?php
                                    foreach (keysist_home_about_array() as $bizlight_about_array) {
                                        ?>
                                        <div class="about-list">
                                            <span class="icon-section">
                                                <span><i class="fa <?php echo esc_attr( $bizlight_about_array['keysist-home-caracteristica-icon'] ); ?>"></i></span>
                                            </span>
                                            <div class="about-list-content">
                                                <h3>
                                                    <a href="<?php echo esc_url( $bizlight_about_array['keysist-home-caracteristica-link'] ); ?> ">
                                                        <?php echo esc_attr( $bizlight_about_array['keysist-home-caracteristica-title'] ); ?>
                                                    </a>
                                                </h3>
                                                <p>
                                                    <?php echo wp_kses_post( $bizlight_about_array['keysist-home-caracteristica-content'] ); ?>
                                                </p>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-7 evision-animate fadeInUp">
                                <div class="product-thumb">
                                    <img src="<?php echo esc_url( $bizlight_home_about_right_image );?>" />
                                </div>
                            </div>
                        </div>
                    </div>
            </section><!-- about section -->
            <?php
        ?>
        <?php
    }
endif;
add_action('homepage', 'keysist_home_about', 20);