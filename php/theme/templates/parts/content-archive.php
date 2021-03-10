<?php 
    /**
     * php/theme/templates/parts/content-archive.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 03/2021
    **/
?>

<!-- CONTENT-ARCHIVE -->
<article id="archive-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_content(); ?>
</article>