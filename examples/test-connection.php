<?php

require_once __DIR__ . '/config.php';

$simpleshop_api = new \Redbitcz\SimpleShop\Api\SimpleShopApi(SIMPLESHOP_API_LOGIN, SIMPLESHOP_API_KEY);

$result = $simpleshop_api->test();

echo '<h2>Test připojení k serveru</h2>';
echo '<pre><code class="json">' . json_encode($result, JSON_PRETTY_PRINT) . '</code></pre>';
