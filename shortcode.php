<?php

function wpb_demo_shortcode()
{
    include 'widget.php';
}
add_shortcode('nbg-currency', 'wpb_demo_shortcode');
