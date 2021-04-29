<?php
if ( ! function_exists( 'keysist_home_curso_array' ) ) :
    /**
     * Featured Slider array creation
     *
     * @since Keysist 1.0.0
     *
     * @param null
     * @return array
     */
    function keysist_home_curso_array(  ){
         // the query
         $keysist_home_cursos_static_array = array();
         $keysist_home_cursos_args =    array(
            'post_type' => 'taller',
            //'posts_per_page' => 4,
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
        $keysist_home_cursos_static_array = array(); /*again empty array*/
        $keysist_home_service_post_query = new WP_Query( $keysist_home_cursos_args );
        if ($keysist_home_service_post_query->have_posts()):
            $i=0;
            while ( $keysist_home_service_post_query->have_posts() ) : $keysist_home_service_post_query->the_post();
                $keysist_home_cursos_static_array[$i]['keysist-home-taller-title'] = get_the_title() ;
                $keysist_home_cursos_static_array[$i]['keysist-home-taller-content'] =bizlight_words_count( 30 ,get_the_content());
                $keysist_home_cursos_static_array[$i]['keysist-home-taller-link'] = get_permalink();
                $keysist_home_cursos_static_array[$i]['keysist-home-taller-duracion'] = get_field('duracion'); 
                $keysist_home_cursos_static_array[$i]['keysist-home-taller-tipo-duracion'] = get_field('tipo_duracion'); 
                $i++;
            endwhile;
            wp_reset_postdata();
        endif;
        return $keysist_home_cursos_static_array;
    }
endif;

if ( ! function_exists( 'keysist_home_taller' ) ) :
    /**
     * Featured Slider
     *
     * @since Keysist 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function keysist_home_taller() {
        global $bizlight_customizer_all_values;
        if( 1 != $bizlight_customizer_all_values['keysist-home-taller-enable'] ){
            return null;
        }
            $bizlight_home_curso_title = 'Talleres';
            $bizlight_home_curso_contenido = $bizlight_customizer_all_values['keysist-home-taller-content'];
            ?>
            <section id="curso" class="evision-wrapper block-section wrap-service">
            
                <p style="display:none;">curso</p>
                <div class="container">
            <?php if(!empty( $bizlight_home_curso_title ) ){
                ?>
                <h2 class="evision-animate slideInDown"><?php echo esc_html( $bizlight_home_curso_title );?></h2>
                <?php if(!empty( $bizlight_home_curso_contenido ) ){
                ?>
                <h3 class="evision-animate slideOutUp"><?php echo esc_html( $bizlight_home_curso_contenido );?></h3>
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
                                foreach( keysist_home_curso_array() as $bizlight_service_array ){
                                    $data_wow_delay = 'data-wow-delay='.$data_delay.'s';
                                    ?>
                                    <div class="col-md-3 box-container evision-animate fadeInUp" <?php echo esc_attr( $data_wow_delay );?>>
                                        <div class="box-inner">
                                            <a href="<?php echo esc_url( $bizlight_service_array['keysist-home-curso-link'] );?>" title="<?php echo esc_attr( $bizlight_service_array['keysist-home-taller-title'] ); ?>">
                                                <div class="icon-container">
                                                    <h3>Duración: <?php echo esc_attr( $bizlight_service_array['keysist-home-taller-duracion'] ); ?> <?php echo esc_attr( $bizlight_service_array['keysist-home-taller-tipo-duracion'] ); ?></h3>
                                                </div>
                                                <div class="box-content service-content">
                                                    <h3><?php echo esc_html( $bizlight_service_array['keysist-home-taller-title'] );?></h3>
                                                    <div class="box-content-text service-content-text">
                                                        <p>  
                                                            <?php echo wp_kses_post( $bizlight_service_array['keysist-home-taller-content'] );?>
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
add_action( 'homepage', 'keysist_home_taller', 20 );