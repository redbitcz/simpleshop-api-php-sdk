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
 * Podklady pro vytvoření kontaktu
 *
 * Seznam všech dostupných parametrů je popsán v dokumentaci:
 * @link https://simpleshopcz.docs.apiary.io/#reference/adresar
 */
$data = [
    'IC' => '123456789',
    'name' => '#API - Ukázkový kontakt',
    'note' => 'Kontakt vytvořený přes API',
    'company' => 'Ukázkový kontakt',
    'street' => 'Pouliční 79/C',
    'city' => 'Praha',
    'zip' => '10300',
    'country' => 'Česká republika',
    'mail_to' => 'info@examle.com',
];

$contact = $simpleshop_api->createContact($data);
?>

<h2>Vytvoření kontaktu</h2>

<pre><code class="json">
<?= htmlspecialchars(json_encode($contact, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)) ?>
</code></pre>
