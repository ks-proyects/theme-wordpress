<?php


if ( ! function_exists( 'bizlight_home_admin' ) ) :
    /**
     * blog Slider
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_home_admin($tipo,$titulo,$descripcion,$mostrar) {
        if( 1 != $mostrar){
            return null;
        }
        ?>
        <section id="<?php echo $tipo; ?>" class="evision-wrapper block-section wrap-blog">
            <p style="display:none;"><?php echo  $tipo;  ?></p>
            <div class="container">
                <h2 class="evision-animate slideInDown"><?php echo esc_html( $titulo ); ?></h2>
                <span class="title-divider"></span>
                <div class="row block-row">
                    <div class="row-same-height overhidden">
                        <?php
                        $arg = array(
                            'post_type' => $tipo,
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
                        $result = new WP_Query($arg);
                        if ($result->have_posts()) :
                            $data_delay = 0;
                            $count=0;
                            while ($result->have_posts()) : $result->the_post();

                                if(has_post_thumbnail()){
                                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'home-blog-post-thumbnails-image' );
                                    $url = $thumb['0'];
                                }
                                else{
                                    $url = get_template_directory_uri().'/assets/img/no-image-course.jpg';
                                }
                                $data_wow_delay = 'data-wow-delay='.$data_delay.'s';
                                ?>
                                <div class="col-md-4 evision-animate slideInDown" <?php echo esc_attr( $data_wow_delay );?>>
                                    <div class="seccion-admin">
                                        <div class="seccion-admin-content">
                                            <img  class="image-blur" src="<?php echo esc_url( $url ); ?>" alt="<?php the_title_attribute();?>">
                                            <div class="fondo"></div>
                                            <div class="info ">
                                                <h3> <?php the_title();?> </h3>
                                                <p>
                                                    <?php echo wp_kses_post(bizlight_words_count(30, get_the_content()) );?>
                                                </p>
                                                <a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>">
                                                    <span><img src="<?php echo esc_url( get_template_directory_uri().'/assets/img/plus-icon.png'); ?>"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $count++;
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </section> <!-- blog section -->
        <?php
    }
endif;

if ( ! function_exists( 'bizlight_home_curso' ) ) :
    function bizlight_home_curso() {
        global $bizlight_customizer_all_values;
        $titulo = $bizlight_customizer_all_values['keysist-home-curso-title'];
        $descripcion = $bizlight_customizer_all_values['keysist-home-curso-content'];
        $mostrar = $bizlight_customizer_all_values['keysist-home-curso-enable'] ;
        bizlight_home_admin('curso',$titulo,$descripcion,$mostrar);
    }
endif;
add_action( 'homepage', 'bizlight_home_curso', 20 );

if ( ! function_exists( 'bizlight_home_taller' ) ) :
    function bizlight_home_taller() {
        global $bizlight_customizer_all_values;
        $titulo = $bizlight_customizer_all_values['keysist-home-taller-title'];
        $descripcion = $bizlight_customizer_all_values['keysist-home-taller-content'];
        $mostrar = $bizlight_customizer_all_values['keysist-home-taller-enable'] ;
        bizlight_home_admin('taller',$titulo,$descripcion,$mostrar);
    }
endif;
add_action( 'homepage', 'bizlight_home_taller', 20 );

if ( ! function_exists( 'bizlight_home_pregrado' ) ) :
    function bizlight_home_pregrado() {
        global $bizlight_customizer_all_values;
        $titulo = $bizlight_customizer_all_values['keysist-home-pregrado-title'];
        $descripcion = $bizlight_customizer_all_values['keysist-home-pregrado-content'];
        $mostrar = $bizlight_customizer_all_values['keysist-home-pregrado-enable'] ;
        bizlight_home_admin('pregrado',$titulo,$descripcion,$mostrar);
    }
endif;
add_action( 'homepage', 'bizlight_home_pregrado', 20 );

if ( ! function_exists( 'bizlight_home_postgrado' ) ) :
    function bizlight_home_postgrado() {
        global $bizlight_customizer_all_values;
        $titulo = $bizlight_customizer_all_values['keysist-home-postgrado-title'];
        $descripcion = $bizlight_customizer_all_values['keysist-home-postgrado-content'];
        $mostrar = $bizlight_customizer_all_values['keysist-home-postgrado-enable'] ;
        bizlight_home_admin('postgrado',$titulo,$descripcion,$mostrar);
    }
endif;
add_action( 'homepage', 'bizlight_home_postgrado', 20 );

if ( ! function_exists( 'bizlight_home_maestria' ) ) :
    function bizlight_home_maestria() {
        global $bizlight_customizer_all_values;
        $titulo = $bizlight_customizer_all_values['keysist-home-maestria-title'];
        $descripcion = $bizlight_customizer_all_values['keysist-home-maestria-content'];
        $mostrar = $bizlight_customizer_all_values['keysist-home-maestria-enable'] ;
        bizlight_home_admin('maestria',$titulo,$descripcion,$mostrar);
    }
endif;
add_action( 'homepage', 'bizlight_home_maestria', 20 );

if ( ! function_exists( 'bizlight_home_doctorado' ) ) :
    function bizlight_home_doctorado() {
        global $bizlight_customizer_all_values;
        $titulo = $bizlight_customizer_all_values['keysist-home-doctorado-title'];
        $descripcion = $bizlight_customizer_all_values['keysist-home-doctorado-content'];
        $mostrar = $bizlight_customizer_all_values['keysist-home-doctorado-enable'] ;
        bizlight_home_admin('doctorado',$titulo,$descripcion,$mostrar);
    }
endif;
add_action( 'homepage', 'bizlight_home_doctorado', 20 );

if ( ! function_exists( 'bizlight_home_diplomado' ) ) :
    function bizlight_home_diplomado() {
        global $bizlight_customizer_all_values;
        $titulo = $bizlight_customizer_all_values['keysist-home-diplomado-title'];
        $descripcion = $bizlight_customizer_all_values['keysist-home-diplomado-content'];
        $mostrar = $bizlight_customizer_all_values['keysist-home-diplomado-enable'] ;
        bizlight_home_admin('diplomado',$titulo,$descripcion,$mostrar);
    }
endif;
add_action( 'homepage', 'bizlight_home_diplomado', 20 );