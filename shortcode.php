<?php
define('plugin_url', plugins_url('') . '/' . dirname( plugin_basename( __FILE__ ) ));


function widget_short_code()
{
    ob_start();

    include 'widget.php';

    return ob_get_clean();   

}
add_shortcode('nbg-currency', 'widget_short_code');
