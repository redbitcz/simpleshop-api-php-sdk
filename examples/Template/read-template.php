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
 * Zadejte ID šablony nebo pravidelné faktury pro zobrazení
 */
$templateId = 12345;

$template = $simpleshop_api->getTemplate($templateId);
?>

<h2>Načtení šablony nebo pravidelné faktury</h2>

<pre><code class="json">
<?= htmlspecialchars(json_encode($template, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)) ?>
</code></pre>
