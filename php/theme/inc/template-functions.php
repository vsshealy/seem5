<?php 
    /**
     * php/theme/inc/template-functions.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 03/21
    **/
?>

<?php // CORE THEME FILE
    function seem_body_classes( $classes ) {
        // Adds a class of hfeed to non-singular pages.
        if ( ! is_singular() ) {
            $classes[] = 'hfeed';
        }
    
        // Adds a class of no-sidebar when there is no sidebar present.
        if ( ! is_active_sidebar( 'sidebar-1' ) ) {
            $classes[] = 'no-sidebar';
        }
    
        return $classes;
    }
    add_filter( 'body_class', 'seem_body_classes' );
    
    /**
     * Add a pingback url auto-discovery header for single posts, pages, or attachments.
     */
    function seem_pingback_header() {
        if ( is_singular() && pings_open() ) {
            printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
        }
    }
    add_action( 'wp_head', 'seem_pingback_header' );
?>