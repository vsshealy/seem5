<?php 
    /**
     * php/theme/scripts/head/files/header-scripts.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 03/2021
    **/
?>

<!-- FAVICON -->
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/icons/icon-seem-160x160.png"/>

<!-- FONTS -->
<?php include(get_template_directory()."/php/theme/scripts/external/fonts/open-sans.php"); ?>
<?php include(get_template_directory()."/php/theme/scripts/external/fonts/roboto-slab.php"); ?>

<!-- FONT-AWESOME -->
<?php include(get_template_directory()."/php/theme/scripts/external/font-awesome/header.php"); ?>

<!-- FRAMEWORK -->
<?php include(get_template_directory()."/php/theme/scripts/external/bootstrap/header.php"); ?>

<!-- WP-HEAD -->
<?php wp_head(); ?>

<!-- GOOGLE-ANALYTICS -->
<?php include(get_template_directory()."/php/theme/scripts/external/google-analytics/header.php"); ?>

<!-- STYLESHEET -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.min.css"/>