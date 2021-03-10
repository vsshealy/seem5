<?php 
    /**
     * php/theme/inc/jetpack.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 03/21
    **/
?>

<?php // CORE THEME FILE
    function seem_jetpack_setup() {
        // Add theme support for Infinite Scroll.
        add_theme_support(
            'infinite-scroll',
            array(
                'container' => 'main',
                'render'    => 'seem_infinite_scroll_render',
                'footer'    => 'page',
            )
        );
    
        // Add theme support for Responsive Videos.
        add_theme_support( 'jetpack-responsive-videos' );
    
        // Add theme support for Content Options.
        add_theme_support(
            'jetpack-content-options',
            array(
                'post-details' => array(
                    'stylesheet' => 'seem-style',
                    'date'       => '.posted-on',
                    'categories' => '.cat-links',
                    'tags'       => '.tags-links',
                    'author'     => '.byline',
                    'comment'    => '.comments-link',
                ),
                'featured-images' => array(
                    'archive' => true,
                    'post'    => true,
                    'page'    => true,
                ),
            )
        );
    }
    add_action( 'after_setup_theme', 'seem_jetpack_setup' );
    
    /**
     * Custom render function for Infinite Scroll.
     */
    function seem_infinite_scroll_render() {
        while ( have_posts() ) {
            the_post();
            if ( is_search() ) :
                get_template_part( '/php/theme/templates/parts/content', 'search' );
            else :
                get_template_part( '/php/theme/templates/parts/content', get_post_type() );
            endif;
        }
    }
?>