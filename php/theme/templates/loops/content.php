<?php 
    /**
     * php/theme/templates/loops/content.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 03/2021
    **/
?>

<!-- LOOP | CONTENT -->
<?php 
    while(have_posts()):
        the_post();
        get_template_part('/php/theme/templates/parts/content', 'page');
        get_template_part('/php/theme/templates/loops/comments.php');
    endwhile;
?>