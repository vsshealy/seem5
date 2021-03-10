<?php 
    /**
     * php/theme/templates/loops/index.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 03/2021
    **/
?>

<!-- LOOP | INDEX -->
<?php 
    if (have_posts()):

        while(have_posts()):
            the_post();
            get_template_part('/php/theme/templates/parts/content', 'index');
        endwhile;

        the_posts_navigation();

    else:

        get_template_part('/php/theme/templates/parts/content', 'none');

    endif;
?>