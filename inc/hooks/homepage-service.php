<?php
if ( ! function_exists( 'keysist_home_service_array' ) ) :
    /**
     * Featured Slider array creation
     *
     * @since Keysist 1.0.0
     *
     * @param null
     * @return array
     */
    function keysist_home_service_array(  ){
         // the query
         $keysist_home_service_static_array = array();
         $keysist_home_service_args =    array(
            'post_type' => 'keysist_servicios',
            'posts_per_page' => 4,
            'meta_query'     => array(
                array(
                  'key'        => 'activo',
                  'compare'    => '=',
                  'value'      => 1
                )
            ),
            'meta_key'       => 'orden',
            'orderby'        => 'meta_value',
            'order'          => 'ASC'
        );
        $keysist_home_service_static_array = array(); /*again empty array*/
        $keysist_home_service_post_query = new WP_Query( $keysist_home_service_args );
        if ($keysist_home_service_post_query->have_posts()):
            $i=0;
            while ( $keysist_home_service_post_query->have_posts() ) : $keysist_home_service_post_query->the_post();
                $keysist_home_service_static_array[$i]['keysist-home-service-title'] = get_the_title() ;
                $keysist_home_service_static_array[$i]['keysist-home-service-content'] =bizlight_words_count( 30 ,get_the_content());
                $keysist_home_service_static_array[$i]['keysist-home-service-link'] = get_permalink();
                if(get_field('icono')>''):
                    $keysist_home_service_static_array[$i]['keysist-home-service-icon'] = get_field('icono'); 
                else:
                    $keysist_home_service_static_array[$i]['keysist-home-service-icon'] = 'fa-desktop';
                endif;
                $i++;
            endwhile;
            wp_reset_postdata();
        else:
            $keysist_home_service_static_array[0]['keysist-home-service-title'] = __('DISEÑO ENCANTADOR', 'bizlight');
            $keysist_home_service_static_array[0]['keysist-home-service-content'] = __("The set doesn't moved. Deep don't fru it fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness. every bring in it.", 'bizlight');
            $keysist_home_service_static_array[0]['keysist-home-service-link'] = '#';
            $keysist_home_service_static_array[0]['keysist-home-service-icon'] = 'fa-desktop';
    
            $keysist_home_service_static_array[1]['keysist-home-service-title'] = __('FOTOGRAFÍA CON ESTILO', 'bizlight');
            $keysist_home_service_static_array[1]['keysist-home-service-content'] = __("The set doesn't moved. Deep don't fru it fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness. every bring in it.", 'bizlight');
            $keysist_home_service_static_array[1]['keysist-home-service-link'] = '#';
            $keysist_home_service_static_array[1]['keysist-home-service-icon'] = 'fa-camera-retro';
    
            $keysist_home_service_static_array[2]['keysist-home-service-title'] = __('AGENCIA CREATIVA', 'bizlight');
            $keysist_home_service_static_array[2]['keysist-home-service-content'] = __("The set doesn't moved. Deep don't fru it fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness. every bring in it.", 'bizlight');
            $keysist_home_service_static_array[2]['keysist-home-service-link'] = '#';
            $keysist_home_service_static_array[2]['keysist-home-service-icon'] = 'fa-rocket';
    
            $keysist_home_service_static_array[3]['keysist-home-service-title'] = __('CREATIVE AGENCY', 'bizlight');
            $keysist_home_service_static_array[3]['keysist-home-service-content'] = __("The set doesn't moved. Deep don't fru it fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness. every bring in it.", 'bizlight');
            $keysist_home_service_static_array[3]['keysist-home-service-link'] = '#';
            $keysist_home_service_static_array[3]['keysist-home-service-icon'] = 'fa-meteor';
        endif;
        return $keysist_home_service_static_array;
    }
endif;

if ( ! function_exists( 'keysist_home_service' ) ) :
    /**
     * Featured Slider
     *
     * @since Keysist 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function keysist_home_service() {
        global $bizlight_customizer_all_values;
        if( 1 != $bizlight_customizer_all_values['keysist-home-service-enable'] ){
            return null;
        }
            $bizlight_home_service_title = $bizlight_customizer_all_values['keysist-home-service-title'];
            $bizlight_home_service_contenido = $bizlight_customizer_all_values['keysist-home-service-content'];
            ?>
            <section id="services" class="evision-wrapper block-section wrap-service">
                <div class="container">
            <?php if(!empty( $bizlight_home_service_title ) ){
                ?>
                <h2 class="evision-animate slideInDown"><?php echo esc_html( $bizlight_home_service_title );?></h2>
                <?php if(!empty( $bizlight_home_service_contenido ) ){
                ?>
                <h3 class="evision-animate slideOutUp"><?php echo esc_html( $bizlight_home_service_contenido );?></h3>
                <?php
            }?>
                <span class="title-divider"></span>
                <?php
            }?>
                    <div class="row block-row overhidden">
                        </div>
                        <div class="row block-row overhidden">
                            <?php
                                $i = 1;
                                $data_delay = 0;
                                foreach( keysist_home_service_array() as $bizlight_service_array ){
                                    $data_wow_delay = 'data-wow-delay='.$data_delay.'s';
                                    ?>
                                    <div class="col-md-3 box-container evision-animate fadeInUp" <?php echo esc_attr( $data_wow_delay );?>>
                                        <div class="box-inner">
                                            <a href="<?php echo esc_url( $bizlight_service_array['keysist-home-service-link'] );?>" title="<?php echo esc_attr( $bizlight_service_array['keysist-home-service-title'] ); ?>">
                                                <div class="icon-container">
                                                    <span><i class="fa <?php echo esc_attr( $bizlight_service_array['keysist-home-service-icon'] ); ?>"></i></span>
                                                </div>
                                                <div class="box-content">
                                                    <h3><?php echo esc_html( $bizlight_service_array['keysist-home-service-title'] );?></h3>
                                                    <div class="box-content-text">
                                                        <p>
                                                            <?php echo wp_kses_post( $bizlight_service_array['keysist-home-service-content'] );?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                }
                            ?>
                    </div>
                </div>
            </section><!-- about section -->
        <?php
    }
endif;
add_action( 'homepage', 'keysist_home_service', 20 );