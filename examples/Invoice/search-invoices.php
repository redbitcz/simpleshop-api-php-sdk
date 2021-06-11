<?php
/**
 * @package Redbitcz\SimpleShop\Api
 * @license MIT
 * @copyright 2016-2021 Redbit s.r.o.
 * @author Redbit s.r.o. <info@simpleshop.cz>
 */

require_once __DIR__ . '/../config.php';

$simpleshop_api = new \Redbitcz\SimpleShop\Api\SimpleShopApi(SIMPLESHOP_API_LOGIN, SIMPLESHOP_API_KEY);

/**
 * Zadejte informace o faktuře pro vyhledání
 *
 * Seznam dostupných parametrů je popsán v dokumentaci v sekci: „GET parametry při vyhledávání dokladu“
 * @link https://simpleshopcz.docs.apiary.io/#reference/faktury
 */
$params = [
    'id_customer' => 123,
    'type' => 1
];

$invoices = $simpleshop_api->getInvoices($params);
?>

<h2>Vyhledání faktur</h2>

<pre><code class="json">
<?= htmlspecialchars(json_encode($invoices, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)) ?>
</code></pre>
