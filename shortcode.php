<?php

function nbgc_widget_short_code()
{
    ob_start();

    include 'widget.php';

    return ob_get_clean();

}
add_shortcode('nbg-currency', 'nbgc_widget_short_code');
