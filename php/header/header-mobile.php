<?php 
    /**
     * php/header/header-mobile.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 03/2021
    **/
?>

<nav id="header-mobile" class="navbar navbar-light desktop-hide">
    <div class="container-fluid">

        <!-- #HEADER-MOBILE-LOGO -->
        <a href="/" id="header-mobile-logo" class="navbar-brand">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-seem-full-color.svg" alt="Southeast Energy Exchange Market"/>
        </a>

        <!-- #HEADER-MOBILE-TOGGLE -->
        <button id="header-mobile-toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header-mobile-menu" aria-controls="Menu" aria-expanded="false" aria-label="Menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- #HEADER-MOBILE-MENU -->
        <nav id="header-mobile-menu" class="navbar-collapse collapse">
            <?php include(get_template_directory()."/php/menus/header-mobile.php"); ?>
        </nav>

    </div>
</nav>