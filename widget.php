
<?php

use Stichoza\NbgCurrency\NbgCurrency;

define('nbgc_plugin_url', plugins_url('') . '/' . dirname(plugin_basename(__FILE__)));

wp_enqueue_style('nbgc', nbgc_plugin_url . '/style.css');

$nbgc_currency = [
    'usd' => NbgCurrency::rate('usd'),
    'eur' => NbgCurrency::rate('eur'),
    'gbp' => NbgCurrency::rate('gbp'),
];

?>


<table id="customers" class="table">

    <tr class="currency">
        <td><span class="usd"></span</td>
        <td><?php echo __('USD') ?></td>
        <td><?php echo $nbgc_currency['usd'] ?></td>
    </tr>

    <tr class="currency">
        <td><span class="euro"></span</td>
        <td><?php echo __('EUR') ?></td>
        <td><?php echo $nbgc_currency['eur'] ?></td>
    </tr>

    <tr class="currency">
        <td><span class="gbp"></span</td>
        <td><?php echo __('GBP') ?></td>
        <td><?php echo $nbgc_currency['gbp'] ?></td>
    </tr>

</table>
