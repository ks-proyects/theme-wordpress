<?php
if ( ! function_exists( 'bizlight_set_global' ) ) :
/**
 * Setting global values for all saved customizer values
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_set_global() {
    /*Getting saved values start*/
    $GLOBALS['bizlight_customizer_all_values'] = bizlight_get_all_options(1);
}
endif;
add_action( 'bizlight_action_before_head', 'bizlight_set_global', 0 );

if ( ! function_exists( 'bizlight_doctype' ) ) :
/**
 * Doctype Declaration
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_doctype() {
    ?>
    <!DOCTYPE html><html <?php language_attributes(); ?>>
<?php
}
endif;
add_action( 'bizlight_action_before_head', 'bizlight_doctype', 10 );

if ( ! function_exists( 'bizlight_before_wp_head' ) ) :
/**
 * Before wp head codes
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_before_wp_head() {
    ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta property="og:title" content="<?php bloginfo('name'); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:image" content="https://secureservercdn.net/198.71.233.51/53p.d81.myftpupload.com/wp-content/uploads/2020/01/keysist-logo50.png">
    <meta property="og:url" content="<?php bloginfo( 'url' )?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php
}
endif;
add_action( 'bizlight_action_before_wp_head', 'bizlight_before_wp_head', 10 );

if( ! function_exists( 'bizlight_default_layout' ) ) :
    /**
     * Bizlight default layout function
     *
     * @since  Bizlight 1.0.0
     *
     * @param int
     * @return string
     */
    function bizlight_default_layout(){
        global $bizlight_customizer_all_values,$post;
        $bizlight_default_layout = $bizlight_customizer_all_values['bizlight-default-layout'];
        return $bizlight_default_layout;
    }
endif;

if ( ! function_exists( 'bizlight_body_class' ) ) :
/**
 * add body class
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_body_class( $bizlight_body_classes ) {
    if(!is_front_page() || ( is_front_page() && 1 != bizlight_if_all_disable())){
        $bizlight_default_layout = bizlight_default_layout();
        if( !empty( $bizlight_default_layout ) ){
            if( 'left-sidebar' == $bizlight_default_layout ){
                $bizlight_body_classes[] = 'evision-left-sidebar';
            }
            elseif( 'right-sidebar' == $bizlight_default_layout ){
                $bizlight_body_classes[] = 'evision-right-sidebar';
            }
            elseif( 'no-sidebar' == $bizlight_default_layout ){
                $bizlight_body_classes[] = 'evision-no-sidebar';
            }
            else{
                $bizlight_body_classes[] = 'evision-right-sidebar';
            }
        }
        else{
            $bizlight_body_classes[] = 'bizlight-right-sidebar';
        }
    }
    return $bizlight_body_classes;

}
endif;
add_action( 'body_class', 'bizlight_body_class', 10, 1);

if ( ! function_exists( 'bizlight_page_start' ) ) :
/**
 * page start
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_page_start() {
?>
    <div id="page" class="hfeed site">
<?php
}
endif;
add_action( 'bizlight_action_before', 'bizlight_page_start', 15 );

if ( ! function_exists( 'bizlight_skip_to_content' ) ) :
/**
 * Skip to content
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_skip_to_content() {
    ?>
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bizlight' ); ?></a>
<?php
}
endif;
add_action( 'bizlight_action_before_header', 'bizlight_skip_to_content', 10 );

if ( ! function_exists( 'bizlight_header' ) ) :
/**
 * Main header
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_header() {
    global $bizlight_customizer_all_values;
    ?>
     <!-- header and navigation option second - navigation right  -->
        <header id="masthead" class="site-header evision-nav-right navbar-fixed-top evision-animate slideInDown <?php if(is_front_page()): echo 'site-header-front'; endif;?>" role="banner">
            <div class="container-fluid evision-animate slideInDown navbar-info">
                <div class="container">
                    <?php if(is_front_page() && (!empty($bizlight_customizer_all_values['keysist-celular'])  || !empty($bizlight_customizer_all_values['keysist-correo']) || !empty($bizlight_customizer_all_values['keysist-googlemaps-link']))):?>
                    <div class="row desktop-header-info">
                        <div class="col-xs-8 col-sm-8 col-md-8 rtl-fright site-info-header">
                            <?php if(!empty($bizlight_customizer_all_values['keysist-celular'])): ?>    
                                <span>
                                    <a class="navbar-info-icon" href="tel:<?php echo esc_html( $bizlight_customizer_all_values['keysist-celular'] );?>"><i class="fa fa-phone"></i></a>
                                    <a class="navbar-info-icon" target="_new"  href="https://api.whatsapp.com/send?phone=<?php echo esc_html( $bizlight_customizer_all_values['keysist-celular'] );?>&text=<?php echo esc_html( $bizlight_customizer_all_values['keysist-whatsapp-mensaje'] );?>"><i class="fa fa-whatsapp"></i></a>    
                                    <span class="navbar-info-text"><?php echo esc_html( $bizlight_customizer_all_values['keysist-celular'] );?></span>                                
                                </span>
                            <?php endif;?>
                            <?php if(!empty($bizlight_customizer_all_values['keysist-telefono'])): ?>    
                                <span>
                                <a class="navbar-info-icon" href="tel:<?php echo esc_html( $bizlight_customizer_all_values['keysist-telefono'] );?>"><i class="fa fa-phone"></i></a>    
                                <span class="navbar-info-text"><?php echo esc_html( $bizlight_customizer_all_values['keysist-telefono'] );?></span>
                                </span>
                            <?php endif;?>
                            <?php if(!empty($bizlight_customizer_all_values['keysist-correo'])): ?>   
                                <span>
                                <a  class="navbar-info-icon" href="mailto:<?php echo esc_html( $bizlight_customizer_all_values['keysist-correo'] );?>"><i class="fa fa-send"></i></a>    
                                <span class="navbar-info-text"><?php echo esc_html( $bizlight_customizer_all_values['keysist-correo'] );?></span> 
                                </span>
                            <?php endif;?>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 rtl-fright site-info-header text-right">
                            <?php if(!empty($bizlight_customizer_all_values['keysist-googlemaps-link'])): ?>   
                                <span>
                                    <a class="navbar-info-icon navbar-info-text" target="_new" href="<?php echo esc_html( $bizlight_customizer_all_values['keysist-googlemaps-link'] );?>"><span class="navbar-info-text"><?php echo esc_html( $bizlight_customizer_all_values['keysist-googlemap-label'] );?></span><i class="fa fa-map-marker"></i></a>
                                </span>
                            <?php endif;?>
                        </div>
                    </div>
                    <?php endif;?>
                </div>
                <?php
                if(  1 == $bizlight_customizer_all_values['bizlight-enable-social-icons'] && is_front_page()) {
                    ?>
                    <div class="container footer-social-container text-right site-social desktop-social">
                        <div class="social-group-nav social-icon-only evision-social-section ">
                            <?php wp_nav_menu( array( 'theme_location' => 'social', 'menu_id' => 'primary-menu' ) ); ?>
                        </div>
                    </div>
                <?php
                }
                ?>
                
            </div>
            <div class="shape-top">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-4 rtl-fright">
                        <?php if ( isset($bizlight_customizer_all_values['bizlight-logo']) && !empty($bizlight_customizer_all_values['bizlight-logo'])) :
                            if ( is_front_page() && is_home() ){
                                echo '<h1 class="site-title">';
                            }
                            else{
                                echo '<p class="site-title">';
                            }
                            ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <img class="header-logo" src="<?php echo esc_url($bizlight_customizer_all_values['bizlight-logo']); ?>" alt="<?php bloginfo( 'name' );?>">
                            </a>
                            <?php if ( is_front_page() && is_home() ){
                                echo '</h1>';
                            }
                            else{
                                echo '</p>';
                            }
                        ?>
                        <?php else :
                            if ( is_front_page() && is_home() ){
                                echo '<h1 class="site-title">';
                            }
                            else{
                                echo '<p class="site-title">';
                            }
                            ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <?php
                                if ( 1 == $bizlight_customizer_all_values['bizlight-enable-title'] ) :
                                    bloginfo( 'name' );
                                endif;
                                ?>
                            </a>
                                <?php
                                if ( 1 == $bizlight_customizer_all_values['bizlight-enable-tagline'] ) :
                                    echo '<p class="site-description">'. get_bloginfo('description' ).'</p>';
                                endif;
                                ?>
                            <?php if ( is_front_page() && is_home() ){
                                echo '</h1>';
                            }
                            else{
                                echo '</p>';
                            }
                        endif; ?>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-8 rtl-fleft" style="margin-top:8px;">
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
                            <span class="navbar-brand mob-header-info">
                                <?php if(!empty($bizlight_customizer_all_values['keysist-celular'])): ?>    
                                    <span>
                                        <a href="tel:<?php echo esc_html( $bizlight_customizer_all_values['keysist-celular'] );?>"><?php echo esc_html( $bizlight_customizer_all_values['keysist-celular'] );?><i class="fa fa-phone"></i></a>
                                    </span>
                                <?php endif;?>
                                <?php if(!empty($bizlight_customizer_all_values['keysist-correo'])): ?>   
                                    <span><a  href="mailto:<?php echo esc_html( $bizlight_customizer_all_values['keysist-correo'] );?>"><?php echo esc_html( $bizlight_customizer_all_values['keysist-correo'] );?><i class="fa fa-send"></i></a></span>
                                <?php endif;?>
                                <?php if(!empty($bizlight_customizer_all_values['keysist-googlemaps-link'])): ?>   
                                    <span>
                                        <a target="_new" href="<?php echo esc_html( $bizlight_customizer_all_values['keysist-googlemaps-link'] );?>"><?php echo esc_html( $bizlight_customizer_all_values['keysist-googlemap-label'] );?><i class="fa fa-map-marker"></i></a>
                                    </span>
                                <?php endif;?>
                            </span>
                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

<?php
}
endif;
add_action( 'bizlight_action_header', 'bizlight_header', 10 );

if( ! function_exists( 'bizlight_main_slider_setion' ) ) :
/**
 * Breadcrumb
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
    function bizlight_main_slider_setion(){
        global $post, $wp_query;
        global $bizlight_customizer_all_values;

        // Slider status.
        $featured_slider_status = $bizlight_customizer_all_values['bizlight-fs-enable-on'];

        // Get Page ID outside Loop.
        $page_id = $wp_query->get_queried_object_id();

        // Front page displays in Reading Settings.
        $page_on_front  = absint( get_option( 'page_on_front' ) );
        $page_for_posts = absint( get_option( 'page_for_posts' ) );
        switch ( $featured_slider_status ) {
            case 'entire-site':
                do_action('bizlight_main_slider');
                break;

            case 'front-index-page':
                if (is_front_page()) {
                    do_action('bizlight_main_slider');
                }
                break;

            case 'home-page':
                if ( $page_on_front === $page_id && $page_on_front > 0 ) {
                    do_action('bizlight_main_slider');
                }
                break;

            default:
                break;
        }

    }
endif;
add_action( 'bizlight_action_on_header', 'bizlight_main_slider_setion', 10 );

/*breadcrumb*/
if( ! function_exists( 'bizlight_add_breadcrumb' ) ) :
/**
 * Breadcrumb
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
    function bizlight_add_breadcrumb(){
        // Bail if Home Page
        if ( is_front_page() || is_home() ) {
            return;
        }
        echo '<div id="breadcrumb" class="wrapper wrap-breadcrumb"><div class="container">';
         bizlight_simple_breadcrumb();
        echo '</div><!-- .container --></div><!-- #breadcrumb -->';
        return;
    }
endif;
add_action( 'bizlight_action_after_header', 'bizlight_add_breadcrumb', 10 );


