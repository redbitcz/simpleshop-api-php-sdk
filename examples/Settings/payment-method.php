<?php
/**
 * @package Redbitcz\SimpleShop\Api
 * @license MIT
 * @copyright 2016-2021 Redbit s.r.o.
 * @author Redbit s.r.o. <info@simpleshop.cz>
 */

require_once __DIR__ . '/../config.php';

$simpleshop_api = new \Redbitcz\SimpleShop\Api\SimpleShopApi(SIMPLESHOP_API_LOGIN, SIMPLESHOP_API_KEY);

$paymentMethods = $simpleshop_api->getSettings_paymentMethods();
?>

<h2>Vypsání seznamu platebních metod</h2>

<pre><code class="json">
<?= htmlspecialchars(json_encode($paymentMethods, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)) ?>
</code></pre>
