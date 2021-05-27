<?php
if (!function_exists('keysist_home_convenios_array')) :
    /**
     * Featured Slider array creation
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return array
     */
    function keysist_home_convenios_array(){
        $keysist_home_convenios_contents_array = array();

        $keysist_home_convenios_args =    array(
            'post_type' => 'convenio',
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
        $keysist_home_testimonial_post_query = new WP_Query( $keysist_home_convenios_args );
        $i=0;
        if ($keysist_home_testimonial_post_query->have_posts()):
            while ( $keysist_home_testimonial_post_query->have_posts() ) : $keysist_home_testimonial_post_query->the_post();
                $keysist_home_convenios_contents_array[$i]['keysist-home-convenio-title'] = get_the_title();
                $keysist_home_convenios_contents_array[$i]['keysist-home-convenio-content'] = get_the_content();
                if(has_post_thumbnail()):
                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'testimonial' );
                    $url = $thumb['0'];
                    $keysist_home_convenios_contents_array[$i]['keysist-home-convenio-image'] = $url;
                endif;
                $i++;
            endwhile;
            wp_reset_postdata();
        else:
            $keysist_home_convenios_contents_array[0]['keysist-home-convenio-title'] = __('Universidad de la Abana','keysist');
            $keysist_home_convenios_contents_array[0]['keysist-home-convenio-content'] = __("“Realmente nos ayudó a crecer. Puedo mantener toda la información del cliente allí, así que si necesito buscar algo en el futuro o llamarlos para un seguimiento, tengo todo eso allí, por lo que realmente nos ayudó a organizar todo el negocio.",'keysist');
            $keysist_home_convenios_contents_array[0]['keysist-home-convenio-image'] = get_template_directory_uri().'/assets/img/uce1.jpg';
    
            $keysist_home_convenios_contents_array[1]['keysist-home-convenio-title'] = __('Universidad Central','keysist');
            $keysist_home_convenios_contents_array[1]['keysist-home-convenio-content'] = __("“No hay forma de que hubiéramos podido contratar a tanta gente y conseguir tanto negocio si no hubiéramos resuelto todos esos sistemas administrativos. Ha sido más fácil hacer crecer nuestra empresa con un sistema tan fácil y escalable .",'keysist');
            $keysist_home_convenios_contents_array[1]['keysist-home-convenio-image'] = get_template_directory_uri().'/assets/img/uce2.jpg';

            $keysist_home_convenios_contents_array[2]['keysist-home-convenio-title'] = __('Universidad de Manabi','keysist');
            $keysist_home_convenios_contents_array[2]['keysist-home-convenio-content'] = __("“No hay forma de que hubiéramos podido contratar a tanta gente y conseguir tanto negocio si no hubiéramos resuelto todos esos sistemas administrativos. Ha sido más fácil hacer crecer nuestra empresa con un sistema tan fácil y escalable .",'keysist');
            $keysist_home_convenios_contents_array[2]['keysist-home-convenio-image'] = get_template_directory_uri().'/assets/img/uce3.jpg';

            $keysist_home_convenios_contents_array[3]['keysist-home-convenio-title'] = __('CEO Nick May','keysist');
            $keysist_home_convenios_contents_array[3]['keysist-home-convenio-content'] = __("“No hay forma de que hubiéramos podido contratar a tanta gente y conseguir tanto negocio si no hubiéramos resuelto todos esos sistemas administrativos. Ha sido más fácil hacer crecer nuestra empresa con un sistema tan fácil y escalable .",'keysist');
            $keysist_home_convenios_contents_array[3]['keysist-home-convenio-image'] = get_template_directory_uri().'/assets/img/dayana.jpg';

            $keysist_home_convenios_contents_array[4]['keysist-home-convenio-title'] = __('CEO Nick May','keysist');
            $keysist_home_convenios_contents_array[4]['keysist-home-convenio-content'] = __("“No hay forma de que hubiéramos podido contratar a tanta gente y conseguir tanto negocio si no hubiéramos resuelto todos esos sistemas administrativos. Ha sido más fácil hacer crecer nuestra empresa con un sistema tan fácil y escalable .",'keysist');
            $keysist_home_convenios_contents_array[4]['keysist-home-convenio-image'] = get_template_directory_uri().'/assets/img/uce3.jpg';

            $keysist_home_convenios_contents_array[5]['keysist-home-convenio-title'] = __('CEO Nick May','keysist');
            $keysist_home_convenios_contents_array[5]['keysist-home-convenio-content'] = __("“No hay forma de que hubiéramos podido contratar a tanta gente y conseguir tanto negocio si no hubiéramos resuelto todos esos sistemas administrativos. Ha sido más fácil hacer crecer nuestra empresa con un sistema tan fácil y escalable .",'keysist');
            $keysist_home_convenios_contents_array[5]['keysist-home-convenio-image'] = get_template_directory_uri().'/assets/img/uce1.jpg';

            $keysist_home_convenios_contents_array[6]['keysist-home-convenio-title'] = __('CEO Nick May','keysist');
            $keysist_home_convenios_contents_array[6]['keysist-home-convenio-content'] = __("“No hay forma de que hubiéramos podido contratar a tanta gente y conseguir tanto negocio si no hubiéramos resuelto todos esos sistemas administrativos. Ha sido más fácil hacer crecer nuestra empresa con un sistema tan fácil y escalable .",'keysist');
            $keysist_home_convenios_contents_array[6]['keysist-home-convenio-image'] = get_template_directory_uri().'/assets/img/uce3.jpg';

            $keysist_home_convenios_contents_array[7]['keysist-home-convenio-title'] = __('CEO Nick May','keysist');
            $keysist_home_convenios_contents_array[7]['keysist-home-convenio-content'] = __("“No hay forma de que hubiéramos podido contratar a tanta gente y conseguir tanto negocio si no hubiéramos resuelto todos esos sistemas administrativos. Ha sido más fácil hacer crecer nuestra empresa con un sistema tan fácil y escalable .",'keysist');
            $keysist_home_convenios_contents_array[7]['keysist-home-convenio-image'] = get_template_directory_uri().'/assets/img/uce3.jpg';
        endif;
        return $keysist_home_convenios_contents_array;
    }
endif;

if (!function_exists('bizlight_home_convenios')) :
    /**
     * Featured Slider
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_home_convenios() {
        ?>
        
        <?php
        global $bizlight_customizer_all_values;
        if (1 != $bizlight_customizer_all_values['keysist-home-convenios-enable']) {
            return null;
        }
        $bizlight_home_convenio_title = $bizlight_customizer_all_values['keysist-home-convenios-title'];
        $bizlight_home_convenio_contenido=$bizlight_customizer_all_values['keysist-home-convenios-content'];
        
        ?>
        <section id ="convenio" class="evision-wrapper block-section wrap-team"> 
            <p style="display:none;">convenio</p>
            <div class="container">
                <h2 class="text-center evision-animate slideInDown"><?php echo esc_html( $bizlight_home_convenio_title );?></h2>
                <h3 class="evision-animate slideOutUp"><?php echo esc_html( $bizlight_home_convenio_contenido );?></h3>
                <span class="title-divider"></span>    
                <div class="row">  
                <?php
                    $i = 1;
                    $data_delay = 0;
                    foreach( keysist_home_convenios_array() as $bizlight_convenios_arrays ){
                        $data_wow_delay = 'data-wow-delay='.$data_delay.'s';
                        ?>
                        <div class="col-md-3 box-container evision-animate fadeInUp" <?php echo esc_attr( $data_wow_delay );?>>
                            <div class="box-inner">
                                    <div class="icon-container">
                                        <span>
                                            <i class="fa team">
                                                <img src="<?php echo esc_url( $bizlight_convenios_arrays['keysist-home-convenio-image']);?>" class="img-circle" /> 
                                            </i>
                                        </span>
                                    </div>
                                    <div class="box-content service-content">
                                        <h3><?php echo esc_html( $bizlight_convenios_arrays['keysist-home-convenio-title'] );?></h3>
                                        <div class="box-content-text service-content-text">
                                            <p>  
                                                <?php echo wp_kses_post( $bizlight_convenios_arrays['keysist-home-convenio-content'] );?>
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
    </section> <!-- testimonial section -->
<?php  
    }
endif;
add_action('homepage', 'bizlight_home_convenios', 30);