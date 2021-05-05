<?php
/**
 * @package Redbitcz\Vyfakturuj\SimpleShopAPI
 * @license MIT
 * @copyright 2016-2021 Redbit s.r.o.
 * @author Redbit s.r.o. <info@simpleshop.cz>
 */

require_once __DIR__ . '/../config.php';

$simpleshop_api = new SimpleShopAPI(SIMPLESHOP_API_LOGIN, SIMPLESHOP_API_KEY);

/**
 * Zadejte ID faktury pro její uhrazení a datum úhrady
 */
$invoiceId = 12345;
$paymentDate = '2021-01-30';

$result = $simpleshop_api->invoice_setPayment($invoiceId, $paymentDate);
?>

<h2>Uhrazení dokladu</h2>

<pre><code class="json">
<?= htmlspecialchars(json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)) ?>
</code></pre>
