<?php 
    /**
     * 404.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 03/2021
    **/
?>

<!DOCTYPE HTML>
<!-- SEEM | SOUTHEAST ENERGY EXCHANGE MARKET -->

<html id="seem" <?php language_attributes(); ?>>
    
    <!-- HEAD -->
    <head>
        <?php include(get_template_directory()."/php/theme/scripts/head/page.php"); ?>
    </head>

    <!-- BODY -->
    <body id="<?php global $post; $post_slug = $post -> post_name; echo $post_slug; ?>" <?php body_class(); ?>>
        
        <!-- BODY SCRIPTS -->
        <?php include(get_template_directory()."/php/theme/scripts/body/body-scripts.php"); ?>

        <!-- HEADER -->
        <?php include(get_template_directory()."/header.php"); ?>

        <!-- CONTENT | 404.PHP -->
        <?php include(get_template_directory()."/php/theme/templates/404.php"); ?>

        <!-- FOOTER -->
        <?php include(get_template_directory()."/footer.php"); ?>

        <!-- SCRIPTS -->
        <?php include(get_template_directory()."/php/theme/scripts/footer/footer-scripts.php"); ?>

    </body>

</html>