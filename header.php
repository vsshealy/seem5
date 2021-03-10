<?php 
    /**
     * header.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 03/2021
    **/
?>

<header id="header-primary">

    <!-- #HEADER-MAIN -->
    <div id="header-main" class="row">
        <div class="columns col-xl-12 wrapper-header wrapper-content">

            <!-- #HEADER-MOBILE -->
            <?php include(get_template_directory()."/php/header/header-mobile.php"); ?>

            <!-- #HEADER-DESKTOP -->
            <?php include(get_template_directory()."/php/header/header-desktop.php"); ?>

        </div>
    </div>

</header>