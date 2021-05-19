<?php
/**
 * @package Redbit\SimpleShop\Api
 * @license MIT
 * @copyright 2016-2021 Redbit s.r.o.
 * @author Redbit s.r.o. <info@simpleshop.cz>
 */

require_once __DIR__ . '/../config.php';

$simpleshop_api = new SimpleShop\Api\SimpleShopAPI(SIMPLESHOP_API_LOGIN, SIMPLESHOP_API_KEY);

/**
 * Zadejte ID kontaktu pro zobrazení
 */
$contactId = 12345;

$updateData = [
    'name' => '#API - Ukázkový kontakt - po úpravě',
];

$response = $simpleshop_api->updateContact($contactId, $updateData);
?>

<h2>Editace kontaktu</h2>

<pre><code class="json">
<?= htmlspecialchars(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)) ?>
</code></pre>
