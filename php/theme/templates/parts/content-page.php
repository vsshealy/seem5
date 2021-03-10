<?php 
    /**
     * php/theme/templates/parts/content-page.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 03/2021
    **/
?>

<!-- CONTENT-PAGE -->
<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_content(); ?>
</article>