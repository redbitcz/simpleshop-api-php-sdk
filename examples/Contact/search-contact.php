<?php
/**
 * @package Redbitcz\Vyfakturuj\SimpleShopAPI
 * @license MIT
 * @copyright 2016-2021 Redbit s.r.o.
 * @author Redbit s.r.o. <info@simpleshop.cz>
 */

require_once __DIR__ . '/../config.php';

$simpleshop_api = new SimpleShopApi\Client(SIMPLESHOP_API_LOGIN, SIMPLESHOP_API_KEY);

/**
 * Zadejte informace o kontaktu pro vyhledání
 *
 * Seznam všech dostupných parametrů je popsán v dokumentaciv sekci „Adresář“
 * @link https://simpleshopcz.docs.apiary.io/#reference/adresar
 */
$params = [
    'IC' => 12345678,
    'mail_to' => 'example@example.com'
];

$contacts = $simpleshop_api->getContacts($params);
?>

<h2>Vyhledání kontaktu</h2>

<pre><code class="json">
<?= htmlspecialchars(json_encode($contacts, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)) ?>
</code></pre>
