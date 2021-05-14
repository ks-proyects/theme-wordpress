<?php

if (!function_exists('keysist_home_contact')) :
    /**
     * Featured Slider
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function keysist_home_contact() {
        global $bizlight_customizer_all_values;
        if (1 !=$bizlight_customizer_all_values['keysist-home-contact-enable']) {
            return null;
        }
            ?>
            <section id ="contactanos" class="evision-wrapper block-section contact-about">
                <p style="display:none;">contactanos</p>
                <div class="container">
                    <div class="row background-animated">
                        <div class="col-md-8 col-md-offset-2 evision-animate fadeInDown">
                            <h2 class=""><?php echo $bizlight_customizer_all_values['keysist-home-contact-title']; ?></h2>
                            <h3 class=""><?php echo $bizlight_customizer_all_values['keysist-home-contact-content']; ?></h3>
                            <div id="carousel-contact" class="carousel slide">
                                <?php echo do_shortcode($bizlight_customizer_all_values['keysist-home-contact-shor-code']); ?>  
                            </div>
                            <?php
                            if( !empty($bizlight_customizer_all_values['keysist-googlemaps-link']) ) {
                              ?>
                              <iframe src="<?php echo $bizlight_customizer_all_values['keysist-googlemaps-link']; ?>" 
                              frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                              <?php
                            }?>
                        </div>
                    </div>
                </div>
            </section> <!-- testimonial section -->
        <?php   
    }
endif;
add_action('homepage', 'keysist_home_contact', 50);