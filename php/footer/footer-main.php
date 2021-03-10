<?php 
    /**
     * php/footer/footer-main.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 03/2021
    **/
?>

<div id="footer-main" class="row">
    <div class="columns col-xl-12 wrapper-footer wrapper-content">
        <div class="row">
        
            <!-- #FOOTER-MAIN-DETAILS -->
            <div id="footer-main-details" class="columns col-sm-12 col-md-6">
                <div class="row">
                    <div class="columns col-xl-12">
                        
                        <!-- #FOOTER-MAIN-LOGO -->
                        <div id="footer-main-logo" class="row">
                            <div class="columns col-xl-12">
                                <a href="/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-seem-full-white.svg" alt="Southeast Energy Exchange Market"/>
                                </a>
                            </div>
                        </div>

                        <!-- #FOOTER-MAIN-DESCRIPTION -->
                        <div id="footer-main-description" class="row">
                            <div class="columns col-xl-12">
                                <p>A group of energy companies serving electricity customers across a wide geographic region in the southeastern U.S. is exploring an integrated, automated intra-hour energy exchange with goals of lowering costs to customers, optimizing renewable energy resources and helping maintain the reliable service we provide today.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- #FOOTER-MAIN-LINKS -->
            <div id="footer-main-links" class="columns col-sm-12 col-md-6">
                <div class="row justify-content-end">
                    <div class="columns col-sm-12 col-md-3">
                        <h6>Quick Links</h6>
                        <nav>
                            <?php include(get_template_directory()."/php/menus/footer-links.php"); ?>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>