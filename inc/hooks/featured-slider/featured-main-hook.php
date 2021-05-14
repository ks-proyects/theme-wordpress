<?php
if ( ! function_exists( 'bizlight_featured_slider_array' ) ) :
    /**
     * Featured Slider array creation
     *
     * @since Bizlight 1.0.0
     *
     * @param string $from_slider
     * @return array
     */
    function bizlight_featured_slider_array( ){
        global $bizlight_customizer_all_values;
        $bizlight_feature_slider_number = absint( $bizlight_customizer_all_values['bizlight-fs-number'] );
        $bizlight_home_about_right_image = $bizlight_customizer_all_values['bizlight-fs-right-image'];
        $bizlight_fs_contents_array = array();

        $keysist_home_testimonial_args =    array(
            'post_type' => array('curso', 'taller', 'pregrado', 'postgrado','maestria','doctorado','diplomado'),
            'post_status' => array('publish'),
            'meta_query'	=> array(
                'relation'		=> 'AND',
                array(
                    'key'	 	=> 'activo',
                    'value'	  	=> '1',
                    'compare' 	=> '=',
                ),
                array(
                    'key'	  	=> 'mostrar_inicio',
                    'value'	  	=> '1',
                    'compare' 	=> '=',
                ),
            ),
            'meta_key'			=> 'orden',
            'orderby'			=> 'meta_value',
            'order'				=> 'ASC'
            
        );
        $keysist_home_testimonial_post_query = new WP_Query( $keysist_home_testimonial_args );
        $i=0;
        if ($keysist_home_testimonial_post_query->have_posts()):
            while ( $keysist_home_testimonial_post_query->have_posts() ) : $keysist_home_testimonial_post_query->the_post();
                $bizlight_fs_contents_array[$i]['bizlight-fs-title'] = get_the_title();
                $bizlight_fs_contents_array[$i]['bizlight-fs-title2'] = get_the_title();
                $bizlight_fs_contents_array[$i]['bizlight-fs-content'] = get_the_content();
                $bizlight_fs_contents_array[$i]['bizlight-fs-link'] = get_permalink();
                $url ='';
                if(has_post_thumbnail()){
                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'home-main-slider' );
                    $url = $thumb['0'];
                    $bizlight_fs_contents_array[$i]['bizlight-fs-image'] = $url;
                }else{
                    $bizlight_fs_contents_array[$i]['bizlight-fs-image'] = $bizlight_home_about_right_image;
                }
                $i++;
            endwhile;
            wp_reset_postdata();
        else:
            $bizlight_fs_contents_array[0]['bizlight-fs-title'] = __('Bienvenido a KeySist','bizlight');
            $bizlight_fs_contents_array[0]['bizlight-fs-content'] = __('A diferencia de otras empresas, no cobramos cientos de dólares por tema..','bizlight');
            $bizlight_fs_contents_array[0]['bizlight-fs-link'] = '#';
            $bizlight_fs_contents_array[0]['bizlight-fs-image'] = get_template_directory_uri()."/assets/img/slider.jpg";

            $bizlight_fs_contents_array[1]['bizlight-fs-title'] = __('La forma en que creamos','bizlight');
            $bizlight_fs_contents_array[1]['bizlight-fs-content'] = __('A diferencia de otras empresas, no cobramos cientos de dólares por tema..','bizlight');
            $bizlight_fs_contents_array[1]['bizlight-fs-link'] = '#';
            $bizlight_fs_contents_array[1]['bizlight-fs-image'] = get_template_directory_uri()."/assets/img/slider2.jpg";

            $bizlight_fs_contents_array[2]['bizlight-fs-title'] = __('Es el moneto de mejorar','bizlight');
            $bizlight_fs_contents_array[2]['bizlight-fs-content'] = __('A diferencia de otras empresas, no cobramos cientos de dólares por tema..','bizlight');
            $bizlight_fs_contents_array[2]['bizlight-fs-link'] = '#';
            $bizlight_fs_contents_array[2]['bizlight-fs-image'] = get_template_directory_uri()."/assets/img/slider.jpg";

            $bizlight_fs_contents_array[3]['bizlight-fs-title'] = __('Crea tus aplicaciones','bizlight');
            $bizlight_fs_contents_array[3]['bizlight-fs-content'] = __('A diferencia de otras empresas, no cobramos cientos de dólares por tema..','bizlight');
            $bizlight_fs_contents_array[3]['bizlight-fs-link'] = '#';
            $bizlight_fs_contents_array[3]['bizlight-fs-image'] = get_template_directory_uri()."/assets/img/slider2.jpg";

            $bizlight_fs_contents_array[4]['bizlight-fs-title'] = __('Es el moneto de mejorar 3','bizlight');
            $bizlight_fs_contents_array[4]['bizlight-fs-content'] = __('A diferencia de otras empresas, no cobramos cientos de dólares por tema..','bizlight');
            $bizlight_fs_contents_array[4]['bizlight-fs-link'] = '#';
            $bizlight_fs_contents_array[4]['bizlight-fs-image'] = get_template_directory_uri()."/assets/img/slider.jpg";

            $bizlight_fs_contents_array[5]['bizlight-fs-title'] = __('Crea tus aplicaciones','bizlight');
            $bizlight_fs_contents_array[5]['bizlight-fs-content'] = __('A diferencia de otras empresas, no cobramos cientos de dólares por tema..','bizlight');
            $bizlight_fs_contents_array[5]['bizlight-fs-link'] = '#';
            $bizlight_fs_contents_array[5]['bizlight-fs-image'] = get_template_directory_uri()."/assets/img/slider2.jpg";

            $bizlight_fs_contents_array[6]['bizlight-fs-title'] = __('Es el moneto de mejorar 3','bizlight');
            $bizlight_fs_contents_array[6]['bizlight-fs-content'] = __('A diferencia de otras empresas, no cobramos cientos de dólares por tema..','bizlight');
            $bizlight_fs_contents_array[6]['bizlight-fs-link'] = '#';
            $bizlight_fs_contents_array[6]['bizlight-fs-image'] = get_template_directory_uri()."/assets/img/slider.jpg";
        endif;
        return $bizlight_fs_contents_array;
    }
endif;

if ( ! function_exists( 'bizlight_featured_slider' ) ) :
    /**
     * Featured Slider
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_featured_slider() {
        global $bizlight_customizer_all_values;

        if( 1 != $bizlight_customizer_all_values['bizlight-fs-enable'] ){
            return null;
        }
        $bizlight_slider_arrays = bizlight_featured_slider_array();
        if( is_array( $bizlight_slider_arrays )){
        $bizlight_feature_slider_number = absint( $bizlight_customizer_all_values['bizlight-fs-number'] );
        $bizlight_feature_slider_mode = $bizlight_customizer_all_values['bizlight-fs-slider-mode'];
        $bizlight_fs_enable_control = $bizlight_customizer_all_values['bizlight-fs-enable-control'];
        $bizlight_fs_enable_autoplay = $bizlight_customizer_all_values['bizlight-fs-enable-autoplay'];
        $bizlight_home_added_button_text = $bizlight_customizer_all_values['bizlight-fs-button-text'];

        $bizlight_home_added_button_url = $bizlight_customizer_all_values['bizlight-fs-button-url'];
        $bizlight_enable_extra_button  = $bizlight_customizer_all_values['bizlight-fs-extra-enable-button'];
        $bizlight_enable_primary_button  = $bizlight_customizer_all_values['bizlight-fs-primary-enable-button'];
        $bizlight_primary_button_text  = $bizlight_customizer_all_values['bizlight-fs-primary-button-text'];

        ?>
        <section id="inicio" class="evision-wrapper evision-wrap-banner evision-banner-right-nav">
            <p style="display:none;">inicio</p>
            <?php if( 1 == $bizlight_fs_enable_control){ ?>
                <div class="controls">
                    <a href="#" id="bizlight-prev"><i class="fa fa-angle-left"></i></a> 
                    <a href="#" id="bizlight-next"><i class="fa fa-angle-right"></i></a>
                </div>
            <?php }  ?>

            <div class="evision-main-slider">
                <div class="cycle-slideshow"
                data-cycle-swipe=true
                data-cycle-swipe-fx=scrollHorz
                data-cycle-fx=<?php echo esc_attr( $bizlight_feature_slider_mode);?>
                data-cycle-speed=1500
                data-cycle-carousel-fluid=true
                data-cycle-carousel-visible=1
                data-cycle-pause-on-hover="true"
                data-cycle-auto-height=container
                data-cycle-carousel-fluid=true
                data-cycle-slides="> div"
                data-cycle-prev="#bizlight-prev"
                data-cycle-next="#bizlight-next"
                <?php if( 1 == $bizlight_fs_enable_control){ ?>
                    data-cycle-pager="#bizlight-pager"
                <?php }  ?>
                <?php if( 1 != $bizlight_fs_enable_autoplay){ ?>
                    data-cycle-timeout=0
                <?php }  ?>
                <?php if(1 == $bizlight_fs_enable_autoplay){ ?>
                    data-cycle-timeout=4000
                <?php }  ?>
                >
                    <?php
                    $i = 1;
                    foreach( $bizlight_slider_arrays as $bizlight_slider_array ){
                        /*if( $bizlight_feature_slider_number < $i){
                            break;
                        }*/
                        if(empty($bizlight_slider_array['bizlight-fs-image'])){
                            $bizlight_feature_slider_image = get_template_directory_uri().'/assets/img/no-image-1260_530.png';
                        }
                        else{
                            $bizlight_feature_slider_image =$bizlight_slider_array['bizlight-fs-image'];
                        }
                        $bizlight_container_link = $bizlight_slider_array['bizlight-fs-link'];
                        ?>
                        <div class="slide-item">
                            <div class="container-fluid" style="background-image: url('<?php echo esc_url( $bizlight_feature_slider_image )?>');">
                                <div class="thumb-overlay">
                                    <div class="container evision-slider-content overhidden">
                                        <div class="row">
                                            <div class="col-xs-10 col-sm-10 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-2 banner-content">
                                                <div class="evision-slider-caption evision-animate fadeInUp">
                                                    <h1 class="main-title">
                                                        <a href="<?php echo esc_url( $bizlight_slider_array['bizlight-fs-link'] ); ?>">
                                                            <?php echo esc_html( $bizlight_slider_array['bizlight-fs-title'] ); ?>
                                                        </a>
                                                    </h1>
                                                    <?php echo esc_html( $bizlight_slider_array['bizlight-fs-title1'] ); ?>
                                                    <div class="banner-divider-container">
                                                        <span class="banner-divider"></span>
                                                    </div>
                                                    <div class="banner-con banner-slider">
                                                        <p>
                                                            <?php echo wp_kses_post( $bizlight_slider_array['bizlight-fs-content'] ); ?>
                                                        </p>
                                                    </div>
                                                    <a class="banner-btn button" href="<?php echo esc_url( $bizlight_slider_array['bizlight-fs-link'] ); ?>">
                                                        <?php echo esc_html($bizlight_primary_button_text); ?>
                                                    </a>
                                                    <?php
                                                    if( 1 == $bizlight_enable_extra_button ){
                                                        ?>
                                                            <a class="banner-btn button" href="<?php echo esc_url( $bizlight_home_added_button_url); ?>">
                                                                <?php echo esc_html($bizlight_home_added_button_text);?>
                                                            </a>
                                                        <?php
                                                    } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    $i++;
                    }
                    ?>
                </div>
            </div>
            <div class="cycle-pager" id="bizlight-pager"></div>
        </section>
    <?php
    }
}
endif;
add_action( 'bizlight_main_slider', 'bizlight_featured_slider', 10 );