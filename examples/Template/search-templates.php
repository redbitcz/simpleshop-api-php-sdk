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
 * Zadejte informace o šablonách nebo pravidelých fakturách pro vyhledání
 *
 * Seznam dostupných parametrů je popsán v dokumentaci:
 * @link https://simpleshopcz.docs.apiary.io/#reference/sablony,-pravidelne-faktury
 */
$params = [
    'type' => 2,
    'end_type' => 1
];

$templates = $simpleshop_api->getTemplates($params);
?>

<h2>Vyhledání pravidelných faktur</h2>

<pre><code class="json">
<?= htmlspecialchars(json_encode($templates, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)) ?>
</code></pre>
