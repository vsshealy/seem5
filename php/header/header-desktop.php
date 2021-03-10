<?php 
    /**
     * php/header/header-desktop.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 03/2021
    **/
?>

<nav id="header-desktop" class="row mobile-hide">

    <!-- #HEADER-DESKTOP-LOGO -->
    <div id="header-desktop-logo" class="columns col-lg-3">
        <div class="row">
            <div class="columns col-lg-12">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-seem-full-color.svg" alt="Southeast Energy Exchange Market"/>
                </a>
            </div>
        </div>
    </div>

    <!-- #HEADER-DESKTOP-MENU -->
    <div id="header-desktop-menu" class="columns col-lg-9">

        <!-- #HEADER-DESKTOP-MENU-SECONDARY -->
        <nav id="header-desktop-menu-secondary" class="row">
            <div class="columns col-lg-12">
                <?php include(get_template_directory()."/php/menus/header-secondary.php"); ?>
            </div>
        </nav>

        <!-- #HEADER-DESKTOP-MENU-PRIMARY -->
        <nav id="header-desktop-menu-primary" class="row">
            <div class="columns col-lg-12">
                <?php include(get_template_directory()."/php/menus/header-primary.php"); ?>
            </div>
        </nav>

    </div>

</nav>