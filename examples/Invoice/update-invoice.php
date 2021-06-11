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
 * Zadejte ID faktury pro úpravu
 */
$invoiceId = 12345;

/**
 * Podklady pro úpravu faktury
 *
 * V příkladu měníme název odběratele a seznam položek na faktuře nahrazujeme novým seznamem
 *
 * Popis všech dostupných parametrů najdete v dokumentaci:
 * @link https://simpleshopcz.docs.apiary.io/#reference/faktury
 */
$params = [
    'customer_name' => 'Ukázková Firma po úpravě',
    'items' => [
        [
            'text' => 'Stěrač na ponorku',
            'unit_price' => 990.25,
            'vat_rate' => 15,
        ],
    ]
];

$invoice = $simpleshop_api->updateInvoice($invoiceId, $params);
?>

<h2>Editace faktury</h2>

<pre><code class="json">
<?= htmlspecialchars(json_encode($invoice, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)) ?>
</code></pre>
