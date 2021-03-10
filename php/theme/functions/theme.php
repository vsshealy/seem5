<?php 
    /**
     * php/theme/functions/theme.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 03/2021
    **/
?>

<?php 
    
    // REPLACE VERSION NUMBER
        if (! defined('_S_VERSION')) {
            define('_S_VERSION', '1.0.0');
        }

    // THEME FEATURE SETUP
        if (! function_exists('seem_setup')):
            function seem_setup() {

                // ADD LANGUAGE TRANSLATIONS
                    load_theme_textdomain('seem', get_template_directory().'/languages');

                // ADD DEFAULT POSTS AND COMMENTS RSS FEED LINKS TO HEAD
                    add_theme_support('automatic-feed-links');

                // ENABLE TITLE TAG SUPPORT
                    add_theme_support('title-tag');

                // ENABLE POST THUMBNAILS
                    add_theme_support('post-thumbnails');

                // REGISTER MENUS
                    register_nav_menus(
                        array(
                            'menu-1' => esc_html__('Header-Primary', 'seem'),
                            'menu-2' => esc_html__('Header-Secondary', 'seem'),
                            'menu-3' => esc_html__('Header-Mobile', 'seem'),
                            'menu-4' => esc_html__('Footer-Links', 'seem'),
                        )
                    );

                // SWITCH DEFAULT CORE MARKUP TO VALID HTML5
                    add_theme_support(
                        'html5', array(
                            'search-form',
                            'comment-form',
                            'comment-list',
                            'gallery',
                            'caption',
                            'style',
                            'script',
                        )
                    );

                // SETUP CUSTOM BACKGROUND FEATURE
                    add_theme_support(
                        'custom-background', apply_filters(
                            'seem_custom_background_args', array(
                                'default-color' => 'ffffff',
                                'default-image' => '',
                            )
                        )
                    );

                // ENABLE SELECTIVE REFRESH FOR WIDGETS
                    add_theme_support('customize-selective-refresh-widgets');

                // ADD SUPPORT FOR CUSTOM LOGO
                    add_theme_support(
                        'custom-logo', array(
                            'height' => 250,
                            'width' => 250,
                            'flex-width' => true,
                            'flex-height' => true,
                        )
                    );
            }
        endif;

        add_action('after_setup_theme', 'seem_setup');

    // SET CONTENT WIDTH
        function seem_content_width() {
            $GLOBALS['content_width'] = apply_filters('seem_base_content_width', 640);
        }

        add_action('after_setup_theme', 'seem_content_width', 0);

    // REGISTER WIDGET AREAS
        function seem_widgets_init() {
            register_sidebar(
                array(
                    'name' => esc_html__('Sidebar', 'seem'),
                    'id' => 'sidebar-1',
                    'description' => esc_html__('Add widgets here.', 'seem'),
                    'before_widget' => '<section id="%1$s" class="widget %2$s">',
                    'after_widget' => '</section>',
                    'before_title' => '<h2 class="widget-title">',
                    'after_title' => '</h2>',
                )
            );
        }

        add_action('widgets_init', 'seem_widgets_init');

    // LOAD SCRIPTS AND STYLES
        function seem_scripts() {
            wp_enqueue_style('seem-style', get_stylesheet_uri(), array(), _S_VERSION);
            wp_style_add_data('seem-style', 'rtl', 'replace');

            wp_enqueue_script('seem-navigation', get_template_directory_uri().'/js/theme/navigation.js', array(), _S_VERSION, true);

            if (is_singular() && comments_open() && get_option('thread_comments')) {
                wp_enqueue_script('comment-reply');
            }
        }
        
        add_action('wp_enqueue_scripts', 'seem_scripts');

    // ENABLE CUSTOM HEADER FEATURE
        require get_template_directory().'/php/theme/inc/custom-header.php';

    // ENABLE TEMPLATE TAGS
        require get_template_directory().'/php/theme/inc/template-tags.php';

    // ENABLE ENHANCED THEME FUNCTIONS
        require get_template_directory().'/php/theme/inc/template-functions.php';

    // ENABLE CUSTOMIZER ADDITIONS
        require get_template_directory().'/php/theme/inc/customizer.php';

    // LOAD JETPACK COMPATABILITY FILE
        if (defined('JETPACK__VERSION')) {
            require get_template_directory().'php/theme/inc/jetpack.php';
        }
?>