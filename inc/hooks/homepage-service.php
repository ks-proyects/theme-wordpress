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
            'post_type' => 'servicio',
            'posts_per_page' => 4,
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
                if(get_field('id_seccion')>''):
                    $keysist_home_service_static_array[$i]['keysist-home-service-link'] = '#'.get_field('id_seccion'); 
                else:
                    $keysist_home_service_static_array[$i]['keysist-home-service-link'] = '#';
                endif;
                $i++;
            endwhile;
            wp_reset_postdata();
        else:
            $keysist_home_service_static_array[0]['keysist-home-service-title'] = __('Aplicaciones de Escritorio', 'bizlight');
            $keysist_home_service_static_array[0]['keysist-home-service-content'] = __("Implementamos aplicaciones de escritorio adaptadas a tu modelo de negocio, con una apariencia moderna e intuitiva, construidas con base a los últimos estándares de programación. Brindamos soluciones en cualquier área como gestión administrativa, control de producción, recursos humanos, automatización y control de inventarios entre otras.", 'bizlight');
            $keysist_home_service_static_array[0]['keysist-home-service-link'] = '#';
            $keysist_home_service_static_array[0]['keysist-home-service-icon'] = 'fa-desktop';
    
            $keysist_home_service_static_array[1]['keysist-home-service-title'] = __('Desarrollo Web', 'bizlight');
            $keysist_home_service_static_array[1]['keysist-home-service-content'] = __("Al tener sistema web podrá conectarse fácilmente con otras aplicaciones lo que le dará más competitividad. Imagínese conectado con Facebook, Twiter o cualquier red social.Tenga sus sistemas disponibles todo el día, en cualquier momento, desde cualquier parte del mundo. Lo que le proporcionará que su negocio no se detenga. Permita que sus sistemas puedan ser accedidos desde cualquier dispositivo conectado a una red. Ya sea computadora, celular o tablet ", 'bizlight');
            $keysist_home_service_static_array[1]['keysist-home-service-link'] = '#';
            $keysist_home_service_static_array[1]['keysist-home-service-icon'] = 'fa-camera-retro';
    
            $keysist_home_service_static_array[2]['keysist-home-service-title'] = __('Aplicaciones Móviles', 'bizlight');
            $keysist_home_service_static_array[2]['keysist-home-service-content'] = __("Las aplicaciones para teléfonos inteligentes (abreviadas app) han crecido exponencialmente en la última década, gracias a la expansión de los dispositivos portátiles multifuncionales y a su relativa sencillez a la hora de resolver problemas de rutina. Go Consultores les ofrece a nuestros clientes el desarrollo de aplicaciones para los sistemas operativos de telefonía móvil Android e IOS. Una aplicación para móvil le permite a usted y a su organización las siguientes facilidades: Flexibilidad,Expansión de herramientas de software y Centralización.", 'bizlight');
            $keysist_home_service_static_array[2]['keysist-home-service-link'] = '#';
            $keysist_home_service_static_array[2]['keysist-home-service-icon'] = 'fa-rocket';
    
            $keysist_home_service_static_array[3]['keysist-home-service-title'] = __('Páginas Web', 'bizlight');
            $keysist_home_service_static_array[3]['keysist-home-service-content'] = __("Con tu página web podrás tener un valor agregado y estar siempre un paso más adelante que tu competencia, ya que tu negocio o empresa podrá ser ubicada fácilmente; ya sea desde una computador en casa o desde un celular en cualquier parte del mundo.Tu página web es una oficina que nunca cerrará sus puertas. De esta manera,  brindarás atención a tus clientes en cualquier momento del día manteniendo la personalización, el detalle y la dinámica de tu negocio.Resuelve las dudas y consultas de tu clientes mediante chat en línea, chat con bots y formularios de contacto, esto les generará mayor comodidad y confianza. Además, puedes conectar tu sitio directamente a tu whatsapp, permitiendo una comunicación más rápida y personalizada con tu cliente.", 'bizlight');
            $keysist_home_service_static_array[3]['keysist-home-service-link'] = '#';
            $keysist_home_service_static_array[3]['keysist-home-service-icon'] = 'fa-dashboard';
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
            <section id="servicios" class="evision-wrapper block-section wrap-service">
            
                <p style="display:none;">servicios</p>
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
                                            <a href="./<?php echo esc_url( $bizlight_service_array['keysist-home-service-link'] );?>" title="<?php echo esc_attr( $bizlight_service_array['keysist-home-service-title'] ); ?>">
                                                <div class="icon-container">
                                                    <span><i class="fa <?php echo esc_attr( $bizlight_service_array['keysist-home-service-icon'] ); ?>"></i></span>
                                                </div>
                                                <div class="box-content service-content">
                                                    <h3><?php echo esc_html( $bizlight_service_array['keysist-home-service-title'] );?></h3>
                                                    <div class="box-content-text service-content-text">
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
                <div class="shape-service">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                    </svg>
                </div>
            </section><!-- about section -->
        <?php
    }
endif;
add_action( 'homepage', 'keysist_home_service', 20 );