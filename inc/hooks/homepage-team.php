<?php
if (!function_exists('keysist_home_team_array')) :
    /**
     * Featured Slider array creation
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return array
     */
    function keysist_home_team_array(){
        $bizlight_home_testimonial_contents_array = array();

        $keysist_home_testimonial_args =    array(
            'post_type' => 'personal',
            'posts_per_page' => 4
        );
        $keysist_home_testimonial_post_query = new WP_Query( $keysist_home_testimonial_args );
        $i=0;
        if ($keysist_home_testimonial_post_query->have_posts()):
            while ( $keysist_home_testimonial_post_query->have_posts() ) : $keysist_home_testimonial_post_query->the_post();
                $bizlight_home_testimonial_contents_array[$i]['bizlight-home-team-title'] = get_the_title();
                $bizlight_home_testimonial_contents_array[$i]['bizlight-home-team-content'] = get_the_content();
                if(has_post_thumbnail()):
                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'team' );
                    $url = $thumb['0'];
                    $bizlight_home_testimonial_contents_array[$i]['bizlight-home-team-image'] = $url;
                endif;
                $i++;
            endwhile;
            wp_reset_postdata();
        else:
            $bizlight_home_testimonial_contents_array[0]['bizlight-home-team-title'] = __('Freddy Castillo','bizlight');
            $bizlight_home_testimonial_contents_array[0]['bizlight-home-team-content'] = __("Freddy Castillo, Muy gustoso de formar parte de este equipo de trabajo especializandome en mi área de conocimiento.",'bizlight');
            $bizlight_home_testimonial_contents_array[0]['bizlight-home-team-image'] = get_template_directory_uri().'/assets/img/freddy.jpg';;
    
            $bizlight_home_testimonial_contents_array[1]['bizlight-home-team-title'] = __('Dayana Cualchi','bizlight');
            $bizlight_home_testimonial_contents_array[1]['bizlight-home-team-content'] = __("Dayana Cualchi, Es muy gratificante pertenecer a esta compañia que tiene tanta experiencia espero poder dar lo mejor de mis conocimientos yplasmarlos para que nuestros clientes se sientan a gusto.",'bizlight');
            $bizlight_home_testimonial_contents_array[1]['bizlight-home-team-image'] = get_template_directory_uri().'/assets/img/dayana.jpg';
        endif;
        return $bizlight_home_testimonial_contents_array;
    }
endif;

if (!function_exists('bizlight_home_team')) :
    /**
     * Featured Slider
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_home_team() {
        ?>
        <?php
            global $bizlight_customizer_all_values;
            if (1 != $bizlight_customizer_all_values['keysist-home-team-enable']) {
                return null;
            }
            $bizlight_home_team_title = $bizlight_customizer_all_values['keysist-home-team-title'];
            $bizlight_testimonial_arrays = keysist_home_team_array();
            ?>
                <section id ="team" class="evision-wrapper block-section wrap-team"> 
                    <p style="display:none;">team</p>
                    <div class="container">
                        <h2 class="text-center evision-animate slideInDown"><?php echo esc_html( $bizlight_home_team_title );?></h2>
                        <h3 class="evision-animate slideOutUp"><?php echo esc_html( $bizlight_home_service_contenido );?></h3>
                        <span class="title-divider"></span>    
                        <div class="row block-row overhidden">  
                        <?php
                            $i = 1;
                            $data_delay = 0;
                            foreach( keysist_home_team_array() as $bizlight_service_array ){
                                $data_wow_delay = 'data-wow-delay='.$data_delay.'s';
                                ?>
                                <div class="col-md-3 box-container evision-animate fadeInUp" <?php echo esc_attr( $data_wow_delay );?>>
                                    <div class="box-inner">
                                        
                                            <div class="icon-container">
                                                <span>
                                                    <i class="fa team">
                                                        <img src="<?php echo esc_url( $bizlight_service_array['bizlight-home-team-image']);?>" class="img-circle" /> 
                                                    </i>
                                                </span>
                                            </div>
                                            <div class="box-content service-content">
                                                <h3><?php echo esc_html( $bizlight_service_array['bizlight-home-team-title'] );?></h3>
                                                <div class="box-content-text service-content-text">
                                                    <p>  
                                                        <?php echo wp_kses_post( $bizlight_service_array['bizlight-home-team-content'] );?>
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
add_action('homepage', 'bizlight_home_team', 50);