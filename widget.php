
<?php


use Stichoza\NbgCurrency\NbgCurrency;

define('plugin_url', plugins_url('') . '/' . dirname(plugin_basename(__FILE__)));

wp_enqueue_style('nbg', plugin_url . '/style.css');

$currency = [
    'usd' => NbgCurrency::rate('usd'),
    'eur' => NbgCurrency::rate('eur'),
    'gbp' => NbgCurrency::rate('gbp'),
];

?>


<table id="customers" class="table">

    <tr class="currency">
        <td><span class="usd"></span</td>
        <td>USD</td>
        <td><?php echo $currency['usd'] ?></td>
    </tr>

    <tr class="currency">
        <td><span class="euro"></span</td>
        <td>EUR</td>
        <td><?php echo $currency['eur'] ?></td>
    </tr>

    <tr class="currency">
        <td><span class="gbp"></span</td>
        <td>GBP</td>
        <td><?php echo $currency['gbp'] ?></td>
    </tr>

</table>
