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
            'post_type' => 'curso',
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
                $keysist_home_cursos_static_array[$i]['keysist-home-curso-title'] = get_the_title() ;
                $keysist_home_cursos_static_array[$i]['keysist-home-curso-content'] =bizlight_words_count( 30 ,get_the_content());
                $keysist_home_cursos_static_array[$i]['keysist-home-curso-link'] = the_permalink();
                $keysist_home_cursos_static_array[$i]['keysist-home-curso-duracion'] = get_field('duracion'); 
                $keysist_home_cursos_static_array[$i]['keysist-home-curso-tipo-duracion'] = get_field('tipo_duracion'); 
                if(has_post_thumbnail()){
                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'curso' );
                    $keysist_home_cursos_static_array[$i]['keysist-home-curso-imagen'] = $thumb['0'];
                }else{
                    $keysist_home_cursos_static_array[$i]['keysist-home-curso-imagen'] = get_template_directory_uri().'/assets/img/no-image-course.jpg';
                }
                $i++;
            endwhile;
            wp_reset_postdata();
        endif;
        return $keysist_home_cursos_static_array;
    }
endif;

if ( ! function_exists( 'keysist_home_curso' ) ) :
    /**
     * Featured Slider
     *
     * @since Keysist 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function keysist_home_curso() {
        global $bizlight_customizer_all_values;
        if( 1 != $bizlight_customizer_all_values['keysist-home-curso-enable'] ){
            return null;
        }
            $bizlight_home_curso_title = $bizlight_customizer_all_values['keysist-home-curso-title'];
            $bizlight_home_curso_contenido = $bizlight_customizer_all_values['keysist-home-curso-content'];
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
                    <?php
                        $i = 1;
                        $data_delay = 0;
                        foreach( keysist_home_curso_array() as $bizlight_service_array ){
                            $data_wow_delay = 'data-wow-delay='.$data_delay.'s';
                            ?>
                            <div class="col-md-3 box-container evision-animate fadeInUp" <?php echo esc_attr( $data_wow_delay );?>>
                                <div class="single-thumb-inner">
                                        <div class="single-thumb-image key-post-radio">
                                            <img src="<?php echo esc_url( $bizlight_service_array['keysist-home-curso-imagen']); ?>" alt="<?php $bizlight_service_array['keysist-home-curso-title'];?>">
                                            <div class="overlay"></div>
                                            <div class="icon">
                                                <a href="<?php echo esc_url( $bizlight_service_array['keysist-home-curso-link'] ); ?>" title="<?php echo esc_attr( $bizlight_service_array['keysist-home-curso-title'] );?>">
                                                    <span><img src="<?php echo esc_url( get_template_directory_uri().'/assets/img/plus-icon.png'); ?>"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single-thumb-content">
                                            <h3> <a href="<?php echo esc_url( $bizlight_service_array['keysist-home-curso-link'] ); ?>"><?php echo esc_attr( $bizlight_service_array['keysist-home-curso-title'] );?></a></h3>
                                            <div class="single-thumb-content-text">
                                                <p>
                                                    <?php echo wp_kses_post($bizlight_service_array['keysist-home-curso-content']);?>
                                                </p>
                                            </div>
                                        </div>
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
add_action( 'homepage', 'keysist_home_curso', 20 );