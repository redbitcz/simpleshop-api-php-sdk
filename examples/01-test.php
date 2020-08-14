<?php

require_once __DIR__ . '/00-config.php';

echo "<h2>Test připojení k serveru</h2>\n";

$simpleshop_api = new SimpleShopAPI(SIMPLESHOP_API_LOGIN, SIMPLESHOP_API_KEY);
$result = $simpleshop_api->test();

echo '<pre><code class="json">' . json_encode($result, JSON_PRETTY_PRINT) . '</code></pre>';
