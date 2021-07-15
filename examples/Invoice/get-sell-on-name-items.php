<?php
/**
 * @package Redbitcz\SimpleShop\Api
 * @license MIT
 * @copyright 2016-2021 Redbit s.r.o.
 * @author Redbit s.r.o. <info@simpleshop.cz>
 */

declare(strict_types=1);

use Redbitcz\SimpleShop\Api\SimpleShopApi;

require_once __DIR__ . '/../config.php';

$simpleshop_api = new SimpleShopApi(SIMPLESHOP_API_LOGIN, SIMPLESHOP_API_KEY);

/**
 * ID faktury pro ziskani polozek Prodeje na jmeno
 */
$invoiceId = 12345;

$invoice = $simpleshop_api->getInvoiceSellOnName($invoiceId);
?>

<h2>Načtení položek Prodeje na jméno z faktury</h2>

<pre>
<code class="json">
<?= htmlspecialchars(json_encode($invoice, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)) ?>
</code>
</pre>
