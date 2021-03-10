<?php 
    /**
     * php/theme/templates/loops/comments.php
     * @package seem
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 03/2021
    **/
?>

<!-- LOOP | COMMENTS -->
<?php 
    if (comments_open() || get_comments_number()):
        comments_template();
    endif;
?>