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
 * Příklad filtrovacího řetězce, který vyhledá neugrazené faktury po splatnosti
 *
 * Seznam použitelných filtrů a jejich použití najdete v dokumentaci v sekci: „Filtrování“
 * @link https://simpleshopcz.docs.apiary.io/#reference/faktury
 */
$filter = sprintf('date_due~LT~%s|AND|flags~CTBIT~2~EQ~0', date('Y-m-d'));

$invoices = $simpleshop_api->getInvoices(['filter' => $filter]);
?>

<h2>Filtrování faktur</h2>

<pre><code class="json">
<?= htmlspecialchars(json_encode($invoices, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)) ?>
</code></pre>
