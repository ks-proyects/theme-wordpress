<?php
if (!function_exists('keysist_home_testimonial_array')) :
    /**
     * Featured Slider array creation
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return array
     */
    function keysist_home_testimonial_array(){
        $bizlight_home_testimonial_contents_array = array();

        $keysist_home_testimonial_args =    array(
            'post_type' => 'keysist_testimonios',
            'posts_per_page' => 4
        );
        $keysist_home_testimonial_post_query = new WP_Query( $keysist_home_testimonial_args );
        $i=0;
        if ($keysist_home_testimonial_post_query->have_posts()):
            while ( $keysist_home_testimonial_post_query->have_posts() ) : $keysist_home_testimonial_post_query->the_post();
                $bizlight_home_testimonial_contents_array[$i]['bizlight-home-testimonial-title'] = get_the_title();
                $bizlight_home_testimonial_contents_array[$i]['bizlight-home-testimonial-content'] = get_the_content();
                if(has_post_thumbnail()):
                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'testimonial' );
                    $url = $thumb['0'];
                    $bizlight_home_testimonial_contents_array[$i]['bizlight-home-testimonial-image'] = $url;
                endif;
                $i++;
            endwhile;
            wp_reset_postdata();
        else:
            $bizlight_home_testimonial_contents_array[0]['bizlight-home-testimonial-title'] = __('Sayer Name, CEO','bizlight');
            $bizlight_home_testimonial_contents_array[0]['bizlight-home-testimonial-content'] = __("The set doesn't moved. Deep don't fru it fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness. every bring in it.",'bizlight');
            $bizlight_home_testimonial_contents_array[0]['bizlight-home-testimonial-image'] = get_template_directory_uri().'/assets/img/product.png';;
    
            $bizlight_home_testimonial_contents_array[1]['bizlight-home-testimonial-title'] = __('Sayer Name, CEO','bizlight');
            $bizlight_home_testimonial_contents_array[1]['bizlight-home-testimonial-content'] = __("The set doesn't moved. Deep don't fru it fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness. every bring in it.",'bizlight');
            $bizlight_home_testimonial_contents_array[1]['bizlight-home-testimonial-image'] = get_template_directory_uri().'/assets/img/product.png';
        endif;
        return $bizlight_home_testimonial_contents_array;
    }
endif;

if (!function_exists('bizlight_home_testimonial')) :
    /**
     * Featured Slider
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_home_testimonial() {
        global $bizlight_customizer_all_values;
        $bizlight_home_testimonial_image_option = $bizlight_customizer_all_values['bizlight-home-testimonial-image-enable'];
        if (1 != $bizlight_customizer_all_values['bizlight-home-testimonial-enable']) {
            return null;
        }
        $bizlight_testimonial_arrays = keysist_home_testimonial_array();
            ?>
            <section class="evision-wrapper block-section wrap-testimonial">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 evision-animate fadeInDown">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <div id="carousel-testimonial" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <?php
                                    $i = 0;
                                    foreach( $bizlight_testimonial_arrays as $bizlight_testimonial_array ){
                                        ?>
                                            <li data-target="#carousel-testimonial" data-slide-to="<?php echo absint($i);?>" class="<?php echo $i == 0 ? 'active' : '';?>"></li>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner testimonial-items-wrapper">
                                    <?php
                                    $i = 0;
                                    foreach( $bizlight_testimonial_arrays as $bizlight_testimonial_array ){
                                        ?>
                                            <div class="item <?php echo $i == 0 ? 'active' : '';?>">
                                                <div class="content-text">
                                                    <?php if (($bizlight_home_testimonial_image_option == 1) && $bizlight_testimonial_array['bizlight-home-testimonial-image']!= NULL) { ?>
                                                        <div class="content-thumb">
                                                            <span>
                                                            <?php echo $bizlight_testimonial_array['bizlight-home-testimonial-image'] ?>
                                                                
                                                            </span>
                                                        </div>  
                                                    <?php
                                                    }?>
                                                    <p>
                                                        <?php echo wp_kses_post( $bizlight_testimonial_array['bizlight-home-testimonial-content'] ); ?>
                                                    </p>
                                                </div>
                                                <div class="testimonial-sayer">
                                                    <strong><?php echo esc_html( $bizlight_testimonial_array['bizlight-home-testimonial-title'] ); ?></strong>
                                                </div>
                                            </div>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- testimonial section -->
        <?php   
    }
endif;
add_action('homepage', 'bizlight_home_testimonial', 50);